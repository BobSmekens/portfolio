window.addEventListener("mousemove", mouseCoords);
//window.addEventListener("click", logMouseCoords);
window.addEventListener("mousemove", updateOffset);

var contentBox = document.getElementById("contactContent");

var mousex = 0;
var mousey = 0;

function mouseCoords(event) {
	mousex = event.pageX;
	mousey = event.pageY;
}
/* log mosuecords
function logMouseCoords () {
	var mousex = event.pageX;
  	var mousey = event.pageY;
	console.log(mousex);
	console.log(mousey);
}
*/

var offsetLeft = 0;
var offsetTop = 0;

function updateOffset() {
	var contentBox = document.getElementById("contactContent");

	offsetLeft = (mousex - 0.5 * window.innerWidth) / 90;
	offsetTop = -1 * mousey / 90;
	offsetRight = -1 * offsetLeft;

	var offset = "translate(" + offsetRight + "px," + offsetTop + "px)";
	contentBox.style.transform = offset;
}