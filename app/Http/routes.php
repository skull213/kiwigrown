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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('orderForm', function () {
    return view('orderForm');
});


Route::get('index', function () {
    return view('index');
});

Route::get('about', "PagesController@showAbout");

Route::get('contactUs',"PagesController@showContact");



Route::get('categories/{id}', function($id){
	$category=\App\Models\Category::find($id);

	return view("products",compact("category"));
});



Route::put('posts/{id}', function($id){
	

	
        $post = \App\Models\Post::find($id);

        $value = \Request::input("value");
        $field = \Request::input("field");

        $post->$field = $value;

        $post->save();

        return $value;
       
});



Route::get('login',"LoginController@showLoginForm");
Route::post('login',"LoginController@processLogin");

Route::resource('products', 'ProductsController');
Route::resource('posts', 'PostController');
Route::get('logout',"LoginController@logout");

Route::get('cart', "CartController@showCart");
Route::post('cartItems', "CartController@addItem");
Route::get('removeItem/{id}', "CartController@removeItem");
Route::post('orders',"CartController@checkout");



Route::post('contactUs',function(\App\Http\Requests\ContactFormRequest $request){
    $data = \Request::all();

    Mail::send('testEmail', $data, function($message) use ($data){

        $message->to ('mirompm@gmail.com')->from($data['email'])->subject('KiwiGrown');
    });

    return redirect('contactUs')->with("message_success","Thank you");
});


