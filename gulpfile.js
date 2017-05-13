var gulp         = require('gulp');
var less         = require('gulp-less');
var browserSync  = require('browser-sync').create();
var autoprefixer = require('gulp-autoprefixer');
var header       = require('gulp-header');
var cleanCSS     = require('gulp-clean-css');
var rename       = require("gulp-rename");
var uglify       = require('gulp-uglify');
var php          = require('gulp-connect-php');
var minifyCSS    = require('gulp-minify-css');
var concat       = require('gulp-concat');

// Compile LESS files from /less into /css
gulp.task('less', function() {
    return gulp.src('less/*.less')
        .pipe(less())
        .pipe(gulp.dest('css'))
        .pipe(browserSync.reload({
            stream: true
        }))
});

// Minify compiled CSS
// because order matters
var cssFiles = [
    'vendor/bootstrap-3.3.7/dist/css/bootstrap.min.css',
    'vendor/font-awesome/css/font-awesome.min.css',
    'css/agency.css'
];
gulp.task('minify-css', ['less'], function() {
    return gulp.src(cssFiles)
        .pipe(autoprefixer())
        .pipe(cleanCSS({ compatibility: 'ie8' }))
        .pipe(minifyCSS())
        .pipe(concat('style.min.css'))
        .pipe(gulp.dest('css/'))
        .pipe(browserSync.reload({
            stream: true
        }))
});

// Minify JS
var jsFiles = [
    'vendor/jquery/jquery.min.js',
    'vendor/bootstrap-3.3.7/dist/js/bootstrap.min.js',
    'js/jquery.easing.min.js',
    'js/jqBootstrapValidation.js',
    'js/contact_me.js',
    'js/agency.min.js'
];
gulp.task('minify-js', function() {
    return gulp.src(jsFiles)
        .pipe(uglify())
        .pipe(concat('script.min.js'))
        .pipe(gulp.dest('js/'))
        .pipe(browserSync.reload({
            stream: true
        }))
});

// Copy vendor libraries from /node_modules into /vendor
gulp.task('copy', function() {
    gulp.src(['node_modules/bootstrap/dist/**/*', '!**/npm.js', '!**/bootstrap-theme.*', '!**/*.map'])
        .pipe(gulp.dest('vendor/bootstrap'))

    gulp.src(['node_modules/jquery/dist/jquery.js', 'node_modules/jquery/dist/jquery.min.js'])
        .pipe(gulp.dest('vendor/jquery'))

    gulp.src([
            'node_modules/font-awesome/**',
            '!node_modules/font-awesome/**/*.map',
            '!node_modules/font-awesome/.npmignore',
            '!node_modules/font-awesome/*.txt',
            '!node_modules/font-awesome/*.md',
            '!node_modules/font-awesome/*.json'
        ])
        .pipe(gulp.dest('vendor/font-awesome'))
})

gulp.task('php', function() {
    php.server({
        base: '.',
        port: 8010,
        keepalive: true
    });
});

gulp.task('browserSync', ['php'], function() {
    browserSync.init({
        proxy: '127.0.0.1:8010',
        port: 8080,
        open: true,
        notify: false
    });
});

// Run everything
gulp.task('default', ['less', 'minify-css', 'minify-js', 'copy']);

// Dev task with browserSync
gulp.task('dev', ['browserSync', 'less', 'minify-css', 'minify-js'], function() {
    gulp.watch('less/*.less', ['less']);
    gulp.watch('css/*.css', ['minify-css']);
    gulp.watch('js/*.js', ['minify-js']);
    // Reloads the browser whenever HTML or JS files change
    gulp.watch(['*.php'], browserSync.reload);
    gulp.watch('js/**/*.js', browserSync.reload);
});
