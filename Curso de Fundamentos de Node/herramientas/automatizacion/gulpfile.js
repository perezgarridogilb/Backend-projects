const gulp = require('gulp');
const server = require('gulp-server-livereload');

/**
 * Función va a ser asíncrona
 */
gulp.task('build', function (cb) {
    console.log('Construyendo el sitio');
    setTimeout(cb, 1200);
    // cb();
})

/**
 * Vamos a servir la página web
 */
gulp.task('serve', function (cb) {
    gulp.src('www')
        .pipe(server({
            livereaload: true,
            open: true,
        }));
});

gulp.task('default', gulp.series('build', 'serve'));
