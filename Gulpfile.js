'use strict';

require('es6-promise').polyfill();

var gulp         = require('gulp');
var sass         = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var minifyCss    = require('gulp-minify-css');
var rename       = require('gulp-rename');
var gulpSequence = require('gulp-sequence');
 
gulp.task('dev', function() {
  return gulp.src('./css/src/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer())
    .pipe(gulp.dest('./css/dev'));
});

gulp.task('dist', function() {
  return gulp.src('./css/dev/*.css')
    .pipe(minifyCss())
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('./css/dist'));
});

gulp.task('default', gulpSequence('dev', 'dist'));
 
gulp.task('default:watch', function() {
  gulp.watch('./css/src/*.scss', ['dev']);
  gulp.watch('./css/dev/*.css', ['dist']);
});
