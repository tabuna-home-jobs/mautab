var elixir = require('laravel-elixir');
var gulp = require('gulp');
var uncss = require('gulp-uncss');

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




//Сдандартные компоненты
elixir(function (mix) {

 mix.sass('laravel.scss', 'resources/assets/css/sass.css');


 mix.styles([
  "./vendor/bower_components/bootstrap/dist/css/bootstrap.min.css",
  "./vendor/bower_components/font-awesome/css/font-awesome.min.css",
  "app.css",
  "main.css",
  "sass.css"
 ], 'public/build/css/app.css');

 mix.scripts([
  "./vendor/bower_components/jquery/dist/jquery.min.js",
  "./vendor/bower_components/bootstrap/dist/js/bootstrap.min.js",
  "ui-load.js",
  "ui-jp.config.js",
  "ui-jp.js",
  "ui-nav.js",
  "ui-toggle.js"
 ], 'public/build/js/app.js');

 mix.copy('./vendor/bower_components/bootstrap/dist/fonts/', 'public/build/fonts');
 mix.copy('./vendor/bower_components/font-awesome/fonts/', 'public/build/fonts');
 mix.copy('./resources/assets/js/controller', 'public/build/js/controller');
 mix.copy('./vendor/bower_components', 'public/bower_components');
 mix.copy('./vendor/bower_components', 'public/bower_components');


 /**
  * Тут должны быть удаление тех стилей которые не используються
 elixir.extend("message", function (message) {
  gulp.task('default', function () {
   return gulp.src('public/build/css/app.css')
       .pipe(uncss({
        html: ['/', '*', 'http://localhost:8000']
       }))
       .pipe(gulp.dest('public/build/css/out.css'));
  });
 });
*/


});
