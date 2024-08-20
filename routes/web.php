<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\EnblogController;
use App\Http\Controllers\EnlacesCategorias;
use App\Http\Controllers\EntagController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ImagenesController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PtblogController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\SearchenController;
use App\Http\Controllers\TagController;
use App\Http\Controllers\TagPtController;
use App\Http\Controllers\TourController;
use App\Http\Controllers\ToursenController;
use App\Http\Controllers\ToursPtController;
use App\Http\Controllers\UserControler;

use App\Mail\ContactoMailable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;

//Páginas de inicio
Route::get('home', [ToursenController::class, 'mostrar'])->name('index');
Route::get('/', [TourController::class, 'mostrar'])->name('inicio');
Route::get('comecar', [ToursPtController::class, 'mostrar'])->name('comecar');

Route::get('contact', [EnlacesCategorias::class, 'contact'])->name('contact');
Route::get('contacte-exploring-peru-tours', [EnlacesCategorias::class, 'contactenos'])->name('contactenos');
//Categorias español
Route::get('paquetes-en-cusco', [EnlacesCategorias::class, 'cusco'])->name('cusco');
Route::get('tours-diarios', [EnlacesCategorias::class, 'diarios'])->name('diarios');
Route::get('trek-y-aventura', [EnlacesCategorias::class, 'trek'])->name('trek');
Route::get('paquetes-en-peru', [EnlacesCategorias::class, 'lodge'])->name('paquetes');

Route::get('privados', [EnlacesCategorias::class, 'luxury'])->name('luxury');
Route::get('tours-de-un-dia', [EnlacesCategorias::class, 'fullday'])->name('fullday');


Route::get('nosotros', [EnlacesCategorias::class, 'nosotros'])->name('nosotros');
Route::get('terminos-y-condiciones', [EnlacesCategorias::class, 'terminos'])->name('terminos');
Route::get('preguntas-frecuentes', [EnlacesCategorias::class, 'preguntas'])->name('preguntas');

//Blog Ingles:
Route::get('blog-peru', [BlogController::class, 'listado'])->name('listado');
Route::get('peru-blog', [EnblogController::class, 'listado'])->name('enlistado');
Route::get('peru-blog-portugues', [PtblogController::class, 'listado'])->name('ptlistado');



