<?php
  $server = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'xantara';

  $conn = new mysqli($server, $username, $password, $dbname);

  $select = "select * from Updates where UpdatesIsActive = 1 && UpdatesIsApproved = 1 ORDER BY date_time DESC";
  $result=mysqli_query($conn,$select);

  if ($result->num_rows > 0)
  {
    while ($row = mysqli_fetch_array($result))
    {
      $title = $row['UpdatesHeader'];
      $content = $row['UpdatesContent'];

      echo "<div class='col-12 col-m-12 articles'>";
        echo "<h2>$row[UpdatesHeader]</h2>";
        echo "<br>";
        echo "<br>";
        echo "<p>";
          echo $row['UpdatesContent'];
        echo "</p>";
        echo "<button><a href='../manage-post/edit-current-post.php?updates_id=$row[UpdatesID]'>EDIT</a></button>";
        echo "<button><a href='../manage-post/remove-current-post.php?updates_id=$row[UpdatesID]'>REMOVE</a></button>";
      echo "</div>";
      echo "<br>";
      echo "<br>";
    }
  }
  else {
    echo "Cannot add record! " .mysqli_error($conn);
  }
?>
