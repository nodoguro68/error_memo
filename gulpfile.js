var gulp = require('gulp');
var sass = require('gulp-sass');

// sassコンパイル
gulp.task('sass', function() {
    return gulp.src('resource/scss/style.scss')
    .pipe(sass())
    .pipe(gulp.dest('public/css/'));
});