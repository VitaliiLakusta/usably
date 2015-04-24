var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less('app.less');

    mix.styles([
        'css/bootstrap.css',
        'css/sb-admin.css',
        'css/plugins/morris.css',
        'css/font-awesome.css',
        'css/style.css'

    ], 'public/css/output/all.css', 'public');

    mix.version('css/output/all.css')
});
