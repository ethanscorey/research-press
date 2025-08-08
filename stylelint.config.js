module.exports = {
	extends: ['stylelint-config-standard', '@wordpress/stylelint-config/scss'],
	plugins: ['stylelint-scss'],
	customSyntax: 'postcss-scss',
	rules: {
		'scss/selector-no-redundant-nesting-selector': true,
		'at-rule-empty-line-before': null,
		'rule-empty-line-before': null,
		'no-descending-specificity': null,
		'selector-class-pattern': [
			'^(?:(?:o|c|u|t|s|is|has|_|js|qa)-)?[a-zA-Z0-9]+(?:-[a-zA-Z0-9]+)*(?:__[a-zA-Z0-9]+(?:-[a-zA-Z0-9]+)*)?(?:--[a-zA-Z0-9]+(?:-[a-zA-Z0-9]+)*)?(?:\\[.+\\])?$',
			{
				message:
					'Class names should match the SUIT CSS naming convention',
			},
		],
	},
};
