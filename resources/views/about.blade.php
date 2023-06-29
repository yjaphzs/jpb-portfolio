@extends('layout.app')

@section('content')
	<div class="banner">
		<div class="overlay">
			<div class="row">
				<div class="tagline-container">
					GAMER
					<h2>BY NATURE</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="about-intro">
		<div class="row">
			<div class="image-container">
				<div></div>
				<div></div>
			</div>
			<div class="description">
				<h2>JAN BAUTISTA</h2>
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
			</div>
		</div>
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
			<path fill="#111010" fill-opacity="1" d="M0,128L21.8,128C43.6,128,87,128,131,154.7C174.5,181,218,235,262,266.7C305.5,299,349,309,393,298.7C436.4,288,480,256,524,213.3C567.3,171,611,117,655,128C698.2,139,742,213,785,224C829.1,235,873,181,916,160C960,139,1004,149,1047,170.7C1090.9,192,1135,224,1178,245.3C1221.8,267,1265,277,1309,277.3C1352.7,277,1396,267,1418,261.3L1440,256L1440,0L1418.2,0C1396.4,0,1353,0,1309,0C1265.5,0,1222,0,1178,0C1134.5,0,1091,0,1047,0C1003.6,0,960,0,916,0C872.7,0,829,0,785,0C741.8,0,698,0,655,0C610.9,0,567,0,524,0C480,0,436,0,393,0C349.1,0,305,0,262,0C218.2,0,175,0,131,0C87.3,0,44,0,22,0L0,0Z"></path>
		</svg>
	</div>
	<div class="education">
		<div class="row">
			<h2>EDUCATION</h2>
			<div id="education-level" class="college">
				<div class="education-wrapper">
					<div class="image-container">
						<img src="{{ asset('images/education/clsu-logo.png') }}" alt="CLSU Logo">
					</div>
					<div class="description">
						<h3>BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY</h3>
						<h4>CENTRAL LUZON STATE UNIVERSITY</h4>
						<span>August 2015 - June 2019</span>
					</div>
				</div>
				<div class="education-wrapper">
					<div class="image-container">
						<img src="{{ asset('images/education/clsu-logo.png') }}" alt="CLSU Logo">
					</div>
					<div class="description">
						<h3>ASSOCIATE IN COMPUTER TECHNOLOGY</h3>
						<h4>CENTRAL LUZON STATE UNIVERSITY</h4>
						<span>August 2015 - June 2017</span>
					</div>
				</div>
			</div>
			<div id="education-level" class="highschool">
				<div class="education-wrapper">
					<div class="image-container">
						<img src="{{ asset('images/education/bartolome-logo.png') }}" alt="Bartolome Sangalang Logo">
					</div>
					<div class="description">
						<h3>FOURTH YEAR HIGH SCHOOL</h3>
						<h4>BARTOLOME SANGALANG NATIONAL HIGH SCHOOL</h4>
						<span>2014 - 2015</span>
					</div>
				</div>
				<div class="education-wrapper">
					<div class="image-container">
						<img src="{{ asset('images/education/bonifacio-logo.jpg') }}" alt="A. Bonifacio Logo">
					</div>
					<div class="description">
						<h3>THIRD YEAR HIGH SCHOOL</h3>
						<h4>A. BONIFACIO NATIONAL HIGH SCHOOL</h4>
						<span>2013 - 2014</span>
					</div>
				</div>
				<div class="education-wrapper">
					<div class="image-container">
						<img src="{{ asset('images/education/carranglan-logo.jpg') }}" alt="Carranglan Logo">
					</div>
					<div class="description">
						<h3>SECOND YEAR HIGH SCHOOL</h3>
						<h4>CARRANGLAN NATIONAL HIGH SCHOOL</h4>
						<span>2012 - 2013</span>
					</div>
				</div>
				<div class="education-wrapper">
					<div class="image-container">
						<img src="{{ asset('images/education/bicos-logo.png') }}" alt="CLSU Logo">
					</div>
					<div class="description">
						<h3>FIRST YEAR HIGH SCHOOL</h3>
						<h4>BICOS NATIONAL HIGH SCHOOL</h4>
						<span>2011 - 2012</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="gallery">
		<div class="row">
			<h2>GALLERY</h2>
			<div class="images">
				<div class="image-container">
					<img src="{{ asset('images/gallery/1.jpg') }}">
				</div>
				<div class="image-container">
					<img src="{{ asset('images/gallery/2.jpg') }}">
				</div>
				<div class="image-container">
					<img src="{{ asset('images/gallery/3.jpg') }}">
				</div>
				<div class="image-container">
					<img src="{{ asset('images/gallery/4.jpg') }}">
				</div>
				<div class="image-container">
					<img src="{{ asset('images/gallery/5.jpg') }}">
				</div>
				<div class="image-container">
					<img src="{{ asset('images/gallery/6.jpg') }}">
				</div>
				<div class="image-container">
					<img src="{{ asset('images/gallery/7.jpg') }}">
				</div>
				<div class="image-container">
					<img src="{{ asset('images/gallery/8.jpg') }}">
				</div>
				<div class="image-container">
					<img src="{{ asset('images/gallery/9.jpg') }}">
				</div>
				{{-- <div class="image-container">
					<img src="{{ asset('images/gallery/10.jpg') }}">
				</div>
				<div class="image-container">
					<img src="{{ asset('images/gallery/11.jpg') }}">
				</div>
				<div class="image-container">
					<img src="{{ asset('images/gallery/12.jpg') }}">
				</div>
				<div class="image-container">
					<img src="{{ asset('images/gallery/13.jpg') }}">
				</div>
				<div class="image-container">
					<img src="{{ asset('images/gallery/14.jpg') }}">
				</div>
				<div class="image-container">
					<img src="{{ asset('images/gallery/15.jpg') }}">
				</div>
				<div class="image-container">
					<img src="{{ asset('images/gallery/16.jpg') }}">
				</div>
				<div class="image-container">
					<img src="{{ asset('images/gallery/17.jpg') }}">
				</div>
				<div class="image-container">
					<img src="{{ asset('images/gallery/18.jpg') }}">
				</div>
				<div class="image-container">
					<img src="{{ asset('images/gallery/19.jpg') }}">
				</div>
				<div class="image-container">
					<img src="{{ asset('images/gallery/20.jpg') }}">
				</div>
				<div class="image-container">
					<img src="{{ asset('images/gallery/21.jpg') }}">
				</div>
				<div class="image-container">
					<img src="{{ asset('images/gallery/22.jpg') }}">
				</div>
				<div class="image-container">
					<img src="{{ asset('images/gallery/23.jpg') }}">
				</div>
				<div class="image-container">
					<img src="{{ asset('images/gallery/24.jpg') }}">
				</div>
				<div class="image-container">
					<img src="{{ asset('images/gallery/25.jpg') }}">
				</div>
				<div class="image-container">
					<img src="{{ asset('images/gallery/26.jpg') }}">
				</div> --}}
			</div>
			<div class="photographer">
				<div class="image-container">
					<img src="{{ ('images/gallery/blix.jpg') }}">
				</div>
				<div class="description">
					<h3>Blix Cavinta</h3>
					<p>Check out Blix Cavinta at Facebook to see more amazing photography!</p>
					<a href="https://www.facebook.com/profile.php?id=100063951018214" target="_blank">Visit</a>
				</div>
			</div>
		</div>
	</div>
	<div class="hobbies">
		<div class="row">
			<h2>Hobbies</h2>
			<div class="hobbies-wrapper">
				<div class="hobby">
					<i class="fad fa-gamepad-alt"></i>
					<h3>GAMING</h3>
				</div>
				<div class="hobby">
					<i class="fad fa-code"></i>
					<h3>CODING</h3>
				</div>
				<div class="hobby">
					<i class="fad fa-hamburger"></i>
					<h3>EATING</h3>
				</div>
				<div class="hobby">
					<i class="fad fa-camera"></i>
					<h3>PHOTOGRAPHY</h3>
				</div>
				<div class="hobby">
					<i class="fad fa-tv"></i>
					<h3>WATCHING</h3>
				</div>
				<div class="hobby">
					<i class="fad fa-map-marked-alt"></i>
					<h3>TRAVELLING</h3>
				</div>
			</div>
		</div>
	</div>
	</div>
@endsection