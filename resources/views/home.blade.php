@extends('layout.app')

@section('content')
	<div class="banner">
		<div class="overlay">
			<div class="row">
				<div class="tagline-container">
					<h1>JAN BAUTISTA</h1>
					INSTRUCTOR I
					<h2>MISO - FULLSTACK DEV</h2>
				</div>
			</div>
		</div>
	</div>
	<div class="banner-profile">
		<div class="row">
			<div class="description">
				<h2>ABOUT ME</h2>
				<p>Hello! I am Jan, a full-time <b>Instructor I</b> and <b>Fullstack Developer</b> under MISO Department, CLSU. My role is to teach and share my knowledge primarily with students of BSIT and other courses. Being a Fullstack Developer is to develop working Web App Systems that CLSU or other Departments in CLSU need. </p>
				<a href="{{ route("about") }}">Read More</a>
			</div>
			<div class="image-container"></div>
		</div>
		<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" preserveAspectRatio="none">
			<path fill="#111010" fill-opacity="1" d="M0,128L21.8,128C43.6,128,87,128,131,154.7C174.5,181,218,235,262,266.7C305.5,299,349,309,393,298.7C436.4,288,480,256,524,213.3C567.3,171,611,117,655,128C698.2,139,742,213,785,224C829.1,235,873,181,916,160C960,139,1004,149,1047,170.7C1090.9,192,1135,224,1178,245.3C1221.8,267,1265,277,1309,277.3C1352.7,277,1396,267,1418,261.3L1440,256L1440,0L1418.2,0C1396.4,0,1353,0,1309,0C1265.5,0,1222,0,1178,0C1134.5,0,1091,0,1047,0C1003.6,0,960,0,916,0C872.7,0,829,0,785,0C741.8,0,698,0,655,0C610.9,0,567,0,524,0C480,0,436,0,393,0C349.1,0,305,0,262,0C218.2,0,175,0,131,0C87.3,0,44,0,22,0L0,0Z"></path>
		</svg>
	</div>
	<div class="work-experience">
		<div class="row">
			<h2>WORK EXPERIENCE</h2>
			<div id="clsu" class="work-wrapper">
				<div class="image-container">
					<img src="{{ asset('images/clsu-work.jpg') }}" alt="CLSU">
				</div>
				<div class="description">
					<h3>INSTRUCTOR I & FULLSTACK DEVELOPER</h3>
					<span>August 2022 - Present</span>
					<p>Working as Instructor I with a role of Fullstack Developer in Central Luzon State University
						that converts raw assets provided by the clients into rich media
						ad executions also known as banner ads that will develop
						using vanilla HTML, CSS, and Javascript.
					</p>
				</div>
			</div>
			<div id="clsu" class="work-wrapper">
				<div class="image-container">
					<img src="{{ asset('images/philrice-work.jpg') }}" alt="WIDEOUT WORKFORCES INC.">
				</div>
				<div class="description">
					<h3>INFORMATION SYSTEM ANALYST I</h3>
					<span>October 2021 - August 2022</span>
					<p>Worked as Creative Developer in Wideout Workforces Inc. that
						converts raw assets provided by the clients into rich media
						ad executions also known as banner ads that will develop
						using vanilla HTML, CSS, and Javascript.
					</p>
				</div>
			</div>
			<div id="wideout" class="work-wrapper">
				<div class="image-container">
					<img src="{{ asset('images/wideout-work.png') }}" alt="WIDEOUT WORKFORCES INC.">
				</div>
				<div class="description">
					<h3>QUALITY ASSURANCE SPECIALIST</h3>
					<span>November 2020 - September 2021</span>
					<p>Worked as Creative Developer in Wideout Workforces Inc. that
						converts raw assets provided by the clients into rich media
						ad executions also known as banner ads that will develop
						using vanilla HTML, CSS, and Javascript.
					</p>
				</div>
			</div>
			<div id="wideout" class="work-wrapper">
				<div class="image-container">
					<img src="{{ asset('images/wideout-work.png') }}" alt="WIDEOUT WORKFORCES INC.">
				</div>
				<div class="description">
					<h3>CREATIVE DEVELOPER</h3>
					<span>August 2020 - November 2020</span>
					<p>Working as Creative Developer in Wideout Workforces Inc. that
						converts raw assets provided by the clients into rich media
						ad executions also known as banner ads that will develop
						using vanilla HTML, CSS, and Javascript.
					</p>
				</div>
			</div>
			<div id="clsu" class="work-wrapper">
				<div class="image-container">
					<img src="{{ asset('images/clsu-work.jpg') }}" alt="CLSU">
				</div>
				<div class="description">
					<h3>PART-TIME INSTRUCTOR</h3>
					<span>August 2019 - April 2020</span>
					<p>Worked as part-time instructor under CLSU’s IT Department
						that teach IT related subjects from lower to higher years BSIT
						students of CLSU. Also teach service-course offered by other
						Departments. Was assigned as a OJT and Capstone project
						Advisor of some graduating students.</p>
				</div>
			</div>
			<div id="techno" class="work-wrapper">
				<div class="image-container">
					<img src="{{ asset('images/techno-dream-work.jpg') }}" alt="CLSU">
				</div>
				<div class="description">
					<h3>FRONT-END DEVELOPER (OJT)</h3>
					<span>February - May 2019</span>
					<p>Worked as OJT/Intern in Techno Dream Web Works in Baguio City, Benguet.
					   The activities/work focuses on activating or converting Adobe Firework files,
					   by web designers, into responsive static web pages using HTML5, CSS, and PHP.
					   Activated 26 web design during OJT timeline.</p>
				</div>
			</div>
		</div>
	</div>
	<div class="technical-skills">
		<div class="row">
			<h2>TECHNICAL SKILLS</h2>
			<h3>WEB FUNDAMENTALS</h3>
			<div class="skills splide web-fundamentals">
				<div class="splide__track">
					<div class="splide__list">
						<div class="skill-wrapper splide__slide">
							<div class="skill css">
								<div class="percent">
									<svg>
										<circle cx="70" cy="70" r="70"></circle>
										<circle cx="70" cy="70" r="70"></circle>
									</svg>
									<div class="number">
										<h4>90<span>%<span></h4>
										<strong>CSS</strong>	
									</div>
								</div>
								<img src="{{ asset('images/skills/css-logo.png') }}" alt="CSS Logo">
							</div>
						</div>
						<div class="skill-wrapper splide__slide">
							<div class="skill html">
								<div class="percent">
									<svg>
										<circle cx="70" cy="70" r="70"></circle>
										<circle cx="70" cy="70" r="70"></circle>
									</svg>
									<div class="number">
										<h4>90<span>%<span></h4>
										<strong>HTML</strong>
									</div>
								</div>
								<img src="{{ asset('images/skills/html-logo.png') }}" alt="HTML Logo">
							</div>
						</div>
						<div class="skill-wrapper splide__slide">
							<div class="skill js">
								<div class="percent">
									<svg>
										<circle cx="70" cy="70" r="70"></circle>
										<circle cx="70" cy="70" r="70"></circle>
									</svg>
									<div class="number">
										<h4>85<span>%<span></h4>
										<strong>JavaScript</strong>	
									</div>
								</div>
								<img src="{{ asset('images/skills/js-logo.png') }}" alt="JS Logo">
							</div>
						</div>
						<div class="skill-wrapper splide__slide">
							<div class="skill php">
								<div class="percent">
									<svg>
										<circle cx="70" cy="70" r="70"></circle>
										<circle cx="70" cy="70" r="70"></circle>
									</svg>
									<div class="number">
										<h4>80<span>%<span></h4>
										<strong>PHP</strong>	
									</div>
								</div>
								<img src="{{ asset('images/skills/php-logo.png') }}" alt="JS Logo">
							</div>
						</div>
						<div class="skill-wrapper splide__slide">
							<div class="skill sass">
								<div class="percent">
									<svg>
										<circle cx="70" cy="70" r="70"></circle>
										<circle cx="70" cy="70" r="70"></circle>
									</svg>
									<div class="number">
										<h4>85<span>%<span></h4>
										<strong>SASS</strong>
									</div>
								</div>
								<img src="{{ asset('images/skills/sass-logo.png') }}" alt="SASS Logo">
							</div>
						</div>
						<div class="skill-wrapper splide__slide">
							<div class="skill-wrapper">
								<div class="skill bootstrap">
									<div class="percent">
										<svg>
											<circle cx="70" cy="70" r="70"></circle>
											<circle cx="70" cy="70" r="70"></circle>
										</svg>
										<div class="number">
											<h4>55<span>%<span></h4>
											<strong>Bootstrap</strong>
										</div>
									</div>
									<img src="{{ asset('images/skills/bootstrap-logo.png') }}" alt="Bootstrap Logo">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<h3>FRAMEWORKS</h3>
			<div class="skills splide frameworks">
				<div class="splide__track">
					<div class="splide__list">
						<div class="skill-wrapper splide__slide">
							<div class="skill laravel">
								<div class="percent">
									<svg>
										<circle cx="70" cy="70" r="70"></circle>
										<circle cx="70" cy="70" r="70"></circle>
									</svg>
									<div class="number">
										<h4>85<span>%<span></h4>
										<strong>Laravel</strong>
									</div>
								</div>
								<img src="{{ asset('images/skills/laravel-logo.png') }}" alt="NodeJS Logo">
							</div>
						</div>
						<div class="skill-wrapper splide__slide">
							<div class="skill angular">
								<div class="percent">
									<svg>
										<circle cx="70" cy="70" r="70"></circle>
										<circle cx="70" cy="70" r="70"></circle>
									</svg>
									<div class="number">
										<h4>70<span>%<span></h4>
										<strong>AngularJS</strong>
									</div>
								</div>
								<img src="{{ asset('images/skills/angular-logo.png') }}" alt="NodeJS Logo">
							</div>
						</div>
						<div class="skill-wrapper splide__slide">
							<div class="skill nodejs">
								<div class="percent">
									<svg>
										<circle cx="70" cy="70" r="70"></circle>
										<circle cx="70" cy="70" r="70"></circle>
									</svg>
									<div class="number">
										<h4>70<span>%<span></h4>
										<strong>NodeJS</strong>
									</div>
								</div>
								<img src="{{ asset('images/skills/nodejs-logo.png') }}" alt="NodeJS Logo">
							</div>
						</div>
						<div class="skill-wrapper splide__slide">
							<div class="skill json">
								<div class="percent">
									<svg>
										<circle cx="70" cy="70" r="70"></circle>
										<circle cx="70" cy="70" r="70"></circle>
									</svg>
									<div class="number">
										<h4>80<span>%<span></h4>
										<strong>JSON</strong>
									</div>
								</div>
								<img src="{{ asset('images/skills/json-logo.png') }}" alt="JSON Logo">
							</div>
						</div>
					</div>
				</div>
			</div>
			<h3>JAVASCRIPT LIBRARIES/PLUGINS</h3>
			<div class="skills splide js-libraries">
				<div class="splide__track">
					<div class="splide__list">
						<div class="skill-wrapper splide__slide">
							<div class="skill jquery">
								<div class="percent">
									<svg>
										<circle cx="70" cy="70" r="70"></circle>
										<circle cx="70" cy="70" r="70"></circle>
									</svg>
									<div class="number">
										<h4>85<span>%<span></h4>
										<strong>JQuery</strong>	
									</div>
								</div>
								<img src="{{ asset('images/skills/jquery-logo.png') }}" alt="JQuery Logo">
							</div>
						</div>
						<div class="skill-wrapper splide__slide">
							<div class="skill chartjs">
								<div class="percent">
									<svg>
										<circle cx="70" cy="70" r="70"></circle>
										<circle cx="70" cy="70" r="70"></circle>
									</svg>
									<div class="number">
										<h4>90<span>%<span></h4>
										<strong>ChartJS</strong>
									</div>
								</div>
								<img src="{{ asset('images/skills/chartjs-logo.png') }}" alt="ChartJS Logo">
							</div>
						</div>
						<div class="skill-wrapper splide__slide">
							<div class="skill leaflet">
								<div class="percent">
									<svg>
										<circle cx="70" cy="70" r="70"></circle>
										<circle cx="70" cy="70" r="70"></circle>
									</svg>
									<div class="number">
										<h4>75<span>%<span></h4>
										<strong>LeafletJS</strong>
									</div>
								</div>
								<img src="{{ asset('images/skills/leaflet-logo.png') }}" alt="Leaflet Logo">
							</div>
						</div>
						<div class="skill-wrapper splide__slide">
							<div class="skill splideClass">
								<div class="percent">
									<svg>
										<circle cx="70" cy="70" r="70"></circle>
										<circle cx="70" cy="70" r="70"></circle>
									</svg>
									<div class="number">
										<h4>80<span>%<span></h4>
										<strong>Splide</strong>	
									</div>
								</div>
								<img src="{{ asset('images/skills/splide-logo.png') }}" alt="Splide Logo">
							</div>
						</div>
						<div class="skill-wrapper splide__slide">
							<div class="skill tinglejs">
								<div class="percent">
									<svg>
										<circle cx="70" cy="70" r="70"></circle>
										<circle cx="70" cy="70" r="70"></circle>
									</svg>
									<div class="number">
										<h4>80<span>%<span></h4>
										<strong>TingleJS</strong>	
									</div>
								</div>
								<img src="{{ asset('images/skills/tinglejs-logo.png') }}" alt="TingleJS Logo">
							</div>
						</div>
						<div class="skill-wrapper splide__slide">
							<div class="skill alertifyjs">
								<div class="percent">
									<svg>
										<circle cx="70" cy="70" r="70"></circle>
										<circle cx="70" cy="70" r="70"></circle>
									</svg>
									<div class="number">
										<h4>90<span>%<span></h4>
										<strong>AlertifyJS</strong>	
									</div>
								</div>
								<img src="{{ asset('images/skills/alertifyjs-logo.png') }}" alt="AlertifyJS Logo">
							</div>
						</div>
						<div class="skill-wrapper splide__slide">
							<div class="skill sweetalert">
								<div class="percent">
									<svg>
										<circle cx="70" cy="70" r="70"></circle>
										<circle cx="70" cy="70" r="70"></circle>
									</svg>
									<div class="number">
										<h4>90<span>%<span></h4>
										<strong>SweetAlert</strong>	
									</div>
								</div>
								<img src="{{ asset('images/skills/sweetalert-logo.png') }}" alt="SweetAlert Logo">
							</div>
						</div>
					</div>
				</div>
			</div>
			<h3>WEB SERVICES</h3>
			<div class="skills splide services">
				<div class="splide__track">
					<div class="splide__list">
						<div class="skill-wrapper splide__slide">
							<div class="skill firebase">
								<div class="percent">
									<svg>
										<circle cx="70" cy="70" r="70"></circle>
										<circle cx="70" cy="70" r="70"></circle>
									</svg>
									<div class="number">
										<h4>50<span>%<span></h4>
										<strong>Google Firebase</strong>
									</div>
								</div>
								<img src="{{ asset('images/skills/firebase-logo.png') }}" alt="Firebase Logo">
							</div>
						</div>
						<div class="skill-wrapper splide__slide">
							<div class="skill mailgun">
								<div class="percent">
									<svg>
										<circle cx="70" cy="70" r="70"></circle>
										<circle cx="70" cy="70" r="70"></circle>
									</svg>
									<div class="number">
										<h4>70<span>%<span></h4>
										<strong>Mailgun</strong>
									</div>
								</div>
								<img src="{{ asset('images/skills/mailgun-logo.png') }}" alt="Mailgun Logo">
							</div>
						</div>
						<div class="skill-wrapper splide__slide">
							<div class="skill vonage">
								<div class="percent">
									<svg>
										<circle cx="70" cy="70" r="70"></circle>
										<circle cx="70" cy="70" r="70"></circle>
									</svg>
									<div class="number">
										<h4>80<span>%<span></h4>
										<strong>Vonage</strong>
									</div>
								</div>
								<img src="{{ asset('images/skills/vonage-logo.png') }}" alt="Vonage Logo">
							</div>
						</div>
						<div class="skill-wrapper splide__slide">
							<div class="skill godaddy">
								<div class="percent">
									<svg>
										<circle cx="70" cy="70" r="70"></circle>
										<circle cx="70" cy="70" r="70"></circle>
									</svg>
									<div class="number">
										<h4>80<span>%<span></h4>
										<strong>GoDaddy</strong>
									</div>
								</div>
								<img src="{{ asset('images/skills/godaddy-logo.png') }}" alt="GoDaddy Logo">
							</div>
						</div>
					</div>
				</div>
			</div>
			<h3>DATA STORAGE</h3>
			<div class="skills splide databases">
				<div class="splide__track">
					<div class="splide__list">
						<div class="skill-wrapper splide__slide">
							<div class="skill mysql">
								<div class="percent">
									<svg>
										<circle cx="70" cy="70" r="70"></circle>
										<circle cx="70" cy="70" r="70"></circle>
									</svg>
									<div class="number">
										<h4>70<span>%<span></h4>
										<strong>MySQL</strong>
									</div>
								</div>
								<img src="{{ asset('images/skills/mysql-logo.png') }}" alt="MySQL Logo">
							</div>
						</div>
						<div class="skill-wrapper splide__slide">
							<div class="skill mongodb">
								<div class="percent">
									<svg>
										<circle cx="70" cy="70" r="70"></circle>
										<circle cx="70" cy="70" r="70"></circle>
									</svg>
									<div class="number">
										<h4>75<span>%<span></h4>
										<strong>MongoDB</strong>
									</div>
								</div>
								<img src="{{ asset('images/skills/mongodb-logo.png') }}" alt="MongoDB Logo">
							</div>
						</div>
						<div class="skill-wrapper splide__slide">
							<div class="skill mariadb">
								<div class="percent">
									<svg>
										<circle cx="70" cy="70" r="70"></circle>
										<circle cx="70" cy="70" r="70"></circle>
									</svg>
									<div class="number">
										<h4>70<span>%<span></h4>
										<strong>MariaDB</strong>
									</div>
								</div>
								<img src="{{ asset('images/skills/mariadb-logo.png') }}" alt="MySQL Logo">
							</div>
						</div>
						<div class="skill-wrapper splide__slide">
							<div class="skill sqlite">
								<div class="percent">
									<svg>
										<circle cx="70" cy="70" r="70"></circle>
										<circle cx="70" cy="70" r="70"></circle>
									</svg>
									<div class="number">
										<h4>60<span>%<span></h4>
										<strong>SQLite</strong>
									</div>
								</div>
								<img src="{{ asset('images/skills/sqlite-logo.png') }}" alt="SQLite Logo">
							</div>
						</div>
					</div>
				</div>
			</div>
			<h3>APPLICATIONS</h3>
			<div class="skills splide applications">
				<div class="splide__track">
					<div class="splide__list">
						<div class="skill-wrapper splide__slide">
							<div class="skill photoshop">
								<div class="percent">
									<svg>
										<circle cx="70" cy="70" r="70"></circle>
										<circle cx="70" cy="70" r="70"></circle>
									</svg>
									<div class="number">
										<h4>80<span>%<span></h4>
										<strong>A. Photoshop</strong>
									</div>
								</div>
								<img src="{{ asset('images/skills/ps-logo.png') }}" alt="Photoshop Logo">
							</div>
						</div>
						<div class="skill-wrapper splide__slide">
							<div class="skill illustrator">
								<div class="percent">
									<svg>
										<circle cx="70" cy="70" r="70"></circle>
										<circle cx="70" cy="70" r="70"></circle>
									</svg>
									<div class="number">
										<h4>55<span>%<span></h4>
										<strong>A. Illustrator</strong>
									</div>
								</div>
								<img src="{{ asset('images/skills/ai-logo.png') }}" alt="Illustrator Logo">
							</div>
						</div>
						<div class="skill-wrapper splide__slide">
							<div class="skill adstudio">
								<div class="percent">
									<svg>
										<circle cx="70" cy="70" r="70"></circle>
										<circle cx="70" cy="70" r="70"></circle>
									</svg>
									<div class="number">
										<h4>75<span>%<span></h4>
										<strong>Android Studio</strong>
									</div>
								</div>
								<img src="{{ asset('images/skills/adstudio-logo.png') }}" alt="Android Studio Logo">
							</div>
						</div>
						<div class="skill-wrapper splide__slide">
							<div class="skill phpmyadmin">
								<div class="percent">
									<svg>
										<circle cx="70" cy="70" r="70"></circle>
										<circle cx="70" cy="70" r="70"></circle>
									</svg>
									<div class="number">
										<h4>95<span>%<span></h4>
										<strong>phpmyAdmin</strong>
									</div>
								</div>
								<img src="{{ asset('images/skills/phpmyadmin-logo.png') }}" alt="phpmyAdmin Logo">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="developments">
		<div class="row">
			<h2>DEVELOPMENTS</h2>
			<div class="undergrad">
				<div id="project" class="project-wrapper">
					<div class="image-container">
						<img src="{{ asset('images/developments/undergrad/WATERVILLE.png') }}">
					</div>
					<div class="description">
						<h3>ROSEVILLE WATER BILLING SYSTEM</h3>
						<span>March - April 2021</span>
						<p>A freelance project for Roseville Heights. The purpose of this project is to provide
							a new water billing system for the subdivision. The system can compute the current
							bill of the homeowners and print the reports they needed. It was developed using Laravel.</p>
					</div>
				</div>
				<div id="project" class="project-wrapper">
					<div class="image-container">
						<img src="{{ asset('images/developments/undergrad/MR3121.png') }}">
					</div>
					<div class="description">
						<h3>MAKISIG RESCUE 3121 WEB/ANDROID APP</h3>
						<span>March - May 2019</span>
						<p>This capstone project using Laravel Framework for web application
								for managing the admin side of the system while the android
								application helps to send the exact location of the user to the server
								that will able to see by the admin in real time with the help of Google
								Firebase Realtime database and Leaflet.js for GIS map. The purpose
								is to help health/emergency volunteers to see incident locations using
								android app.</p>
					</div>
				</div>
				<div id="project" class="project-wrapper">
					<div class="image-container">
						<img src="{{ asset('images/developments/undergrad/ITSD.png') }}">
					</div>
					<div class="description">
						<h3>RESTAURANT REVIEWS</h3>
						<span>November 2018</span>
						<p>Last project requirement for a course subject. The project was
								made in Node.js for server and with Angular.js for interactive
								interface of the application. The web application shows a map
								using Leaflet.js and allows the user to click and quick view of
								the restaurant status and can add some reviews about the
								restaurant.</p>
					</div>
				</div>
				<div id="project" class="project-wrapper">
					<div class="image-container">
						<img src="{{ asset('images/developments/undergrad/UMART.png') }}">
					</div>
					<div class="description">
						<h3>UMART POS SYSTEM</h3>
						<span>October - November 2018</span>
						<p>The system is made in PHP with MySQL database for data
								storage for fulfillment of our MIS subject. This system will
								able to display all of the available products of the store
								(UMART) and will be able to compute the total cost of all
								of the ordered items and will save the transaction for
								future reference.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection