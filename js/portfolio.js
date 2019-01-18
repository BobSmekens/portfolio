/*/////////////////////////////////////////navbar sliding in///////////////////////////*/

var navCount = 0;

function slideNav() {
	if (navCount == 0) {
		originalPosition();
	} else {
		changedPosition();
	}
};

function originalPosition() {
	navCount = 1
	document.getElementById("fsnav").style.transform = "translate(0,0)";
	document.getElementById("nav-logo").style.transition = "2s";
	document.getElementById("nav-logo").style.transform = "rotate(90deg)";
}

function changedPosition() {
	navCount = 0
	document.getElementById("fsnav").style.transform = "translate(-93%,0)";
	document.getElementById("nav-logo").style.transform = "rotate(-90deg)";
	document.getElementById("nav-logo").style.transition = "2s";
}

/*/////////////////////////////////////select projects///////////////////////////////////*/

var designs = document.getElementsByClassName("design");
var marketing = document.getElementsByClassName("marketing");
var webshops = document.getElementsByClassName("webshops");


function showAll() {
	for (i = 0; i < designs.length; i++) {
		designs[i].style.display = "block";
		marketing[i].style.display = "block";
		webshops[i].style.display = "block";
	}
}

function showDesigns() {
	for (i = 0; i < designs.length; i++) {
		designs[i].style.display = "block";
		marketing[i].style.display = "none";
		webshops[i].style.display = "none";
	}
}

function showMarketing() {
	for (i = 0; i < designs.length; i++) {
		designs[i].style.display = "none";
		marketing[i].style.display = "block";
		webshops[i].style.display = "none";
	}
}

function showWebshops() {
	for (i = 0; i < designs.length; i++) {
		designs[i].style.display = "none";
		marketing[i].style.display = "none";
		webshops[i].style.display = "block";
	}
}

/*////////////////////////////////projects flex//////////////////////////////*/


var fishCount = 1;
var blubCount = 0;


/*///////////////////////////fish global fed/////////////*/


function fishBlub() {
	var fish = document.getElementById("blub-txt");
	blubCount++;
	if (fishCount == 0) {
		fish.style.display = "none";
		fishCount = 1;
	} else {
		fish.style.display = "block";
		fishCount = 0;
	}
}

var feedfish3count = 0;

function feedfish3() {
	if (feedfish3count == 10) {
		var fish = document.getElementById("fish3");
		fish.style.transform = "rotate(-180deg)";
		fish.style.transition = "3s";
		document.getElementById("blub-txt").innerHTML = "R.I.P.";
		fish3dead = 1;
	} else {
		feedfish3count++;
	}
}

function fish3() {
	totalCount++;
	feedfish3();
	fishBlub();
	setCount();
	fishesAreDead ();
}

function fishBlub2() {
	var fish = document.getElementById("blub-txt2");
	blubCount++;
	if (fishCount == 0) {
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

function feedfish1() {
	if (feedfish1count == 10) {
		var fish = document.getElementById("fish2");
		fish.style.transform = "rotate(-180deg)";
		fish.style.transition = "3s";
		document.getElementById("blub-txt2").innerHTML = "R.I.P.";
		fish1dead = 1;
	} else {
		feedfish1count++;
	}
}

function fish1() {
	totalCount++;
	feedfish1();
	fishBlub2();
	setCount();
	fishesAreDead ();
}
/*
localStorage.setItem("fishcount", fishCount)
var cat = localStorage.getItem('myCat'); 
*/
var totalCount = sessionStorage.getItem("sessionCount");

function setCount() {
	sessionStorage.setItem("sessionCount", totalCount);
}

var fish1dead = 0;
var fish3dead = 0;
var bossFish = sessionStorage.getItem("bossOn");

function fishesAreDead () {
	if (totalCount >= 20) {
		alert("fishes are dead");
		totalCount = 0;
		var bossFish = 1;
		sessionStorage.setItem("bossOn", bossFish)
	}
};


function showButton () {
	if (bossFish == 1) {
		document.getElementById("finalBtn").style.opacity = 1;
	}
}

var bossCount = 0;

function feedBossFish () {
	var bosstext = document.getElementById("boss-txt");
	bossCount++;
	if (bossCount == 0) {
		bosstext.style.display = "none";
		bossCount = 1;
	} else {
		bosstext.style.display = "block";
		bossCount = 0;
	}
}

function bossFishTxt () {
	var bosstext = document.getElementById("boss-txt")
	bosstext.innerHTML = "Master Blob, I have failed you";
}
