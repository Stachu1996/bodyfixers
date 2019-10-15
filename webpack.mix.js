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

//mix.js('resources/js/app.js', 'public/js')
//   .sass('resources/sass/app.scss', 'public/css');

/**
 * WEBSITE
 */
mix.copyDirectory('resources/assets/favicon/*', 'public/favicon/')
    .copyDirectory('resources/assets/images/*', 'public/images/');

mix.js('resources/js/website.js', 'public/js/website.js')
    .sass('resources/sass/website/website.scss', 'public/css');

/**
 * ORDERING
 */
mix.js('resources/js/ordering.js', 'public/js/ordering.js');

/**
 * DASHBOARD
 */
mix.copyDirectory('resources/js/dashboard/vendors/*', 'public/js/vendors/')
    .copyDirectory('resources/css/vendors/*', 'public/css/vendors/');

mix.js('resources/js/dashboard.js', 'public/js/dashboard.js')
    .sass('resources/sass/dashboard/base.scss', 'public/css');
