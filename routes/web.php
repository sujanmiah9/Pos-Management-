<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\BackupController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductTypeController;
use App\Http\Controllers\ReportsController;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VendorController;
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
    return view('dashboard');
});
// Brand Route
Route::get('view/brands',[BrandController::class,'view'])->name('view.brand');
//Vendor Route
Route::get('view/vendor',[VendorController::class,'view'])->name('view.vendor');
//Product Type Route
Route::get('view/ProductType',[ProductTypeController::class,'view'])->name('view.producttype');
//Product Route
Route::get('view/Product',[ProductController::class,'view'])->name('view.product');
//Sales Route
Route::get('check/sale',[SalesController::class,'checkSale'])->name('check.sale');
Route::get('sale/history',[SalesController::class,'history'])->name('history');
Route::get('retail/Dashboard',[SalesController::class,'retailDashboard'])->name('retail.Dashboard');
//Reports Route
Route::get('sales/report',[ReportsController::class,'salesReport'])->name('sales.report');
Route::get('inventory/report',[ReportsController::class,'inventoryReport'])->name('inventory.report');
Route::get('payment/report',[ReportsController::class,'paymentReport'])->name('payment.report');

//backup and Setting
Route::get('backup/record', [BackupController::class,'backup'])->name('backup.record');
Route::get('general/setting', [BackupController::class,'generalSetting'])->name('general.setting');
Route::get('help', [BackupController::class,'help'])->name('help');
//accountController (revenue, improvments, accounts)
Route::get('revenue', [AccountController::class,'revenue'])->name('revenue');
Route::get('improvement', [AccountController::class,'improvement'])->name('improvement');
Route::get('accounts', [AccountController::class,'accounts'])->name('accounts');
//user
Route::get('user/profile', [UserController::class,'profile'])->name('profile');
Route::get('change/password', [UserController::class,'changePassword'])->name('change.pass');