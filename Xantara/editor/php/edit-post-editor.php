<?php
  if(isset($_POST['submit-edit-post']))
  {
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $dbname = 'xantara';

    $conn = new mysqli($server, $username, $password, $dbname);

    $ref_no = $_POST['ref_no'];
    $title = $_POST['post-edit-title'];
    $content = $_POST['post-edit-content'];

    $title = mysqli_real_escape_string($conn, $title);
    $content = mysqli_real_escape_string($conn, $content);

    $query = "INSERT INTO edited_updates(UpdatesHeader, UpdatesContent, date_time, UpdatesIsActive, ref_no) VALUES('$title', '$content', Now(), 1, '$ref_no');";
    $query .= "INSERT INTO logfiles(logdatetime, logname, logdesc) VALUES(Now(), 'Editor', 'Edited a post')";

    if(!$conn->multi_query($query))
    {
      echo "Insert and Update function unsuccessful";
    }
    else {
      header("location: ../post-editor/post-editor-index.php");
    }
  }
?>
