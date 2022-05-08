const mix = require('laravel-mix');

mix.postCss('assets/css/tailwind.css', 'assets/css/theme.css', [
	require('tailwindcss')
])
.options({
	processCssUrls: false
});
