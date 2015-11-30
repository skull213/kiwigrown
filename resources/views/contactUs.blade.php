
@extends('templates.main')

@section('content')
	<section class="section1">
			<div class="contact-heading"></div>
			<div style=" background-color:#EFEFEF;" class="sub-nav"></div>
			<div id="map"></div>
		</section>

		
		<div class="contact-container">
				<div class="contact-details">
					<h1>Get in touch</h1>
					<p>Please fill in the for special colours and designs</p><br><br><br>
					<ul>
						<li><i>Adrdress: </i><address>Auckland1/54, Ben Lomond Crescent</address></li>
						<li><i>Phone: </i><em>09 576 7076</em></li><br>
						<li><i>Email: </i><em>info@kiwigrown.co.nz</em></li><br>
						<li><i>Fax: </i><em>09 576 1106</em></li><br>
					</ul>
						
				</div>
				<link href="{{asset('css/kube.css')}}"  type="text/css" rel="stylesheet">
				<div class="form">
					<h1>contact us</h1>
						{!!Form::open(array('url'=>'contactUs',"class" => "forms"))!!}
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
						            {!! $errors->first('email','<p class="error">:message</p>') !!}
						        </column>
						    </row>
						    <section>
						    		{!!Form::label('content','Message:')!!}
						            {!!Form::textarea('content','')!!}
						            {!! $errors->first('content','<p class="error">:message</p>') !!}
						    </section>
					    	<input type="submit" class="btn" outline value="Send" />	
					    	{{ Session::get("message_success") }}
						{!! Form::close() !!}
				</div>
		</div>
@endsection	