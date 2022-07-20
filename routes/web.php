<?php

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
    return redirect()->route('login');
//    return view('welcome');
});

Auth::routes();

Route::get('/home', function () {
    return redirect()->route('dashboard');
})->name('home');

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/ebay-orders/create', [App\Http\Controllers\EBayOrderController::class, 'create'])->name('ebay-orders.create')->middleware('auth');

Route::get('/ebay-orders/list', [App\Http\Controllers\EBayOrderController::class, 'list'])->name('ebay-orders.list')->middleware('auth');

Route::post('/ebay-orders/store', [App\Http\Controllers\EBayOrderController::class, 'store'])->name('ebay-orders.store')->middleware('auth');

Route::post('/ebay-orders/import', [App\Http\Controllers\EBayOrderController::class, 'import'])->name('ebay-orders.import')->middleware('auth');

Route::get('/templates/description/create', [App\Http\Controllers\Template\DescriptionController::class, 'create'])->name('templates.description.create')->middleware('auth');

Route::post('/templates/description/show', [App\Http\Controllers\Template\DescriptionController::class, 'show'])->name('templates.description.show')->middleware('auth');

Route::get('/listings/create', [App\Http\Controllers\ListingController::class, 'create'])->name('listings.create')->middleware('auth');

Route::post('/listings/store', [App\Http\Controllers\ListingController::class, 'store'])->name('listings.store')->middleware('auth');

Route::get('/listings/show', [App\Http\Controllers\ListingController::class, 'show'])->name('listings.show')->middleware('auth');

Route::get('/listings/list', [App\Http\Controllers\ListingController::class, 'list'])->name('listings.list')->middleware('auth');

