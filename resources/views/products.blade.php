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
				<?php $products = $category->products()->paginate(8);
					$products->setPath("");
				  ?>	
				@foreach($category->products as $product)
				<div class="product">
			      <img src="{{asset('img/'.$product->photo)}}" class="p-img" draggable="false">
			      <h1>{{$product->name}}</h1>
			        <span class="price"></span>
			        <div class="buy">
			          <div class="cart">
			            <img src="http://atakan.work/ea/img/shcart.png" height="17" width="19">
			            <span><a href="{{url('products/'.$product->id)}}">Add to Cart</a></span>
			          </div>
			          <div class="details">
			            <img src="http://atakan.work/ea/img/eye.png" height="10" width="19" alt="">
			            <span>${{$product->price}}</span>
			          </div>
			        </div>
			        @if(Auth::check())
			        <div class="buy">
			          <div class="cart">
			          	{!! Form::open(["url"=>"products/".$product->id,"method"=>"delete"])!!}
			            <span>{!! Form::submit("Delete")!!}</span>
			            {!! Form::close()!!}
			          </div>
			          <div class="details">
			          {{-- 	{!! Form::model($product,array('url' => 'products/'.$product->id.'/edit')) !!} 	
			            <span>{!! Form::submit("update")!!}</span>
			            {!! Form::close() !!} --}}
			            <a href="{{url('products/'.$product->id.'/edit')}}"><i class="fa fa-pencil-square-o fa fa-2x"></i></a>	
			          </div>
			        </div>
			        @endif
				</div>
				@endforeach
				{!! $products->render() !!}
			</div>

		</div>	

@endsection