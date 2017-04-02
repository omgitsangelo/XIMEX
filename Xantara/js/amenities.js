var modal = document.getElementsByClassName('modal-pic');
var img = document.getElementsByClassName('modalimg');
var modalImg = document.getElementsByClassName("modal-pic-content");
var captionText = document.getElementsByClassName("modal-pic-caption");

img.onclick = function(){
    modal.style.display = "block";
    modalImg.src = this.src;
    captionText.innerHTML = this.alt;
}
var span = document.getElementsByClassName("close-pic")[0];

span.onclick = function() {
    modal.style.display = "none";
}
