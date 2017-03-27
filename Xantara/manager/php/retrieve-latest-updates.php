<?php
  if(isset($_POST['retrieve-post']))
  {
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'xantara';

    $conn = new mysqli($server, $username, $password, $dbname);

    $ref_no = $_POST['ref_no'];

    $query = "Update Updates set UpdatesIsActive = 0 where UpdatesID = '$ref_no';";
    $query .= "INSERT INTO logfiles(logdatetime, logname, logdesc) VALUES(Now(), 'Manager', 'Retrieved post')";

    if(!$conn->multi_query($query))
    {
      echo "Insert and Update function unsuccessful" . mysqli_error($conn);
    }
    else {
      header("location: ../manage-post/view-current-post.php");
    }
  }
?>
