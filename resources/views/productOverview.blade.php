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
		        <span class="fb">f</span>
		        <span class="twitter">t</span>
		        <span class="mail">M</span>
		      </div>
		      <h2>{{$product->name}}</h2>
		      <p>{{$product->description}}</p>
		      <h4 class="price-kit">
		       Price{{$product->price}} &nbsp;&nbsp;&nbsp;&nbsp;Qty&nbsp;
		        <select>
					  <option value="s">S</option>
					  <option value="m">M</option>
					  <option value="l">L</option>
					  <option value="xl">XL</option>
				</select>
				<a href="#" class="btn" outline>Add to Cart</a>
		      </h4>
		    </div>
		  </div>
		</div>
@endsection