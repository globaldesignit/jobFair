<!DOCTYPE html>
<html lang="zxx" class="no-js">

<head>
	<!-- Mobile Specific Meta -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<!-- Favicon-->
	
	<!-- Author Meta -->
	<meta name="author" content="codepixer">
	<!-- Meta Description -->
	<meta name="description" content="">
	<!-- Meta Keyword -->
	<meta name="keywords" content="">
	<!-- meta character set -->
	<meta charset="utf-8">
	<!-- Site Title -->
	<title>GDIT | Training</title>
	<title> 
            GeeksforGeeks icon 
        </title> 
          
        <!-- add icon link -->
        <link rel = "icon" href ="/img/GDlogo.png"   type = "image/x-icon"> 
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,600|Roboto:400,400i,500" rel="stylesheet">
	<!--CSS
			============================================= -->
	@yield('css')
	<link rel="stylesheet" href="/css/linearicons.css" >
	<link rel="stylesheet" href="/css/font-awesome.min.css">
	<link rel="stylesheet" href="/css/bootstrap.css">
	<link rel="stylesheet" href="/css/magnific-popup.css">
	<link rel="stylesheet" href="/css/nice-select.css">
	<link rel="stylesheet" href="/css/hexagons.min.css">
	<link rel="stylesheet" href="/css/owl.carousel.css">
	<link rel="stylesheet" href="/css/main.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>

<body>
	<!-- start header Area -->
	<header id="header">
		<div class="container main-menu">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="{{ route('home')}}"><img src="/img/GDlogo.png" alt="" title="" /></a>
		
				</div>
				@if(Auth::guard('users')->check())
                <ul>
                    <li><a>Welcome: {{ Auth::guard('users')->user()->name }}</a><span> </span></li>                   
                </ul>         
            	@endif
				<nav id="nav-menu-container">
					<ul class="nav-menu">	
						@if(Auth::guard('users')->check())					
						<li class="menu-has-children"><a>Result</a>
							<ul>							
								<li><a href="{{ route('res.index') }}">Index</a></li>							
								<li><a href="{{ route('file.importExport', ['table' => 'Result']) }}">Import Export</a></li>
							</ul>
						</li>
						<li class="menu-has-children"><a>Location</a>
						<ul>
								<li><a href="{{ route('loca.create') }}">Create</a></li>
								<li><a href="{{ route('loca.index') }}">Index</a></li>								
								<li><a href="{{ route('file.importExport', ['table' => 'Location']) }}">Import Export</a></li>
							</ul>
						</li>
						<li class="menu-has-children"><a>Questions</a>
							<ul>
								<li><a href="{{ route('ques.create') }}">Create</a></li>
								<li><a href="{{ route('ques.indexValue') }}">Index</a></li>		
								<li><a href="{{ route('file.importExport', ['table' => 'Question']) }}">Import Export</a></li>
							</ul>
						</li>
						<li class="menu-has-children"><a>Type question</a>
						<ul>
								<li><a href="{{ route('type.create') }}">Create</a></li>
								<li><a href="{{ route('type.index') }}">Index</a></li>	
								<li><a href="{{ route('file.importExport', ['table' => 'Type']) }}">Import Export</a></li>
							</ul>
						</li>
						<li><a href="{{ route('user.logout') }}">Log Out</a></li>
						@else 
						<li><a href="{{ route('user.login') }}">Log In</a></li>
						@endif
					</ul>
				</nav>
			</div>
		</div>
	</header>
	<!-- end header Area -->

	<!-- start banner Area -->
	<section class="banner-area">
		<div class="container">
			<div class="row banner-content">
				<div class="col-lg-12 d-flex align-items-center justify-content-between">
					<div class="left-part">
						<h1>
							GDIT Test
						</h1>
						<h3>
							Welcome to GDIT
						</h3>
					</div>
			
				</div>
			</div>
		</div>
		</div>
	</section>
 
 		<section class="testimonials-area about-page section-gap-bottom">
			<div class="container">
					@yield('content')
			</div>
		</section>

	<!-- Start Footer Area -->
	<footer class="footer-area section-gap">
		<div class="container">
			<div class="row">				
				<div class="col-lg-4 col-md-6 single-footer-widget">
					<h4>Newsletter</h4>
					<p>You can trust us. we only send promo offers,</p>
					<div class="form-wrap" id="mc_embed_signup">
						<form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
						 method="get" class="form-inline">
							<input class="form-control" name="EMAIL" placeholder="Your Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Your Email Address '"
							 required="" type="email">
							<button class="click-btn btn btn-default"><span class="lnr lnr-arrow-right"></span></button>
							<div style="position: absolute; left: -5000px;">
								<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
							</div>

							<div class="info"></div>
						</form>
					</div>
				</div>
			</div>			
		</div>
	</footer>
	<!-- End Footer Area -->
	
	<script  src="https://code.jquery.com/jquery-3.3.1.js"></script>

	<script src="/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="/js/vendor/jquery-ui.js" type="text/javascript"></script>
	<script  src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
	 crossorigin="anonymous"></script>
	<script src="/js/tilt.jquery.min.js"></script>
	<script src="/js/vendor/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
	<script src="/js/easing.min.js"></script>
	<script src="/js/hoverIntent.js"></script>
	<script src="/js/superfish.min.js"></script>
	<script src="/js/jquery.ajaxchimp.min.js"></script>
	<script src="/js/jquery.magnific-popup.min.js"></script>
	<script src="/js/owl.carousel.min.js"></script>
	<script src="/js/owl-carousel-thumb.min.js"></script>
	<script src="/js/hexagons.min.js"></script>
	<script src="/js/jquery.nice-select.min.js"></script>
	<script src="/js/waypoints.min.js"></script>
	<script src="/js/mail-script.js"></script>
	<script src="/js/main.js"></script>

	

	@yield('script')
</body>

</html>