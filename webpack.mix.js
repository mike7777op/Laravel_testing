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

mix.js('resources/js/app.js', 'public/js')
    .scripts(
        ['resources/js/jquery-3.2.1.min.js']
        ,'public/js/jquery-3.2.1.min.js')
    .copyDirectory('resources/imgs', 'public/imgs')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);
