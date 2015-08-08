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
    mix
//        .scripts(['jquery.min.js','../plugins/jquery-ui/jquery-ui.min.js','bootstrap.min.js','script.js'], 'public/js/app.js','public/js')
        .less([
        'home.less',
        'developer.less',
        'showroom.less',
        'styles.less',
        'property.less',
        'search.less',
        'dashboard.less'
    ])
//        .styles(['../plugins/jquery-ui/jquery-ui.min.css','bootstrap.min.css','font-awesome.min.css'],'public/css/app.css','public/css')
        .version([
        'public/css/styles.css',
        'public/css/homenew.css',
        'public/css/showroom.css',
        'public/css/property.css',
        'public/css/home.css',
        'public/css/search.css',
        'public/css/developer.css',
        'public/css/dashboard.css',

        'public/js/home.js',
        'public/js/homenew.js',
        'public/js/dashboard.js',
        'public/js/developer.js',
        'public/js/showroom.js',
        'public/js/property.js',
        'public/js/search.js'
    ])
});
