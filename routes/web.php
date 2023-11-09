<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Models\Inventory;
use App\Models\Order;
use App\Models\OrderItem;
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
        Route::get('/inventory-{id}-edit', [InventoryController::class, 'edit'])->name('inventory.edit');
        Route::put('/inventory-{id}-update', [InventoryController::class, 'update'])->name('inventory.update');
        Route::get('/inventory-{id}-delete',[InventoryController::class, 'destroy'])->name('inventory.delete');
        /*-------------Product----------------*/
        Route::get('/products', [ProductController::class, 'index'])->name('admin.product');
        Route::get('/product-create',[ProductController::class, 'create'])->name('admin.product.create');
        Route::post('/product-store', [ProductController::class, 'store'])->name('admin.product.store');
        Route::get('/product-{id}-edit',[ProductController::class, 'edit'])->name('admin.product.edit');
        Route::put('/product-{id}-update', [ProductController::class, 'update'])->name('admin.product.update');
        Route::get('/product-{id}-delete', [ProductController::class, 'destroy'])->name('admin.producr.delete');
        /*-------------Users----------------*/
        Route::get('/users',[UserController::class, 'index'])->name('admin.user');
        Route::get('/user-create', [UserController::class, 'create'])->name('admin.user.create');
        Route::post('/user-store',[UserController::class, 'store'])->name('admin.user.store');
        Route::get('/user-{id}-edit',[UserController::class,'edit'])->name('admin.user.edit');
        Route::put('/user-{id}-update',[UserController::class, 'update'])->name('admin.user.update');
        Route::get('/user-{id}-delete',[UserController::class, 'destroy'])->name('admin.user.delete');
        /*-------------Admin----------------*/
        Route::get('/admins', [AdminController::class, 'show'])->name('admin.admin');
        Route::get('/admin-create', [AdminController::class, 'create'])->name('admin.create');
        Route::post('/admin-store', [AdminController::class, 'store'])->name('admin.store');
        Route::get('/admin-{id}-edit',[AdminController::class, 'edit'])->name('admin.edit');
        Route::put('/admin-{id}-update',[AdminController::class, 'update'])->name('admin.update');
        route::get('/admin-{id}-delete',[AdminController::class, 'destroy'])->name('admin.delete');
    });
});
/* -----------------------------End Admin Route--------------------------------------------------------*/

/* -----------------------------Menu Route--------------------------------------------------------*/
Route::get('/menu',[MenuController::class, 'index'])->name('menu');
Route::get('add-to-cart/{id}', [MenuController::class, 'addToCart'])->name('add-to-cart');
Route::delete('remove-from-cart', [MenuController::class, 'remove'])->name('remove_from_cart');
Route::patch('update-cart', [MenuController::class, 'update'])->name('update_cart');
/* ----------------------------- End Menu Route--------------------------------------------------------*/

/* -----------------------------Checkout Route--------------------------------------------------------*/
Route::get('/checkout', 'App\Http\Controllers\StripeController@checkout')->middleware(['auth'])->name('checkout');
Route::post('/session', 'App\Http\Controllers\StripeController@session')->name('session');
Route::get('/success', 'App\Http\Controllers\StripeController@success')->name('success');
Route::get('/success-collection',[CheckoutController::class, 'payUponCollection'])->name('success-collection');
/* -----------------------------End Checkout Route--------------------------------------------------------*/

/* -----------------------------Contact Route--------------------------------------------------------*/
Route::get('/contact-us', function(){
    return view('contact');
})->name('contact-us');

Route::get('/contact-us-form',[ContactUsFormController::class, 'show'])->name('contact-form');

Route::post('/contat-us-form',[ContactUsFormController::class, 'store'])->name('contact-store');
/* -----------------------------End Contact Route--------------------------------------------------------*/

Route::get('/about-us', function(){
    return view('about-us');
})->name('aboutUs');

Route::get('/', function () {
    return view('frontpage');
})->name('home');

Route::get('/gallery', function(){
    return view('gallery');
})->name('gallery');

Route::get('/dashboard', function () {
    $user = auth()->user();
    $orderhistory = Order::all()->where('user_id', $user->id)->sortByDesc("created_at");
    
    return view('dashboard', compact('orderhistory'));
})->middleware(['auth'])->name('dashboard');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Auth::routes();


