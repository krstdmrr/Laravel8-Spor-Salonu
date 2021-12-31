<?php

use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\MessageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\Admin\OrderController as AdminOrderController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
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


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/home', [HomeController::class, 'index'])->name('homepage');
Route::get('/aboutus', [HomeController::class, 'aboutus'])->name('aboutus');
Route::get('/references', [HomeController::class, 'references'])->name('references');
Route::get('/gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');
Route::post('/sendmessage', [HomeController::class, 'sendmessage'])->name('sendmessage');
Route::get('/product/{id}/{slug}', [HomeController::class, 'product'])->name('product');
Route::get('/categoryproducts/{id}/{slug}', [HomeController::class, 'categoryproducts'])->name('categoryproducts');
Route::get('/addtocart/{id}', [HomeController::class, 'addtocart'])->name('addtocart');
Route::get('/getproduct', [HomeController::class, 'getproduct'])->name('getproduct');
Route::get('/productlist/{search}', [HomeController::class, 'productlist'])->name('productlist');


//Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->where(['id'=>'[0-9]+', 'name'=>'[A-za-z]+']);
Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name')->name('test');


//Admin
Route::middleware('auth')->prefix('admin')->group(function () {

    Route::middleware('admin')->group(function () {

        Route::get('/', [\App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin_home');

        Route::get('/category', [\App\Http\Controllers\Admin\CategoryController::class, 'index'])->name('admin_category');
        Route::get('/category/add', [\App\Http\Controllers\Admin\CategoryController::class, 'add'])->name('admin_category_add');
        Route::post('/category/create', [\App\Http\Controllers\Admin\CategoryController::class, 'create'])->name('admin_category_create');
        Route::get('/category/edit/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'edit'])->name('admin_category_edit');
        Route::post('/category/update/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'update'])->name('admin_category_update');
        Route::get('/category/delete/{id}', [\App\Http\Controllers\Admin\CategoryController::class, 'destroy'])->name('admin_category_delete');
        Route::get('/category/show', [\App\Http\Controllers\Admin\CategoryController::class, 'show'])->name('admin_category_show');

        Route::prefix('product')->group(function () {

            Route::get('/', [\App\Http\Controllers\Admin\ProductController::class, 'index'])->name('admin_products');
            Route::get('create', [\App\Http\Controllers\Admin\ProductController::class, 'create'])->name('admin_product_add');
            Route::post('store', [\App\Http\Controllers\Admin\ProductController::class, 'store'])->name('admin_product_store');
            Route::get('edit/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'edit'])->name('admin_product_edit');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'update'])->name('admin_product_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\ProductController::class, 'destroy'])->name('admin_product_delete');
            Route::get('show', [\App\Http\Controllers\Admin\ProductController::class, 'show'])->name('admin_product_show');
        });
        Route::prefix('messages')->group(function () {

            Route::get('/', [MessageController::class, 'index'])->name('admin_message');
            Route::get('edit/{id}', [MessageController::class, 'edit'])->name('admin_message_edit');
            Route::post('update/{id}', [MessageController::class, 'update'])->name('admin_message_update');
            Route::get('delete/{id}', [MessageController::class, 'destroy'])->name('admin_message_delete');
            Route::get('show', [MessageController::class, 'show'])->name('admin_message_show');
        });

        Route::prefix('image')->group(function () {

            Route::get('create/{product_id}', [\App\Http\Controllers\Admin\ImageController::class, 'create'])->name('admin_image_add');
            Route::post('store/{product_id}', [\App\Http\Controllers\Admin\ImageController::class, 'store'])->name('admin_image_store');
            Route::get('delete/{id}/{product_id}', [\App\Http\Controllers\Admin\ImageController::class, 'destroy'])->name('admin_image_delete');
            Route::get('show', [\App\Http\Controllers\Admin\ImageController::class, 'show'])->name('admin_image_show');
        });
        Route::prefix('review')->group(function () {
            Route::get('/', [\App\Http\Controllers\Admin\ReviewController::class, 'index'])->name('admin_review');
            Route::post('update/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'update'])->name('admin_review_update');
            Route::get('delete/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'destroy'])->name('admin_review_delete');
            Route::get('show/{id}', [\App\Http\Controllers\Admin\ReviewController::class, 'show'])->name('admin_review_show');

        });
        Route::get('setting', [\App\Http\Controllers\Admin\SettingController::class, 'index'])->name('admin_setting');
        Route::post('setting/update', [\App\Http\Controllers\Admin\SettingController::class, 'update'])->name('admin_setting_update');

        Route::prefix('faq')->group(function () {

            Route::get('/', [FaqController::class, 'index'])->name('admin_faq');
            Route::get('create', [FaqController::class, 'create'])->name('admin_faq_add');
            Route::post('store', [FaqController::class, 'store'])->name('admin_faq_store');
            Route::get('edit/{id}', [FaqController::class, 'edit'])->name('admin_faq_edit');
            Route::post('update/{id}', [FaqController::class, 'update'])->name('admin_faq_update');
            Route::get('delete/{id}', [FaqController::class, 'destroy'])->name('admin_faq_delete');
            Route::get('show', [FaqController::class, 'show'])->name('admin_faq_show');
        });

        Route::prefix('order')->group(function () {
            Route::get('/', [AdminOrderController::class, 'index'])->name('admin_orders');
            Route::get('/list/{status}', [AdminOrderController::class, 'list'])->name('admin_order_list');
            Route::get('/create', [AdminOrderController::class, 'create'])->name('admin_order_add');
            Route::post('/store', [AdminOrderController::class, 'store'])->name('admin_order_store');
            Route::get('/edit/{id}', [AdminOrderController::class, 'edit'])->name('admin_order_edit');
            Route::post('/update/{id}', [AdminOrderController::class, 'update'])->name('admin_order_update');
            Route::get('/delete/{id}', [AdminOrderController::class, 'destroy'])->name('admin_order_delete');
            Route::get('/show/{id}', [AdminOrderController::class, 'show'])->name('admin_order_show');
        });
        Route::prefix('user')->group(function () {
            Route::get('/', [AdminUserController::class, 'index'])->name('admin_user');
            Route::post('/create', [AdminUserController::class, 'create'])->name('admin_user_add');
            Route::post('/store', [AdminUserController::class, 'store'])->name('admin_user_store');
            Route::get('/edit/{id}', [AdminUserController::class, 'edit'])->name('admin_user_edit');
            Route::post('/update/{id}', [AdminUserController::class, 'update'])->name('admin_user_update');
            Route::get('/delete/{id}', [AdminUserController::class, 'destroy'])->name('admin_user_delete');
            Route::get('/show/{id}', [AdminUserController::class, 'show'])->name('admin_user_show');
            Route::get('/userrole/{id}', [AdminUserController::class, 'user_roles'])->name('admin_user_roles');
            Route::post('/userrolestore/{id}', [AdminUserController::class, 'user_role_store'])->name('admin_user_role_add');
            Route::get('/userroledelete/{userid}/{roleid}', [AdminUserController::class, 'user_role_delete'])->name('admin_user_role_delete');
        });
    });
});

Route::middleware('auth')->prefix('myaccount')->namespace('myaccount')->group(function () {

    Route::get('/', [UserController::class, 'index'])->name('myprofile');
    Route::get('/myreviews', [UserController::class, 'myreviews'])->name('myreviews');
    Route::get('/destroymyreview/{id}', [UserController::class, 'destroymyreview'])->name('user_review_delete');

});
Route::middleware('auth')->prefix('user')->namespace('user')->group(function () {

    Route::get('/profile', [UserController::class, 'index'])->name('profile.show');

    Route::prefix('order')->group(function () {
        Route::get('/', [OrderController::class, 'index'])->name('user_orders');
        Route::get('/create', [OrderController::class, 'create'])->name('user_order_add');
        Route::post('/store', [OrderController::class, 'store'])->name('user_order_store');
        Route::get('/edit/{id}', [OrderController::class, 'edit'])->name('user_order_edit');
        Route::post('/update/{id}', [OrderController::class, 'update'])->name('user_order_update');
        Route::get('/delete/{id}', [OrderController::class, 'destroy'])->name('user_order_delete');
        Route::get('/show/', [OrderController::class, 'show'])->name('user_order_show');
    });
});

Route::get('/admin/login', [HomeController::class, 'login'])->name('admin_login');
Route::post('/admin/logincheck', [HomeController::class, 'logincheck'])->name('admin_logincheck');
Route::get('/logout', [HomeController::class, 'logout'])->name('logout');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

