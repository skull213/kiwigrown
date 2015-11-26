@extends('templates.main')


@section('content')	
	<section class="section1">
			<div class="contact-heading">
				{{-- <h1>Contact Us</h1> --}}
			</div>
			<div class="sub-nav"></div>
			
		</section>

		
		<div class="contact-container">
				<div class="contact-details">
					<h1>Get in touch</h1>
					<p>possimus laboriosam. Porro et sapiente odit excepturi dolorem voluptate, voluptatum aliquid sint odio accusamus sit nostrum impedit quae, quia ullam?</p><br><br><br>
					<ul>
						<li><i>Adrdress: </i><address>795 South Park Avenue, Door 6 Wonderland, CA 94107, Australia</address></li>
						<li><i>Phone: </i><em>+440 875369208</em></li><br>
						<li><i>Email: </i><em>nfo@sitename.com</em></li><br>
						<li><i>Fax: </i><em>nfo@sitename.com</em></li><br>
					</ul>
						
				</div>
				<div class="form">
				

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
				      <h2>{{$product->name}}</h2>
				      <p>{{$product->description}}</p>
				      <h4 class="price-kit">
				        Price: ${{$product->price}}<br><br>
				        {!!Form::open(["url"=>"cartItems"])!!}

						{!!Form::label("size","size")!!}

						{!!Form::select('size', array('L' => 'Large', 'S' => 'Small','M' => 'Medium'), 'S')!!}
						
						{!!Form::label("quantity","quantity")!!}
						{!!Form::select("quantity",[1=>1,2=>2,3=>3,4=>4])!!}

						{!!Form::hidden("id",$product->id)!!}

						{!!Form::submit("Add to Cart")!!}
					
						{!!Form::close()!!}
				        
				      </h4>
				    </div>
				  </div>
				</div>
			</div>
		</div>
@endsection