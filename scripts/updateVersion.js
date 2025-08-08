const fs = require('fs');

const version = require('../package.json').version;
const themeFile = 'research-press/style.css';
const readmeFile = 'research-press/readme.txt';

function updateFile(filePath, pattern, replacement) {
	if (!fs.existsSync(filePath)) {
		return;
	}
	const contents = fs.readFileSync(filePath, 'utf8');
	const updated = contents.replace(pattern, replacement);
	fs.writeFileSync(filePath, updated);
}

updateFile(themeFile, /^Version:\s*.*$/m, `Version:           ${version}`);
updateFile(readmeFile, /^Stable tag:\s*.*$/m, `Stable tag: ${version}`);
