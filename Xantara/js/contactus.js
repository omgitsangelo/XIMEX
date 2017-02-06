$(document).ready(function(){
  $(".button").click(function(){
    $("#heroheader").fadeOut();
    $("#forms").fadeIn();
    $("#contactus").fadeOut();
  });
  $("#forms").hover(null ,function(){
    $("#heroheader").fadeIn();
    $("#forms").fadeOut();
    $("#contactus").fadeIn();
  });
});
