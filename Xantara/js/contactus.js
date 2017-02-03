$(document).ready(function(){
  $(".button").click(function(){
    $("#heroheader").fadeOut();
    $("#forms").fadeIn();
    $("#contactus").fadeOut();

  });

  $(".contact").hover(function(){
    $("#heroheader").fadeIn();
    $("#forms").fadeOut();
    $("#contactus").fadeIn();
  });
});
