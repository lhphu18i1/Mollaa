<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Customer\AuthController as CustomerAuthController;
use App\Http\Controllers\Web\CartController;
use App\Http\Controllers\Web\CategoryController as WebCategoryController;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\OrderController;
use App\Http\Controllers\Web\ProductController as WebProductController;
use App\Http\Controllers\Web\ProductDetailController;
use Illuminate\Support\Facades\Route;

Route::pattern('id', '[0-9]+');
Route::pattern('slug', ('.*'));

Route::redirect('/', 'home');
Route::get('/home', [HomeController::class, 'viewHome'])->name('get.view.home');
//Dashboard
Route::get('/dashboard', [DashboardController::class, 'showDashboard'])->name('get.dashboard');
//Admin
Route::prefix('/auth')->group(function () {
    //Auth
    Route::prefix('/admin')->group(function () {
        Route::get('/login', [AuthController::class, 'showLogin'])->name('get.admin.login');
        Route::post('/login', [AuthController::class, 'postLogin'])->name('post.admin.login');
        Route::get('/register', [AuthController::class, 'showRegister'])->name('get.admin.register');
        Route::post('/register', [AuthController::class, 'postRegister'])->name('post.admin.register');
        Route::get('/logout', [AuthController::class, 'logout'])->name('get.admin.logout');
    });
    Route::prefix('/customer')->group(function () {
        Route::get('/login', [CustomerAuthController::class, 'showLogin'])->name('get.customer.login');
        Route::post('/login', [CustomerAuthController::class, 'postLogin'])->name('post.customer.login');
        Route::get('/register', [CustomerAuthController::class, 'showRegister'])->name('get.customer.register');
        Route::post('/register', [CustomerAuthController::class, 'postRegister'])->name('post.customer.register');
    });
});
Route::prefix('/admin')->group(function () {
    //Product
    Route::prefix('/product')->group(function () {
        Route::get('/', [ProductController::class, 'viewProduct'])->name('get.view.product');
        Route::get('/add', [ProductController::class, 'showAddProduct'])->name('get.add.product');
        Route::post('/add', [ProductController::class, 'postProduct'])->name('post.add.product');
        Route::get('delete/{id}', [ProductController::class, 'deleteProduct'])->name('get.delete.product');
        Route::get('edit/{id}', [ProductController::class, 'showEditProduct'])->name('get.edit.product');
        Route::put('update/{id}', [ProductController::class, 'editProduct'])->name('put.update.product');
    });
    //Category
    Route::prefix('/category')->group(function () {
        Route::get('/', [CategoryController::class, 'viewCategory'])->name('get.view.category');
        Route::get('/add', [CategoryController::class, 'showAddCategory'])->name('get.add.category');
        Route::post('/add', [CategoryController::class, 'postCategory'])->name('post.add.category');
        Route::get('delete/{id}', [CategoryController::class, 'deleteCategory'])->name('get.delete.category');
        Route::get('edit/{id}', [CategoryController::class, 'showEditCategory'])->name('get.edit.category');
        Route::put('update/{id}', [CategoryController::class, 'editCategory'])->name('put.update.category');
    });
    //Cart
});
Route::prefix('/cart')->group(function () {
    Route::get('/', [CartController::class, 'viewCart'])->name('get.view.cart');
    Route::get('add/{id}', [CartController::class, 'addCart'])->name('get.add.cart');
    Route::get('update/{id}', [CartController::class, 'updateCart'])->name('get.update.cart');
    Route::get('remove/{id}', [CartController::class, 'removeCart'])->name('get.remove.cart');
    Route::post('clear/{id}', [CartController::class, 'clearCart'])->name('post.clear.cart');
});
Route::get('/category', [WebCategoryController::class, 'viewCategory'])->name('get.show.category');
Route::get('/order', [OrderController::class, 'viewOrder'])->name('get.view.order');
Route::get('/product', [WebProductController::class, 'viewProduct'])->name('get.show.product');
Route::get('/product-detail', [ProductDetailController::class, 'viewProductDetail'])->name('get.show.product-detail');
