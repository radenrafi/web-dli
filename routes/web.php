<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\admin;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\HomeController;
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

Auth::routes();
Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('login', [LoginController::class, 'login']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/artikel', [HomeController::class, 'indexArtikel'])->name('artikel');
Route::get('/artikel/kategori/{kategori}', [HomeController::class, 'kategoriArtikel']);
Route::get('/artikel/{id}', [HomeController::class, 'showArtikel'])->name('showArtikel');

Route::get('/admin', [admin::class, 'index'])->name('admin')->middleware('auth');

Route::resource('/admin/artikel',ArtikelController::class)->middleware('auth');
Route::resource('/admin/about',AboutController::class)->middleware('auth');


Route::get('/test', function ()
{
    return view('testText');
});


// punya e pras

// {{ url('/admin/roadmap') }}
// {{ url('/admin/research') }}
// {{ url('/admin/target') }}

Route::get('/admin/target', function ()
{
    return view('target.edit');
});
Route::get('/admin/research', function ()
{
    return view('research.edit');
});
Route::get('/admin/roadmap', function ()
{
    return view('roadmap.edit');
});
Route::get('/view-roadmap', function ()
{
    return view('roadmap.detailRoadmap');
});
