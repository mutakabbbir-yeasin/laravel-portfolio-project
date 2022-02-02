<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\backend\AdminController;
use App\Http\Controllers\backend\HomePageController;
use App\Http\Controllers\backend\ServicePageController;
use App\Http\Controllers\backend\AboutPageController;
use App\Http\Controllers\backend\FaqPageController;
use App\Http\Controllers\backend\ContactFormController;
use App\Http\Controllers\backend\PortfolioPageController;

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

Route::prefix('admin')->group(function(){
    Route::get('', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/home', [HomePageController::class, 'index'])->name('admin.home');
    Route::put('/home', [HomePageController::class, 'update'])->name('admin.home.update'); //data pathanor jonno put method use kora hoyeche

    Route::get('/about', [AboutPageController::class, 'index'])->name('admin.about'); 
    Route::put('/about', [AboutPageController::class, 'update'])->name('admin.about.update'); 

    Route::get('/faq', [FaqPageController::class, 'create'])->name('admin.faq'); 
    Route::get('/faq/create', [FaqPageController::class, 'create'])->name('admin.faq.create'); 
    Route::post('/faq/create', [FaqPageController::class, 'store'])->name('admin.faq.store'); 
    Route::get('/faq/list', [FaqPageController::class, 'list'])->name('admin.faq.list'); 

    Route::get('/contact', [ContactFormController::class, 'index'])->name('admin.contact'); 
    Route::post('/contact', [ContactFormController::class, 'store'])->name('admin.contact.store'); 

    Route::get('/service', [ServicePageController::class, 'index'])->name('admin.service');
    Route::get('/service/create', [ServicePageController::class, 'create'])->name('admin.service.create');
    Route::post('/service/create', [ServicePageController::class, 'store'])->name('admin.service.store'); 
    Route::get('/service/list', [ServicePageController::class, 'list'])->name('admin.service.list'); 
    Route::get('/service/edit/{id}', [ServicePageController::class, 'edit'])->name('admin.service.edit'); 
    Route::post('/service/update/{id}', [ServicePageController::class, 'update'])->name('admin.service.update');
    Route::delete('/service/destroy/{id}', [ServicePageController::class, 'destroy'])->name('admin.service.destroy'); 

    Route::get('/portfolio', [PortfolioPageController::class, 'index'])->name('admin.portfolio');
    Route::get('/portfolio/create', [PortfolioPageController::class, 'create'])->name('admin.portfolio.create');
    Route::put('/portfolio/create', [PortfolioPageController::class, 'store'])->name('admin.portfolio.store'); // jehetu image niye kaj korchi tai put method hobe
    Route::get('/portfolio/list', [PortfolioPageController::class, 'list'])->name('admin.portfolio.list'); 
    Route::get('/portfolio/edit/{id}', [PortfolioPageController::class, 'edit'])->name('admin.portfolio.edit'); 
    Route::post('/portfolio/update/{id}', [PortfolioPageController::class, 'update'])->name('admin.portfolio.update');
    Route::delete('/portfolio/destroy/{id}', [PortfolioPageController::class, 'destroy'])->name('admin.portfolio.destroy'); 
});




Auth::routes();


