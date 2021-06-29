<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Auth\Events\Login;
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

Route::get('/', function () {
    return view('welcome');
});

Route::view('/admin', 'admin.index');
Route::get('/', [HomeController::class, 'index']);
Route::get('about', [HomeController::class, 'about'])->name('about');
Route::get('blog', [HomeController::class, 'blog'])->name('blog');
Route::get('register', [HomeController::class, 'register'])->name('register');
Route::get('login', [HomeController::class, 'login'])->name('login');
Route::get('contact', [HomeController::class, 'contact'])->name('contact');
Route::get('faq', [HomeController::class, 'faq'])->name('faq');
Route::get('bod', [HomeController::class, 'bod'])->name('bod');
Route::get('gallery', [HomeController::class, 'gallery'])->name('gallery');
Route::get('services', [HomeController::class, 'services'])->name('services');


Route::post('register', [LoginController::class, 'register'])->name('register');
Route::get('create-new-user', [LoginController::class, 'newUser'])->name('create-new-user');
Route::get('admin-login', [LoginController::class, 'adminLogin'])->name('admin-login');
Route::post('admin-login', [LoginController::class, 'checkAdmin'])->name('admin-login');
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

