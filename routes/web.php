<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\PedidosController;
use App\Http\Controllers\ProductosController;
use App\Http\Controllers\UsersController;
use App\Models\Categoria;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/admin',function(){
    return view('admin.index');
});
//Categorias
Route::get('/admin/categorias',[CategoriasController::class,'index'])->name('admin.categorias');

//Productos
Route::get('/admin/productos',[ProductosController::class,'index'])->name('admin.productos');

//Pedidos
Route::get('/admin/pedidos',[PedidosController::class,'index'])->name('admin.pedidos');
//usuarios
Route::get('/admin/users',[UsersController::class,'index'])->name('admin.users');
