require('es6-promise').polyfill();


var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer = require('gulp-autoprefixer');
var rename = require('gulp-rename');
var plumber = require('gulp-plumber');
var gutil = require('gulp-util');
var concat = require('gulp-concat');
var jshint = require('gulp-jshint');
var uglify = require('gulp-uglify');
var cleanCSS = require('gulp-clean-css');
var imagemin = require('gulp-imagemin');
var modernizr = require('gulp-modernizr');
var modernizrBuild = require('gulp-modernizr-build');
// var cssmin   = require('gulp-cssmin');
var browserSync = require('browser-sync').create();
var reload = browserSync.reload;




var onError = function(err) {
	console.log('An error occured:', gutil.colors.magenta(err.message));
	gutil.beep();
	this.emit('end');
}
gulp.task('sass', function() {
	return gulp.src('./styles/**/*.scss')
	.pipe(sourcemaps.init())
	.pipe(plumber({errorHandler: onError }))
	.pipe(sass())
	.pipe(autoprefixer())
	.pipe(cleanCSS())
	.pipe(sourcemaps.write())
	.pipe(gulp.dest('./css/'))

});



gulp.task('js', function() {
	gulp.src('./scripts/*.js')
	.pipe(plumber({errorHandler: onError }))
	.pipe(uglify())
	.pipe(gulp.dest('./scripts/min/'));
});

gulp.task('images', function() {
	return gulp.src('./images/src/*')
	.pipe(plumber({errorHandler: onError}))
	.pipe(imagemin({optimizationLevel : 7, progressive: true}))
	.pipe(gulp.dest('./images/dist'));
});



gulp.task('watch', function() {
	browserSync.init({
		files: ['./**/*.php'],
		proxy: 'stealth-concealment.local',
	});
	gulp.watch('./styles/**/*.scss', ['sass', reload]);
	gulp.watch('./scripts/*.js', ['js', reload]);
	gulp.watch('images/src/*', ['images', reload]);
	// gulp.watch('inc/*', ['inc', reload]);
});

// gulp.task('modernizrBuild', function() {
//   return gulp.src([ 
//     './**/*.js',
//     './**/*.css',
//     '!./**/modernizr*.js'])
//     .pipe(modernizr({
//       'options': [
//         'setClasses', 'addTest', 'html5printshiv', 'testProp', 'fnBind'
//       ],
      
//     }))
// 	.pipe(uglify())
// 	.pipe(gulp.dest("build/"));
// });
// // 
// gulp.task('modernizrBuild', function() {
//   return gulp.src([ 
//     './scripts/**/*.js',
//     './css/**/*.css',
//     './dependencies/**.*.js',
//     './dependencies/**.*.css',
//     '!./**/modernizr*.js'])
//     .pipe(modernizr(require('./modernizr-config.json')))
// 	.pipe(uglify())
// 	.pipe(gulp.dest("build/"));
// });


//default task
gulp.task('default', ['sass', 'js', 'images', 'watch']);
