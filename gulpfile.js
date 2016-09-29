'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');
var sassGlob = require('gulp-sass-glob');
var autoprefixer = require('gulp-autoprefixer');
var plumber = require('gulp-plumber');
var notify = require('gulp-notify');
var sourcemaps = require('gulp-sourcemaps');
var browserSync = require('browser-sync').create('server');
var concat = require('gulp-concat');

gulp.task('browserSync', function(){
	browserSync.init({
		host: 'alta.loc',
		open: 'external',
		proxy: 'http://alta.loc/',
		ghostMode: false
	});
});

// compile our sass files
gulp.task('sass', function() {
	return gulp
		.src('scss/**/*.scss')
		.pipe(plumber({errorHandler: notify.onError("Error: <%= error.message %>")}))
		.pipe(sassGlob())
		.pipe(sourcemaps.init())
		.pipe(sass({
			includePaths: ['bower_components']
		}))
		.pipe(autoprefixer({
			browsers: ['last 5 versions']
		}))
		.pipe(sourcemaps.write())
		.pipe(gulp.dest('httpdocs/css/'))
		.pipe(browserSync.reload({
			stream: true
		}))
});

// concatenate all required JS files
gulp.task('scripts', function() {
	return gulp.src(['./bower_components/parsleyjs/dist/parsley.min.js',
									'./js/main.js'])
							.pipe(concat('main.js'))
							.pipe(gulp.dest('httpdocs/js/'));
});


gulp.task('watch', ['browserSync', 'sass', 'scripts'], function(){
	gulp.watch('scss/modules/*.scss', ['sass']);
	gulp.watch('scss/*.scss', ['sass']);
	gulp.watch('js/*.js', ['scripts']);
	gulp.watch('httpdocs/*/**', browserSync.reload);
});

gulp.task('default', ['watch']);
