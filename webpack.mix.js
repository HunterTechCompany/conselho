const mix = require('laravel-mix');

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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sourceMaps()

    .js('node_modules/jquery/dist/jquery.js', 'public/conselho/js/jquery.js')
    .js('node_modules/bootstrap/dist/js/bootstrap.bundle.js', 'public/conselho/js/bootstrap.js')
    .sass('resources/views/Conselho/global/style.scss', 'public/conselho/css/style.css')

    .js('resources/views/Conselho/global/script.js', 'public/conselho/js/global.js');
