<?php
  $server = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'xantara';

  $conn = new mysqli($server, $username, $password, $dbname);

  $select = "select * from editted_updates where is_active = 1 && is_approved = 0 ORDER BY datetime_log DESC";
  $result=mysqli_query($conn,$select);

  if ($result->num_rows > 0)
  {
    while ($row = mysqli_fetch_array($result))
    {
      $title = $row['UpdatesHeader'];
      $content = $row['UpdatesContent'];
      $datetime_log = $row['date_time'];
      echo "<div class='col-12 col-m-12 articles'>";
        echo "<h2>$title</h2>";
        echo "<br>";
        echo "<br>";
        echo "<p>";
          echo $content;
        echo "</p>";
        echo "<br>";
        echo "Sent: ";  echo $datetime_log;
        echo "<br>";
        echo "<br>";
        echo "<button><a href='../php/approve-editted-update.php?updates_id=$row[updates_id]'>APPROVE</a></button>";
        echo "<button><a href='../php/disapprove-editted-update.php?updates_id=$row[updates_id]'>REJECT</a></button>";
        echo "<button><a href='../php/show-original-update.php?updates_id=$row[updates_id]'>SHOW ORIGINAL</a></button>";
      echo "</div>";
      echo "<br>";
      echo "<br>";
    }
  }
  else {
    echo "Cannot add record! " .mysqli_error($conn);
  }
?>
