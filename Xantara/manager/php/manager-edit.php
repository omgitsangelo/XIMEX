<?php
  if(isset($_POST['submit-edit-post']))
  {
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'xantara';

    $conn = new mysqli($server, $username, $password, $dbname);

    $title = $_POST['post-edit-title'];
    $content = $_POST['post-edit-content'];

    $title = mysqli_real_escape_string($conn, $title);
    $content = mysqli_real_escape_string($conn, $content);

    $query = "INSERT INTO Updates(UpdatesHeader, UpdatesContent, UpdatesIsActive) VALUES('$title', '$content', 1);";
    $query .= "INSERT INTO logfiles(logdatetime, logname, logdesc) VALUES(Now(), 'Manager', 'Edited a post')";

    if(!$conn->multi_query($query))
    {
      echo "Insert and Update function unsuccessful";
    }
    else {
      header("location: ../manage-post/view-current-post.php");
    }
  }
?>
