var readmore = document.getElementsByClassName("read-more");
var slideIndex = 1;

showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showThis(){
  if(document.location.search != '') {
      showSlides(slideIndex = 4);
      console.log(document.location.search);
      document.getElementById('modal-container').style.display = "block";

  } else {
      showSlides(slideIndex);
      console.log(document.location.search);
  }
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  slides[slideIndex-1].style.display = "block";
}
document.getElementsByClassName("close-button").onclick = function() {
    document.getElementById('modal-container').style.display = "none";
}
window.onclick = function(event) {
    if (event.target == document.getElementByid('modal-container')) {
        document.getElementById('modal-container').style.display = "none";
    }
}
