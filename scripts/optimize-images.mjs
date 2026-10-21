// Resize and compress the site's images in place, keeping the same file names
// so the paths stored in the database keep working.
//
// Usage:
//   npm run optimize-images              # optimize public/images
//   npm run optimize-images -- --dry-run # show what would change, write nothing
//
// Files that are already small and within MAX_WIDTH are skipped, so running it
// again doesn't keep re-compressing (and degrading) the same photos.

import { readdir, readFile, writeFile, stat } from 'node:fs/promises';
import path from 'node:path';
import sharp from 'sharp';

const IMAGES_DIR = path.resolve('public/images');
const MAX_WIDTH = 1600;
const JPEG_QUALITY = 80;
const SKIP_UNDER_BYTES = 1024 * 1024;
const EXTENSIONS = new Set(['.jpg', '.jpeg', '.png']);

const dryRun = process.argv.includes('--dry-run');

async function* walk(dir) {
    for (const entry of await readdir(dir, { withFileTypes: true })) {
        const fullPath = path.join(dir, entry.name);
        if (entry.isDirectory()) yield* walk(fullPath);
        else if (EXTENSIONS.has(path.extname(entry.name).toLowerCase())) yield fullPath;
    }
}

const mb = (bytes) => (bytes / 1024 / 1024).toFixed(2) + ' MB';

async function optimize(file) {
    const input = await readFile(file);
    const { width, format } = await sharp(input).metadata();

    if (input.length < SKIP_UNDER_BYTES && width <= MAX_WIDTH) {
        return { status: 'skipped', before: input.length, after: input.length };
    }

    // rotate() applies the phone's EXIF orientation before metadata is stripped,
    // otherwise portrait photos can end up sideways.
    let pipeline = sharp(input).rotate().resize({ width: MAX_WIDTH, withoutEnlargement: true });
    pipeline = format === 'png'
        ? pipeline.png({ compressionLevel: 9, palette: true })
        : pipeline.jpeg({ quality: JPEG_QUALITY, mozjpeg: true, progressive: true });

    const output = await pipeline.toBuffer();
    if (output.length >= input.length) {
        return { status: 'kept original', before: input.length, after: input.length };
    }

    if (!dryRun) await writeFile(file, output);
    return { status: dryRun ? 'would optimize' : 'optimized', before: input.length, after: output.length };
}

let totalBefore = 0;
let totalAfter = 0;

for await (const file of walk(IMAGES_DIR)) {
    try {
        const { status, before, after } = await optimize(file);
        totalBefore += before;
        totalAfter += after;
        if (status !== 'skipped') {
            console.log(`${status.padEnd(14)} ${mb(before).padStart(9)} -> ${mb(after).padStart(9)}  ${path.relative(IMAGES_DIR, file)}`);
        }
    } catch (error) {
        console.error(`failed         ${path.relative(IMAGES_DIR, file)}: ${error.message}`);
    }
}

console.log(`\nTotal: ${mb(totalBefore)} -> ${mb(totalAfter)}${dryRun ? ' (dry run, nothing written)' : ''}`);
