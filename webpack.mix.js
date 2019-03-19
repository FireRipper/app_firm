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
    .js(['resources/js/global.js', 'resources/js/sign.js'], 'public/js/main.js')
   .sass('resources/sass/app.scss', 'public/css')
    .styles(['resources/css/global.css','resources/css/header.css',
        'resources/css/content.css','resources/css/footer.css',
        'resources/css/sign.css'], 'public/css/all.css')
    .options({
        processCssUrls: false
    })
    .copyDirectory('resources/images', 'public/images')
    .browserSync('http://securityfirm/');



