<?php

use App\Http\Controllers\Admin\ProductAttributesController;
use App\Http\Controllers\Admin\ProductDiscountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Vendor\VendorController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\SubCategoryController;

Route::get('/', function () {
    return view('welcome');
});

// Admin routes
Route::middleware(['auth', 'verified', 'admin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::controller(AdminController::class)->group(function () {
            Route::get('/dashboard', 'index')->name('admin.dashboard');
            Route::get('/settings', 'settings')->name('admin.settings');
            Route::get('/manage/users', 'manageUsers')->name('admin.manage.users');
            Route::get('/manage/stores', 'manageStores')->name('admin.manage.stores');
            Route::get('/cart/history', 'cartHistory')->name('admin.cart.history');
            Route::get('/order/history', 'orderHistory')->name('admin.order.history');
        });

        //category routes
        Route::controller(CategoryController::class)->group(function () {
            Route::get('/categories', 'index')->name('admin.categories');
            Route::get('/add-category', 'create')->name('admin.add-category');
        });
        // Sub Category routes
        Route::controller(SubCategoryController::class)->group(function () {
            Route::get('/sub-categories', 'index')->name('admin.sub-categories');
            Route::get('/add-sub-category', 'create')->name('admin.add-sub-category');
            Route::post('/store-sub-category', 'store')->name('admin.store-sub-category');
            Route::get('/edit-sub-category/{id}', 'edit')->name('admin.edit-sub-category');
            Route::post('/update-sub-category/{id}', 'update')->name('admin.update-sub-category');
            Route::get('/delete-sub-category/{id}', 'destroy')->name('admin.delete-sub-category');
        });
        // Product routes
        Route::controller(ProductController::class)->group(function () {
            Route::get('/products', 'index')->name('admin.products');
            Route::get('/add-product', 'create')->name('admin.add-product');
        });
        // Product attribute routes
        Route::controller(ProductAttributesController::class)->group(function () {
            Route::get('/product-attributes', 'index')->name('admin.product-attributes');
            Route::get('/add-product-attribute', 'create')->name('admin.add-product-attribute');
            Route::post('/store-product-attribute', 'store')->name('admin.store-product-attribute');
            Route::get('/edit-product-attribute/{id}', 'edit')->name('admin.edit-product-attribute');
            Route::post('/update-product-attribute/{id}', 'update')->name('admin.update-product-attribute');
            Route::get('/delete-product-attribute/{id}', 'destroy')->name('admin.delete-product-attribute');
        });
        // product discount routes
        Route::controller(ProductDiscountController::class)->group(function () {
            Route::get('/product-discounts', 'index')->name('admin.product-discounts');
            Route::get('/add-product-discount', 'create')->name('admin.add-product-discount');
        });
    });
});


// Vendor routes
Route::middleware(['auth', 'vendor', 'verified'])->prefix('vendor')->group(function () {
    Route::get('/dashboard', [VendorController::class, 'index'])->name('vendor.dashboard');
});

// User routes
Route::middleware(['auth', 'user', 'verified'])->prefix('user')->group(function () {
    Route::get('/dashboard', [UserController::class, 'index'])->name('user.dashboard');
});

// Profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
