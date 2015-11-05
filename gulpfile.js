var elixir = require('laravel-elixir');
var gulp = require('gulp');

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


 mix.styles([
  "./vendor/bower_components/bootstrap/dist/css/bootstrap.min.css",
  "./vendor/bower_components/font-awesome/css/font-awesome.min.css",
  "app.css",
  "main.css",
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
 mix.copy('./resources/assets/js/plugins', 'public/build/js/plugins');
 mix.copy('./vendor/bower_components', 'public/bower_components');
 mix.copy('./vendor/bower_components', 'public/bower_components');


 //Темы и плагины для tinymce
 mix.copy('./resources/assets/js/plugins/tinymce', 'public/bower_components/tinymce');





});