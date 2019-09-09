var gulp = require('gulp');
// Requires the gulp-sass plugin
var postcss = require('gulp-postcss');
var sass = require('gulp-sass');
var concat = require('gulp-concat');


gulp.task('sass', function () {
  return gulp
    .src('scss/**/*.scss')
    .pipe(sass({
        outputStyle: 'compact'
    }).on('error', sass.logError))
    .pipe(concat('style.css'))
    .pipe(gulp.dest('./')); // output to theme root
});


gulp.task('watch', function(){
  gulp.watch('scss/**/*.scss', gulp.series('sass'));
  // Other watchers
})