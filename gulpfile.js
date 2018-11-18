var elixir = require('laravel-elixir');
var concat = require('gulp-concat');
var rename = require('gulp-rename');
var uglify = require('gulp-uglify');

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
    mix.sass('app.scss');
});

// Admin
var adminJsFiles = 'public/assets/js/admin/*.js',
    adminJsDest = 'public/dist';

gulp.task('admin', function () {
    return gulp.src(adminJsFiles)
        .pipe(concat('admin.js'))
        .pipe(gulp.dest(adminJsDest));
});

// Frontend
var frontendJsFiles = 'public//assets/js/frontend/*.js',
    frontendJsDest = 'public/dist';

gulp.task('frontend', function () {
    return gulp.src(frontendJsFiles)
        .pipe(concat('frontend.js'))
        .pipe(gulp.dest(frontendJsDest));
});