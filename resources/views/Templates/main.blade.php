 <!DOCTYPE html>
@if(Request::ajax() == false)
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="description" content="Quality NZ made baby,children and adult garments (blanks) for creative people to rebrand and add their own flair to.">
	<meta name="keywords" content="New Zealand,NZ,baby,children,adult,garments,blanks,creative,people,rebrand">
	<title>Kiwi Grown quality ready-made clothing blanks, Made in Mew Zealand</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">
	<link href="css/flickerplate.css"  type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed|Lato' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>

	<header>
		<div class="top-line">
			<a href="{{url('login')}}"><i class="fa fa-sign-in"></i></a>
		</div>
		<input type="checkbox" id="xBxHack" />
		<nav id="mainNav" class="mainNav">
			<div class="container">
				<div class="logo"><a href="{{url('index')}}">Kiwi<strong></strong>Grown</a></div>
				<label class="navBars" for="xBxHack">
					<i class="fa fa-bars"></i>
				</label>
				<ul id="menu" class="menu">
					<li class="hvr-underline-reveal"><a href="{{url('index')}}">Home</a></li>
					<li>
					<div class="pure-menu pure-menu-horizontal">
					    <ul class="pure-menu-list">
					        <li  class="pure-menu-item pure-menu-has-children pure-menu-allow-hover">
					            <a href="#" id="menuLink1" class="pure-menu-link">Shop</a>
					            <ul class="pure-menu-children">

					            @foreach(\App\Models\Category::all() as $category)
					                <li class="hvr-underline-reveal" class="pure-menu-item"><a href="{{url('categories/'.$category->id)}}" class="pure-menu-link">{{$category->name}}</a></li>
					            @endforeach

					            </ul>
					        </li>
					    </ul>
					</div>
					</li>
					<li class="hvr-underline-reveal"><a href="{{url('about')}}">About Us</a></li>
					<li class="hvr-underline-reveal"><a href="{{url('contactUs')}}">Contact Us</a></li>
					@if(Auth::check())
					<li class="hvr-underline-reveal"><a href="{{url('logout')}}">Log out</a></li>
					<li class="hvr-underline-reveal"><a href="{{url('products/create')}}">New Product</a></li>
					@endif
					<li class="hvr-underline-reveal"><a href="{{url('cart')}}"><i class="fa fa-shopping-cart"></i><span> 1</span></a></li>
				</ul>
			</div>
		</nav>
	</header>
	<main>
@endif	
		
	@yield('content')
@if(Request::ajax() == false)

	</main>
	<footer>
	<div class="cont">
		<ul class="contact">
			<li>
			    <p><i class="fa fa-map-marker fa-2x"></i></p>
			    <p><strong>Auckland</strong><br>1/54, Ben Lomond Crescent</p>
			</li>
			<li>
			    <p><i class="fa fa-phone fa-2x"></i></p>
			    <p><strong>Ph:</strong><br>09 576 7076,</p>
			</li>
			<li>
			    <p><i class="fa fa-envelope fa-2x"></i></p>
			    <p><strong>E-mail:</strong><br>catcomp@catcomp.hu</p>
		    </li>
		</ul>
	</div>
</footer>

<div style="display:none;" id="admin">{{\Auth::check()}}</div>
<div style="display:none;" id="token">{{ csrf_token() }}</div>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="{{asset('js/juery.jeditable.js')}}"></script>
<script src="{{asset('js/history/html5/jquery.history.js')}}" type="text/javascript"></script>
<script type="text/javascript" src="{{asset('js/scripts.js')}}"></script>
<script src="js/flickerplate.min.js" type="text/javascript"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJKH7E9wuNURt8ETovoQFUuKzEO4g4J9o&callback=initMap"async defer></script>
<script src="js/geo-min.js"></script>
<script>
$(function(){
	$('.flicker-example').flickerplate(
	{
    auto_flick: true,
    auto_flick_delay: 8,
    flick_animation: 'transform-slide',
    arrows: true,
    theme: 'light'
    });

});
</script>
</body>
</html>
@endif