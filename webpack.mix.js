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

/*mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css');
*/
mix.styles([
         'resources/css/style.css', 
         'resources/libs/node_modules/@coreui/icons/css/coreui-icons.min.css',
         'resources/libs/node_modules/flag-icon-css/css/flag-icon.min.css',
         'resources/libs/node_modules/font-awesome/css/font-awesome.min.css',
         'resources/node_modules/simple-line-icons/css/simple-line-icons.css',
         'resources/libs/style.css'
      ],'public/css/app.css')
      .scripts([
         'resources/libs/node_modules/jquery/dist/jquery.min.js',
         'resources/libs/node_modules/popper.js/dist/umd/popper.min.js',
         'resources/libs/node_modules/bootstrap/dist/js/bootstrap.min.js',
         'resources/libs/node_modules/pace-progress/pace.min.js',
         'resources/libs/node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js',
         'resources/libs/node_modules/@coreui/coreui/dist/js/coreui.min.js'
      ],'public/js/app.js');
