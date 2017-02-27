<?php
  include '../../php/database.php';
  include '../../php/FetchData/FetchSlide1.php';
  include '../../php/FetchData/FetchSlide1BG.php';
  include '../../php/FetchData/FetchSlide1Logo.php';

  header("Content-type: text/css; charset: UTF-8");
?>

.intro {
	background-image: url("../../<?php echo $slide1bgpath?>");
}
.profile-container {
	width: <?php echo "$slide1logosize" ?>%;
}
