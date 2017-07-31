// Include gulp
var gulp          = require('gulp');
    connect       = require('gulp-connect-php'),
    browserSync   = require('browser-sync').create();
    sass          = require('gulp-sass');
    autoprefixer  = require('gulp-autoprefixer');
    uglifycss     = require('gulp-uglifycss');

var gulp = require('gulp'),
    connect = require('gulp-connect-php'),
    browserSync = require('browser-sync');

gulp.task('connect-sync', function() {
  connect.server({}, function (){
    browserSync({
      proxy: '127.0.0.1:8000'
    });
  });

  gulp.watch("assets/sass/**/*.scss", ['sass']);

  gulp.watch('**/*.php').on('change', function () {
    browserSync.reload();
  });
});

gulp.task('sass', function() {
    return gulp.src("assets/sass/**/*.scss")
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(uglifycss())
        .pipe(gulp.dest("assets/css"))
        .pipe(browserSync.stream());
});

gulp.task('default', ['connect-sync']);
