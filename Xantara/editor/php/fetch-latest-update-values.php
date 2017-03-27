<?php
  $server = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'xantara';

  $conn = new mysqli($server, $username, $password, $dbname);

  $select = "select * from updates where UpdatesID = $_GET[updates_id]";
  $result=mysqli_query($conn,$select);

  if ($result->num_rows > 0)
  {
    while ($row = mysqli_fetch_array($result))
    {
      $updates_id = $row['UpdatesID'];
      $title = $row['UpdatesHeader'];
      $content = $row['UpdatesContent'];
    }
  }
  else {
    echo "Cannot add record! " .mysqli_error($conn);
  }
?>
