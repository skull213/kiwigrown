
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
					<h1>Compleate Order</h1>
					<p>possimus laboriosam. Porro et sapiente odit excepturi dolorem voluptate, voluptatum aliquid sint odio accusamus sit nostrum impedit quae, quia ullam?</p><br><br><br>
					<ul>
						<li><i>Adrdress: </i><address>795 South Park Avenue, Door 6 Wonderland, CA 94107, Australia</address></li>
						<li><i>Phone: </i><em>+440 875369208</em></li><br>
						<li><i>Email: </i><em>nfo@sitename.com</em></li><br>
						<li><i>Fax: </i><em>nfo@sitename.com</em></li><br>
					</ul>
						
				</div>
				<link href="{{asset('css/kube.css')}}"  type="text/css" rel="stylesheet">
				<div class="form">
				<h1></h1>
					{!!Form::open(array('url'=>'orders',"class" => "forms", "method" => "post"))!!}
					    <row>
					        <column cols="6">
					            {!!Form::label('firstname','First Name')!!}
					            {!!Form::text('firstname','')!!}
					            {!! $errors->first('firstname','<p class="error">:message</p>') !!}
					        </column>
					        <column cols="6">
					            {!!Form::label('lastname','Last Name')!!}
					            {!!Form::text('lastname','')!!}
					            {!! $errors->first('lastname','<p class="error">:message</p>') !!}
					        </column>
					    </row>
					    <row>
					        <column cols="6">
					            {!!Form::label('telephone','Telephone:')!!}
					            {!!Form::text('telephone','')!!}
					             {!! $errors->first('telephone','<p class="error">:message</p>') !!}
					        </column>
					        <column cols="6">
					            {!!Form::label('cellphone','Cellphone:')!!}
					            {!!Form::text('cellphone','')!!}
					            {!! $errors->first('cellphone','<p class="error">:message</p>') !!}
					        </column>
					    </row>
						 <row>
					        <column cols="6">
					            {!!Form::label('company','Company')!!}
					            {!!Form::text('company','')!!}
					            {!! $errors->first('company','<p class="error">:message</p>') !!}
					        </column>
					        <column cols="6">
					            {!!Form::label('email','Email:')!!}
					            {!!Form::text('email','')!!}
					            {!! $errors->first('email;','<p class="error">:message</p>') !!}
					        </column>
					    </row>    
					    <row>    
					        <column cols="6">
					            {!!Form::label('address','Address:')!!}
					            {!!Form::text('address','')!!}
					            {!! $errors->first('address;','<p class="error">:message</p>') !!}
					        </column> 
					    </row>
					    <section>
					    		{!!Form::label('content','Message:')!!}
					            {!!Form::textarea('content','')!!}
					             {!! $errors->first('content','<p class="error">:message</p>') !!}
					    </section>
				    	<input type="submit" class="btn" outline value="Send" />	
				</form>
			</div>
		</div>
@endsection	