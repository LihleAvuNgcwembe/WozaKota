<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\MenuController;
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
        Route::get('/inventory-update',[Inventory::class, 'edit'])->name('inventory.edit');
        /*-------------Product----------------*/
    });
});
/* -----------------------------End Admin Route--------------------------------------------------------*/

Route::get('/', [MenuController::class, 'index'])->name('index');

Route::get('/menu', [MenuController::class, 'menu'])->name('menu');

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
