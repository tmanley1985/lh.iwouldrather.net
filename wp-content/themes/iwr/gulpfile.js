var gulp = require('gulp');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
// Command --save-dev will update your json file

// Call Gulp scripts to call this function
gulp.task('scripts', function(){
	// Always return streams, Gulp uses this to know when this task has ran
	return gulp.src('src/*.js')
	//Pipe in various commands in chron order
	//Concat param needs name for concatenated file
	.pipe('concat('all.min.js')')
	.pipe(uglify())
	.pipe(gulp.dest('js'));
});


// Call Gulp styles to call this function
gulp.task('styles', function(){
	// Always return streams, Gulp uses this to know when this task has ran
	return gulp.src('src/*.css')
	//Pipe in various commands in chron order
	//Concat param needs name for concatenated file
	.pipe('concat('all.min.css')')
	.pipe(uglify())
	.pipe(gulp.dest('css'));
});