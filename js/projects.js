
var sliderProjects = document.getElementsByClassName("project-container-pic");
var sliderCount = 0;

function changeSliderProjectMinus() {
    if(sliderCount == 0){
    sliderProjects[sliderCount].style.display = "none";
    sliderCount = sliderProjects.length;
    sliderProjects[sliderCount-1].style.display = "inline-block";
    sliderCount --;
    } else {
    sliderProjects[sliderCount].style.display = "none";
    sliderProjects[sliderCount-1].style.display = "inline-block";
    sliderCount --;
    }
}

function changeSliderProjectPlus () {
    if(sliderCount == sliderProjects.length-1){
    sliderProjects[sliderCount].style.display = "none";
    sliderCount = -1;
    sliderProjects[sliderCount+1].style.display = "inline-block";
    sliderCount ++;
    } else {
    sliderProjects[sliderCount].style.display = "none";
    sliderProjects[sliderCount+1].style.display = "inline-block";
    sliderCount ++;
    }
}















