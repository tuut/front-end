// Gulpfile.js

var gulp 		= require('gulp');
var watch 		= require('gulp-watch');
var concat 		= require('gulp-concat');
var minifyCss 	= require('gulp-cssmin');
var minifyJs	= require('gulp-uglify');
var rename 		= require('gulp-rename');
var sass 		= require('gulp-sass');

gulp.task('sass', function () {
	gulp.src(['./src/sass/**/*.scss'])
    	.pipe(sass().on('error', sass.logError))
	    .pipe(concat('tuut.css'))
    	.pipe(gulp.dest('../wp-content/themes/tuut/assets/css/'))
	    .pipe(minifyCss({preserveComments: 'license'}))
		.pipe(rename({suffix: '.min'}))
	    .pipe(gulp.dest('../wp-content/themes/tuut/assets/css/'));
});

gulp.task('script', function () {
	gulp.src(['./src/js/script/*.js'])
		.pipe(concat('app.js'))
    	.pipe(minifyJs({preserveComments: 'license'}))
		.pipe(rename({suffix: '.min'}))
    	.pipe(gulp.dest('../wp-content/themes/tuut/assets/js/'));
});

gulp.task('vendor', function () {
	gulp.src([
			'./src/js/vendor/scrollreveal.js',
			'./src/js/vendor/jquery/jquery.easing.js',
			'./src/js/vendor/jquery/jquery.blockui.min.js',
			'./src/js/vendor/jquery.modal.js',
			'./src/js/vendor/jquery-validate/dist/jquery.validate.js'
		])
		.pipe(concat('vendor.js'))
		.pipe(gulp.dest('../wp-content/themes/tuut/assets/js/'))
    	.pipe(minifyJs())
		.pipe(rename({suffix: '.min'}))
    	.pipe(gulp.dest('../wp-content/themes/tuut/assets/js/'));
});

gulp.task('default', function(){
	gulp.watch('./src/sass/**/*.scss', ['sass']);
	gulp.watch('./src/js/script/*.js', ['script', 'vendor']);
});
