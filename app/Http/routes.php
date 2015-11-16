<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('index', function () {
    return view('index');
});

// Route::get('about', function () {
//     return view('about');
// });


// Route::get('contactUs', function () {
//     return view('contactUs');
// });


// Route::get('productOverview', function () {
//     return view('productOverview');
// });

// Route::get('products', function () {
//     return view('products');
// });

// Route::get('makeOrder', function () {
//     return view('makeOrder');
// });



Route::get('products', function () {
	$products=\App\Models\Product::all();

    return $products;
});

Route::get('categories', function(){
	$categories=\App\Models\Category::all();

	return $categories;
});

Route::get('posts', function(){
	$posts=\App\Models\Post::all();

	return $posts;
});

Route::get('orders', function(){
	$orders=\App\Models\Order::find(1);

	return $orders;
});

Route::get('users', function(){
	$users =\App\Models\User::all();

	return $users;
});