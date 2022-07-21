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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'welcome')->name('home');
Route::view('/products', 'components/products/section1')->name('products');
Route::view('/product-detail', 'components/product-detail/landing-page')->name('product-detail');
Route::view('/services', 'components/services/services-landing-page')->name('services-landing-page');
