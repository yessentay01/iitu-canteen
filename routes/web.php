<?php

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


Route::get('/', [App\Http\Controllers\WelcomeController::class, 'index'])->name('welcome');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/favorites', [App\Http\Controllers\FavoritesController::class, 'index'])->name('favorites');
Route::get('/basket', [App\Http\Controllers\BasketController::class, 'index'])->name('basket');
Route::post('/basket', [App\Http\Controllers\BasketController::class, 'store'])->name('basket.store');

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
Route::get('/profile/feedback/{id}', [App\Http\Controllers\ProfileController::class, 'feedback'])->name('feedback');
Route::post('/profile/feedback', [App\Http\Controllers\ProfileController::class, 'feedbackStore'])->name('feedback.store');
Route::get('/profile/download/{id}', [App\Http\Controllers\ProfileController::class, 'downloadReceipt'])->name('receipt');

Route::get('/admin/users', [App\Http\Controllers\AdminController::class, 'users'])->name('admin.users');
Route::get('/admin/categories', [App\Http\Controllers\AdminController::class, 'categories'])->name('admin.categories');

Route::get('/admin/orders', [App\Http\Controllers\AdminController::class, 'orders'])->name('admin.orders');
Route::get('/admin/orders/edit/{id}', [App\Http\Controllers\AdminController::class, 'orderEdit'])->name('admin.orders.edit');
Route::post('/admin/orders/edit', [App\Http\Controllers\AdminController::class, 'updateOrder'])->name('admin.orders.update');

Route::get('/admin/menu', [App\Http\Controllers\AdminController::class, 'menu'])->name('admin.menu');
Route::get('/admin/menu/add', [App\Http\Controllers\AdminController::class, 'menuAdd'])->name('admin.menu.add');
Route::post('/admin/menu/add', [App\Http\Controllers\AdminController::class, 'menuStore'])->name('admin.menu.store');
Route::get('/admin/menu/edit/{id}', [App\Http\Controllers\AdminController::class, 'menuEdit'])->name('admin.menu.edit');
Route::post('/admin/menu/edit', [App\Http\Controllers\AdminController::class, 'menuUpdate'])->name('admin.menu.update');
Route::get('/admin/menu/delete/{id}', [App\Http\Controllers\AdminController::class, 'menuDelete'])->name('admin.menu.delete');


Route::get('/admin/feedbacks', [App\Http\Controllers\AdminController::class, 'feedback'])->name('admin.feedback');

Route::get('add-to-cart/{id}', [App\Http\Controllers\HomeController::class, 'addToCart'])->name('add.to.cart');
Route::get('add-to-favorites/{id}', [App\Http\Controllers\HomeController::class , 'addToFavorites'])->name('add.to.favorites');
