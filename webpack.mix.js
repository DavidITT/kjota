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

/*
 |--------------------------------------------------------------------------
 | Client
 |--------------------------------------------------------------------------
 */

mix.js('resources/js/app.js', 'public/js')
    .vue();

mix.styles([
    'resources/templates/client/css/plugins/animate.css',
    'resources/templates/client/css/plugins/jquery-ui.css',
    'resources/templates/client/css/plugins/magnific-popup.css',
    'resources/templates/client/css/plugins/perfect-scrollbar.css',
    'resources/templates/client/css/plugins/select2.min.css',
    'resources/templates/client/css/plugins/slick.css',
], 'public/css/client/client-plugins.css');

mix.styles([
    'resources/templates/client/css/vendors/bootstrap.min.css',
    'resources/templates/client/css/vendors/fontawesome-all.min.css',
    'resources/templates/client/css/vendors/normalize.css',
], 'public/css/client/client-vendors.css');

mix.sass('resources/templates/client/sass/main.scss', 'public/css/client/main.css').options({
    processCssUrls: false
});

/*
 |--------------------------------------------------------------------------
 | Admin
 |--------------------------------------------------------------------------
 */

mix.js('resources/js/admin.js', 'public/js/admin.js')
    .vue();

mix.styles([
    'resources/templates/admin/css/vendors/bootstrap.css',
    'resources/templates/admin/css/vendors/normalize.css',
    'resources/templates/admin/css/vendors/perfect-scrollbar.css',
    'resources/templates/admin/css/vendors/select2.min.css',
], 'public/css/admin/admin-vendors.css');

mix.sass('resources/templates/admin/sass/main.scss', 'public/css/admin/main.css').options({
    processCssUrls: false
});


/*
 |--------------------------------------------------------------------------
 | Production mode
 |--------------------------------------------------------------------------
 */

if (mix.inProduction()) {
    mix.version();
}

