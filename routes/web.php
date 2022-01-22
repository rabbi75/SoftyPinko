<?php
// frontend
use App\Http\Controllers\frontend\pagesController;
use App\Http\Controllers\frontend\contactController;

use App\Http\Controllers\backend\BackendPagesController;
use App\Http\Controllers\backend\BackendBlogController;
use App\Http\Controllers\backend\Authentication\Register;

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

Route::get('/', [pagesController::class,'index'])->name('index');
Route::get('/about', [pagesController::class,'about'])->name('about');
Route::get('/work-process', [pagesController::class,'workprocess'])->name('work-process');
Route::get('/testimonials', [pagesController::class,'testimonials'])->name('testimonials');
Route::get('/pricing-table', [pagesController::class,'pricingtable'])->name('pricing-table');
Route::get('/blog', [pagesController::class,'blog'])->name('blog')->middleware(['user','auth']);


Route::get('/contact', [pagesController::class,'contact'])->name('contact');
Route::post('/contact/store', [contactController::class,'store'])->name('contact.store');

// authentication route
// login route
Route::get('login', 'App\Http\Controllers\Authentication@login')->name('user-login');
Route::post('user-login', 'App\Http\Controllers\Authentication@userLogin')->name('login');
Route::get('logout', 'App\Http\Controllers\Authentication@logout')->name('logout');

// registration route
Route::get('register', 'App\Http\Controllers\Authentication@register')->name('user-registration');
Route::post('user-registration', 'App\Http\Controllers\Authentication@userRegister')->name('registration');

// Backend route
Route::group(['prefix'=>'admin'], function(){
	Route::get('/', [BackendPagesController::class,'index'])->name('admin.index');

	Route::group(['prefix' => '/blog'], function(){
		Route::get('/', [BackendBlogController::class,'index'])->name('admin.blog.index');
		Route::get('/create', [BackendBlogController::class,'create'])->name('admin.blog.create');
		Route::post('/store', [BackendBlogController::class,'store'])->name('admin.blog.store');
		Route::get('/edit/{id}', [BackendBlogController::class,'edit'])->name('admin.blog.edit');
		Route::post('/edit/{id}', [BackendBlogController::class,'update'])->name('admin.blog.update');
		Route::get('/delete/{id}', [BackendBlogController::class,'destroy'])->name('admin.blog.delete');
	});

	// Authentication route
	Route::get('/register', [Register::class,'register'])->name('admin-register');
	Route::post('/admin-register', [Register::class,'adminregister'])->name('add-admin');
});