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

$(".logosidenavbutton").click(function() {
  var iteration=$(this).data('iteration')||1
  switch ( iteration) {
    case 1:
    $(".logosidenav").css("height", "20%");
    break;

    case 2:
    $(".logosidenav").css("height", "0");
    break;
  }
  iteration++;
  if (iteration>2) iteration=1
  $(this).data('iteration',iteration)
});

$(".logosizesidenavbutton").click(function() {
  var iteration=$(this).data('iteration')||1
  switch ( iteration) {
    case 1:
    $(".logosizesidenav").css("height", "20%");
    break;

    case 2:
    $(".logosizesidenav").css("height", "0");
    break;
  }
  iteration++;
  if (iteration>2) iteration=1
  $(this).data('iteration',iteration)
});

$(".bgsidenavbutton").click(function() {
  var iteration=$(this).data('iteration')||1
  switch ( iteration) {
    case 1:
    $(".bgsidenav").css("height", "20%");
    break;

    case 2:
    $(".bgsidenav").css("height", "0");
    break;
  }
  iteration++;
  if (iteration>2) iteration=1
  $(this).data('iteration',iteration)
});

$(".textsidenavbutton").click(function() {
  var iteration=$(this).data('iteration')||1
  switch ( iteration) {
    case 1:
    $(".textsidenav").css("height", "20%");
    break;

    case 2:
    $(".textsidenav").css("height", "0");
    break;
  }
  iteration++;
  if (iteration>2) iteration=1
  $(this).data('iteration',iteration)
});

$(".editslide1").click(function() {
  var iteration=$(this).data('iteration')||1
  switch ( iteration) {
    case 1:
    $(".slide1submenu").css("height", "20%");
    break;

    case 2:
    $(".slide1submenu").css("height", "0");
    break;
  }
  iteration++;
  if (iteration>2) iteration=1
  $(this).data('iteration',iteration)
});

$(".editslide2").click(function() {
  var iteration=$(this).data('iteration')||1
  switch ( iteration) {
    case 1:
    $(".slide2submenu").css("height", "20%");
    break;

    case 2:
    $(".slide2submenu").css("height", "0");
    break;
  }
  iteration++;
  if (iteration>2) iteration=1
  $(this).data('iteration',iteration)
});
$(".slide2bg").click(function() {
  var iteration=$(this).data('iteration')||1
  switch ( iteration) {
    case 1:
    $(".bgsidenav2").css("height", "20%");
    break;

    case 2:
    $(".bgsidenav2").css("height", "0");
    break;
  }
  iteration++;
  if (iteration>2) iteration=1
  $(this).data('iteration',iteration)
});
$(".slide2text").click(function() {
  var iteration=$(this).data('iteration')||1
  switch ( iteration) {
    case 1:
    $(".textsidenav2").css("height", "20%");
    break;

    case 2:
    $(".textsidenav2").css("height", "0");
    break;
  }
  iteration++;
  if (iteration>2) iteration=1
  $(this).data('iteration',iteration)
});
$(".editslide3").click(function() {
  var iteration=$(this).data('iteration')||1
  switch ( iteration) {
    case 1:
    $(".slide3submenu").css("height", "20%");
    break;

    case 2:
    $(".slide3submenu").css("height", "0");
    break;
  }
  iteration++;
  if (iteration>2) iteration=1
  $(this).data('iteration',iteration)
});
$(".editslide4").click(function() {
  var iteration=$(this).data('iteration')||1
  switch ( iteration) {
    case 1:
    $(".slide4submenu").css("height", "20%");
    break;

    case 2:
    $(".slide4submenu").css("height", "0");
    break;
  }
  iteration++;
  if (iteration>2) iteration=1
  $(this).data('iteration',iteration)
});
