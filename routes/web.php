<?php

Route::get('/', function () {
    return redirect('shop');
});

Route::get('about', function () {
    return view('about');
});

Route::resource('shop', 'ProductController', ['only' => ['index', 'show']]);

Route::get('checkout', function() {
	return view('checkout');
});

Route::post('checkout', function() {
	$resp = app()->call('App\Http\Controllers\CartController@emptyCart');

	return view('checkout-done');
});


Route::resource('cart', 'CartController');
Route::delete('emptyCart', 'CartController@emptyCart');
Route::post('switchToWishlist/{id}', 'CartController@switchToWishlist');

Route::resource('wishlist', 'WishlistController');
Route::delete('emptyWishlist', 'WishlistController@emptyWishlist');
Route::post('switchToCart/{id}', 'WishlistController@switchToCart');
