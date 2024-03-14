<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PujaInmobiliaria\AppController;
use App\Http\Controllers\PujaInmobiliaria\LoginController as PujaInmobiliariaLoginController;
use App\Http\Controllers\StatusPropertyController;
use App\Http\Controllers\UserController;

// Route::get('/', function () {
//     return view('welcome');
// });
//modo vista administrador
Auth::routes();
Route::get('admin',[LoginController::class,'showLoginFormAdmin'])->name('showLoginFormAdmin');
Route::post('/sign-in-admin',[LoginController::class,'signInAdmin'])->name('sign-in-admin');
Route::post('/logout-admin', [LoginController::class,'logout'])->name('logout-admin');

Route::get('/maintenance', 'HomeController@index')->name('home');
Route::get('/maintenance', function () { return view('admin/app'); })->name('maintenance');
Route::get('/user', [UserController::class,'index'])->name('mis-administradores');
Route::post('/user/create', [UserController::class,'store'])->name('crear.administrador');
Route::put('/user/update', [UserController::class,'update'])->name('actualizar.administrador');
Route::put('/user/disable', [UserController::class,'disable'])->name('inhabilitar.administrador');
Route::put('/user/enable', [UserController::class,'enable'])->name('habilitar.administrador');
Route::put('/user/changepass', [UserController::class,'changePassword'])->name('cambiar.clave');
Route::get('user/{id}',[UserController::class,'selectUser'])->name('seleccionar.administrador');

Route::get('/category', [CategoryController::class,'index'])->name('mis-categorias');
Route::post('/category/create', [CategoryController::class,'store'])->name('crear.categoria');
Route::put('/category/update', [CategoryController::class,'update'])->name('actualizar.categoria');
Route::put('/category/disable', [CategoryController::class,'disable'])->name('inhabilitar.categoria');
Route::put('/category/enable', [CategoryController::class,'enable'])->name('habilitar.categoria');
Route::get('category/{id}',[CategoryController::class,'selectCategory'])->name('seleccionar.categoria');

Route::get('/status-property', [StatusPropertyController::class,'index'])->name('mis-estados-propiedad');
Route::post('/status-property/create', [StatusPropertyController::class,'store'])->name('crear.estado-propiedad');
Route::put('/status-property/update', [StatusPropertyController::class,'update'])->name('actualizar.estado-propiedad');
Route::put('/status-property/disable', [StatusPropertyController::class,'disable'])->name('inhabilitar.estado-propiedad');
Route::put('/status-property/enable', [StatusPropertyController::class,'enable'])->name('habilitar.estado-propiedad');
Route::get('status-property/{id}',[StatusPropertyController::class,'selectStatusProperty'])->name('seleccionar.estado-propiedad');

Route::get('/product', [ProductController::class,'index'])->name('mis-productos');
Route::post('/product/create', [ProductController::class,'store'])->name('crear.producto');
Route::put('/product/update', [ProductController::class,'update'])->name('actualizar.producto');
Route::put('/product/disable', [ProductController::class,'disable'])->name('inhabilitar.producto');
Route::put('/product/enable', [ProductController::class,'enable'])->name('habilitar.producto');
Route::get('product/{id}',[ProductController::class,'selectProduct'])->name('seleccionar.producto');
// modo vista usuario
Route::get('/login-user',[PujaInmobiliariaLoginController::class,'showLoginFormUser'])->name('showLoginFormUser');
Route::post('/sign-in-user',[PujaInmobiliariaLoginController::class,'signInUser'])->name('sign-in-user');
Route::post('/logout-user', [LoginController::class,'logout'])->name('logout-user');

Route::get('/', [AppController::class,'index'])->name('app');
Route::get('/alquiler',[AppController::class,'alquiler'])->name('alquiler');
Route::get('/remate',[AppController::class,'remate'])->name('remate');
Route::get('/detalle/{id}',[AppController::class,'detalle'])->name('detalle');
Route::post('/subir_imagen', [LoginController::class,'uploadImageProduct'])->name('subir_imagen');