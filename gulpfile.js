var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {

    var assets = './resources/assets/',
        bower = assets + 'bower/';

    // every sass files are mixed and compiled in resources/assets/css/app.css.
    mix.sass(
        [
            bower + 'angular-material/angular-material.scss',
            '**',
        ],
        assets + 'css/000-sass.css'
    );

    mix.styles(
        [
            '**'
        ]
    );

    mix.scripts(
        [
            bower + 'angular/angular.min.js',
            bower + 'angular-route/angular-route.min.js',
            bower + 'angular-material/angular-material.min.js',
            bower + 'angular-animate/angular-animate.min.js',
            bower + 'angular-aria/angular-aria.min.js',
            bower + 'angular-messages/angular-messages.min.js',
            '**'
        ],
        'public/js/app.js'
    );

    mix.browserSync(
        {
            proxy: "localhost:8000"
        }
    );
});