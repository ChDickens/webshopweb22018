const mix = require('laravel-mix');

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
mix.version();
mix.copy('node_modules/slick-carousel/slick', 'public/assets/slick');

