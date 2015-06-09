var gulp = require('gulp');
var minify = require('gulp-minify-css');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
var es = require('event-stream');
var sass = require('gulp-sass');
// Command --save-dev will update your json file
// 

var config = {
   sassPath: 'src/sass',
   bowerDir: 'vendor/bower'
}
// Call Gulp scripts to call this function
// gulp.task('scripts', function(){
	
// 	var bootstrap = gulp.src('vendor/bower/boostrap-sass-official');

// 	var mainjs = gulp.src('');
// 	//Merge separate sources into on file
// 	//Pipe in various commands in chron order
// 	//Concat param needs name for concatenated file
// 	return es.merge('bootstrap, mainjs')
// 	.pipe(concat('app.min.js'))
// 	.pipe(uglify())
// 	.pipe(gulp.dest('js'));
// });
gulp.task('icons', function() {
    return gulp.src(config.bowerDir + '/fontawesome/fonts/**.*')
        .pipe(gulp.dest('fonts'));
});

gulp.task('css', function() {
    return gulp.src('src/sass/iwr.scss')
    .pipe(sass())
    .pipe(minify())
    .pipe(gulp.dest('css'));
});

// Call Gulp styles to call this function
// Rerun the task when a file changes
gulp.task('watch', function() {
    gulp.watch('src/sass/*.scss', ['css']);
});