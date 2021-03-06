let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/assets/js/app.js', 'public/js')
	.js('resources/assets/js/home.js', 'public/js')
	.js('resources/assets/js/main.js', 'public/js')
	.js('resources/assets/js/feedback.js', 'public/js')
	.js('resources/assets/js/admin/registration.js', 'public/js')
	.js('resources/assets/js/admin/feedback.list.js', 'public/js')
	.js('resources/assets/js/admin/video.list.js', 'public/js')
	.js('resources/assets/js/admin/news.create.js', 'public/js')
	.js('resources/assets/js/admin/news.list.js', 'public/js')
	.less('resources/assets/less/style.less', 'public/css');
