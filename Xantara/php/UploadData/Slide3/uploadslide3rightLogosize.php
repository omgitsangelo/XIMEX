<?php

if(isset($_POST['submitSlide3RightLogoSize']))
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

  $size = $_POST['sld3rightlogsize'];

  $query = "UPDATE slide3rightlogo SET Slide3RightLogoSize = '$size'";

  if ($conn->query($query) === TRUE) {
    header("location: ../../../admin/adminindex.php");
    exit();
  } else {
      echo "Error: " . $query . "<br>" . $conn->error;
  }
  $conn->close();
}
else {
  echo "Post failed";
}
?>
