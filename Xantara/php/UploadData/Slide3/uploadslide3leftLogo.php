<?php
$target_dir = "../../../Upload/Slide3/Logo/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 0;
$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if(isset($_POST["submitSlide3leftLogo"])) {
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
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// // Check file size
// if ($_FILES["fileToUpload"]["size"] > 9000000000) {
//     echo "Sorry, you cannot exceed 50mb.";
//     $uploadOk = 0;
// }

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
    $path = "../../../Upload/Slide3/Logo/" . basename( $_FILES["fileToUpload"]["name"]);

    $server = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'xantara';

    $conn = new mysqli($server, $username, $password, $dbname);

    $path = "Upload/Slide3/Logo/" . basename( $_FILES["fileToUpload"]["name"]);

    $path =  mysqli_real_escape_string($conn, $path);

    $query = "Update slide3leftlogo set Slide3LeftLogoIsActive = 0 where Slide3LeftLogoIsActive = 1;";
    // $select .= "INSERT INTO slide1logo(Slide1LogoPath)VALUES('$path');";

    $query .= "Update slide3leftlogo set Slide3LeftLogoIsActive = 1 where Slide3LeftLogoPath = '$path'";


    if(!$conn->multi_query($query))
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
