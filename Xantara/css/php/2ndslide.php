<?php
  include '../../php/database.php';
  include '../../php/FetchData/FetchSlide2.php';
  include '../../php/FetchData/FetchSlide2BG.php';
  header("Content-type: text/css; charset: UTF-8");
?>
.misvis-container {
  background-image: url("../../<?php echo $slide2bgpath?>");
}
.mission h1 {
  font-size: <?php echo "$slide2missionheadersize" ?>px;
  color: <?php echo "$slide2missionheadercolor" ?>;
}
.mission .textbox {
  background: <?php echo "$slide2missiontextboxcolor" ?>;
}
.mission {
  color: <?php echo "$slide2missiontextcolor" ?>;
}
.vision h1 {
  font-size: <?php echo "$slide2visionheadersize" ?>px;
  color: <?php echo "$slide2visionheadercolor" ?>;
}
.vision {
  color: <?php echo "$slide2visiontextcolor" ?>;
}
