<?php

if(isset($_POST['submitSlide3RightValues']))
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

  $slide3righttextbgcolor = $_POST['sld3righttxtbgcol'];
  $slide3righttextcolor = $_POST['sld3righttxtcol'];
  $slide3righttextsize = $_POST['sld3lefttxtsize'];
  $slide3righttext1content = $_POST['sld3righttxtboxcon1'];
  $slide3righttext2content = $_POST['sld3righttxtboxcon2'];
  $slide3righttext3content = $_POST['sld3righttxtboxcon3'];
  $slide3righttext4content = $_POST['sld3righttxtboxcon4'];

  $slide3righttext1content =  mysqli_real_escape_string($conn, $slide3righttext1content);
  $slide3righttext2content =  mysqli_real_escape_string($conn, $slide3righttext2content);
  $slide3righttext3content =  mysqli_real_escape_string($conn, $slide3righttext3content);
  $slide3righttext4content =  mysqli_real_escape_string($conn, $slide3righttext4content);
  $query = "UPDATE slide3right SET Slide3RightIsActive = 0 WHERE Slide3RightIsActive = 1;";
  $query .= "INSERT INTO slide3right(/*Slide3RightTextBGColor, */Slide3RightTextColor, Slide3RightTextSize, Slide3LeftRight1Content, Slide3RightText2Content, Slide3RightText3Content, Slide3RightText4Content, Slide3RightIsActive) VALUES(/*'$slide3righttextbgcolor', */'$slide3righttextcolor', '$slide3righttextsize', '$slide3righttext1content', '$slide3righttext2content', '$slide3righttext3content', '$slide3righttext4content', 1)";

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
