const gulp = require('gulp');

const imagemin = require('gulp-imagemin');
const autoprefixer = require('gulp-autoprefixer');
const sourcemaps = require('gulp-sourcemaps');
const sass = require('gulp-sass');
//const uglify = require('gulp-uglify');

const browserSync = require('browser-sync').create();
reload = browserSync.reload;


function css(){
  return gulp.src('./app/scss/**/*.scss')
          .pipe(sourcemaps.init({loadMaps: true}))
          .pipe(sass({
              outputStyle: 'extended' //use compressed here for final output
              })).on('error', sass.logError)
          .pipe(autoprefixer({
              browsers: ['last 2 versions'],
              cascade: false
              }))
          .pipe(sourcemaps.write())
          .pipe(gulp.dest('app/css'))
}


function imageMin(){
    return gulp.src('app/img')
          //gulp-changed compares source files to existing, only updates new eds 
          .pipe(changed('app/img'))
          .pipe(imagemin([
              imagemin.gifsicle({interlaced:true}),
              imagemin.jpegtran({progressive:true}),
              imagemin.optipng({optimizationLevel:5})
          ]))
          .pipe(gulp.dest('app/img/imgMin'))
}

function watch(){
    browserSync.init({server:{baseDir:'app'}});
        gulp.watch(['app/scss/components','app/scss/alexPartials'], css);
        gulp.watch('app/img', imagemin);
        gulp.watch('app/**/*.html').on('change', browserSync.reload);
}

module.exports.css = css;
module.exports.imageMin = imageMin;
module.exports.watch = watch;
