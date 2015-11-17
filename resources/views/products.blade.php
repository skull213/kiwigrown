@extends('templates.main')


@section('content')	
	
	<section class="section1">
			<div class="contact-heading">
				<h1>Contact Us</h1>
			</div>
			<div class="sub-nav"></div>
		</section>
		<hr class="my_title" />
		<div class="products">
			<div class="productWrap">	
				@foreach($category->products as $product)
				<div class="product">
			      <img src="img/pic6.jpg" class="p-img" draggable="false">
			      <h1>{{$product->name}}</h1>
			        <span class="price">{{$product->price}}</span>
			        <div class="buy">
			          <div class="cart">
			            <img src="http://atakan.work/ea/img/shcart.png" height="17" width="19">
			            <span>Add to cart</span>
			          </div>
			          <div class="details">
			            <img src="http://atakan.work/ea/img/eye.png" height="10" width="19" alt="">
			            <span>300</span>
			          </div>
			        </div>
				</div>
				@endforeach
			</div>		
		</div>	

@endsection