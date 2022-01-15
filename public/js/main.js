


window.onscroll = function () {
    var currentScrollPos = window.pageYOffset;

    if(currentScrollPos > 240) {
        document.getElementById('navbar').classList.add("bg-gray-900");
    } else {
        document.getElementById('navbar').classList.remove("bg-gray-900")
    }
}

var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    slides[slideIndex-1].style.display = "block";
    setTimeout(showSlides, 4 * 1000); // Change image every 2 seconds
}
