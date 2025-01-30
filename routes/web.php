<?php

use App\Http\Controllers\CatalogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Ruta para la página de inicio
Route::get('/', [HomeController::class, 'home']);

Route::middleware(['auth'])->group(function () {

    // Una ve haces login correctamente, te redirige a la página de welcome
    Route::get('/welcome', [CatalogController::class, 'home'])->name('welcome');

    // Ruta para mostrar todos los elementos
    Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog.index');

    // Ruta para mostrar un elemento específico
    Route::get('/catalog/show/{id}', [CatalogController::class, 'show'])->name('catalog.show');

    // Ruta para crear un nuevo elemento
    Route::get('/catalog/create', [CatalogController::class, 'create'])->name('catalog.create');

    // Ruta para editar un elemento
    Route::get('/catalog/edit/{id}', [CatalogController::class, 'edit'])->name('catalog.edit');

    // Ruta para confirmar el alquiler de una película
    Route::get('/catalog/rentConfirm/{id}', [CatalogController::class, 'rentConfirm'])->name('catalog.rentConfirm');

    //POST

    // Ruta para guardar una película
    Route::post('catalog/store',[CatalogController::class, 'store'])->name('catalog.store');

    // Ruta para actualizar una película
    Route::put('/catalog/update/{id}', [CatalogController::class, 'update'])->name('catalog.update');

    // Ruta para alquilar una película
    //Route::put('/rent/{id}', [CatalogController::class, 'rent'])->name('catalog.rent');
    Route::post('/catalog/rent/{id}', [CatalogController::class, 'rent'])->name('catalog.rent');


    // Ruta para devolver una película
    Route::put('/catalog/return/{id}', [CatalogController::class, 'return'])->name('catalog.return');

    // Ruta para eliminar una película
    Route::delete('/catalog/delete/{id}', [CatalogController::class, 'destroy'])->name('catalog.destroy');

});



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

