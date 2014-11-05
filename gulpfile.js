// Include gulp
var gulp = require('gulp');

// Include the Plugins
var jshint = require('gulp-jshint');
var sass = require('gulp-sass');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');
var rename = require('gulp-rename');
var minifycss = require('gulp-minify-css');
var notify = require ('gulp-notify');
var lr = require('tiny-lr');
var livereload = require('gulp-livereload');


// Move and Minfiy Scripts from Bower
gulp.task ('move', function() {
    return gulp.src(['bower_components/jquery/dist/jquery.js','bower_components/responsive-nav/responsive-nav.js','bower_components/jquery-validate/dist/jquery.validate.js','bower_components/jquery-form/jquery.form.js'])
        .pipe(uglify())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('assets/js/vendor'))
        //.pipe(notify({ message: 'Bower components are moved!'}));
});

// Lint JS
gulp.task('scripts', function() {
    return gulp.src(['assets/js/scripts/*.js'])
        .pipe(jshint())
        .pipe(jshint.reporter('default'))
        .pipe(livereload());
});

// Concat
gulp.task('concat-scripts', function() {
    return gulp.src(['assets/js/vendor/jquery.min.js','assets/js/scripts/global.js'])
        .pipe(concat('scripts.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest('assets/js/'));
});

gulp.task('concat-contact', function() {
return gulp.src(['assets/js/vendor/jquery.form.min.js','assets/js/scripts/jquery.form.settings.js','assets/js/vendor/jquery.validate.min.js'])
    .pipe(concat('contact.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('assets/js/'));
});

// Compile Sass & Minify CSS
gulp.task('sass', function() {
    return gulp.src(['assets/scss/style.scss'])
        .pipe(sass())
        .pipe(minifycss())
        .pipe(rename({ suffix: '.min' }))
        .pipe(gulp.dest('assets/css/'))
        //.pipe(notify({ message: 'SCSS is compiled and CSS is minified!'}))
        .pipe(livereload());
});

// Watch Files For Changes
gulp.task('watch', function() {
    gulp.watch('assets/scss/*/*.scss', ['sass'])
    gulp.watch('assets/js/*/*.js', ['scripts']);
});

// Default Task
gulp.task('default', ['scripts', 'sass', 'watch']);
