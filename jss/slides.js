
var slide1Index = 0;
showSlide1();

function showSlide1() {
    var i;
    var slides1 = document.getElementsByClassName("slides1");
    for (i = 0; i < slides1.length; i++) {
        slides1[i].style.display = "none";
    }
    slide1Index++;
    if (slide1Index> slides1.length) {slide1Index = 1}
    slides1[slide1Index-1].style.display = "block";
    setTimeout(showSlide1, 2000); // Change image every 2 seconds
}

var slide1Index = 0;
showSlide1();

function showSlide1() {
    var o;
    var slides2 = document.getElementsByClassName("slides2");
    for (o = 0; o < slides2.length; o++) {
        slides2[o].style.display = "none";
    }
    slide1Index++;
    if (slide1Index> slides2.length) {slide1Index = 1}
    slides2[slide1Index-1].style.display = "block";
    setTimeout(showSlide1, 2000); // Changse image every 2 seconds
}
