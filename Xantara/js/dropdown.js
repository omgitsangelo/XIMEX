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
      height: '20%',
      width: '20%'
    });
    $("#dropdownmenu").fadeToggle();
  },
  function(){
    $("#sale").animate({
    //  height: '50%',
    //  width: '50%'
    });
    $("#dropdownmenu").fadeToggle();
  });
});
