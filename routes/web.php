<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('website.index');
});

Route::get('/products', function () {
    return view('website.products');
});

Route::get('/portal', function () {
    return view('portal.index');
});


Route::get('admin-unit-product-types/{product_type}', [App\Http\Controllers\ProductTypeController::class, 'adminProducts'])->name('portal.product_types.index');
Route::get('admin-categories/{category}', [App\Http\Controllers\CategoryController::class, 'adminCategories'])->name('portal.categories.index');
Route::get('admin-categories', [App\Http\Controllers\CategoryController::class, 'adminCategories'])->name('portal.categories.index');

Route::get('web-unit-products/{unit}', [App\Http\Controllers\ProductTypeController::class, 'webProducts']);

Route::get('portal/', [App\Http\Controllers\UnitController::class, 'portal'])->name('portal.index');

//===========================================User Resources=============================================
Route::get('portal/users', [App\Http\Controllers\UserController::class, 'index'])->name('portal.users.index');
Route::get('/portal/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('portal.users.create');
Route::post('portal./users', [App\Http\Controllers\UserController::class, 'store'])->name('portal.users.store');
Route::get('portal/users/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('portal.users.show');
Route::get('portal/users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('portal.users.edit');
Route::put('portal/users/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('portal.users.update');
Route::delete('portal/users/{user}', [App\Http\Controllers\UserController::class, 'destroy'])->name('portal.users.destroy');

//==========================================Unit Resources================================================
Route::get('portal/units', [App\Http\Controllers\UnitController::class, 'index'])->name('portal.units.index');
Route::get('/portal/units/create', [App\Http\Controllers\UnitController::class, 'create'])->name('portal.units.create');
Route::post('portal/units', [App\Http\Controllers\UnitController::class, 'store'])->name('portal.units.store');
Route::get('portal/units/{unit}', [App\Http\Controllers\UnitController::class, 'show'])->name('portal.units.show');
Route::get('portal/units/{unit}/edit', [App\Http\Controllers\UnitController::class, 'edit'])->name('portal.units.edit');
Route::put('portal/units/{unit}', [App\Http\Controllers\UnitController::class, 'update'])->name('portal.units.update');
Route::delete('portal/units/{unit}', [App\Http\Controllers\UnitController::class, 'destroy'])->name('portal.units.destroy');

//==========================================Category Resources================================================
Route::get('portal/categories', [App\Http\Controllers\CategoryController::class, 'index'])->name('portal.categories.index');
Route::get('/portal/categories/create', [App\Http\Controllers\CategoryController::class, 'create'])->name('portal.categories.create');
Route::post('portal/categories', [App\Http\Controllers\CategoryController::class, 'store'])->name('portal.categories.store');
Route::get('portal/categories/{category}', [App\Http\Controllers\CategoryController::class, 'show'])->name('portal.categories.show');
Route::get('portal/categories/{category}/edit', [App\Http\Controllers\CategoryController::class, 'edit'])->name('portal.categories.edit');
Route::put('portal/categories/{category}', [App\Http\Controllers\CategoryController::class, 'update'])->name('portal.categories.update');
Route::delete('portal/categories/{category}', [App\Http\Controllers\CategoryController::class, 'destroy'])->name('portal.categories.destroy');

//==========================================ProductType Resources================================================
Route::get('portal/product_types', [App\Http\Controllers\ProductTypeController::class, 'index'])->name('portal.product_types.index');
Route::get('/portal/product_types/create', [App\Http\Controllers\ProductTypeController::class, 'create'])->name('portal.product_types.create');
Route::post('portal/product_types', [App\Http\Controllers\ProductTypeController::class, 'store'])->name('portal.product_types.store');
Route::get('portal/product_types/{product_type}', [App\Http\Controllers\ProductTypeController::class, 'show'])->name('portal.product_types.show');
Route::get('portal/product_types/{product_type}/edit', [App\Http\Controllers\ProductTypeController::class, 'edit'])->name('portal.product_types.edit');
Route::put('portal/product_types/{product_type}', [App\Http\Controllers\ProductTypeController::class, 'update'])->name('portal.product_types.update');
Route::delete('portal/product_types/{product_type}', [App\Http\Controllers\ProductTypeController::class, 'destroy'])->name('portal.product_types.destroy');

//==========================================Product Resources================================================
Route::get('portal/products', [App\Http\Controllers\ProductController::class, 'index'])->name('portal.products.index');
Route::get('/portal/products/create', [App\Http\Controllers\ProductController::class, 'create'])->name('portal.products.create');
Route::post('portal/products', [App\Http\Controllers\ProductController::class, 'store'])->name('portal.products.store');
Route::get('portal/products/{product}', [App\Http\Controllers\ProductController::class, 'show'])->name('portal.products.show');
Route::get('portal/products/{product}/edit', [App\Http\Controllers\ProductController::class, 'edit'])->name('portal.products.edit');
Route::put('portal/products/{product}', [App\Http\Controllers\ProductController::class, 'update'])->name('portal.products.update');
Route::delete('portal/products/{product}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('portal.products.destroy');

