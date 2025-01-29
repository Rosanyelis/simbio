<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;

//Route::get('/', function () {
//  return redirect()->route('login');
//});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/empresa', [HomeController::class, 'empresa'])->name('empresa');
Route::get('/contactanos', [HomeController::class, 'contactanos'])->name('contactanos');
Route::get('/productos', [HomeController::class, 'productos'])->name('productos');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    # Roles
    Route::get('/roles', [RolController::class, 'index'])->name('roles.index');
    Route::get('/roles/create', [RolController::class, 'create'])->name('roles.create');
    Route::post('/roles', [RolController::class, 'store'])->name('roles.store');
    Route::get('/roles/{role}/edit', [RolController::class, 'edit'])->name('roles.edit');
    Route::put('/roles/{role}', [RolController::class, 'update'])->name('roles.update');
    Route::get('/roles/{role}', [RolController::class, 'destroy'])->name('roles.destroy');

    # Usuarios
    Route::get('/usuarios', [UserController::class, 'index'])->name('users.index');
    Route::get('/usuarios/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/usuarios/store', [UserController::class, 'store'])->name('users.store');
    Route::get('/usuarios/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/usuarios/{user}/update', [UserController::class, 'update'])->name('users.update');
    Route::get('/usuarios/{user}/destroy', [UserController::class, 'destroy'])->name('users.destroy');

    #Productos
    Route::get('/Productos', [ProductController::class, 'index'])->name('products.index');
    Route::get('/Productos/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/Productos/store', [ProductController::class, 'store'])->name('products.store');
    Route::get('/Productos/{products}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/Productos/{products}/update', [ProductController::class, 'update'])->name('products.update');
    Route::get('/Productos/{products}/destroy', [ProductController::class, 'destroy'])->name('products.destroy');

    #Productos
    Route::get('/categorias', [CategoryController::class, 'index'])->name('categories.index');
    Route::get('/categorias/create', [CategoryController::class, 'create'])->name('categories.create');
    Route::post('/categorias/store', [CategoryController::class, 'store'])->name('categories.store');
    Route::get('/categorias/{categories}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
    Route::put('/categorias/{categories}/update', [CategoryController::class, 'update'])->name('categories.update');
    Route::get('/categorias/{categories}/destroy', [CategoryController::class, 'destroy'])->name('categories.destroy');


});
Route::get('comandos', function () {
 Artisan::call('optimize');
 Artisan::call('view:clear');
 Artisan::call('cache:clear');
 Artisan::call('route:clear');
 Artisan::call('config:clear');
 Artisan::call('config:cache');
 Artisan::call('view:cache');
 Artisan::call('route:cache');

 return 'Comandos ejecutados con éxitos';
});

require __DIR__.'/auth.php';
