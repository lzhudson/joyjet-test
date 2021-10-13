module.exports = {
	env: {
		browser: true,
		es2021: true,
	},
	extends: [
		'airbnb-base',
		'plugin:@wordpress/eslint-plugin/recommended',
		'prettier',
		'plugin:prettier/recommended',
		'plugin:react/recommended',
		'plugin:jsx-a11y/recommended',
	],
	parser: 'babel-eslint',
	parserOptions: {
		ecmaVersion: 12,
		sourceType: 'module',
	},
	plugins: ['prettier', 'jsx-a11y', 'react'],
	rules: {
		'prettier/prettier': 'error',
		'import/prefer-default-export': 'off',
		'no-console': 'warn',
		'react/jsx-uses-react': 'error',
		'react/jsx-uses-vars': 'error',
		'no-use-before-define': 'off',
	},
};
