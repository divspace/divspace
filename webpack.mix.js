const { mix } = require('laravel-mix');

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .copy('resources/assets/cv/resume.pdf', 'public/')
   .copyDirectory('resources/assets/img', 'public/img');
