# Equipment Images Setup

## Directory Structure
```
public/images/equipment/
├── chairs/
│   ├── chiavari-chairs.jpg
│   └── folding-chairs.jpg
├── tables/
│   ├── round-table-60.jpg
│   └── rectangular-table-8ft.jpg
├── canopies/
│   ├── wedding-canopy-20x30.jpg
│   └── party-tent-10x20.jpg
├── flooring/
│   └── dance-floor-20x20.jpg
└── audio/
    └── sound-system-package.jpg
```

## Image Requirements
- **Format**: JPG, PNG, or WebP
- **Size**: Recommended 800x600px or 4:3 aspect ratio
- **File Size**: Keep under 500KB for fast loading
- **Quality**: High quality, well-lit photos

## Adding Your Images
1. Place your equipment images in the corresponding category folders
2. Use the exact filenames listed above, or update the database seeder
3. Run `php artisan migrate:fresh --seed` to update the database

## Image Naming Convention
- Use lowercase letters and hyphens
- Be descriptive: `chiavari-chairs.jpg` not `img1.jpg`
- Include key details: `round-table-60.jpg` (includes size)

## Fallback Behavior
If an image file doesn't exist, the website will show a placeholder with the equipment category icon.