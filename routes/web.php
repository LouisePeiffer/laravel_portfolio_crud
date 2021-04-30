<?php

use App\Http\Controllers\AdminAboutController;
use App\Http\Controllers\AdminContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminFactController;
use App\Http\Controllers\AdminPortfolioController;
use App\Http\Controllers\AdminServiceController;
use App\Http\Controllers\AdminSkillController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\FrontController;
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

// --------------------- FRONT ---------------------
Route::get('/', [FrontController::class, 'index'])->name('home');
// Route::get('/portfolioDetails', function () {
//     return view('portfolio-details');
// });


// --------------------- BACK ---------------------
Route::get('/admin', [AdminController::class, 'index'])->name('admin');


// -------ABOUT-------

// EDIT
Route::get('/about/edit/{id}', [AdminAboutController::class, 'edit'])->name('edit.about');
Route::put('/about/update/{id}', [AdminAboutController::class, 'update'])->name('update.about');

// -------FACTS-------
// EDIT
Route::get('/fact/edit', [AdminFactController::class, 'edit'])->name('edit.fact');
Route::put('/fact/update/{id}', [AdminFactController::class, 'update'])->name('update.fact');
// CREATE 
Route::get('/create/fact', [AdminFactController::class, 'create'])->name('create.fact');
Route::post('/store/fact', [AdminFactController::class, 'store'])->name('store.fact');
// DELETE
Route::delete('/fact/{id}/delete', [AdminFactController::class, 'destroy'])->name('destroy.fact');


// -------SKILLS-------
// EDIT
Route::get('/skill/edit/{id}', [AdminSkillController::class, 'edit'])->name('edit.skill');
Route::put('/skill/update/{id}', [AdminSkillController::class, 'update'])->name('update.skill');


// -------PORTFOLIO-------
// EDIT
Route::get('/portfolio/edit/{id}', [AdminPortfolioController::class, 'edit'])->name('edit.portfolio');
Route::put('/portfolio/update/{id}', [AdminPortfolioController::class, 'update'])->name('update.portfolio');
// DELETE
Route::delete('/portfolio/delete/{id}', [AdminPortfolioController::class, 'destroy'])->name('destroy.portfolio');
// CREATE 
Route::get('/create/portfolio', [AdminPortfolioController::class, 'create'])->name('create.portfolio');
Route::post('/store/portfolio', [AdminPortfolioController::class, 'store'])->name('store.portfolio');

// -------SERVICES------- 
// EDIT
Route::get('/services/edit/{id}', [AdminServiceController::class, 'edit'])->name('edit.services');
Route::put('/services/update/{id}', [AdminServiceController::class, 'update'])->name('update.services');
// DELETE
Route::delete('/services/delete/{id}', [AdminServiceController::class, 'destroy'])->name('destroy.services');
// CREATE 
Route::get('/create/service', [AdminServiceController::class, 'create'])->name('create.service');
Route::post('/store/service', [AdminServiceController::class, 'store'])->name('store.service');

// -------CONTACT-------
// EDIT
Route::get('/contact/edit/{id}', [AdminContactController::class, 'edit'])->name('edit.contact');
Route::put('/contact/update/{id}', [AdminContactController::class, 'update'])->name('update.contact');

// -------EMAIL-------
// READ
Route::get('/admin/email', [EmailController::class, 'index'])->name('admin.email');
// STORE
Route::post('/store/email', [EmailController::class, 'store'])->name('store.email');
