<?php
$target_dir = "Slide1/Background";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submitSlide1BG"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
      echo "File is an image - " . $check["mime"] . ".";
      $uploadOk = 1;
  } else {
      echo "File is not an image.";
      $uploadOk = 0;
  }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 52428800) {
    echo "Sorry, you cannot exceed 50mb.";
    $uploadOk = 0;
}
// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    echo $target_file;
// if everything is ok, try to upload file
} else {
  $server = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'xantara';

  $conn = new mysqli($server, $username, $password, $dbname);

  $path = "Slide1/Background" . basename( $_FILES["fileToUpload"]["name"]);

  $path =  mysqli_real_escape_string($conn, $path);

  $select = "Update slide1bg set Slide1BGPathIsActive = 0 where Slide1BGPathIsActive = 1;";
  $select .= "Update slide1bg set Slide1BGPathIsActive = 1 where Slide1BGPath =  '$path'";

  if(!$conn->multi_query($select))
  {
    echo $path;
    echo "Path not saved";
  }
  else
  {
    echo $path;
    echo "Path saved";
    header("location: adminindex.php");
  }
}

error_reporting(0);


?>
