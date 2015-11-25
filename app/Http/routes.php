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

Route::get('orderForm', function () {
    return view('orderForm');
});


Route::get('index', function () {
    return view('index');
});

Route::get('about', "PagesController@showAbout");

Route::get('contactUs',"PagesController@showContact");



// Route::get('cart', function () {
//     return view('cart');
// });
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



// Route::get('products', function () {
// 	$products=\App\Models\Product::all();

//     return view('products');
// });

// Route::get('products/{id}', function ($id) {
// 	$products=\App\Models\Product::find($id);

//     return view('productOverview', ['product'=>$products]);
// });

Route::get('categories/{id}', function($id){
	$category=\App\Models\Category::find($id);

	return view("products",compact("category"));
});

// Route::get('posts', function(){
// 	$posts=\App\Models\Post::all();

// 	return $posts;
// });

Route::put('posts/{id}', function($id){
	

	
        $post = \App\Models\Post::find($id);

        $value = \Request::input("value");
        $field = \Request::input("field");

        $post->$field = $value;

        $post->save();

        return $value;
       
});

// Route::get('orders', function(){
// 	$orders=\App\Models\Order::find(1);

// 	return $orders;
// });

// Route::get('users', function(){
// 	$users =\App\Models\User::all();

// 	return $users;
// });

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

    Mail::send('testEmail', $data, function($massage) use ($data){

        $massage->to ('mirompm@gmail.com')->form($data['email'])->subject('KiwiGrown');
    });

    return redirect('contactUs')->with("massage_succes","Thank you");
});


// Route::post('cart/add', function(){

// 	$item = $request->only("id");

// 	$product = \App\Models\Product::find($item["id"]);

// 	$item [] = $product->name;
// 	$item ["price"] = $product->price;

// 	$cart =  \App\Models\Cart::add($item);

// 	return $cart;
// });

// Route::get('categories/{id}', function($id){
// 	$categories =\App\Models\Category::find($id);

// 	return view('products');
// });

//$type = App\Models\Type::find(2);
	//return $type->products;