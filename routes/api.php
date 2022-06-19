<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::controller(AuthController::class)->group(function () {
    Route::post('login', 'login');
    Route::post('register', 'register');
    Route::post('logout', 'logout');
    Route::post('refresh', 'refresh');
});

Route::controller(SalesController::class)->group(function () {
    Route::get('sales/sales-by-shop', 'salesByShop');
    Route::get('sales/sales-by-product-qty', 'salesByProductQty');
    Route::get('sales/sales-by-product-amount', 'salesByProductAmount');
    Route::get('sales/total-sales-amount', 'totalSalesAmount');
    Route::get('sales/total-sales-qty', 'totalSalesQty');
});
