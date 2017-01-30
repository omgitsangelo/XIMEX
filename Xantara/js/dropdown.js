/*$(document).ready(function(){
    $("div.dropdown").hover(function(){
        $("#dropdownmenu").fadeToggle();
        $("#sale").animation
    });
}); */
$(document).ready(function(){
  $("div.dropdown").hover(
  function(){
    $("#sale").animate({
      height: '300px',
      width: '300px'
    });
    $("#dropdownmenu").fadeToggle();
  },
  function(){
    $("#sale").animate({
      height: '250px',
      width: '250px'
    });
    $("#dropdownmenu").fadeToggle();
  });
});
