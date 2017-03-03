<?php
  include '../../php/database.php';
  include '../../php/FetchData/FetchSlide3Left.php';
  include '../../php/FetchData/FetchSlide3LeftBG.php';
  include '../../php/FetchData/FetchSlide3LeftLogo.php';
  include '../../php/FetchData/FetchSlide3Right.php';
  include '../../php/FetchData/FetchSlide3RightBG.php';
  include '../../php/FetchData/FetchSlide3RightLogo.php';

  header("Content-type: text/css; charset: UTF-8");
?>
.leftscreen {
  background-image: url("../../<?php echo $slide3leftbgpath?>");
}
.rightscreen {
  background-image: url("../../<?php echo $slide3rightbgpath?>");
}
<!-- .xdelogo {
	width: <?php echo "$slide3leftlogosize" ?>%;
} -->
.selection p {
	<!-- background: rgba(70, 70, 70, 0.65); -->
	font-size: <?php echo "$slide3lefttextsize"?>px;
}
