const gulp = require('gulp')
const sass = require('gulp-sass')
const minify = require('gulp-minify')
const livereload = require('gulp-livereload')

gulp.task('js', () => {
  gulp.src('./JS/src/*.js')
    .pipe(minify())
    .pipe(gulp.dest('./JS'))
    .pipe(livereload())
})

gulp.task('scss',() => {
    gulp.src('./SCSS/*.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./CSS'))
    .pipe(livereload())
})

gulp.task('html', () => {
  gulp.src('*.html')
  .pipe(livereload())
})

gulp.task('watch', () => {
  livereload.listen({start: true})
  gulp.watch('./SCSS/*.scss', ['scss'])
  gulp.watch('./JS/src/*.js', ['js'])
  gulp.watch('*.html', ['html'])
})

// Watch Tasks
gulp.task('default', ['js', 'scss', 'watch'])