var gulp = require('gulp');
var uglify = require('gulp-uglify');
var browsersync = require('browser-sync');
var minifyCSS = require('gulp-minify-css');
var prefix = require('gulp-autoprefixer');
var concatCSS = require('gulp-concat-css');
var jshint = require('gulp-jshint');
var stylish = require('jshint-stylish');
var concat = require('gulp-concat');
var rename = require('gulp-rename');
var imagemin = require('gulp-imagemin');
var browserSync = require('browser-sync').create();
var reload      = browserSync.reload;
var pngquant = require('imagemin-pngquant');

//paths
var destPath = 'wordpress/wp-content/themes/sinthesis/';
var sourcePath = 'devfiles';

//Style tasks
gulp.task('style',function(){
	
	console.log('starting style...');
	gulp.src(sourcePath+'/css/style.css')
		.pipe(prefix('last 2 versions'))
	    .pipe(gulp.dest(destPath))
	    .pipe(browserSync.stream());
	console.log('Tasks for style have ended...');
});

gulp.task('styles:custom',function(){
	
	console.log('starting style...');
	gulp.src(sourcePath+'/css/custom.css')
		.pipe(prefix('last 2 versions'))
	    .pipe(minifyCSS())
	    .pipe(rename('custom.min.css'))
	    .pipe(gulp.dest(destPath + '/css/'))
	    .pipe(browserSync.stream());
	console.log('Tasks for style have ended...');
});

gulp.task('styles:vendor', function(){
	
	console.log('starting styles:vendor...');
	gulp.src(sourcePath + '/vendor/css/**/*.css')
		.pipe(concatCSS('vendor.min.css'))
        .pipe(minifyCSS())
        .pipe(gulp.dest(destPath + '/css/'))
        .pipe(browserSync.stream());
	console.log('Tasks for styles:vendor have ended...');
});

//Script tasks
gulp.task('scripts', function () {
    console.log('starting scripts...');
    gulp.src(sourcePath + '/js/**/*.js')
        .pipe(jshint())
        .pipe(jshint.reporter(stylish))
        .pipe(jshint.reporter('fail'))
        .on('error', function () {
            this.emit('end');
        })
        .pipe(concat('scripts.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(destPath + '/js/'))
        .pipe(browserSync.stream());
    
    console.log('Tasks for scripts have ended...');
});

gulp.task('scripts:vendor', function () {
    console.log('starting scripts');
    gulp.src([sourcePath + '/vendor/js/jquery.js',sourcePath + '/vendor/js/bootstrap.min.js',sourcePath + '/vendor/js/modernizr.custom.js',sourcePath + '/vendor/js/classie.js'])
        .pipe(concat('vendor.min.js'))
        .pipe(uglify())
        .pipe(gulp.dest(destPath + '/js/'))
        .pipe(browserSync.stream());
    
    console.log('Tasks for scripts:vendor have ended...');
});

//PHP Tasks
gulp.task('php:wordpress', function() {
	console.log('starting php tasks...');
	gulp.src(sourcePath+"/**/*.php")
		.pipe(gulp.dest(destPath));
	console.log('Tasks for php:wordpress have ended...');
});

//Image Tasks
gulp.task('img', function () {
    return gulp.src(sourcePath + '/img/*')
        .pipe(imagemin({
            progressive: true,
            svgoPlugins: [{removeViewBox: false}],
            use: [pngquant()]
        }))
        .pipe(gulp.dest(destPath + '/img'));
});


//Watching over you :P
gulp.task('watch', function () {
 
	browserSync.init({
        proxy: "http://localhost/sinthesis/wordpress/",
        port: 80
    });
	
	gulp.watch(sourcePath + '/**/*.php', ['php:wordpress']).on('change', browserSync.reload);;
	
	gulp.watch(sourcePath + '/css/style.css', ['style']);
	
	gulp.watch(sourcePath + '/css/custom.css', ['styles:custom']);
	
	gulp.watch(sourcePath + '/vendor/css/**/*.css', ['styles:vendor']);

    gulp.watch(sourcePath + '/js/**/*.js', ['scripts']);
    
    gulp.watch(sourcePath + '/vendor/js/**/*.js', ['scripts:vendor']);
    
    gulp.watch(sourcePath + '/img/*', ['img']).on('change', browserSync.reload);;
    
});

//runs all gulp tasks
gulp.task('default', function () {
   gulp.start('php:wordpress', 'style','styles:custom','styles:vendor','scripts','scripts:vendor','img');
});
