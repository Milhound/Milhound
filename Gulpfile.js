const gulp = require('gulp')
const pump = require('pump')
const sass = require('gulp-sass')
const uglify = require('gulp-uglify')
const uglifycss = require('gulp-uglifycss')
const rename = require('gulp-rename')
const livereload = require('gulp-livereload')

gulp.task('js', () => {
  pump([
    gulp.src('./JS/src/*.js'),
    uglify(),
    rename({ suffix: '.min' }),
    gulp.dest('./JS'),
    livereload()
  ], err => { console.log(err) })
})

gulp.task('scss',() => {
  pump([
    gulp.src('./SCSS/*.scss'),
    sass(),
    uglifycss(),
    gulp.dest('./CSS'),
    livereload()
  ], err => { console.log(err) })
})

gulp.task('html', () => {
  gulp.src('./**/*.html')
  .pipe(livereload())
})

gulp.task('php', () => {
  gulp.src('./**/*.php')
  .pipe(livereload())
})

gulp.task('watch', () => {
  livereload.listen({start: true})
  gulp.watch('./SCSS/*.scss', ['scss'])
  gulp.watch('./JS/src/*.js', ['js'])
  gulp.watch('*.html', ['html'])
  gulp.watch('*.php', ['php'])
})

// Watch Tasks
gulp.task('default', ['js', 'scss', 'watch'])