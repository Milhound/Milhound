gulp = require 'gulp'
sass = require 'gulp-sass'
coffee = require 'gulp-coffee'
uglify = require 'gulp-uglify'

gulp.task 'js', ->
    gulp.src './public/JS/src/*.coffee'
    .pipe coffee()
    .pipe uglify()
    .pipe gulp.dest './public/JS/'

gulp.task 'scss', ->
    gulp.src './public/SCSS/**/*.scss'
    .pipe sass().on 'error', sass.logError
    .pipe gulp.dest './public/CSS'

# Watch Tasks
gulp.task 'default', ->
    gulp.watch './public/JS/src/*.coffee', ['js']
    gulp.watch './public/SCSS/**/*.scss', ['scss']

