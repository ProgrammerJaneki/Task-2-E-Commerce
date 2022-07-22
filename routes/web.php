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
Route::view('/article', 'components/article/article-landing-page')->name('article-landing-page');
Route::view('/about', 'components/about/landing-page-about')->name('about-landing-page');
Route::view('/detal', 'components/detail/landing-page-detail')->name('detail-landing-page');