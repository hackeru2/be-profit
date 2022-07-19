<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;


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


//Route::get('/curl', SiteController::class, @index');
Route::get('/curl', [SiteController::class, 'index']);
Route::get('/net-sales', [SiteController::class, 'netSales']);
Route::get('/production-costs', [SiteController::class, 'productionCosts']);
Route::get('/gross-profit', [SiteController::class, 'grossProfit']);
Route::get('/gross-margin', [SiteController::class, 'grossMargin']);







