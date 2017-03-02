<?php
$target_dir = "../../../Upload/Slide2/Background/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 0;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submitSlide2BG"])) {
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
if (!file_exists($target_file)) {
    echo "Please upload the image first.";
    $uploadOk = 0;
}
// Check file size
if ($_FILES["fileToUpload"]["size"] > 9000000000) {
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
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
    $path = "../../../Upload/Slide2/Background/" . basename( $_FILES["fileToUpload"]["name"]);

    $server = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'xantara';

    $conn = new mysqli($server, $username, $password, $dbname);

    $path = "Upload/Slide2/Background/" . basename( $_FILES["fileToUpload"]["name"]);

    $path =  mysqli_real_escape_string($conn, $path);

    $select = "Update slide2bg set Slide2BGPathIsActive = 0 where Slide2BGPathIsActive = 1;";
    // $select .= "INSERT INTO slide1bg(Slide1BGPath)VALUES('$path');";
    $select .= "Update slide2bg set Slide2BGPathIsActive = 1 where Slide2BGPath =  '$path'";

    if(!$conn->multi_query($select))
    {
      echo $path;
      echo "Path not saved" .mysqli_error($conn);

    }
    else
    {
      header("location: ../../../admin/adminindex.php");
      exit();
    }
  }
}

error_reporting(0);


?>
