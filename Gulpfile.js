var gulp = require('gulp');
var jshint = require('gulp-jshint');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var rename = require('gulp-rename');
var cleanCSS = require('gulp-clean-css');
var htmlmin = require('gulp-htmlmin');


var filesJS = "./src/js/*.js";
var filesCSS = "./src/css/*.css";
var filesCarrocel = "./src/imports/owl-carousel/*.css";

gulp.task('lint', function() {
  gulp.src(filesJS)
  .pipe(jshint())
  .pipe(jshint.reporter('default'));
});

gulp.task('dist-js', function() {
  gulp.src(filesJS)
  .pipe(concat('./dist/js'))
  .pipe(rename('all.min.js'))
  .pipe(uglify())
  .pipe(gulp.dest('./dist/js'));
});

gulp.task('dist-carrocel', function() {
  gulp.src('./src/imports/owl-carousel/*.js')
  .pipe(concat('./dist/js'))
  .pipe(rename('carrocel.min.js'))
  .pipe(uglify())
  .pipe(gulp.dest('./dist/js'));
});

gulp.task('dist-css', function() {
  gulp.src(filesCarrocel)
  .pipe(concat('./dist/css'))
  .pipe(rename('carrocel.min.css'))
  .pipe(cleanCSS({debug: true}, function(details) {
    console.log(details.name + ': ' + details.stats.originalSize);
    console.log(details.name + ': ' + details.stats.minifiedSize);
  }))
  .pipe(gulp.dest('./dist/css'));
})
gulp.task('minify-css', function() {
  gulp.src(filesCSS)
  .pipe(cleanCSS({debug: true}, function(details) {
    console.log(details.name + ': ' + details.stats.originalSize);
    console.log(details.name + ': ' + details.stats.minifiedSize);
  }))
  .pipe(gulp.dest('./dist/css'));
});

gulp.task('minify-html', function() {
  gulp.src('./src/index.html')
  .pipe(htmlmin({collapseWhitespace: true}))
  .pipe(gulp.dest('./dist'))
});

gulp.task('default', function() {
  gulp.run('lint', 'dist-js','dist-carrocel', 'dist-css', 'minify-css', 'minify-html');
  gulp.watch('./src/*', function(evt) {
    gulp.run('lint', 'dist-js','dist-carrocel', 'dist-css', 'minify-css', 'minify-html');
  });
});
