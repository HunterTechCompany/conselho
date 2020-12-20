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

mix
    .js('node_modules/jquery/dist/jquery.js', 'public/conselho/js/jquery.js')
    .js('node_modules/bootstrap/dist/js/bootstrap.bundle.js', 'public/conselho/js/bootstrap.js')
    .sass('resources/views/Conselho/global/style.scss', 'public/conselho/css/style.css')

    .js('resources/views/Conselho/global/script.js', 'public/conselho/js/global.js');
