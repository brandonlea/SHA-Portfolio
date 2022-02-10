


window.onscroll = function () {
    var currentScrollPos = window.pageYOffset;

    var doc = document.getElementById('nav-links');
    for(var i = 0; i < doc.childNodes.length; i++) {
        if(currentScrollPos > 180) {
            if(i === 5) {
                return;
            }

            doc.children[i].classList.add("text-white");
            document.getElementById('navbar').classList.add("bg-gray-900");

        } else {
            doc.children[i].classList.remove("text-white");
            document.getElementById('navbar').classList.remove("bg-gray-900");
            if(i === 5) {
                return;
            }
        }
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
