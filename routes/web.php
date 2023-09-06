<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

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

Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/produits',[ProductController::class, 'index'])->name('produits');
Route::get('/new', [HomeController::class, 'new'])->name('new');
Route::get('/android', [HomeController::class, 'android'])->name('android');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::get('/about', [HomeController::class, 'about'])->name('about');
#admin routes
Route::get('/admin', [AdminController::class, 'home'])->name('home');
Route::get('/add', [AdminController::class, 'add'])->name('add');
Route::get('/edit', [AdminController::class, 'edit'])->name('edit');
Route::get('/product', [AdminController::class, 'product'])->name('product');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
