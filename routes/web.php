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

Route::get('/dashboard', [App\Http\Controllers\DashboardController::class, 'index'])->name('dashboard');

Route::get('/ebay-orders/create', [App\Http\Controllers\EBayOrderController::class, 'create'])->name('ebay-orders.create');

Route::get('/ebay-orders/list', [App\Http\Controllers\EBayOrderController::class, 'list'])->name('ebay-orders.list');

Route::post('/ebay-orders/store', [App\Http\Controllers\EBayOrderController::class, 'store'])->name('ebay-orders.store');

Route::post('/ebay-orders/import', [App\Http\Controllers\EBayOrderController::class, 'import'])->name('ebay-orders.import');

Route::get('/templates/description/create', [App\Http\Controllers\Template\DescriptionController::class, 'create'])->name('templates.description.create');

Route::post('/templates/description/show', [App\Http\Controllers\Template\DescriptionController::class, 'show'])->name('templates.description.show');


