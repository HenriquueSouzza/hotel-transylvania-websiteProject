const mix = require('laravel-mix');

mix.styles([
        'resources/views/site/css/jquery-ui.css',
        'resources/views/site/css/styles.css'
], 'public/site/css/styles.css')

    .scripts([
        'resources/views/site/js/jquery.mask.js',
        'resources/views/site/js/jquery.js',
        'resources/views/site/js/main.js'
    ], 'public/site/js/script.js')

.version();
