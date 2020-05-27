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

//Main Page Root
Route::get('/', 'GoodsController@showSalesAndPopular');

//Sales page Root
Route::get('/sales', 'GoodsController@showSales');

//All info page without backend
Route::get('/contacts', 'PageController@ContactsShow');
Route::get('/about-us', 'PageController@AboutUsShow');
Route::get('/delivery', 'PageController@DeliveryShow');
Route::get('/garantia', 'PageController@GarantiaShow');
Route::get('/payment', 'PageController@PaymentShow');

//Search Root
Route::get('/search', 'PageController@SearchControll');

//Show cart from any page
Route::get('/cart-show', 'BucketController@BucketShow');

//Make orders Roots
Route::get('/make-order-from-bucket', 'BucketController@makeOrderFromBucket');
Route::post('/add-order-from-bucket', 'OrderController@addOrderAndCustomerFromBucket');


//Add and delete to cart Roots
Route::get('/add-quantity/{id}', 'BucketController@addQuantity');
Route::get('/add-to-cart/{id}', 'BucketController@addToBucket');
Route::get('/delete-from-cart/{id}', 'BucketController@deleteFromBucket');

//Make single order Roots
Route::get('/make-order-one/{id}', 'BucketController@createOrderOne');
Route::post('/add-order/{id}', 'OrderController@addOrderAndCustomer');

//Root for controlling pages
Route::get('/{info}', 'CategoryController@categoryShowGoodsOrGood');
