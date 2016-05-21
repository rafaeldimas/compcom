//Variaveis dos diretorios de arquivos

var filesJS = [
"./src/js/*.js",
"./src/imports/owl-carousel/*.js"
];

var filesCSS = [
"./src/css/*.css",
"./src/imports/owl-carousel/*.css"
];

var filesHTML = "./src/*.html";

// Núcleo do Gulp
var gulp = require('gulp');

// Transforma o javascript em formato ilegível para humanos
var uglify = require("gulp-uglify");

// Agrupa todos os arquivos em um
var concat = require("gulp-concat");

// Verifica alterações em tempo real, caso haja, compacta novamente todo o projeto 
var watch = require('gulp-watch');

// Minifica o CSS
var cssmin = require("gulp-cssmin");

// Remove comentários CSS
var stripCssComments = require('gulp-strip-css-comments');

//Minifica Html
var htmlmin = require('gulp-htmlmin');

// Processo que agrupará todos os arquivos CSS, removerá comentários CSS e minificará.
gulp.task('minify-css', function(){
  gulp.src(filesCSS)
  .pipe(concat('style.min.css'))
  .pipe(stripCssComments({all: true}))
  .pipe(cssmin())
  .pipe(gulp.dest('./dist/css/'));
});

// Tarefa de minificação do Javascript
gulp.task('minify-js', function () {
  gulp.src(filesJS)                        // Arquivos que serão carregados, veja variável 'js' no início
  .pipe(concat('script.min.js'))      // Arquivo único de saída
  .pipe(uglify())                     // Transforma para formato ilegível
  .pipe(gulp.dest('./dist/js/'));          // pasta de destino do arquivo(s)
});

// Tarefa de minificação do HTML
gulp.task('minify-html', function() {
  gulp.src(filesHTML)
  .pipe(htmlmin({collapseWhitespace: true, removeComments: true}))
  .pipe(gulp.dest('./dist'))
});

// Tarefa padrão quando executado o comando GULP
gulp.task('default',['minify-js','minify-css','minify-html']);

// Tarefa de monitoração caso algum arquivo seja modificado, deve ser executado e deixado aberto, comando "gulp watch".
gulp.task('watch', function() {
  gulp.watch(filesJS, ['minify-js']);
  gulp.watch(filesCSS, ['minify-css']);
  gulp.watch(filesHTML, ['minify-html']);
});

