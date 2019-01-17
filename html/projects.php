<!DOCTYPE html>
<html>

<head>
	<title>projects</title>
	<link rel="stylesheet" type="text/css" href="..\css\contact.css">
	<link rel="stylesheet" type="text/css" href="..\css\portfolio.css">
y	<script src="..\js\portfolio.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Karla|Libre+Baskerville|Nunito+Sans|Shadows+Into+Light" rel="stylesheet">
</head>

<body>

	<div id="tracker"></div>
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



	<!-------------------------------guide bar-------------------------->
	<div class="mywork-container">
		<p id="mywork">My work</p><br>
	</div>
	<!-------------------------------------------projects------------------------------------->
	<div class="project-container">
		<div class="project-container-pic active">
			<div class="pic-container"><img src="..\imgs\techstyle.png" alt=""></div>
			<div class="text-container">
				<p>Techstyle.</p>
			</div>
		</div>

		<div class="project-container-pic">
			<div class="pic-container"><img src="..\imgs\braber.png" alt=""></div>
			<div class="text-container">
				<p>Braber.</p>
			</div>
		</div>

		<div class="project-container-pic ">
			<div class="pic-container"><img src="..\imgs\api.png" alt=""></div>
			<div class="text-container">
				<p>A.P.I.</p>
			</div>
		</div>

		<div class="project-container-pic ">
			<div class="pic-container"><img src="..\imgs\symmod.png" alt=""></div>
			<div class="text-container">
				<p>Symodd.</p>
			</div>
		</div>

		<div class="project-container-pic ">
			<div class="pic-container"><img src="..\imgs\algolia.png" alt=""></div>
			<div class="text-container">
				<p>Algolia.</p>
			</div>
		</div>

		<div class="project-container-pic ">
			<div class="pic-container"><img src="..\imgs\blissworld.png" alt=""></div>
			<div class="text-container">
				<p>Blissworld.</p>
			</div>
		</div>
	</div>

	<div class="projects-btn-container ">
		<button id="projects-slider-left" onclick="changeSliderProjectMinus()">&#10527 previous</button>
		<button id="projects-slider-right" onclick="changeSliderProjectPlus()"> next <span class="rotate-btn">&#10527</span></button>
	</div>
	<!-----------------------------------footer---------------------------------->
	<script src="..\js\projects.js"></script>
</body>

</html>