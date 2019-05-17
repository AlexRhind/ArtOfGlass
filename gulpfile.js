const gulp = require('gulp');

const imagemin = require('gulp-imagemin');
const changed = require('gulp-changed');
const autoprefixer = require('gulp-autoprefixer');
const sourcemaps = require('gulp-sourcemaps');
const sass = require('gulp-sass');
const uglify = require('gulp-uglify');
const pipeline = require('readable-stream').pipeline;

const browserSync = require('browser-sync').create();
reload = browserSync.reload;

//this Gulp uses multiple dest for multiple outputs
//use gulp.dest for EACH location - does not support [arrays]/'globbing'

//run SASS, compile, minify, auto-prefix, write sourcemaps
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
          .pipe(gulp.dest('app/css'))
          //.pipe(gulp.dest('dist/css'))
          .pipe(browserSync.stream());
}

//minify JS - concat is a possibility here
function compress() {
   return pipeline(
          gulp.src('app/js/*.js'),
          //gulp.pipe(changed('app/js/*.js')),
          uglify(),
          //gulp.dest('app/js/jsMin'),
          gulp.dest('dist/js')
)}

// function copyMasters (){
//     return gulp.src('app/**/*.php', '!app/index.php')
//           // .pipe(changed('app/**/*.html')),
//           .pipe(changed('app/**/*.php'))
//           .pipe(gulp.dest('app'))
//           .pipe(gulp.dest('dist'));
// }


//process images
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
          //.pipe(gulp.dest('app/img/imgMin'))
          .pipe(gulp.dest('dist/img'));
}

//Gulp watchers
function watch(){
    //browserSync.init({server: {baseDir: 'app'}});
        //watch looks at partials - full project path required unlike the generic compile!
        gulp.watch(['app/scss/components/**/*.scss','app/scss/alexPartials/**/*.scss'], css);
        gulp.watch('app/img/*', imageMin);
        gulp.watch('app/js/*', compress);
        //gulp.watch(['app/**/*.html','app/**/*.php']).on('change', browserSync.reload);
}

//module.exports.copyMasters = copyMasters;
module.exports.compress = compress;
module.exports.css = css;
module.exports.imageMin = imageMin;
module.exports.watch = watch;

//    return gulp.src(['app/**/*.html', 'app/**/*.php', '!index.php', '!index.html'])
