# Push to GitHub - Quick Guide

## Step 1: Create a New Repository on GitHub
1. Go to https://github.com/new
2. Repository name: `event-rental-website` (or your preferred name)
3. Description: "Laravel-based event equipment rental website for Richy Events Lagos"
4. Choose: **Public** or **Private**
5. **DO NOT** initialize with README, .gitignore, or license
6. Click "Create repository"

## Step 2: Push Your Code
After creating the repository, run these commands:

```bash
# Add your GitHub repository as remote
git remote add origin https://github.com/YOUR_USERNAME/event-rental-website.git

# Rename branch to main (if needed)
git branch -M main

# Push to GitHub
git push -u origin main
```

Replace `YOUR_USERNAME` with your actual GitHub username.

## Alternative: Using SSH
If you prefer SSH:
```bash
git remote add origin git@github.com:YOUR_USERNAME/event-rental-website.git
git branch -M main
git push -u origin main
```

## Step 3: Verify
Visit your repository at:
`https://github.com/YOUR_USERNAME/event-rental-website`

## Future Updates
After making changes:
```bash
git add .
git commit -m "Your commit message"
git push
```

## Important Notes
- Your `.env` file is NOT pushed (it's in .gitignore)
- `node_modules` and `vendor` folders are excluded
- Database file is excluded
- Anyone cloning will need to run setup commands (see README.md)
