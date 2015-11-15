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
		      <img src="img/pic8.jpg" alt="" />
		    </div>
		    <div class="col-xs-8 main">
		      <div class="socialshare">
		        <span class="fb">f</span>
		        <span class="twitter">t</span>
		        <span class="mail">M</span>
		      </div>
		      <h2>NICE GREEN T-SHIRT</h2>
		      <p>A great look. Priced right. And this t-shirt feels softer with every wash - it's no wonder our customers love this "ultra" popular style!</p>
		      <h4 class="price-kit">
		       Price $30 &nbsp;&nbsp;&nbsp;&nbsp;Qty&nbsp;
		        <input class="qtybox" type="number" min="1" max="50" step="1" value="30" required="true" /> 
		        <select>
					  <option value="volvo">S</option>
					  <option value="saab">M</option>
					  <option value="opel">Opel</option>
					  <option value="audi">Audi</option>
				</select>
		      </h4>
		    </div>
		  </div>
		</div>
@endsection