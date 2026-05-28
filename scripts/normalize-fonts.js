// normalize-fonts.js
// Usage: node scripts/normalize-fonts.js
// Renames files in assets/fonts to kebab-case lowercase (removes diacritics, spaces -> -)
// and updates assets/css/global/fonts.css to reference the new names.

const fs = require('fs');
const path = require('path');

const repoRoot = path.resolve(__dirname, '..');
const fontsDir = path.join(repoRoot, 'assets', 'fonts');
const cssPath = path.join(repoRoot, 'assets', 'css', 'global', 'fonts.css');

function normalizeName(name) {
  const ext = path.extname(name);
  const base = path.basename(name, ext);
  // Convert CamelCase to kebab-case (insert hyphen between lower->upper)
  const withHyphens = base.replace(/([a-z0-9])([A-Z])/g, '$1-$2');
  // remove diacritics
  const noDiacritics = withHyphens.normalize('NFD').replace(/[\u0300-\u036f]/g, '');
  const replaced = noDiacritics
    .replace(/[^a-zA-Z0-9]+/g, '-') // replace non-alnum with -
    .replace(/-+/g, '-')
    .replace(/^-|-$/g, '')
    .toLowerCase();
  return replaced + ext.toLowerCase();
}

if (!fs.existsSync(fontsDir)) {
  console.error('Fonts directory not found:', fontsDir);
  process.exit(1);
}

const files = fs.readdirSync(fontsDir);
const mapping = {};

for (const file of files) {
  const srcPath = path.join(fontsDir, file);
  if (!fs.statSync(srcPath).isFile()) continue;
  const newName = normalizeName(file);
  if (newName === file) continue;
  const destPath = path.join(fontsDir, newName);
  if (fs.existsSync(destPath)) {
    console.warn('Destination already exists, skipping:', destPath);
    continue;
  }
  fs.renameSync(srcPath, destPath);
  mapping[file] = newName;
  console.log(`Renamed: ${file} -> ${newName}`);
}

if (Object.keys(mapping).length === 0) {
  console.log('No files renamed.');
  process.exit(0);
}

// Update CSS references
if (!fs.existsSync(cssPath)) {
  console.warn('CSS file not found, skipping CSS update:', cssPath);
  process.exit(0);
}

let css = fs.readFileSync(cssPath, 'utf8');
for (const [oldName, newName] of Object.entries(mapping)) {
  // Replace plain and percent-encoded occurrences
  const oldEncoded = encodeURIComponent(oldName);
  const rePlain = new RegExp(oldName.replace(/[-\\/\\^$*+?.()|[\]{}]/g, '\\$&'), 'g');
  const reEncoded = new RegExp(oldEncoded.replace(/[-\\/\\^$*+?.()|[\]{}]/g, '\\$&'), 'g');
  css = css.replace(rePlain, newName);
  css = css.replace(reEncoded, newName);
}
fs.writeFileSync(cssPath, css, 'utf8');
console.log('Updated CSS references in', cssPath);
