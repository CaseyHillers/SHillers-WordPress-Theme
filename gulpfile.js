var gulp = require('gulp');
var sass = require('gulp-sass');
var watch = require('gulp-watch');
var uncss = require('gulp-uncss');
var uglifycss = require('gulp-uglifycss');

var config = {
    bootstrapDir: './bower_components/bootstrap-sass',
    publicDir: '',
};

gulp.task('build-css', function() {
    try {
        return gulp.src('./sass/style.scss')
            .pipe(sass({
                includePaths: [config.bootstrapDir + '/assets/stylesheets'],
            }))
            .pipe(gulp.dest(config.publicDir));
    } catch (error)
    {
      return error;
    }
    return "Failed to compile";
});


gulp.task('uglify-css', function () {
  gulp.src('style.css')
    .pipe(uglifycss({
      "maxLineLen": 80,
      "uglyComments": true
    }))
    .pipe(gulp.dest(''));
});

gulp.task('remove-extra-css', function() {
  return gulp.src('style.css')
    .pipe(uncss({html: ['http://localhost:8888/shanehillers/', 'http://localhost:8888/shanehillers/blog/', 'http://localhost:8888/shanehillers/2012/01/03/template-comments/', 'http://localhost:8888/shanehillers/page/2/', 'http://localhost:8888/shanehillers/page/3/', 'http://localhost:8888/shanehillers/page/4/', 'http://localhost:8888/shanehillers/asdfdsa', 'http://localhost:8888/shanehillers/?s=test' ]}))
    .pipe(gulp.dest(''));
});


// Watch for file updates
gulp.task('watch', function() {
    gulp.watch('sass/**/*.scss', ['build-css']);

});

gulp.task('default', ['watch']);
