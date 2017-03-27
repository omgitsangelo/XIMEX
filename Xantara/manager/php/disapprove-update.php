<?php
  if(isset($_POST['submit-edit-post']))
  {
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'xantara';

    $conn = new mysqli($server, $username, $password, $dbname);

    $ref_no = $_POST['updates_id'];

    $query = "Update Updates set UpdatesIsApproved = 0, UpdatesIsActive = 0 where UpdatesID = '$ref_no';";
    $query .= "INSERT INTO logfiles(logdatetime, logname, logdesc) VALUES(Now(), 'Manager', 'Disapproved post')";

    if(!$conn->multi_query($query))
    {
      echo "Insert and Update function unsuccessful" . mysqli_error($conn);
    }
    else {
      header("location: ../manage-post/view-current-post.php");
    }
  }
?>
