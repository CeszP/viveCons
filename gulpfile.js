const  gulp = require('gulp'),
	   post= require('gulp-postcss'),
	   responsiveFont = require('postcss-responsive-font');


let postCssPlugins = [
	responsiveFont
];

gulp.task ('styles', () =>
		gulp.src('./src/*.css').pipe(post(postCssPlugins))
		.pipe(gulp.dest('./site/css'))
		);

gulp.task('default', () =>
	gulp.watch('./src/*.css',['styles'])
	);