<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalesController;

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

Route::get('/sales/sales-by-shop', [SalesController::class, 'salesByShop']);
Route::get('/sales/sales-by-product-qty', [SalesController::class, 'salesByProductQty']);
Route::get('/sales/sales-by-product-amount', [SalesController::class, 'salesByProductAmount']);
Route::get('/sales/total-sales-amount', [SalesController::class, 'totalSalesAmount']);
Route::get('/sales/total-sales-qty', [SalesController::class, 'totalSalesQty']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
