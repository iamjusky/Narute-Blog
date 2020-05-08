function currentSlide(n) {
    showSlides(n);
}
function showSlides(n) {
    var i;
    var slides = document.getElementsByClassName("sli");
    var btts = document.getElementsByClassName("button-slide-container")[0].getElementsByTagName("LI");
    for (i = 0; i < slides.length; i++) {
        if (i == n) {
            slides[i].style.display = "block";
            btts[i].style.backgroundColor = "rgb(1, 123, 1)";
        }
        else {
            slides[i].style.display = "none";
            btts[i].style.backgroundColor = "rgb(167, 166, 166)";
        };
    }
}

