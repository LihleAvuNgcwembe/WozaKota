<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Models\Inventory;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* -----------------------------Admin Route--------------------------------------------------------*/

Route::prefix('admin')->group(function () {
    Route::get('/login', [AdminController::class, 'index'])->name('login_form');
    Route::post('/login/owner', [AdminController::class, 'login'])->name('admin.login');

    Route::get('/register', [AdminController::class, 'AdminRegister'])->name('admin.register');
    Route::post('/register/owner', [AdminController::class, 'AdminRegisterCreate'])->name('admin.register.create');

    Route::middleware('admin')->group(function () {
        /*-------------Login----------------*/
        Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
        /*-------------Inventory----------------*/
        Route::get('/inventory', [InventoryController::class, 'index'])->name('admin.inventory');
        Route::get('/inventory-create', [InventoryController::class, 'create'])->name('.inven.create.form');
        Route::post('/inventory-store', [InventoryController::class, 'store'])->name('inventory.store');
        Route::get('/inventory-update', [InventoryController::class, 'edit'])->name('inventory.edit');
        /*-------------Product----------------*/
        Route::get('/products', [ProductController::class, 'index'])->name('admin.product');
    });
});
/* -----------------------------End Admin Route--------------------------------------------------------*/


Route::get('/',[MenuController::class, 'index'])->name('menu');
Route::get('add-to-cart/{id}', [MenuController::class, 'addToCart'])->name('add-to-cart');
Route::delete('remove-from-cart', [MenuController::class, 'remove'])->name('remove_from_cart');
Route::patch('update-cart', [MenuController::class, 'update'])->name('update_cart');

Route::get('/checkout', 'App\Http\Controllers\StripeController@checkout')->name('checkout');
Route::post('/session', 'App\Http\Controllers\StripeController@session')->name('session');
Route::get('/success', 'App\Http\Controllers\StripeController@success')->name('success');

Route::get('/contact-us', function(){
    return view('contact');
})->name('contact-us');

Route::get('/about-us', function(){
    return view('about-us');
})->name('aboutUs');

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
