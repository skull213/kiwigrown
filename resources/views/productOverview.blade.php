@extends('templates.main')


@section('content')	
	<section class="section1">
			<div class="contact-heading">
				<h1>About Us</h1>
			</div>
			<div class="sub-nav"></div>
		</section>
		

		<div class="container">
		  <div class="productdetailbox row">
		    <div class="col-xs-4 fig">
		      <img src="{{asset('img/'.$product->photo)}}" alt="" />
		    </div>
		    <div class="col-xs-8 main">
		      <div class="socialshare">
		        <span class="fb"><i class="fa fa-facebook-official"></i></span>
		        <span class="twitter"><i class="fa fa-twitter-square"></i></span>
		        <span class="mail"><i class="fa fa-envelope-o"></i></span>
		      </div>
		      <h2 data-field="name">{{$product->name}}</h2>
		      <p data-field="description">{{$product->description}}</p>
		      <h4 data-field="price" class="price-kit">Price: ${{$product->price}}</h4>
				
				{!!Form::open(["url"=>"cartItems"])!!}

				{!!Form::label("size","size")!!}

				<?php

					$temp_sizes = explode(",",$product->sizes);

					$sizes = [];

					foreach($temp_sizes  as $size){
						$sizes[$size] = $size;
					}
				?>
				{!!Form::select('size',$sizes,null,['placeholder' => ''])!!}

				{!!Form::label("quantity","quantity")!!}
				{!!Form::select("quantity",[1=>1,2=>2,3=>3,4=>4])!!}

				{!!Form::hidden("id",$product->id)!!}

				{!!Form::submit("Add to Cart")!!}

				{!!Form::close()!!}

				

		      
		    </div>
		  </div>
		</div>
@endsection