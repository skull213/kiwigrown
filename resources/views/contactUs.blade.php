
@extends('templates.main')

@section('content')
	<section class="section1">
			<div class="contact-heading">
				<h1>Contact Us</h1>
			</div>
			<div class="sub-nav"></div>
			<div id="map"></div>
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
				<link href="{{asset('css/kube.css')}}"  type="text/css" rel="stylesheet">
				<div class="form">
				<h1>contact us</h1>
					<form method="post" action="" class="forms">
					    <row>
					        <column cols="6">
					            <label>Email</label>
					            <input type="email">
					        </column>
					        <column cols="6">
					            <label>Email</label>
					            <input type="email">
					        </column>
					    </row>
					     <row>
					        <column cols="6">
					            <label>Email</label>
					            <input type="email">
					        </column>
					        <column cols="6">
					            <label>Email</label>
					            <input type="email">
					        </column>
					    </row>
					    <section>
					        <label>Message</label>
					        <textarea rows="6"></textarea>
					    </section>
				    	<button outline>Button</button>
				</form>
			</div>
		</div>
@endsection	