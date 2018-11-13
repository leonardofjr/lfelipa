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
var jsFiles = 'public//assets/js/admin/*.js',
    jsDest = 'public/dist';

gulp.task('admin', function () {
    return gulp.src(jsFiles)
        .pipe(concat('admin.js'))
        .pipe(gulp.dest(jsDest));
});

// Frontend
var jsFiles = 'public//assets/js/frontend/*.js',
    jsDest = 'public/dist';

gulp.task('frontend', function () {
    return gulp.src(jsFiles)
        .pipe(concat('frontend.js'))
        .pipe(gulp.dest(jsDest));
});