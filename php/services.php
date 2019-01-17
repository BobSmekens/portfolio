<!DOCTYPE html>
<html>

<head>
	<title>services</title>
	<link rel="stylesheet" type="text/css" href="..\css\contact.css">
	<link rel="stylesheet" type="text/css" href="..\css\portfolio.css">
	<script src="..\js\contact.js"></script>
	<script src="..\js\portfolio.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Karla|Libre+Baskerville|Nunito+Sans|Shadows+Into+Light" rel="stylesheet">
</head>


<body>
	<div class="navbar">
		<div id="navbarContainer">
			<a href="portfolio.php" id="branding">BOB | <span class="text-blue">FOLIO</span></a>
			<div class="navbar-links">
				<div class="dropdown">
					<a href="contact.php"><button class="dropbtn">contact.</button></a>
				</div>

				<div class="dropdown">
					<a href="services.php"><button class="dropbtn">achievements.</button></a>
				</div>


				<div class="dropdown">
					<a href="projects.php"><button class="dropbtn">projects.</button></a>
				</div>
			</div>
		</div>
	</div>

	<!-----------------------fs navbar--------------------->
	<div class="fullscreen-nav" id="fsnav">
		<div class="fullscreen-nav-col" id="fsnav-col-1">
			<a href="projects.php">
				<div class="black-fadein">
					<h2 class="fsnavtext" id="fsnavtext1">Projects.</h2>
				</div>
			</a>
			<h2 class="fsnavtext" id="fsnavtext1">Projects.</h2>
		</div>

		<div class="fullscreen-nav-col" id="fsnav-col-2">
			<a href="services.php">
				<div class="black-fadein">
					<h2 class="fsnavtext" id="fsnavtext2">Achievements.</h2>
				</div>
			</a>
			<h2 class="fsnavtext" id="fsnavtext2">Achievements.</h2>
		</div>

		<div class="fullscreen-nav-col" id="fsnav-col-3">
			<a href="contact.php">
				<div class="black-fadein">
					<h2 class="fsnavtext" id="fsnavtext3">Contact.</h2>
				</div>
			</a>
			<h2 class="fsnavtext" id="fsnavtext3">Contact.</h2>
		</div>

		<div class="fullscreen-nav-nav">
			<span id="nav-logo" class="nav-logo" onclick="slideNav()">&#10569;</span>
		</div>
	</div>
	<!-------------------------footer-------------------->

	<div id="contactFooter" class="">
		<div class="footer-left">
			<a href="">FR</a> /
			<a href="">EN</a> /
			<a href="">NL</a>
		</div>

		<div class="footer-right">
			<a href="">FACEBOOK /</a>
			<a href=""> INSTAGRAM /</a>
			<a href=""> LINKEDIN</a>
		</div>
	</div>
	<!------------content----------------------->

	<div class="mywork-container">
		<p id="mywork">My services</p><br>
	</div>
	<div class="contact-content" id="contactContent">
		<div class="services-container ">

			<p class="services-txt"> Your wish is my inspiration. Together we can work to make your company look good.</p>

			<div class="services-pics">
				<a href="">
					<div class="service-logo"><img src="..\imgs\branding-mini.png"><br>
						<p class="services-pics-txt">Branding</p>
					</div>
				</a>
				<a href="">
					<div class="service-logo"><img src="..\imgs\website-mini.png"><br>
						<p class="services-pics-txt">Website</p>
					</div>
				</a>
				<a href="">
					<div class="service-logo"><img src="..\imgs\seo-mini.png"><br>
						<p class="services-pics-txt">Visibility</p>
					</div>
				</a>
				<a href="">
					<div class="service-logo"><img src="..\imgs\print-mini.png"><br>
						<p class="services-pics-txt">Print</p>
					</div>
				</a>
				<a href="">
					<div class="service-logo"><img src="..\imgs\content-mini.png"><br>
						<p class="services-pics-txt">Contents</p>
					</div>
				</a>
				<a href="">
					<div class="service-logo"><img src="..\imgs\strategy-mini.png"><br>
						<p class="services-pics-txt">Digital marketing</p>
					</div>
				</a>
				
			</div>
		</div>
    </div>
    
<!--------------------------------section2------------------->
<div class="services-section2 debug">

</div>

</body>

</html>