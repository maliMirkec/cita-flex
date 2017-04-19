'use strict';

require('es6-promise').polyfill();

var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var minifyCss = require('gulp-minify-css');
var rename = require('gulp-rename');
var gulpSequence = require('gulp-sequence');
var bump = require('gulp-bump');

// Will patch the version
gulp.task('bump:patch', function() {
    return gulp.src(['./package.json', 'bower.json'])
    .pipe(bump())
    .pipe(gulp.dest('./'));
});

// Will patch the version
gulp.task('bump:minor', function() {
    return gulp.src(['./package.json', 'bower.json'])
    .pipe(bump({
        type: 'minor'
    }))
    .pipe(gulp.dest('./'));
});

// Will patch the version
gulp.task('bump:major', function() {
    return gulp.src(['./package.json', 'bower.json'])
    .pipe(bump({
        type: 'major'
    }))
    .pipe(gulp.dest('./'));
});

gulp.task('dev', function() {
    return gulp.src('./css/inc/*.scss')
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
    gulp.watch(['./css/inc/*.scss', './css/src/*.scss'], ['dev']);
    gulp.watch('./css/dev/*.css', ['dist']);
});

