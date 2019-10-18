<?php

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

/**
 * WEBSITE
 */
Route::get('/', function (){ return view('website.index'); })->name('home');
Route::get('menu', function () { return view('website.menu'); })->name('menu');
Route::get('kontakt', function () { return view('website.contact'); })->name('kontakt');
Route::get('polityka-prywatnosci', function () { return view('website.privacyPolicy'); })->name('polityka-prywatnosci');
Route::get('regulamin', function () { return view('website.regulations'); })->name('regulamin');

/**
 * ORDERING
 */
Route::group(['prefix' => 'zamawianie'], function (){
    Route::get('/', 'Order\OrderController@index')->name('order.index');
    Route::get('packets', 'Order\OrderController@getPackets')->name('order.getPackets');
});
Route::get('cart', 'Order\CartController@getCart')->name('cart.getCart');

/**
 * DASHBOARD
 */
Auth::routes();

Route::group(['prefix' => 'panel', 'middleware' => 'auth'], function (){

    Route::get('/', function () {
        return view('layouts.dashboard');
    })->name('admin.dashboard');

    Route::resource('clients', 'Admin\ClientController', ['as'=>'admin'])->except(['show']);
    Route::resource('pakiety', 'Admin\PacketController', ["as"=>"admin"])->parameters(['pakiety' => 'packet'])->except(['show']);

    Route::group(['prefix' => 'pakiety'], function () {
        Route::get('{packet}/variants', 'Admin\VariantController@getPacketVariants')->name('admin.pakiety.variants');
        Route::post('{packet}/variants/store', 'Admin\VariantController@storeVariant')->name('admin.variants.store');
    });

    Route::group(['prefix' => 'variants'], function (){
        Route::patch('/{variant}/update', 'Admin\VariantController@updateVariant')->name('admin.variants.update');
        Route::delete('/{variant}/destroy', 'Admin\VariantController@deleteVariant')->name('admin.variants.destroy');

        Route::post('{variant}/calories/store', 'Admin\CaloryController@storeCalory')->name('admin.calories.store');
    });

    Route::group(['prefix'=>'calories'], function (){
        Route::patch('/{calory}/update', 'Admin\CaloryController@updateCalory')->name('admin.calories.update');
        Route::delete('/{calory}/destroy', 'Admin\CaloryController@deleteCalory')->name('admin.calories.destroy');
    });

    Route::resource('menu', 'HomeController', array("as"=>"admin"));

    Route::get('/settings', 'HomeController@index')->name('admin.settings');
    Route::post('/settings', 'HomeController@index')->name('admin.settings.update');
});
