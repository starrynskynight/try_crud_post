<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerPage;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
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

// Route::get('/', [ControllerPage::class, 'home'])->name('home'); 
// Route::get('/about', [ControllerPage::class, 'about'])->name('tentang'); 
// Route::get('/life', [ControllerPage::class, 'life'])->name('life'); 
// Route::post('/contact', [ControllerPage::class, 'contact'])->name('contact');
// Route::get('/result', [ControllerPage::class, 'showResult'])->name('result');

Route::get('/', [ControllerPage::class, 'home'])->name('home');
Route::get('/about', [ControllerPage::class, 'about'])->name('tentang');
Route::get('/life', [ControllerPage::class, 'life'])->name('life');
Route::get('/contact', [ControllerPage::class, 'showContactForm'])->name('contact.form');
Route::post('/contact', [ControllerPage::class, 'contact'])->name('contact');
Route::get('/result', [ControllerPage::class, 'showResult'])->name('result');
Route::resource('/posts', PostController::class);
Route::delete('/post/{id}/delete', [PostController::class, 'destroy'])->name('post.destroyer');
Route::get("/login", [UserController::class, "login"])->name('login');
Route::post("/do-login", [UserController::class, "doLogin"])->name("doLogin");
Route::post("/do-logout", [UserController::class, "doLogout"])->name('doLogout');
Route::get("/sample", [UserController::class, "createSample"])->name('createSample');







// Route::post('/formPost', [ControllerPage::class, 'formPost'])->name('formPost');

// Route::get('/about', function () {
//     return view('about');
// })->name('tentang');

// Route::get('/contact', function () {
//     return view('contact');
// })->name('contact');

// Route::get('/services', function () {
//     return view('services');
// })->name('services');

// Route::get('/life', function () {
//     return view('life');
// })->name('life');