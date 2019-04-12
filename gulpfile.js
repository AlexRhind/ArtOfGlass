const {dest, parallel, series, src, task, watch} = require('gulp');

const imagemin = require('gulp-imagemin');
const autoprefixer = require('gulp-autoprefixer');
const changed = require('gulp-changed');
const uglify = require('gulp-uglify');
const concat = require('gulp-concat');
const sourcemaps = require('gulp-sourcemaps');

const browserSync = require('browser-sync').create();
reload = browserSync.reload;

const sass = require('gulp-sass');
const cleanCSS = require('gulp-clean-css'); //{compatibility: "ie8"}

// ----Top level functions-----
    //gulp.tasks - define tasks
    //gulp.src - define the source
    //gulp.dest - define the destination
    //gulp.watch - watch files and folders for changes

//https://www.pixemweb.com/blog/gulp-4-0-0-with-nodejs-imagemin-browsersync-sass-sourcemaps-cleancss-more/i
//https://www.youtube.com/watch?v=tTrPLQ6nOX8

function css(){
    return src('app/scss/components/**/*.scss')
          .pipe(sourcemaps.init({loadMaps: true}))
          .pipe(sass({
              outputStyle: 'expanded'
              }).on('error', sass.logError))
          .pipe(autoprefixer('last 2 versions'))
          .pipe(sourcemaps.write())
          .pipe(dest('app/scss/components/runSASS'));
}

function concatCSS(){
    return src('app/scss/components/runSASS')
          .pipe(sourcemaps.init({
              loadMaps: true,
              largeFile: true}))
          .pipe(concat('style.min.css'))
          .pipe(cleanCSS())
          .pipe(sourcemaps.write('./maps/'))
          .pipe(gulp.dest('app/dist/css'))
}

function imageMin(){
    return src('app/img')
          .pipe(changed('app/img'))
          .pipe(imagemin([
              imagemin.gifsicle({interlaced: true}),
              imagemin.jpegtran({progressive: true}),
              imagemin.optipng({optimizationLevel: 5})
          ]))
          .pipe(dest('dist/img'))
}

function watch(){
    browserSync.init({
              open: 'external',
              proxy: 'http://localhost',
              port: 8890
          });
          watch('app/scss/components/**/*.scss', series(css, concatCSS));
          watch('app/img', imageMin);
          watch('app/*.html').on('change', browserSync.reload);
}

exports.css = css;
exports.concatCSS = concatCSS;
exports.imageMin = imageMin;
exports.watch = watch;

let build = parallel(watch);
          task('default', build);
