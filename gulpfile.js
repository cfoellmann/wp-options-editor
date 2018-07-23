var gulp    = require('gulp'),
    plugins = require('gulp-load-plugins')({camelize: true});

gulp.task('update:pot', function () {
    return gulp.src('**/*.php')
        .pipe(plugins.wpPot({
            domain: 'wp-options-editor',
            package: 'WP Options Editor',
            metadataFile: 'wp-options-editor.php'
        }))
        .pipe(gulp.dest('languages/wp-options-editor.pot'));
});

gulp.task('update', gulp.series('update:pot'));
gulp.task('default', gulp.series('update'));
