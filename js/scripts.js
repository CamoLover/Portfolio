var transnav = document.getElementById("navbar-transparent");

window.onscroll = function() {toggleOpaque()};

function toggleOpaque() {
    if (document.body.scrollTop > 50 || document.documentElement.scrollTop > 50) {
        transnav.classList.add("opaque");
    } else {
        transnav.classList.remove("opaque");
    }
}



let slideIndex = 0;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}

document.getElementById('navbarToggle').addEventListener('click', function() {
  document.getElementById('navLinks').classList.toggle('active');
});
