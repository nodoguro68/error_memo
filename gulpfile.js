var gulp = require('gulp');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');

// sassコンパイル
gulp.task('sass', function() {
    return gulp.src('resource/scss/style.scss')
    .pipe(sass())
    .pipe(gulp.dest('public/css/'));
});

// js圧縮
gulp.task('uglify', function() {
    return gulp.src('resource/js/index.js')
        .pipe(uglify())
        .pipe(gulp.dest('public/js/'));
});

gulp.task('default', ['sass', 'uglify']);
