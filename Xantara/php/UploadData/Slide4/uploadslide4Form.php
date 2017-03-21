<?php

if(isset($_POST['submitSlide4FormValues']))
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

  $slide4buttontextcolor = $_POST['sld4formcol'];
  $slide4formtextsize = $_POST['sld4formtxtsize'];
  $slide4formtextcolor = $_POST['sld4formtxtcol'];
  $slide4formheadersize = $_POST['sld4formhdrsize'];
  $slide4formheadercolor = $_POST['sld4formhdrcol'];
  $slide4formheadercontent = $_POST['sld4formhdrcon'];
  $slide4formbuttoncolor = $_POST['sld4formbutcol'];
  $slide4formbuttontextcolor = $_POST['sld4formbuttxtcol'];
  $slide4formbuttontextsize = $_POST['sld4formbuttxtsize'];
  $slide4formbuttontextcontent = $_POST['sld4formbuttxtcon'];

  $slide4formheadercontent =  mysqli_real_escape_string($conn, $slide4formheadercontent);
  $slide4formbuttontextcontent =  mysqli_real_escape_string($conn, $slide4formbuttontextcontent);
  $query = "UPDATE slide4form SET Slide4FormIsActive = 0, Slide4FormIsApproved = 0 WHERE Slide4FormIsActive = 1 && Slide4FormIsApproved = 1;";
  $query .= "INSERT INTO slide4form(Slide4FormColor, Slide4FormTextSize, Slide4FormTextColor, Slide4FormHeaderSize, Slide4FormHeaderColor, Slide4FormHeaderContent, Slide4FormButtonColor, Slide4FormButtonTextColor, Slide4FormButtonTextSize, Slide4FormButtonTextContent, Slide4FormIsActive, Slide4FormIsApproved, Slide4FormIsDefault) VALUES('$slide4buttontextcolor', '$slide4formtextsize', '$slide4formtextcolor', '$slide4formheadersize', '$slide4formheadercolor', '$slide4formheadercontent', '$slide4formbuttoncolor', '$slide4formbuttontextcolor', '$slide4formbuttontextsize', '$slide4formbuttontextcontent', 1, 1, 0)";

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
