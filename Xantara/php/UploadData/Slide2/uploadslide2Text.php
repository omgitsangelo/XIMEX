<?php

if(isset($_POST['submitSlide2Values']))
{
  $server = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'xantara';

  // Create connection
  $conn = new mysqli($server, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }

  $slide2missionheadercolor = $_POST['sld2misheadcol'];
  $slide2missionheadersize = $_POST['sld2misheadsize'];
  $slide2missiontextboxcolor = $_POST['sld2mistxtboxcol'];
  $slide2missiontextcolor = $_POST['sld2mistxtcol'];
  $slide2missiontextcontent = $_POST['sld2mistxtcon"'];
  $slide2visionheadercolor = $_POST['sld2visheadcol'];
  $slide2visionheadersize = $_POST['sld2visheadsize'];
  $slide2visiontextboxcolor = $_POST['sld2vistxtboxcol'];
  $slide2visiontextcolor = $_POST['sld2vistxtcol'];
  $slide2visiontextcontent = $_POST['sld2vistxtcon'];

  $text1 =  mysqli_real_escape_string($conn, $text1);
  $text2 =  mysqli_real_escape_string($conn, $text2);
  $text3 =  mysqli_real_escape_string($conn, $text3);
  $text4 =  mysqli_real_escape_string($conn, $text4);
  $query = "UPDATE slide2 SET Slide2IsActive = 0 WHERE Slide2IsActive = 1;";
  $query .= "INSERT INTO slide2(Slide2MissionHeaderColor, Slide2MissionHeaderSize, Slide2MissionTextboxColor, Slide2MissionTextColor, Slide2MissionTextContent, Slide2VisionHeaderColor, Slide2VisionHeaderSize, Slide2VisionTextboxColor, Slide2VisionTextColor, Slide2VisionTextContent, Slide2IsActive) VALUES('$slide2missionheadercolor', '$slide2missionheadersize', '$slide2missiontextboxcolor', '$slide2missiontextcolor', '$slide2missiontextcontent', '$slide2visionheadercolor', '$slide2visionheadersize', '$slide2visiontextboxcolor', '$slide2visiontextcolor', '$slide2visiontextcontent', 1)";

  if (!$conn->multi_query($query)) {
    //header("location: ../admin/adminindex.php");
    echo "Error: " . $query . "<br>" . multi_query_error($conn);

  } else {
    header("location: ../../../admin/adminindex.php");
    exit();
  }

  $conn->close();
}
else {
  echo "Post failed";
}
?>
