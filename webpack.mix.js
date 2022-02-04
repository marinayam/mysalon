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

mix.js(['resources/js/app.js', 'resources/js/jquery.js'],'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/admin.scss', 'public/css')
    .sass('resources/sass/front.scss', 'public/css')
    .sass('resources/sass/chart.scss', 'public/css')
    .sass('resources/sass/contact.scss', 'public/css')
    .sass('resources/sass/index.scss', 'public/css')
    .sass('resources/sass/menu.scss', 'public/css')
    .sass('resources/sass/match.scss', 'public/css')
    .sass('resources/sass/service.scss', 'public/css')
    .sass('resources/sass/staff.scss', 'public/css')
    .sass('resources/sass/appointment.scss', 'public/css');
