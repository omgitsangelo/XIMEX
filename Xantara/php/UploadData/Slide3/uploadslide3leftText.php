<?php

if(isset($_POST['submitSlide3LeftValues']))
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

  $slide3lefttextbgcolor = $_POST['sld3lefttxtbgcol'];
  $slide3lefttextcolor = $_POST['sld3lefttxtcol'];
  $slide3lefttextsize = $_POST['sld3lefttxtsize'];
  $slide3lefttext1content = $_POST['sld3lefttxtboxcon1'];
  $slide3lefttext2content = $_POST['sld3lefttxtboxcon2'];
  $slide3lefttext3content = $_POST['sld3lefttxtboxcon3'];
  $slide3lefttext4content = $_POST['sld3lefttxtboxcon4'];

  $slide3lefttext1content =  mysqli_real_escape_string($conn, $slide3lefttext1content);
  $slide3lefttext2content =  mysqli_real_escape_string($conn, $slide3lefttext2content);
  $slide3lefttext3content =  mysqli_real_escape_string($conn, $slide3lefttext3content);
  $slide3lefttext4content =  mysqli_real_escape_string($conn, $slide3lefttext4content);
  $query = "UPDATE slide3left SET Slide3LeftIsActive = 0 WHERE Slide3LeftIsActive = 1;";
  $query .= "INSERT INTO slide3left(Slide3LeftTextBGColor, Slide3LeftTextColor, Slide3LeftTextSize, Slide3LeftText1Content, Slide3LeftText2Content, Slide3LeftText3Content, Slide3LeftText4Content, Slide3LeftIsActive) VALUES('$slide3lefttextbgcolor', '$slide3lefttextcolor', '$slide3lefttextsize', '$slide3lefttext1content', '$slide3lefttext2content', '$slide3lefttext3content', '$slide3lefttext1content4', 1)";

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
