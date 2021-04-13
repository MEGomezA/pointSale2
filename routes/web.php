<?php

use App\Http\Livewire\AlmacenesTable;
use App\Http\Livewire\ClientesTable;
use App\Http\Livewire\ProductosDetalle;
use App\Http\Livewire\ProductosTable;
use App\Http\Livewire\UsuariosTable;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->guest('/login');
});

Route::get('/Productos', ProductosTable::class)->middleware('auth')->name('productos');
Route::get('/Almacen', AlmacenesTable::class)->middleware('auth')->name('almacenes');
Route::get('/Clientes', ClientesTable::class)->middleware('auth')->name('clientes');
Route::get('/Usuarios', UsuariosTable::class)->middleware('auth')->name('usuarios');
Route::get('/Producto/{id}', ProductosDetalle::class)->middleware('auth')->where('id','[0-9]+')->name('productos.detalle');
//Route::get('/Producto/Detalle', ProductosDetalle::class)->middleware('auth')->name('producto.detalle');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
