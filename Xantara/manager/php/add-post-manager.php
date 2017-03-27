<?php
  if(isset($_POST['submit-post']))
  {
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'xantara';

    $conn = new mysqli($server, $username, $password, $dbname);

    $title = $_POST['post-title'];
    $content = $_POST['post_content'];

    $title = mysqli_real_escape_string($conn, $title);
    $content = mysqli_real_escape_string($conn, $content);

    $query = "INSERT INTO updates(UpdatesHeader, UpdatesContent, date_time, UpdatesIsActive, UpdatesIsApproved) VALUES('$title', '$content', NOW(), 1, 1);";
    $query .= "INSERT INTO logfiles(logdatetime, logname, logdesc) VALUES(Now(), 'Manager', 'Added post')";

    if(!$conn->multi_query($query))
    {
      echo "Insert and Update function unsuccessful" . mysqli_error($conn);
    }
    else {
      header("location: ../manage-post/view-current-post.php");
    }
  }
?>
