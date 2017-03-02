<?php

if(isset($_POST['submitSlide1Values']))
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

  $textcolor = $_POST['sld1txtcol'];
  $textsize = $_POST['sld1txtsize'];
  $text1 = $_POST['sld1txt1'];
  $text2 = $_POST['sld1txt2'];
  $text3 = $_POST['sld1txt3'];
  $text4 = $_POST['sld1txt4'];

  $text1 =  mysqli_real_escape_string($conn, $text1);
  $text2 =  mysqli_real_escape_string($conn, $text2);
  $text3 =  mysqli_real_escape_string($conn, $text3);
  $text4 =  mysqli_real_escape_string($conn, $text4);
  $query = "UPDATE slide1 SET Slide1IsActive = 0 WHERE Slide1IsActive = 1;";
  $query .= "INSERT INTO slide1(Slide1TextContent1, Slide1TextContent2, Slide1TextContent3, Slide1TextContent4, Slide1TextSize, Slide1TextColor, Slide1IsActive) VALUES('$text1', '$text2', '$text3', '$text4', '$textsize', '$textcolor', 1)";

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
