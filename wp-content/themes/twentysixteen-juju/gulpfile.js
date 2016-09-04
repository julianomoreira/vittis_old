/* Gulp file */

'use strict';

// GULP PLUGINS: load all automatically
// and attach them to the `plugins` object
var fs = require('fs');
var path = require('path');
var gulp = require('gulp');
var sourcemaps = require('gulp-sourcemaps');
var plugins = require('gulp-load-plugins')();

// CONFIG STUFF
var pkg = require('./package.json');
var paths = pkg.configs.paths;

// CONFIG OBJECTS, here because they're shared across tasks
var autoprefixerConfig = {
  browsers: ['last 3 versions'], // , 'ie 8', 'ie 9'
  map: true
};

// SASS config
var sassConfig = {
  expanded: {
    outputStyle: 'expanded',
    includePaths: [
      path.resolve(path.resolve(paths.src,'css'))
      //path.resolve(path.resolve(paths.dist, 'css'))
    ],
    precision: 8
  },
  compressed: {
    outputStyle: 'compressed',
    includePaths: [
      path.resolve(path.resolve(paths.src,'css'))
      //path.resolve(path.resolve(paths.dist, 'css'))
    ],
    precision: 8
  }
};

//var cssDestinPath = path.resolve(paths.dist.css,'css');

// Sass task
var sass = require('gulp-sass'),
autoprefixer = require('gulp-autoprefixer'),
sourcemaps = require('gulp-sourcemaps');

gulp.task('styles:compressed', function () {
  console.log(path.resolve('src','css','*.scss'));
  console.log(path.resolve(paths.dist,'css'));
 return gulp
  .src(path.resolve(paths.src,'css','**/*.scss'))
  .pipe(sourcemaps.init())
  .pipe(sass(sassConfig.compressed).on('error', sass.logError))
  .pipe(autoprefixer(autoprefixerConfig))
  .pipe(plugins.rename({suffix: '.min'}))
  .pipe(gulp.dest(path.resolve(paths.dist, 'css')))
  .pipe(sourcemaps.write('./maps'))
  .pipe(plugins.notify({message: 'Styles are complete'}));
});

gulp.task('styles:expanded', function () {
 return gulp
  .src(path.resolve(paths.src,'css','**/*.scss'))
  .pipe(sourcemaps.init())
  .pipe(sass(sassConfig.expanded).on('error', sass.logError))
  .pipe(autoprefixer(autoprefixerConfig))
  .pipe(gulp.dest(path.resolve(paths.dist, 'css')))
  .pipe(sourcemaps.write('./maps'))
  .pipe(plugins.notify({message: 'Styles are complete'}));
});

// Watch task

gulp.task('copy:normalize', function () {
  return gulp
    .src('node_modules/normalize.css/normalize.css')
    .pipe(sass(sassConfig.compressed).on('error', sass.logError))
    .pipe(plugins.rename({suffix: '.min'}))
    .pipe(gulp.dest(paths.dist + '/css'));
});

// Watch
gulp.task('watch', function() {
  console.log(path.resolve(paths.src,'css'));
  // Watch .scss files
  gulp.watch(path.resolve(paths.src,'css','**/*.scss'), ['styles:expanded']);
  gulp.watch(path.resolve(paths.src,'css','**/*.scss'), ['styles:compressed']);

  // Watch .js files
  //gulp.watch('src/scripts/**/*.js', ['scripts']);

  // Watch image files
  //gulp.watch('src/images/**/*', ['images']);

  // Create LiveReload server
  //livereload.listen();

  // Watch any files in dist/, reload on change
  //gulp.watch(['dist/**']).on('change', livereload.changed);

});
