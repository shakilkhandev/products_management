<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

// Route::get('/', function () {
//     return view('welcome');
// });

//by default it goes to Products page 
Route::get('/', [ProductController::class,'index'])->name('products.index');



// All routes


Route::get('products', [ProductController::class, 'index'])->name('products.index');

Route::get('products/create', [ProductController::class, 'create'])->name('products.create');

Route::post('products', [ProductController::class, 'store'])->name('products.store');

Route::get('products/{id}', [ProductController::class, 'show'])->name('products.show');

Route::get('products/{id}/edit', [ProductController::class, 'edit'])->name('products.edit');

Route::put('products/{id}', [ProductController::class, 'update'])->name('products.update');

Route::delete('products/{id}', [ProductController::class, 'destroy'])->name('products.destroy');








// Route for sorting by name
Route::get('products/sort/name', [ProductController::class, 'sortByName'])->name('products.sortByName');

// Route for sorting by price
Route::get('products/sort/price', [ProductController::class, 'sortByPrice'])->name('products.sortByPrice');

// Route for searching products
Route::get('products/search', [ProductController::class, 'search'])->name('products.search');