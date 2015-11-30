@extends('templates.main')

@section('content')	
		<section>
			<div class="flicker-example">
				<ul>
					<li data-background="img/pic7.jpg">
						<div class="flick-title">Range of affordable, high quality, NZ made garments</div>
						<div class="flick-sub-text">Althougn Kiwi Grown garments are great worn as the are as basic wardrobe essentials, they are ideal for designers and other creative people like you to add your own flair to by screen printing, embroidering, appliqueing</div>
					</li>
						
					<li data-background="img/pic20.jpg">
						<div class="flick-title">Made in New Zealand</div>
						<div class="flick-sub-text">The garments are designed and made in our own factory in Auckland, Stitch Perfect, We eliminate manufacturing challenges for you while still allowing you to produce your own quality clothing label in New Zealand.</div>
					</li>
						
					<li data-background="img/pic23.jpg">
						<div class="flick-title">Our Product</div>
						<div class="flick-sub-text">Kiwi Grown garments are indended as a blank canvas for you to do your own thing on</div>
					</li>

					<li data-background="img/pic4.jpg">
						<div class="flick-title">Customise our product to suit your needs</div>
						<div class="flick-sub-text">Because these garmnets are made to order, we can also cater for some customisation, such as using a contrast colour binding or thread, or adding your won side pips in production. Your own brand labels can be attached grom the outset, saving you the relabeling charge later. </div>
					</li>
						
				</ul>	
			</div>				
				
		</section>
					
		<section>
			<!-- <h1>ddddd</h1> -->
			<div>
				<figure class="snip1113"><img src="img/nz.jpg" alt="" />
				  <figcaption>
				    <h3>Kiwi<span>Grown Top</span></h3>
				    <h4>quality</h4>
				  </figcaption>
				</figure>
				<div class="text">
					<h2 class="heading">About Us</h2>
					<p>
					<span>Kiwi Grown is a range of affordable, high quality, NZ made garments (blaks) for creative people like you to rebrand and personalize by adding your own design elements. Some customization is also possible.
					</span></p>
					<p><span>Whether its screen printing, embrodery or applique you want to add, our product is perfect for you.Expand your existing clothing range by adding some plain or printet Kiwi Grown options or design a wholw new range around our quality garments. Either way, it's a no brainer for you.</span>
					</p>
				</div>
			</div>		
		</section>

		<section>


			<hr class="my_title1" />
			<!-- <h1 class="heading">Clerance</h1> -->
			<div class="productWrap">
				@foreach(\App\Models\Product::orderBy('id','desc')->take(4)->get() as $products)	
					<div class="product">
				      <img src="{{asset('img/'.$products->photo)}}" class="p-img" draggable="false" alt="">
				      <h1>{{$products->name}}</h1>
				        <span class="price"></span>
				        <div class="buy">
				          <div class="cart">
				            <img src="http://atakan.work/ea/img/shcart.png" height="17" width="19" alt="">
				            <span><a href="{{url('products/'.$products->id)}}">Add to Cart</a></span>
				          </div>
				          <div class="details">
								${{$products->price}}
				          </div>
				        </div>
					</div>
				@endforeach
			</div>	
		</section>

		<section>
		<hr class="my_title" />	
			<div class="productWrap">
				<?php $category = \App\Models\Category::find(5) ?>
				@foreach($category->products()->take(4)->get() as $product)
					<div class="product">
				      <img src="{{asset('img/'.$product->photo)}}" class="p-img" draggable="false" alt="">
				      <h1>{{$product->name}}</h1>
				        <span class="price"></span>
				        <div class="buy">
				          <div class="cart">
				            <img src="http://atakan.work/ea/img/shcart.png" height="17" width="19" alt="">
				            <span><a href="{{url('products/'.$product->id)}}">Add to Cart</a></span>
				          </div>
				          <div class="details">
							${{$product->price}}
				          </div>
				        </div>
					</div>
				@endforeach
			</div>	
		</section>

		<section>
				<div class="info">
					<div class="photo">
						<img src="img/shirt.jpg" alt="">
					</div>
					<div class="info-wrap">
						<div>
							<h4>Made in New Zealand</h4>
							<p>The garments are designed and made in our own factory in Auckland, <a href="www.stichperfect.co.nz">Stitch Perfect</a>, We eliminate manufacturing challenges for you while still allowing you to produce your own quality clothing label in New Zealand. Of course, Stitch Perfect can also produce your own designs for you so <a href="">contact us</a> now. And by using NZ made garmentsm you are adding value to your own brand as well as supporting the local economy.
						</div>
						<div>
							<h4>Our Product</h4>
							<p>Kiwi Grown garments are indended as a blank canvas for you to do your own thing on. They are designed with comfort, practicality & affordability in mind, and come in baby and junior sizes from new born up to 5 years old. Some children and adult sizes in limited styles are also available and more are on thir way. Althougn usually made to order to your individual requirements, there is a limited qunatity of ready-made garments in stock now at clearance prices. You ma re-brang these garments with your own label and we offer a re-labeling service.</p>
						</div>
						<div>
							<h4>Personalise our product with your own design</h4>
							<p>Althougn Kiwi Grown garments are great worn as the are as basic wardrobe essentials, they are ideal for designers and other creative people like you to add your own flair to by screen printing, embroidering, appliqueing, adding buttons or bows or embellishing in some other way. Re-brand with your own label or leave ours on; it's up to you.</p>
						</div>
						<div>
							<h4>Customise our product to suit your needs</h4>
							<p>Because these garmnets are made to order, we can also cater for some customisation, such as using a contrast colour binding or thread, or adding your won side pips in production. Your own brand labels can be attached grom the outset, saving you the relabeling charge later. Or we could provide you with the cut pieces to be screen printed before manufactoring commences if that is what you want. For a really individual look, we can even use our patterns on other suitable fabric that you supply, such as organic  and merino fabrics.</p>
						</div>
					</div>
				</div>		
		</section>
		<section>
			<h1>News and Events</h1>
			@foreach(\App\Models\Post::all() as $post)
			<div class="blog-wrapper">
				<div class="blog-card">
					<div class="card-img"><img src="{{asset('img/'.$post->photo)}}" alt="">
						<h1 data-field="title" data-postid="{{$post->id}}">{{$post->title}}</h1>
					</div>
					<div class="card-details"><span><i class="fa fa-calendar"></i>{{$post->created_at}}</span><span><i class="fa fa-heart"></i>102</span></div>
					<div class="card-text"><p data-field="content" data-postid="{{$post->id}}">{{$post->content}}</p></div>
					<div class="read-more"><i class="fa fa-thumbs-o-up fa fa-3x"></i></div>
				</div>
			@endforeach
			</div>
		</section>		
@endsection		