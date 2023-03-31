'use strict'

var { src, watch, dest, series } = require('gulp');
var sass = require('gulp-sass')(require('sass'));

const sassBuild = (done) => {
  src('./src/scss/main.scss')
    .pipe(sass({outputStyle: 'expanded'}))
    .pipe(dest('./src/css'));
  done();
};

const watchScss = () => {
  watch('./src/scss/top/_index.scss', sassBuild);
};

exports.default = series(sassBuild, watchScss);
exports.build = sassBuild;
