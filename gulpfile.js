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
    mix.scripts(['jquery.min.js','bootstrap.min.js','script.js'], 'public/js/app.js','public/js')
        .less(['home.less','showroom.less','styles.less'])
        .styles(['bootstrap.min.css','font-awesome.min.css'],'public/css/app.css','public/css')
        .version(['public/css/showroom.css','public/css/home.css','public/css/styles.css','public/js/home.js','public/js/showroom.js'])
});
