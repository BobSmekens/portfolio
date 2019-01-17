<!DOCTYPE html>
<html>

<head>
	<title>contact</title>
	<link rel="stylesheet" type="text/css" href="..\css\contact.css">
	<link rel="stylesheet" type="text/css" href="..\css\portfolio.css">
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

	<!---------------------------------------fs navbar-->
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
	<!-----------------------conent------------->
	<div class="mywork-container">
		<p id="myworkContact">A general inquiry?</p><br>
	</div>

	<div class="contact-content contact-content4" id="contactContent">
		<div class="content-half">
			<div class="contact-content1">
				<h2>Helping you is my job</h2>
				<p><span class="contact-blue-letter">M</span> info@bobfolio.com</p>
				<p><span class="contact-blue-letter">P</span> 06 2796 18 16</p>
				<p><span class="contact-blue-letter">A</span> Teteringsedijk 46D</p>
				<p> 4817MG Breda</p>
			</div>

			<div class="contact-content2">
				<h2>A SPECIFIC REQUEST?</h2>
				<div class="contact-dropdown">
					<button class="dropbtn" id="contact-dropdownbtn">Be my guest &#9661</button>
					<div class="contact-dropdown-content" id="contact-dropdowncontent">
						<a href="#techstyle">Let's work together</a>
						<a href="#blissworld">I would like more info</a>
						<a href="#braber">You deserve a pint</a>
						<a href="#api">I want to be part of it</a>
					</div>
				</div>
			</div>
		</div>

		<div class="contact-content3  content-half">
			<div id="blub-txt2">...Blub</div>
			<img id="fish2" class="fish-img" onclick="fish1()" src="..\imgs\fish2.png">
		</div>
	</div>
</body>

</html>