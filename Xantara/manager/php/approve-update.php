<?php
  $server = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'xantara';

  $conn = new mysqli($server, $username, $password, $dbname);

  $ref_no = $_GET['updates_id'];

  $query = "Update Updates set date_time = NOW(), UpdatesIsApproved = 1, UpdatesIsActive = 1 where UpdatesID = '$ref_no';";
  $query .= "INSERT INTO logfiles(logdatetime, logname, logdesc) VALUES(Now(), 'Manager', 'Approved post')";

  if(!$conn->multi_query($query))
  {
    echo "Insert and Update function unsuccessful" . mysqli_error($conn);
  }
  else {
    header("location: ../manage-post/view-current-post.php");
  }

?>
