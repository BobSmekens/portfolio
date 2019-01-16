/*/////////////////////////////////////////navbar sliding in///////////////////////////*/

var navCount = 0;

function slideNav () {
	if (navCount == 0) {
		originalPosition();
	} else {
		changedPosition();
	}
};

function originalPosition () {
	navCount = 1
	document.getElementById("fsnav").style.transform = "translate(0,0)";
	document.getElementById("nav-logo").style.transition = "2s";
	document.getElementById("nav-logo").style.transform = "rotate(90deg)";
}

function changedPosition () {
	navCount = 0
	document.getElementById("fsnav").style.transform = "translate(-93%,0)";
	document.getElementById("nav-logo").style.transform = "rotate(-90deg)";
	document.getElementById("nav-logo").style.transition = "2s";
}

/*/////////////////////////////////////select projects///////////////////////////////////*/

var designs = document.getElementsByClassName("design");
var marketing = document.getElementsByClassName("marketing");
var webshops = document.getElementsByClassName("webshops");


function showAll () {
	for (i=0; i<designs.length; i++) {
		designs[i].style.display = "block";
		marketing[i].style.display = "block";
		webshops[i].style.display = "block";
	}
}

function showDesigns () {
	for (i=0; i<designs.length; i++) {
		designs[i].style.display = "block";
		marketing[i].style.display = "none";
		webshops[i].style.display = "none";
	}
}

function showMarketing () {
	for (i=0; i<designs.length; i++) {
		designs[i].style.display = "none";
		marketing[i].style.display = "block";
		webshops[i].style.display = "none";
	}
}

function showWebshops () {
	for (i=0; i<designs.length; i++) {
		designs[i].style.display = "none";
		marketing[i].style.display = "none";
		webshops[i].style.display = "block";
	}
}

/*////////////////////////////////projects flex//////////////////////////////*/
window.addEventListener("scroll", changeTopNav)

var navbtns = document.getElementById("navbarContainer");
var topTracker = 0;

function changeTopNav() {

 topTracker = document.getElementById("projects").getBoundingClientRect().top;

 	
 		if (topTracker > 70) {
	 	document.getElementById("navbarContainer").style.backgroundColor = "rgba(0,0,0,0)";
	 	document.getElementById("navbarContainer").style.transition = "2s";
	 	} else {
	 		document.getElementById("navbarContainer").style.backgroundColor = "black";
	 		document.getElementById("navbarContainer").style.transition = "2s";
	 	}
};

var fishCount = 1;
var blubCount = 0;


/*///////////////////////////fish global fed/////////////*/


function fishBlub () {
	var fish = document.getElementById("blub-txt");
	blubCount++;
if (fishCount == 0){
	fish.style.display = "none";
	fishCount = 1;
} else {
	fish.style.display = "block";
	fishCount = 0;
}	
}

var feedfish3count = 0;

function feedfish3(){
	if (feedfish3count ==10) {
		var fish = document.getElementById("fish3");
		fish.style.transform = "rotate(-180deg)";
		fish.style.transition = "3s";
		document.getElementById("blub-txt").innerHTML = "R.I.P.";
	} else {
		feedfish3count++;
	}
}

function fish3 () {
	console.log(feedfish3count)
	feedfish3();
	fishBlub();
}

function fishBlub2 () {
	var fish = document.getElementById("blub-txt2");
	blubCount++;
if (fishCount == 0){
	fish.style.display = "none";
	fishCount = 1;
} else {
	fish.style.display = "block";
	fishCount = 0;
}	
}
var feedfish1count = 0;

function fishBlub3() {
	if (blubCount == 10) {
		document.getElementById("fishBlub3").style.display = "block";
	}
}

function feedfish1(){
	if (feedfish1count ==10) {
		var fish = document.getElementById("fish2");
		fish.style.transform = "rotate(-180deg)";
		fish.style.transition = "3s";
		document.getElementById("blub-txt2").innerHTML = "R.I.P.";
	} else {
		feedfish1count++;
	}
}

function fish1 () {
	console.log(feedfish1count)
	feedfish1();
	fishBlub2();
}
/*
localStorage.setItem("fishcount", fishCount)
var cat = localStorage.getItem('myCat'); 
*/