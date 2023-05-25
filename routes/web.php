<?php

use App\Http\Controllers\New\GetFreeTimeForOrderMainController;

use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// gallery

Route::view('/gallery', 'shop.catalog.gallery', ['name' => 'gallery']);


// about

Route::view('/about', 'shop.catalog.about', ['name' => 'about']);


// shop

Route::get('/', [ItemController::class, 'index'])->name('main');

Route::get('/shop', [ItemController::class, 'shop'])->name('shop');

Route::get('/shop/{id}', [ItemController::class, 'shop_detail'])->name('shop_detail');


// CART

Route::post('/cart', [ItemController::class, 'cart']);

Route::get('/cart', [ItemController::class, 'cart_index'])->name('cart');



Route::get('/myitems', [OrderItemController::class, 'history'])->name('main')->middleware(['auth', 'verified']);

Route::get('/myitems', [OrderItemController::class, 'history'])->name('my_items');

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

// Route::get('/test', [GetFreeTimeForOrderMainController::class, 'index']);
// ->middleware(['auth', 'verified']);






// Route::resource('books', OrderBookController::class)->middleware(['auth', 'verified']);


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

//Мои брони



// Route::get('/item_destroy', [OrderBookController::class, 'destroy'])->name('delite');



Route::get('/dashboard', function () {

    return redirect('/');
});