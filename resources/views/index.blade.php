 @extends('templates.main')

@section('content')	
		<section>
			<div class="flicker-example">
				<ul>
					<li data-background="img/pic7.jpg">
						<div class="flick-title">Range of affordable, high quality, NZ made garments</div>
						<div class="flick-sub-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Maiores, voluptatum neque, perferendis repellat quasi ipsum consequuntur ut sed dolorum natus a. Corporis consequatur quo modi, quia quidem nihil. Voluptatibus, beatae.</div>
					</li>
						
					<li data-background="img/pic20.jpg">
						<div class="flick-title">lorem</div>
						<div class="flick-sub-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Consectetur quas enim doloribus quam iusto. Eos reiciendis tempore, impedit voluptas libero velit. Totam voluptatem in vitae nemo cupiditate autem atque voluptates.</div>
					</li>
						
					<li data-background="img/pic23.jpg">
						<div class="flick-title">Touch Enabled Through the Hammer.js Library</div>
						<div class="flick-sub-text"><a href="http://hammerjs.github.io/">Hammer.js</a> is a great touch library that has been included as part of the Flickerplate package.</div>
					</li>

					<li data-background="img/pic4.jpg">
						<div class="flick-title">Fabric and Trims</div>
						<div class="flick-sub-text"><a href="http://hammerjs.github.io/"></a>Made from high quality fabric 93% cotton and 7% spandex and it comes in around 50 versatile colours. The clothes are hardwearing, feel lovely and soft and retain their shape</div>
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
					<span>Ipsum itaque optio, deserunt perferendis. Sed sunt hic obcaecati quos fugit rem quas architecto, voluptas repudiandae cum dolor totam itaque cupiditate tenetur, omnis! Qui consequuntur libero tenetur labore explicabo enim.</span></p>
					<p><span>Quis laborum officiis atque asperiores sint aliquid non, assumenda iste veniam alias consectetur repudiandae, explicabo debitis. Ex, dicta, natus. Sint quam unde quaerat provident id architecto maiore</span>
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
							<h4>latest</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A magnam quibusdam eligendi amet dolores quos molestias aperiam</p>
						</div>
						<div>
							<h4>latest</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur itaque delectus autem, deleniti, possimus ex illo repellat</p>
						</div>
						<div>
							<h4>latest</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque cupiditate nobis illum numquam! Dolorem totam perspiciatis</p>
						</div>
						<div>
							<h4>latest</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque, dolore nobis, ratione repellendus consectetur, mollitia maxime quos fugit cumque a odi</p>
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
					<div class="read-more">Read More</div>
				</div>
			@endforeach
			</div>
		</section>		
@endsection		