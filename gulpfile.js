'use strict'

const gulp = require('gulp')
const sass = require('gulp-sass')
const autoprefixer = require('gulp-autoprefixer')
const sourcemaps = require('gulp-sourcemaps')
const watchSass = require("gulp-watch-sass")

gulp.task('scss', function () {
  gulp.src([
	  'library/sass/style.scss',
      'library/sass/login.scss',
      'library/sass/editor-style.scss'
  ])
  .pipe(sourcemaps.init())
  .pipe(sass({outputStyle: 'compact'}))
    .on('error', function (error) {
      console.log(error.message)
      this.emit('end')
    })
    .pipe(autoprefixer({
    	remove: false,
    	browsers: ['last 15 versions'],
    	grid: true
    }))
    .pipe(sourcemaps.write('.'))
    .pipe(gulp.dest('library/css'))
})

gulp.task("scss:watch", function () {
  gulp.watch([
    "./assets/**/*.scss"
  ], ["scss"])
})

gulp.task('default', [ 'scss', 'scss:watch' ])

