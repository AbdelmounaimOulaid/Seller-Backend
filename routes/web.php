<?php

use App\Events\NewNotification;
use App\Helpers\ProductHelper;
use App\Models\Product;
use App\Models\User;
use App\Models\Warehouse;
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
    return view('welcome');
});

Route::get('/test', function() {
    $warehouse = Warehouse::find(2);
    $product = Product::find(1);
    return ProductHelper::get_warehouse_state($warehouse, $product);
});
