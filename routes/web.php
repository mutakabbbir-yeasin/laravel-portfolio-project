<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\HomePageController;
use App\Http\Controllers\backend\ServicePageController;
use App\Http\Controllers\backend\AboutPageController;
use App\Http\Controllers\backend\FaqPageController;
use App\Http\Controllers\backend\ContactFormController;

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

// Route::get('/', function () {
//     return view('frontend/index');
// });

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');
Route::get('/admin/home', [HomePageController::class, 'index'])->name('admin.home');
Route::put('/admin/home', [HomePageController::class, 'update'])->name('admin.home.update'); //data pathanor jonno put method use kora hoyeche


Route::get('/admin/about', [AboutPageController::class, 'index'])->name('admin.about'); 
Route::put('/admin/about', [AboutPageController::class, 'update'])->name('admin.about.update'); 


Route::get('/admin/faq', [FaqPageController::class, 'create'])->name('admin.faq'); 
Route::get('/admin/faq/create', [FaqPageController::class, 'create'])->name('admin.faq.create'); 
Route::post('/admin/faq/create', [FaqPageController::class, 'store'])->name('admin.faq.store'); 
Route::get('/admin/faq/list', [FaqPageController::class, 'list'])->name('admin.faq.list'); 


Route::get('/admin/contact', [ContactFormController::class, 'index'])->name('admin.contact'); 
Route::post('/admin/contact', [ContactFormController::class, 'store'])->name('admin.contact.store'); 







Route::get('/admin/service', [ServicePageController::class, 'index'])->name('admin.service');
Route::get('/admin/service/create', [ServicePageController::class, 'create'])->name('admin.service.create');
Route::post('/admin/service/create', [ServicePageController::class, 'store'])->name('admin.service.store'); 
Route::get('/admin/service/list', [ServicePageController::class, 'list'])->name('admin.service.list'); 
Route::get('/admin/service/edit/{id}', [ServicePageController::class, 'edit'])->name('admin.service.edit'); 
Route::post('/admin/service/update/{id}', [ServicePageController::class, 'update'])->name('admin.service.update');
Route::delete('/admin/service/destroy/{id}', [ServicePageController::class, 'destroy'])->name('admin.service.destroy'); 









Route::get('/admin/portfolio', [AdminController::class, 'portfolio'])->name('admin.portfolio');
Route::get('/admin/testimonial', [AdminController::class, 'testimonial'])->name('admin.testimonial');
Route::get('/admin/blog', [AdminController::class, 'blog'])->name('admin.blog');
//Route::get('/admin/contact', [AdminController::class, 'contact'])->name('admin.contact');
Auth::routes();


