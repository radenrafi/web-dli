<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\admin;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\ColaborationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ResearchController;
use App\Http\Controllers\RoadmapController;
use App\Http\Controllers\TargetController;
use App\Http\Controllers\TopResearchController;
use Illuminate\Support\Facades\App;

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
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'welcome'])->name('welcome');

// Auth::routes();
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// artikel
Route::get('/artikel', [HomeController::class, 'indexArtikel'])->name('artikel');
Route::get('/artikel/kategori/{kategori}', [HomeController::class, 'kategoriArtikel']);
Route::get('/artikel/{id}', [HomeController::class, 'showArtikel'])->name('showArtikel');

// topResearch
Route::get('/topResearch/{id}', [HomeController::class, 'showTopResearch'])->name('showTopResearch');

// roadmap
Route::get('/roadmap', [HomeController::class, 'roadmap']);

// admin
Route::get('/admin', [admin::class, 'index'])->name('admin')->middleware('auth');
Route::resource('/admin/artikel', ArtikelController::class)->middleware('auth');
Route::resource('/admin/about', AboutController::class)->middleware('auth');
Route::resource('/admin/target', TargetController::class)->middleware('auth');
Route::resource('/admin/research', ResearchController::class)->middleware('auth');
Route::resource('/admin/roadmap', RoadmapController::class)->middleware('auth');
Route::resource('/admin/topResearch', TopResearchController::class)->middleware('auth');
Route::resource('/admin/colaboration', ColaborationController::class)->middleware('auth');
