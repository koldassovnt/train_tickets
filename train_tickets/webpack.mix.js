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
    .postCss('resources/css/app.css', 'public/css', [
        //
    ]);

    mix.styles([
        'public/css/index.css',
        'public/css/fontAwesome.css',
        'public/css/bootstrap.min.css',
        'public/css/bootstrap-theme.min.css',
        'public/css/hero-slider.css',
        'public/css/owl-carousel.css',
        'public/css/datepicker.css',
        'public/css/bootstrap-theme.css',
    ], 'public/css/all.css');