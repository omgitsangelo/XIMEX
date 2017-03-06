<?php

if(isset($_POST['submitSlide4Values']))
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

  $slide4headercolor = $_POST['sld4headcol'];
  $slide4headersize = $_POST['sld4headsize'];
  $slide4headercontent = $_POST['sld4headcon'];
  $slide4buttoncolor = $_POST['sld4butcol'];
  $slide4buttontextcolor = $_POST['sld4buttxtcol'];
  $slide4buttontextsize = $_POST['sld4buttxtsize'];
  $slide4buttontextcontent = $_POST['sld4buttxtcon'];

  $slide4headercontent =  mysqli_real_escape_string($conn, $slide4headercontent);
  $slide4buttontextcontent =  mysqli_real_escape_string($conn, $slide4buttontextcontent);
  $query = "UPDATE slide4 SET Slide4IsActive = 0 WHERE Slide4IsActive = 1;";
  $query .= "INSERT INTO slide4(Slide4HeaderColor, Slide4HeaderSize, Slide4HeaderContent, Slide4ButtonColor, Slide4ButtonTextColor, Slide4ButtonTextSize, Slide4ButtonTextContent, Slide4IsActive, Slide4IsApproved, Slide4IsDefault) VALUES('$slide3lefttextcolor', '$slide3lefttextsize', '$slide3lefttext1content', '$slide3lefttext2content', '$slide3lefttext3content', '$slide3lefttext1content4', 1, 1, 1)";

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
