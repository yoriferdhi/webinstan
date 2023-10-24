<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ProfileController;
use App\Http\Controllers\frontend\VisimisiController;
use App\Http\Controllers\frontend\NewsController;
use App\Http\Controllers\frontend\GalleryController;
use App\Http\Controllers\frontend\ContactUsController;

use App\Http\Controllers\backend\LoginController;
use App\Http\Controllers\backend\RegisterController;

use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\ControlNewsController;
use App\Http\Controllers\backend\ControlProfileController;
use App\Http\Controllers\backend\ControlAboutusController;

use App\Http\Controllers\backend\ControlPublicationController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);

Route::get('/home', [HomeController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/visimisi', [VisimisiController::class, 'index']);
Route::get('/news', [NewsController::class, 'index']);
Route::get('/news/{news:url}', [NewsController::class, 'show']);
Route::get('/gallery', [GalleryController::class, 'index']);
Route::get('/contactus', [ContactUsController::class, 'index']);

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');

Route::resource('/control/news', ControlNewsController::class)->middleware('auth');
Route::get('/control/news/checkSlug', [ControlNewsController::class, 'checkSlug']);

Route::resource('/control/profile', ControlprofileController::class)->middleware('auth');

Route::resource('/control/aboutus', ControlAboutusController::class)->middleware('auth');

// Route::resource('/control/publication', ControlPublicationController::class)->middleware('auth');
