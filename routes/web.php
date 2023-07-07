<?php

use App\Http\Controllers\Auth\CustomerRegisterController;
use App\Http\Controllers\Auth\LawyerRegisterController;
use App\Http\Controllers\Auth\UsersLoginController;
use App\Http\Controllers\Customer\CustomerController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Customer\OrderController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\Lawyer\LawyerController;
use App\Http\Controllers\PusherController;
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

Route::get('/', [FrontController::class, 'index'])->name('front');
Route::post('lawyer/signup', [LawyerRegisterController::class, 'create'])->name('lawyer.register');
Route::post('customer/signup', [CustomerRegisterController::class, 'create'])->name('customer.register');
// Route::post('/admin/login', [DashboardController::class, 'admin_login'])->name('admin.login');
Route::post('user/login', [UsersLoginController::class, 'login'])->name('users.login');

Route::get('/categories/{filter}', [FrontController::class, 'categories'])->name('categories');
Route::get('/lawyers/{category}', [FrontController::class, 'lawyers_with_category'])->name('lawyers.with.category');
Route::get('/lawyers/online/{filter}', [FrontController::class, 'lawyers_online'])->name('lawyers.online');

Route::get('/chat', [PusherController::class, 'index'])->name('chat');
Route::post('/broadcast', [PusherController::class, 'broadcast'])->name('broadcast');
Route::post('/receive', [PusherController::class, 'receive'])->name('receive');

Route::get('image/update', function () {
    return view('front-layouts.pages.lawyer.image-update');
});

Auth::routes();

// ADMIN PART
Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::get('/all-users', [DashboardController::class, 'allUsers'])->name('all.users');

    Route::get('/category/index', [DashboardController::class, 'category_index'])->name('category.index');
    Route::get('/category/form/{id}', [DashboardController::class, 'category_form'])->name('category.form');
    Route::post('/category/store/{id}', [DashboardController::class, 'category_store'])->name('category.store');
    Route::get('/category/detail/{id}', [DashboardController::class, 'category_detail'])->name('category.details');
    Route::post('/category/delete/{id}', [DashboardController::class, 'category_delete'])->name('category.delete');

    Route::get('/service/index', [DashboardController::class, 'service_index'])->name('service.index');
    Route::get('/service/form/{id}', [DashboardController::class, 'service_form'])->name('service.form');
    Route::post('/service/store/{id}', [DashboardController::class, 'service_store'])->name('service.store');
    Route::get('/service/detail/{id}', [DashboardController::class, 'service_detail'])->name('service.details');
    Route::post('/service/delete/{id}', [DashboardController::class, 'service_delete'])->name('service.delete');
});


// ADMIN PART
// Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');


// LAWYER PART
Route::middleware(['auth', 'lawyer'])->group(function () {
    Route::get('/lawyer/dashboard', [LawyerController::class, 'index'])->name('lawyer.dashboard');
    Route::get('/lawyer/documents/verification', [LawyerController::class, 'document_submission'])->name('lawyer.document.verification');
    Route::post('/lawyer/documents/submit', [LawyerController::class, 'submit_documents'])->name('lawyer.documents.submit');

    Route::get('/lawyer/profile/setting', [LawyerController::class, 'profile_setting'])->name('lawyer.profile.setting');
    Route::post('/lawyer/profile/submit', [LawyerController::class, 'profile_submit'])->name('lawyer.profile.submit');
});

// CUSTOMER PART
Route::middleware(['auth', 'customer'])->group(function () {
    Route::get('/customer/dashboard', [CustomerController::class, 'index'])->name('customer.dashboard');

    // LAwyers
    Route::get('lawyer/list', [CustomerController::class, 'lawyer_list'])->name('lawyer.list');
    Route::get('lawyer/profile/{id}', [CustomerController::class, 'lawyer_profile'])->name('lawyer.profile');

    // user profile
    Route::get('customer/profile', [CustomerController::class, 'customerProfile'])->name('customer.profile');
    Route::post('customer/profile/update/{user}', [CustomerController::class, 'customerProfileUpdate'])->name('customer.profile.update');

    Route::get('/order/index', [OrderController::class, 'order_index'])->name('order.index');
    Route::get('/order/form/{id}', [OrderController::class, 'order_form'])->name('order.form');
    Route::post('/order/store/{id}', [OrderController::class, 'order_store'])->name('order.store');
    Route::get('/order/detail/{id}', [OrderController::class, 'order_detail'])->name('order.details');
    Route::post('/order/delete/{id}', [OrderController::class, 'order_delete'])->name('order.delete');
});


// Route::group(['middleware' => 'lawyer'], function () {
//     Route::group(['prefix' => 'lawyer'], function () {
//         Route::get('/dashboard', [LawyerController::class, 'index'])->name('lawyer.dashboard');
//     });
// });

// Route::group(['middleware' => 'customer'], function () {
//     Route::group(['prefix' => 'customer'], function () {
//         Route::get('/dashboard', [CustomerController::class, 'index'])->name('customer.dashboard');
//     });
// });
