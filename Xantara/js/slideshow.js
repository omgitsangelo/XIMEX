var readmore = document.getElementsByClassName("read-more");
var slideIndex = 1;
var close = document.getElementsByClassName("close-button")[0];

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


close.onclick = function() {
    document.getElementById('modal-container').style.display = "none";
}

window.onclick = function(event) {
    if (event.target == document.getElementById('modal-container')) {
        document.getElementById('modal-container').style.display = "none";
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
