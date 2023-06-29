<!DOCTYPE html>
<html>
<head>
	<title>JPB</title>
	{{-- ICON --}}
	<link rel="icon" href="{{ asset('images/icon.ico') }}">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	{{-- STYLE --}}
	<link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
	{{-- FONTS ICONS --}}
	<link rel="stylesheet" type="text/css" href="{{ asset('fa-icons/css/all.css') }}">
	{{-- FONTS --}}
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;400;700;900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/css/splide.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
	{{-- SCRIPT --}}
	<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
	{{-- <script src="{{ asset('js/jquery-ui.min.js') }}"></script> --}}
	<script src="{{ asset('js/animejs/anime.min.js') }}"></script>
	<script src="{{ asset('js/animation.js') }}"></script>
	<script src="{{ asset('js/inviewport.jquery.js') }}"></script>
	<script src="{{ asset('js/isInViewport.min.js') }}"></script>
	<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
	<script src="{{ asset('js/menu.js') }}"></script>
	<script src="{{ asset('js/control.js') }}"></script>
	@if(Request::route()->getName() == "home")
	<script src="{{ asset('js/home_animation.js') }}"></script>
	@elseif(Request::route()->getName() == "about")
	{{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/photoswipe.css') }}"> --}}
	<script src="{{ asset('js/about_animation.js') }}"></script>
	{{-- <script src="{{ asset('js/photoswipe.min.js') }}"></script>
	<script src="{{ asset('js/photoswipe-ui-default.min.js') }}"></script> --}}
	<script src="{{ asset('js/gallery.js') }}"></script>
	@endif
	<script src="{{ asset('js/messenger.js') }}"></script>
</head>
<body id="{{ Request::route()->getName() }}">
	<div id="preload">
		<div class="circle"></div>
		<div class="circle"></div>
		<div class="circle"></div>
	</div>
	<header>
		<div id="header">
			@include('includes.navigation')
		</div>
	<header>
	<div id="content">
		@yield('content')
	</div>
	<footer>
		<div id="footer">
			<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
				<path fill-opacity="1" d="M0,256L48,229.3C96,203,192,149,288,154.7C384,160,480,224,576,218.7C672,213,768,139,864,128C960,117,1056,171,1152,197.3C1248,224,1344,224,1392,224L1440,224L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
			</svg>
			<div class="contact">
				<div class="row">
					<h2>CONTACT</h2>
					<div class="social-links">
						<ul>
							<li><a href="http://www.facebook.com/yjaphzs" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
							<li><a href="http://www.twitter.com/yjaphzs" target="_blank"><i class="fab fa-twitter"></i></a></li>
							<li><a href="http://www.instagram.com/yjaphzs" target="_blank"><i class="fab fa-instagram"></i></a></li>
							<li><a href="mailto:yjaphzs@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a></li>
						</ul>
					</div>
					<p class="copyright">Copyright © 2021 Jan Bautista. All Rights Reserved.</p>
				</div>
			</div>
		</div>
	</footer>
	{{-- <div id="messenger-chat">
		<div class="icon">
			<i class="fab fa-facebook-messenger"></i>
		</div>
	</div> --}}
</body>
</html>