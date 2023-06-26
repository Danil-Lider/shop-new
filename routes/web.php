<?php

use App\Http\Controllers\New\GetFreeTimeForOrderMainController;

use App\Http\Controllers\ItemController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

// index 

Route::get('/', [ItemController::class, 'index'])->name('main');

Route::get('/modal.html', [ItemController::class, 'modal'])->name('modal');

Route::get('/save_search_word',function (Request $request) {

    // dd($request->get('word'));

    $word = $request->get('word');

    $in_db =  DB::table('search_words')->where('name', $word)->first();

    if($in_db){

        // dd($in_db);
    
        $count = $in_db->count;

        $count += 1;

        DB::table('search_words')
        ->where('id', $in_db->id)
        ->update(['count' => $count]);


    }else{
        DB::table('search_words')->insert([
            'name' => $word,
            'count' => 1,
        ]);
    }

    
});






/*

// shop

Route::get('/shop', [ItemController::class, 'shop'])->name('shop');

Route::get('/shop/{id}', [ItemController::class, 'shop_detail'])->name('shop_detail');





// gallery

Route::view('/gallery', 'shop.catalog.gallery', ['name' => 'gallery']);


// about

Route::view('/about', 'shop.catalog.about', ['name' => 'about']);


// CART

Route::get('/cart', [CartController::class, 'index'])->name('cart');

Route::post('/cart', [CartController::class, 'cart']);

Route::post('/add_in_cart_store', [CartController::class, 'add_in_cart_store'])->name('add_in_cart_store');









Route::get('/myitems', [ItemController::class, 'history'])->name('main')->middleware(['auth', 'verified']);

Route::get('/myitems', [ItemController::class, 'history'])->name('my_items');


*/

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