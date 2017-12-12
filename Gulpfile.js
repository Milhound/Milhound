const gulp = require('gulp')
const pump = require('pump')
const sass = require('gulp-sass')
const babel = require('gulp-babel')
const uglify = require('gulp-uglify')
const uglifycss = require('gulp-uglifycss')
const rename = require('gulp-rename')

gulp.task('js', (cb) => {
  pump([
    gulp.src('./JS/src/*.js'),
    babel({presets: ['es2015']}),
    uglify(),
    rename({ suffix: '.min' }),
    gulp.dest('./JS')
  ], cb)
})

gulp.task('scss',() => {
  pump([
    gulp.src('./SCSS/*.scss'),
    sass(),
    uglifycss(),
    rename({ suffix: '.min' }),
    gulp.dest('./CSS')
  ], err => { console.log })
})

gulp.task('watch', () => {
  gulp.watch('./SCSS/*.scss', ['scss'])
  gulp.watch('./JS/src/*.js', ['js'])
})

// Watch Tasks
gulp.task('default', ['js', 'scss', 'watch'])
