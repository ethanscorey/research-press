module.exports = {
	'*.js': [
		"wp-scripts lint-js --ignore-pattern 'extra/*.js'",
		'wp-scripts format',
		'prettier --write',
		'jest --bail --findRelatedTests --passWithNoTests',
	],
	'*.css': [
		'wp-scripts lint-style',
		'stylelint --fix',
		'prettier --write "research-press/**/*.{css,scss}"',
	],
	'*.php': ['vendor/bin/phpcs --report=summary'],
	'*.md': 'wp-scripts lint-md-docs',
	'package.json': ['wp-scripts lint-pkg-json'],
};
