<?php
include '../../php/database.php';
include '../../php/FetchData/FetchSlide4.php';
include '../../php/FetchData/FetchSlide4BG.php';
include '../../php/FetchData/FetchSlide4Form.php';

header("Content-type: text/css; charset: UTF-8");
 ?>

.button
{
 background-color:<?php echo $slide4buttoncolor; ?>;
 color: <?php echo $slide4buttontextcolor; ?>;
 font-size: <?php echo $slide4buttontextsize; ?>px;
}

.hero_header
{
  color: <?php echo $slide4headercolor; ?>!important;
  font-size: <?php echo $slide4headersize; ?>px;
 }
#contact {
	background-image: url("../../<?php echo $slide4bgpath; ?>");
}
.forms {
	background-color: <?php echo $slide4formcolor; ?>;
  color: <?php echo $slide4formtextcolor; ?>;
}
.forms input[type=text], .forms input[type=email] {
	font-size: <?php echo $slide4formtextsize; ?>px;
}
.forms textarea {
  font-size: <?php echo $slide4formtextsize; ?>px;
}
.forms h2 {
	font-size: <?php echo $slide4formheadersize; ?>px;
	font-variant: small-caps;
  color: <?php echo $slide4formheadercolor; ?>;
}
.forms input[type=submit] {
  background-color: <?php echo $slide4formbuttoncolor; ?>;
  color: <?php echo $slide4formbuttontextcolor; ?>;
  font-size: <?php echo $slide4formbuttontextsize; ?>px
}
