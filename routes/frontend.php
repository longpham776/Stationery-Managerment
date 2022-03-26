<?php
Route::group(['namespace'=>'App\Http\Controllers'],function(){
    Route::get('/','FrontendController@index')->name('home');
    Route::get('/contact','FrontendController@contact')->name('contact');
    Route::get('/category','FrontendController@category')->name('category');
    Route::get('/product_detail/{id}','FrontendController@product_detail')->name('product_detail');
    Route::get('/cart','FrontendController@cart')->name('cart');
    Route::get('/checkout','FrontendController@checkout')->name('checkout');
    Route::get('/logout','FrontendController@logout')->name('logout');
});

//Cart
Route::post('/postcart','App\Http\Controllers\FrontendController@postcart')->name('postcart');
Route::get('/delcart/{id}','App\Http\Controllers\FrontendController@delcart')->name('delcart');
Route::get('/upcart/{id}/{qty}','App\Http\Controllers\FrontendController@upcart')->name('upcart');
Route::post('/postcheckout','App\Http\Controllers\FrontendController@postcheckout')->name('postcheckout');
?>