$(".edit").click(function() {
  var iteration=$(this).data('iteration')||1
  switch ( iteration) {
    case 1:
    $(".mainsidenav").css("width", "20%");
    $("#slideshow-container").css("margin-left", "20%");
    $("#slideshow-container").css("width", "80%");
    $(".topnav").css("margin-left", "20%");
    $(".topnav").css("width", "80%");
    break;

    case 2:
    $(".mainsidenav").css("width", "0%");
    $("#slideshow-container").css("margin-left", "0%");
    $("#slideshow-container").css("width", "100%");
    $(".topnav").css("margin-left", "0% ");
    $(".topnav").css("width", "100%");
    break;
  }
  iteration++;
  if (iteration>2) iteration=1
  $(this).data('iteration',iteration)
});

$(".closebtn").click(function() {
  $(".mainsidenav").css("width", "0%");
  $("#slideshow-container").css("margin-left", "0%");
  $("#slideshow-container").css("width", "100%");
  $(".topnav").css("margin-left", "0% ");
  $(".topnav").css("width", "100%");
});
