<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css/styles.css')}}">
	<link href="css/kube.css"  type="text/css" rel="stylesheet"> {{-- the font problem --}}
	<link href="css/flickerplate.css"  type="text/css" rel="stylesheet">
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.6.0/pure-min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.rawgit.com/olton/Metro-UI-CSS/master/build/css/metro-schemes.min.css">
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed|Lato' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>
	<meta name="viewport" content="width=device-width,initial-scale=1">
</head>
<body>

	<header>
		<div class="top-line">
		</div>
		<input type="checkbox" id="xBxHack" />
		<nav id="mainNav" class="mainNav">
			<div class="container">
				<div class="logo"><a href="#">Kiwi<strong></strong>Grown</a></div>
				<label class="navBars" for="xBxHack">
					<i class="fa fa-bars"></i>
				</label>
				<ul id="menu" class="menu">
					<li><a href="index.html">Home</a></li>
					<li>
					<div class="pure-menu pure-menu-horizontal">
					    <ul class="pure-menu-list">
					        <li class="pure-menu-item pure-menu-has-children pure-menu-allow-hover">
					            <a href="#" id="menuLink1" class="pure-menu-link">Shop</a>
					            <ul class="pure-menu-children">

					            @foreach(\App\Models\Category::all() as $category)
					                <li class="pure-menu-item"><a href="{{url('categories/'.$category->id)}}" class="pure-menu-link">{{$category->name}}</a></li>
					            @endforeach
					                {{-- <li class="pure-menu-item"><a href="#" class="pure-menu-link">Children</a></li>
					                <li class="pure-menu-item"><a href="#" class="pure-menu-link">Adults</a></li> --}}
					            </ul>
					        </li>
					    </ul>
					</div>
					</li>
					<li><a href="about.html">About</a></li>
					<li><a href="contact.html">Contact</a></li>
					<li><a href="news.html">News</a></li>
					<li><a href="news.html"><i class="fa fa-shopping-cart"></i><span> 1</span></a></li>
				</ul>
			</div>
		</nav>
	</header>
	<main>
		
	@yield('content')

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





<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script type="text/javascript" src="js/scripts.js"></script>
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