<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AuthenticatedSessionController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\PaypalController;
use App\Http\Controllers\WebsiteController;
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
// Route::middleware('auth')->group(function () {

Route::get('/', [WebsiteController::class, 'home']);

Route::get('/smartwatch', [WebsiteController::class, 'smartwatch']);

Route::get('/about', [WebsiteController::class, 'about']);

Route::get('/checkout', [ProductsController::class, 'checkout']);
Route::post('/checkout', [ProductsController::class, 'ret_checkout']);
Route::get('/contact', [ProductsController::class, 'front_contact']);

Route::get('/men', [WebsiteController::class, 'men']);

Route::get('/complete', [WebsiteController::class, 'complete']);

Route::get('/product', [WebsiteController::class, 'product']);

Route::get('/smartwatch', [WebsiteController::class, 'smartwatch']);

Route::get('/template', [WebsiteController::class, 'template']);

Route::get('/Shopping', [WebsiteController::class, 'Shopping']);

Route::get('/women', [WebsiteController::class, 'women']);

Route::get('/complete/{id}', [ProductsController::class, 'complete'])->name('complete');

// Route::get('/' . function () {
//     return view('/');
// });

Route::get('admin/dashboard', function () {
    return view('admin/dashboard');})->middleware(['auth', 'verified'])->name('admin/dashboard');
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('register', [RegisteredUserController::class, 'create'])
    ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
    ->name('login');

     Route::post('login', [AuthenticatedSessionController::class, 'store']);

    Route::get('/admin/dashboard', [DashboardController::class, 'dashboard']);
    Route::get('/admin/settings', [SettingsController::class, 'settings']);
    Route::get('/admin/add-settings', [SettingsController::class, 'add']);
    Route::post('/admin/add-settings', [SettingsController::class, 'add_settings']);
    Route::get('/admin/services', [ServicesController::class, 'services']);
    Route::get('/admin/add-service', [ServicesController::class, 'add']);
    Route::post('/admin/add-service', [ServicesController::class, 'add_service']);
    Route::get('/admin/edit-service/{id}', [ServicesController::class, 'edit']);
    Route::post('/admin/edit-service/{id}', [ServicesController::class, 'edit_service']);
    Route::get('/admin/delete-service/{id}', [ServicesController::class, 'delete_service']);

    Route::get('/admin/products', [ProductsController::class, 'products'])->name('admin.products');
    Route::get('/admin/add-products', [ProductsController::class, 'add_products']);
    Route::post('/admin/add-products', [ProductsController::class, 'ret_add_products']);
    Route::get('cart', [ProductsController::class, 'cart'])->name('cart');
    Route::get('add-to-cart/{id}', [ProductsController::class, 'addToCart'])->name('add_to_cart');

    Route::get('/cart', [ProductsController::class,'cart']);
    Route::post('/add-to-cart', [ProductsController::class, 'addToCart'])->name('cart.add');
    Route::get('/admin/order', [ProductsController::class, 'order'])->name('admin.orders');
    Route::get('/admin/view-order/{id}',[ProductsController::class,'view_order']);


Route::get('/admin/edit-order/{id}',[ProductsController::class,'edit_order']);
Route::post('/admin/edit-order/{id}',[ProductsController::class,'ret_edit_order']);
Route::get('/admin/contact',[ProductsController::class,'contact']);
Route::post('/admin/contact',[ProductsController::class,'ret_contact']);
Route::get('/admin/home-settings',[ProductsController::class,'home_settings']);
Route::post('/admin/home-settings',[ProductsController::class,'ret_home_settings']);
Route::get('/admin/delete-product/{id}',[ProductsController::class,'delete_product']);
Route::get('/admin/edit-product/{id}',[ProductsController::class,'edit_product']);
Route::post('/admin/edit-product/{id}',[ProductsController::class,'ret_edit_product']);

//users
Route::get('users/userlist', [UserController::class, 'userlist'])->name('userlist');
Route::get('users/add', [UserController::class, 'add'])->name('user.add');
Route::post('users/adduser', [UserController::class, 'adduser'])->name('user.adduser');
Route::get('users/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
Route::post('users/update/{id}', [UserController::class, 'update'])->name('user.update');
Route::get('users/delete/{id}', [UserController::class, 'delete_user'])->name('user.delete');

});
require __DIR__.'/auth.php';
//   });
