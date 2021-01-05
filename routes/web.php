<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::group(['middleware' => ['auth', 'roles:seller,member']], function () {
    Route::get('/home', 'GlobalController@home')->name('home');
    Route::get('/transactions', 'GlobalController@show')->name('transactions');
    Route::get('/transactions/{header}', 'GlobalController@detailTransaction')->name('detailTransaction');
});

Route::group(['middleware' => ['auth', 'roles:seller']], function () {
    Route::get('/seller/products', 'SellerController@index')->name('myproducts');
    Route::get('/seller/add', 'SellerController@add')->name('addproduct');
    Route::post('/seller/add', 'SellerController@store');
    Route::get('/product/{product}', 'SellerController@show')->name('showmyproduct');
    Route::delete('/product/{product}', 'SellerController@destroy');
});

Route::group(['middleware' => ['auth', 'roles:member']], function () {
    Route::get('/member/profile/{user}', 'MemberController@profile')->name('profile');
    Route::delete('/member/profile/{user}', 'MemberController@deleteAccount');
    Route::get('/member/profile/{user}/edit', 'MemberController@edit')->name('editprofile');
    Route::post('/member/profile/{user}/edit', 'MemberController@update');
    Route::get('/member/products', 'MemberController@index')->name('memberproducts');
    Route::get('/member/products/{product}', 'MemberController@show')->name('show');
    Route::post('/member/products/{product}', 'MemberController@store');
    Route::get('/member/cart', 'MemberController@cart')->name('cart');
    Route::post('/member/cart/update/{cart}', 'MemberController@updateQty');
    Route::delete('/member/cart/remove/{cart}', 'MemberController@remove');
    Route::post('/member/cart', 'MemberController@checkout')->name('checkout');
});

Route::get('/', 'GuestController@home')->name('root')->middleware('guest');
Route::get('/products', 'GuestController@products')->name('products')->middleware('guest');

Route::get('/about', 'GlobalController@about')->name('about');