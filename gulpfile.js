var gulp = require('gulp');
var sass = require('gulp-sass');
var uglify = require('gulp-uglify');
var cleancss = require('gulp-clean-css');
var imagemin = require('gulp-imagemin')
var changed = require('gulp-changed')

// sassコンパイル
gulp.task('sass', function() {
    return gulp.src('resource/scss/style.scss')
        .pipe(sass())
        .pipe(cleancss())
        .pipe(gulp.dest('public/css/'));
});

// js圧縮
gulp.task('uglify', function() {
    return gulp.src('resource/js/index.js')
        .pipe(uglify())
        .pipe(gulp.dest('public/js/'));
});

gulp.task('imagemin', function () {
    return gulp.src('resource/images/*.+(jpg|jpeg|png|gif)')
        .pipe(changed('public/images/'))
        .pipe(imagemin())
        .pipe(gulp.dest('public/images/'))
});

gulp.task('uploadsmin', function () {
    return gulp.src('resource/uploads/*.+(jpg|jpeg|png|gif)')
        .pipe(changed('public/uploads/'))
        .pipe(imagemin())
        .pipe(gulp.dest('public/uploads/'))
});

gulp.task('default', ['sass', 'uglify', 'imagemin', 'uploadsmin']);
