'use strict';

const gulp = require('gulp');
const less = require('gulp-less');
const concat = require('gulp-concat');
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');
const minify = require('gulp-csso');
const rename = require('gulp-rename');
const terser = require('gulp-terser');

gulp.task('less', () => {
  return gulp.src('Korf/less/**/*.less')
    .pipe(concat('style.less'))
    .pipe(less())
    .pipe(postcss([
      autoprefixer()
    ]))
    .pipe(gulp.dest('Korf/css'))
    .pipe(minify())
    .pipe(rename('style.min.css'))
    .pipe(gulp.dest('Korf/css')); 
});

gulp.task('min-js', () => {
  return gulp.src(['Korf/js/**/*.js', '!/Korf/js/**/*.min.js'])
    .pipe(terser({
      mangle: false,
      ecma: 5
    }))
    .pipe(rename( (path) => {
      path.extname = '.min.js';
    }))
    .pipe(gulp.dest('Korf/js'));
});

gulp.task('watch', () => {
  gulp.watch('Korf/less/**/*.less', gulp.series('less'));
});