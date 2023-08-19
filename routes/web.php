<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Auth::routes();


Route::middleware(['role:admin'])->group(function ()  {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/create_page', [App\Http\Controllers\PageController::class, 'create_page'])->name('create_page');
    Route::post('/store_page', [App\Http\Controllers\PageController::class, 'store_page'])->name('store_page');
    
});
Route::get('/open_page/{id}', [App\Http\Controllers\PageController::class, 'open_page'])->name('open_page');