/* Blogs */
//Blogs Español
Route::resource('tags', TagController::class)->middleware('auth')->names('tags');
Route::get('tag/{slug}', [TagController::class, 'show'])->name('tag');
Route::resource('blogs', BlogController::class)->middleware('auth')->names('blogs');
Route::get('blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

//Blogs Inglés
Route::resource('entags', EntagController::class)->middleware('auth')->names('entags');
Route::get('en-tag/{slug}', [EntagController::class, 'show'])->name('entag');
Route::resource('enblogs', EnblogController::class)->middleware('auth')->names('enblogs');
Route::get('en-blog/{slug}', [EnblogController::class, 'show'])->name('enblog');
//Usuarios
Route::resource('users', UserControler::class)->middleware('auth');
Route::get('registrarPacha', [UserControler::class, 'create'])->middleware('auth')->name('registrar');
Route::post('upload_image', [ArticleController::class, 'uploadImage'])->name('upload');
Auth::routes();
Route::get('/exploring', [HomeController::class, 'index']);

//Crud de imagenes
Route::resource('imagenes', ImagenesController::class)->middleware('auth');
//Categorias ingles
Route::get('Tours-in-Cusco', [EnlacesCategorias::class, 'mapien'])->name('mapien');
Route::get('Daily-tours', [EnlacesCategorias::class, 'hikes'])->name('hikes');
Route::get('Trek-and-adventure', [EnlacesCategorias::class, 'around'])->name('around');
Route::get('private', [EnlacesCategorias::class, 'private'])->name('private');
Route::get('full-day-tours', [EnlacesCategorias::class, 'fulldayen'])->name('fulldayen');
Route::get('Tours-in-Peru', [EnlacesCategorias::class, 'lodgen'])->name('lodgen');

//Destinos 
Route::get('destinos-Peru', [EnlacesCategorias::class, 'destinosPeru'])->name('destinosPeru');
Route::get('Cusco/', [EnlacesCategorias::class, 'destinoCusco'])->name('destinoCusco');
Route::get('Lima/', [EnlacesCategorias::class, 'destinoLima'])->name('destinoLima');
Route::get('Arequipa/', [EnlacesCategorias::class, 'destinoArequipa'])->name('destinoArequipa');
Route::get('Puno/', [EnlacesCategorias::class, 'destinoPuno'])->name('destinoPuno');
//Administrador de tour español
Route::resource('tours', TourController::class)->middleware('auth');
Route::get('search', [SearchController::class, 'search'])->name('search');
Route::get('searchblog', [SearchController::class, 'searchblog'])->name('searchblog');
Route::get('tour/{slug}/', [TourController::class, 'show'])->name('tours.show');

//Tours en Portugués
Route::resource('tourspt', ToursPtController::class)->middleware('auth');
Route::get('/tour-pt/{slug}/', [ToursPtController::class, 'show'])->name('tourspt.show');
Route::get('searchpt', [SearchenController::class, 'searchpt'])->name('searchpt');
//Blogs Portugues
Route::resource('Blogs-Portugues', PtblogController::class)->middleware('auth')->names('blogspt');
Route::get('/blog-pt/{slug}/', [PtblogController::class, 'show'])->name('blogspt.show');
Route::resource('pt-tags', TagPtController::class)->middleware('auth')->names('ptags');
Route::get('pt-tag/{slug}', [TagPtController::class, 'show'])->name('ptag');
Route::get('search-tag-pt', [SearchenController::class, 'searchTagPt'])->name('searchTagPt');

//Categorias Portugues
Route::get('pacotes-em-Cusco', [EnlacesCategorias::class, 'cuscop'])->name('cuscop');
Route::get('Passeios-diarios', [EnlacesCategorias::class, 'diariosp'])->name('diariosp');
Route::get('caminhada-e-aventura', [EnlacesCategorias::class, 'trekp'])->name('trekp');
Route::get('Pacotes-no-Peru', [EnlacesCategorias::class, 'pacotes'])->name('paquetesp');

//Ddestinos Portugues
Route::get('destinos-no-Peru', [EnlacesCategorias::class, 'destinosnoPeru'])->name('destinosnoPeru');
Route::get('destinos-em-Arequipa', [EnlacesCategorias::class,'Arequipap'])->name('Arequipap');
Route::get('destinos-em-Lima', [EnlacesCategorias::class,'Limap'])->name('Limap');
Route::get('destinos-em-Puno', [EnlacesCategorias::class,'Punop'])->name('Punop');

//Administrador de tour Ingles
Route::resource('toursen', ToursenController::class)->middleware('auth');
Route::get('/tour-en/{slug}/', [ToursenController::class, 'show'])->name('toursen.show');
Route::get('searchen', [SearchenController::class, 'search'])->name('searchen');
Route::get('search-en-blog', [SearchenController::class, 'searchblog'])->name('search.blog.en');

//Destinos Inglés
Route::get('destinies-Peru', [EnlacesCategorias::class, 'destiniesPeru'])->name('destiniesPeru');
Route::get('destiny-Cusco', [EnlacesCategorias::class, 'destinyCusco'])->name('destinyCusco');
Route::get('destiny-Lima', [EnlacesCategorias::class, 'destinyLima'])->name('destinyLima');
Route::get('destiny-Arequipa', [EnlacesCategorias::class, 'destinyArequipa'])->name('destinyArequipa');
Route::get('destiny-Puno', [EnlacesCategorias::class, 'destinyPuno'])->name('destinyPuno');

//mensajes
Route::post('mensajePacha', [MailController::class, 'getMail'])->name('mensajePacha');
Route::post('mensajePachaEn', [MailController::class, 'getMailEn'])->name('mensajePachaEn');
Route::post('mensajeIndex', [MailController::class, 'getMailIndex'])->name('mensajeIndex');






