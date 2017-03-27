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

    $query = "INSERT INTO updates(UpdatesHeader, UpdatesContent, UpdatesIsActive, UpdatesIsApproved) VALUES('$title', '$content', 0, 1);";
    $query .= "INSERT INTO logfiles(logdatetime, logname, logdesc) VALUES(Now(), 'Editor', 'Added post')";

    if(!$conn->multi_query($query))
    {
      echo "Insert and Update function unsuccessful";
    }
    else {
      header("location: ../post-editor/post-editor-index.php");
      exit();
    }
  }
?>
