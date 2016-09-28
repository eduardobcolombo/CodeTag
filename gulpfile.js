//gulpfile.js
var phpunit = require('gulp-phpunit');

var gulp = require('gulp'),
    notify  = require('gulp-notify'),
    phpunit = require('gulp-phpunit');

gulp.task('phpunit', function() {
    var options = {debug: false, notify: true};
    gulp.src('phpunit.xml')
        .pipe(phpunit('phpunit',options));
});

gulp.task('default', function(){
    gulp.run('phpunit');
    gulp.watch('**/*.php', function(){
        gulp.run('phpunit');
    });
});