<?php

use App\Http\Controllers\Auth\CustomerRegisterController;
use App\Http\Controllers\Auth\LawyerRegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\LawyerController;
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
Route::post('/admin/login', [DashboardController::class, 'admin_login'])->name('admin.login');

Route::get('/categories/{filter}', [FrontController::class, 'categories'])->name('categories');
Route::get('/lawyers/{category}', [FrontController::class, 'lawyers_with_category'])->name('lawyers.with.category');
Route::get('/lawyers/online/{filter}', [FrontController::class, 'lawyers_online'])->name('lawyers.online');

Route::get('/chat', [PusherController::class, 'index'])->name('chat');
Route::post('/broadcast', [PusherController::class, 'broadcast'])->name('broadcast');
Route::post('/receive', [PusherController::class, 'receive'])->name('receive');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});


// ADMIN PART
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


Route::get('/lawyer/dashboard', [LawyerController::class, 'index'])->name('lawyer.dashboard');
Route::get('/customer/dashboard', [CustomerController::class, 'index'])->name('customer.dashboard');
