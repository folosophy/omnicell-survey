var gulp = require('gulp');
var gutil = require( 'gulp-util' );
var less = require('gulp-less');
var watch = require('gulp-watch');
var ftp = require( 'vinyl-ftp' );
var clean = require('gulp-clean');

gulp.task('clean-style', function () {
  return gulp.src('style.css', {read: false})
    .pipe(clean());
});

gulp.task('styleLess',['clean-style'], function () {
  return gulp.src('style.less')
    .pipe(less())
    .pipe(gulp.dest(''));
});

gulp.task('responsiveLess', function () {
  return gulp.src('less/responsive.less')
    .pipe(less())
    .pipe(gulp.dest('css'));
});

gulp.task('compile',['styleLess','responsiveLess']);

// Deploy to Production
gulp.task( 'deploy', ['compile'], function () {

    var conn = ftp.create( {
        host:     'folosophy.com',
        user:     'folosophy@foltsy.com',
        password: 'Chosen619!',
        parallel: 10,
        log:      gutil.log
    } );

    var globs = [
        '*.ico',
        'css/*.css',
        'style.css',
        '*.php',
        'fonts/*',
        'graphics/*.svg',
        'icons/*.*',
        'js/*.js',
        'responsive/*.css',
        'parts/**/*.php',
        'pieces/**/*.php',
        'inc/**/*.php',
        'content/**/*.php',
        'src/**/*.*'
    ];

    return gulp.src( globs, { base: '.', buffer: false } )
        .pipe( conn.newer( '/wp-content/themes/Folosophy' ) ) // only upload newer files
        .pipe( conn.dest( '/wp-content/themes/Folosophy' ) );

} );

gulp.task('watch',function() {
  gulp.watch(
    [
      'style.less',
      'less/**/*.less',
      'css/*.css',
      '*.php',
      'js/*.js',
      'parts/**/*.php',
      'inc/**/*.php',
      'src/**/*.*'
    ],
    ['compile']);
});

gulp.task('default', ['watch'], function() {
});
