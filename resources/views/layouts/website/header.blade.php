<!DOCTYPE html>
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<title>Bongs Ecommerce</title>
	<!-- for-mobile-apps -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="{{ url('website/css/bootstrap.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ url('website/css/style.css')}}" rel="stylesheet" type="text/css" media="all" />
<link href="{{ url('website/css/app.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome icons -->
<link href="{{ url('website/css/font-awesome.css')}}" rel="stylesheet" type="text/css" media="all" />
<!-- //font-awesome icons -->
<!-- js -->
<script src="{{ url('website/js/jquery-1.11.1.min.js')}}"></script>
<!-- //js -->
<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,300,300italic,400italic,500,500italic,700,700italic' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="{{ url('website/js/move-top.js')}}"></script>
<script type="text/javascript" src="{{ url('website/js/easing.js')}}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
</head>

<body>
	<script src="{{ url('website/js/monetization.js')}}" type="text/javascript"></script>
	<script>
		(function(){
			if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
				_bsa.init('flexbar', 'CKYI627U', 'placement:w3layoutscom');
			}
		})();
	</script>
	<script>
		(function(){
			if(typeof _bsa !== 'undefined' && _bsa) {
	// format, zoneKey, segment:value, options
				_bsa.init('fancybar', 'CKYDL2JN', 'placement:demo');
			}
		})();
	</script>
	<script>
		(function(){
			if(typeof _bsa !== 'undefined' && _bsa) {
  		// format, zoneKey, segment:value, options
				_bsa.init('stickybox', 'CKYI653J', 'placement:w3layoutscom');
			}
		})();
	</script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src='https://www.googletagmanager.com/gtag/js?id=G-98H8KRKT85'></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'G-98H8KRKT85');
	</script>

	<meta name="robots" content="noindex">
	<body><link rel="stylesheet" href="{{ url('website/css/font-awesome.min.css')}}">
		<div class="pull-right toggle-right-sidebar">
			<span class="fa title-open-right-sidebar tooltipstered fa-angle-double-right"></span>
		</div>
		<!-- header -->
		<div class="agileits_header">
			<div class="w3l_offers">
				<a href="{{ url('products')}}">Today's special Offers !</a>
			</div>
			<div class="w3l_search">
				<form action="#" method="post">
					<input type="text" name="Product" value="Search a product..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search a product...';}" required="">
					<input type="submit" value=" ">
				</form>
			</div>
			<div class="product_list_header">
				<form action="#" method="post" class="last">
					<fieldset>
						<input type="hidden" name="cmd" value="_cart" />
						<input type="hidden" name="display" value="1" />
						<input type="submit" name="submit" value="View your cart" class="button" />
					</fieldset>
				</form>
			</div>
			<div class="w3l_header_right">
				<ul>
					<li class="dropdown profile_details_drop">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user" aria-hidden="true"></i><span class="caret"></span></a>
						<div class="mega-dropdown-menu">
							<div class="w3ls_vegetables">
								<ul class="dropdown-menu drp-mnu">
									<li><a href="{{ url('login')}}">Login</a></li>
									<li><a href="{{ url('login')}}">Sign Up</a></li>
								</ul>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="w3l_header_right1">
				<h2><a href="{{ url('mail')}}">Contact Us</a></h2>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- script-for sticky-nav -->
		<script>
			$(document).ready(function() {
				var navoffeset=$(".agileits_header").offset().top;
				$(window).scroll(function(){
					var scrollpos=$(window).scrollTop();
					if(scrollpos >=navoffeset){
						$(".agileits_header").addClass("fixed");
					}else{
						$(".agileits_header").removeClass("fixed");
					}
				});

			});
		</script>
		<!-- //script-for sticky-nav -->
		<div class="logo_products">
			<div class="container">
				<div class="w3ls_logo_products_left">
					<h1><a href="{{ url('/')}}"><span>Grocery</span> Store</a></h1>
				</div>
				<div class="w3ls_logo_products_left1">
					<ul class="special_items">
						<li><a href="{{ url('events')}}">Events</a><i>/</i></li>
						<li><a href="{{ url('about')}}">About Us</a><i>/</i></li>
						<li><a href="{{ url('products')}}">Best Deals</a><i>/</i></li>
						<li><a href="{{ url('services')}}">Services</a></li>
					</ul>
				</div>
				<div class="w3ls_logo_products_left1">
					<ul class="phone_email">
						<li><i class="fa fa-phone" aria-hidden="true"></i>(+0123) 234 567</li>
						<li><i class="fa fa-envelope-o" aria-hidden="true"></i><a href=""><span class="__cf_email__" data-cfemail="">[email&#160;protected]</span></a></li>
					</ul>
				</div>
			</div>
		</div>
		<!-- //header -->
		<div class="products-breadcrumb">
			<div class="container">
				<ul>
					<li><i class="fa fa-home" aria-hidden="true"></i><a href="{{ url('/')}}">Home</a><span>|</span></li>
					<li>Branded Foods</li>
				</ul>
			</div>
		</div>
		<!-- banner -->
		<div class="banner">
			<div class="w3l_banner_nav_left">
				<nav class="navbar nav_bottom">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header nav_2">
						<button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
						<ul class="nav navbar-nav nav_1">
							<li class="sidebar-item has-sub">
								<a href="#" class='sidebar-link'>
									<i class="bi bi-stack"></i>
									<span class="main-category">Categories</span>
								</a>
								@if ($product_types->isNotEmpty())
								<ul class="submenu">
									@foreach($product_types as $product_type)
									<li class="submenu-item">
										<a href="{{ url('web-unit-products/'.$product_type->id) }}" class="submenu-link">{{ $product_type->name }}</a>
									</li>
									@endforeach
								</ul>
								@else
								<p class="no-products">No products available.</p>
								@endif
							</li>

						</ul>
					</div><!-- /.navbar-collapse -->
				</nav>
			</div>