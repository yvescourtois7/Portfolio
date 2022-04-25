'use strict';

const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
sass.compiler = require('node-sass');

function buildStyles() {
    return gulp.src('./sass/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./css'));
};

exports.default = function () {
    gulp.watch('./sass/**/*.scss', gulp.series(buildStyles));
};