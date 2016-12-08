const gulp = require('gulp')
const pump = require('pump')
const sass = require('gulp-sass')
const uglify = require('gulp-uglify')
const uglifycss = require('gulp-uglifycss')
const rename = require('gulp-rename')
const react = require('gulp-react')
const livereload = require('gulp-livereload')

gulp.task('jsx', () => {
  pump([
    gulp.src('./JS/React/src/*.jsx'),
    react(),
    gulp.dest('./JS/React'),
    livereload()
  ], err => { console.log })
})

gulp.task('js', () => {
  pump([
    gulp.src('./JS/src/*.js'),
    uglify(),
    rename({ suffix: '.min' }),
    gulp.dest('./JS'),
    livereload()
  ], err => { console.log })
})

gulp.task('scss',() => {
  pump([
    gulp.src('./SCSS/*.scss'),
    sass(),
    uglifycss(),
    rename({ suffix: '.min' }),
    gulp.dest('./CSS'),
    livereload()
  ], err => { console.log })
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
  gulp.watch('./JS/React/**/*.jsx', ['jsx'])
  gulp.watch('*.html', ['html'])
  gulp.watch('*.php', ['php'])
})

// Watch Tasks
gulp.task('default', ['jsx', 'js', 'scss', 'watch'])