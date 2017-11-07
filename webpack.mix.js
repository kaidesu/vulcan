const { mix } = require('laravel-mix')
const DashboardPlugin = require('webpack-dashboard/plugin')
const PrettyError = require('pretty-error').start();

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
    .js('resources/assets/js/fontawesome.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   
   .webpackConfig({
       plugins: [
           new DashboardPlugin()
       ]
   })
