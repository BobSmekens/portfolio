<!DOCTYPE html>
<html>

<head>
	<title>portfolio</title>
	<link rel="stylesheet" type="text/css" href="..\css\contact.css">

	<link rel="stylesheet" type="text/css" href="..\css\portfolio.css">
	<script src="..\js\contact.js"></script>
	<script src="..\js\portfolio.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Karla|Libre+Baskerville|Nunito+Sans|Shadows+Into+Light" rel="stylesheet">
</head>

<body>
<?php
	<div id="tracker"></div>
	<div id="fishBlub3">
		<img src="..\imgs\fish4.png" alt="">
		<img src="..\imgs\fish1.png" alt="">
		<img src="..\imgs\fish2.png" alt="">
	</div>
	<!---------------------------------navbar--------------------->
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


	<!----------------------fullscreen navbar---------------->

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
	<!-----------------------------------------about me text-->
	<div class="mywork-container">
		<p id="mywork">About me</p><br>
	</div>

	<div class="section1" id="contactContent">
		<div id="blub-txt">Blub.....</div>
		<div class="section1-left ">Bob is a creative junior web-developer, mainly focused on combining lively web-design
			with functionality.</div>
		<div class="section1-right ">
			<img id="fish3" onclick="fish3()" src="..\imgs\fish3.png" alt="">
		</div>
	</div>
	</div>
?>
</body>

</html>