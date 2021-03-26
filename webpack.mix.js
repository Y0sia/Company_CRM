const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles([
    'resources/front/css/style.css',
], 'public/css/styles.css');

mix.scripts([
    'resources/front/js/burger.js',
    'resources/front/js/main.js',
    'resources/front/js/validator.min.js',
], 'public/js/scripts.js');
