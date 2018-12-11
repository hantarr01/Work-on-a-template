    var gulp = require('gulp'), // Подключаем Gulp
        sass = require('gulp-sass'); //Подключаем Sass пакет
        

    gulp.task('sass', function(){ // Создаем таск "sass"
        return gulp.src('app/sass/main.sass') // Берем источник
            .pipe(sass()) // Преобразуем Sass в CSS посредством gulp-sass
            .pipe(gulp.dest('dist/css')) // Выгружаем результата в папку app/css
});


/*gulp.task('browser-sync', function() { // Создаем таск browser-sync
    browserSync({ // Выполняем browserSync
        server: { // Определяем параметры сервера
            baseDir: 'app' // Директория для сервера - 
        },
        notify: false // Отключаем уведомления
    });
});

gulp.task('watch', ['browser-sync', 'sass'], function() {
    gulp.watch('app/sass/main.sass', ['sass']); // Наблюдение за sass файлами
    // Наблюдение за другими типами файлов
});
browser-sync = require('browser-sync'); // Подключаем Browser Sync*/