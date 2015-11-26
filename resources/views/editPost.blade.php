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
					<h1>Edit product</h1>
					<p>possimus laboriosam. Porro et sapiente odit excepturi dolorem voluptate, voluptatum aliquid sint odio accusamus sit nostrum impedit quae, quia ullam?</p><br><br><br>
					<ul>
						<li><i>Adrdress: </i><address>795 South Park Avenue, Door 6 Wonderland, CA 94107, Australia</address></li>
						<li><i>Phone: </i><em>+440 875369208</em></li><br>
						<li><i>Email: </i><em>nfo@sitename.com</em></li><br>
						<li><i>Fax: </i><em>nfo@sitename.com</em></li><br>
					</ul>
						
				</div>

		<link href="{{asset('css/kube.css')}}"  type="text/css" rel="stylesheet">
		{!! Form::model($post,array('url' => 'posts/'.$post->id,'method'=>'put', "class" => "forms")) !!}  
				
				<row>
					<column cols="6">
					{!!Form::label('title', 'Title')!!}
					{!!Form::text('title')!!}
					</column>
				</row>	

					{!!$errors->first('name','<p class="error">:message</p>')!!}
					
					{!!Form::label('content', 'content')!!}
					{!!Form::textarea('constant(name)')!!}
					{!!$errors->first('description','<p class="error">:message</p>')!!}


					{!!Form::label('photo', 'Photo')!!}
					{!!Form::file('photo')!!}
					
					
					<input  type="submit" value="Update">	
			{!! Form::close() !!}	
		</div>
			</div>	




@endsection	