const gulp = require('gulp');

const imagemin = require('gulp-imagemin');
const uglify = require('gulp-uglify');
const concat = require('gulp-concat');
const changed = require('gulp-changed');
const autoprefixer = require('gulp-autoprefixer');
const sourcemaps = require('gulp-sourcemaps');
const sass = require('gulp-sass');
const pipeline = require('readable-stream').pipeline;

const browserSync = require('browser-sync').create();
reload = browserSync.reload;


function css(){
   return gulp.src('./app/scss/**/*.scss')
          //sourcemaps allow browsers to map css origins
          .pipe(sourcemaps.init({loadMaps: true}))
          .pipe(sass({
              //use compressed here for final output
              outputStyle: 'compressed'
              })).on('error', sass.logError)
          //installs post-css prefixes for platforms under can-i-use
          .pipe(autoprefixer({
              browsers: ['last 2 versions'],
              cascade: false
              }))
          .pipe(sourcemaps.write())
          .pipe(gulp.dest(['app/css', 'dist/css']))
          .pipe(browserSync.stream());
}


function toDist() {
  return gulp.src(['app/**/*.html', 'app/**/*.php'])
        //gulp-changed compares source files to existing, only updates changes
        .pipe(changed(['app/**/*.html', 'app/**/*.php']))
        .pipe(gulp.dest(['app/**/*', 'dist/**/*']));
}

function compress() {
    return pipeline(
          gulp.src('app/js/*.js'),
          uglify(),
          gulp.dest('dist')
        )};


function imageMin(){
    return gulp.src('app/img/*')
          //gulp-changed compares source files to existing, only updates changes
          .pipe(changed('app/img/*'))
          .pipe(imagemin([
              imagemin.gifsicle({interlaced:true}),
              imagemin.jpegtran({progressive:true}),
              imagemin.optipng({optimizationLevel:5})
          ]))
          //temporary imgMin folder - send to dist on completion
          .pipe(gulp.dest(['app/img/imgMin', 'dist/img']));
}

function watch(){
    browserSync.init({server: {baseDir: 'app'}});
        //watch looks at partials - full project path required unlike the generic compile!
        gulp.watch(['app/scss/components/**/*.scss','app/scss/alexPartials/**/*.scss'], css);
        gulp.watch('app/img/*', imageMin);
        gulp.watch('app/js/*', compress);
        gulp.watch(['app/**/*.html', 'app/**/*.php']).on('change', browserSync.reload);
}

module.exports.toDist = toDist;
module.exports.compress = compress;
module.exports.css = css;
module.exports.imageMin = imageMin;
module.exports.watch = watch;
