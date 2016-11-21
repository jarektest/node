var gulp = require('gulp'),
    watch = require('gulp-watch');

gulp.task('default', function() {
    return watch('index.php', function(){
        console.log('jarku node');
    });
});