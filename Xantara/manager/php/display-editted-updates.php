<?php
  $server = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'xantara';

  $conn = new mysqli($server, $username, $password, $dbname);

  $select = "select * from edited_updates where UpdatesIsActive = 1 && UpdatesIsApproved = 0 ORDER BY date_time DESC";
  $result=mysqli_query($conn,$select);

  if ($result->num_rows > 0)
  {
    while ($row = mysqli_fetch_array($result))
    {
      $title = $row['UpdatesHeader'];
      $content = $row['UpdatesContent'];
      $datetime_log = $row['date_time'];
      $id = $row['UpdatesID'];
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
        echo "<button><a href='../php/approve-editted-update.php?updates_id=$id'>APPROVE</a></button>";
        echo "<button><a href='../php/disapprove-editted-update.php?updates_id=$id'>REJECT</a></button>";
        echo "<button><a href='../php/show-original-update.php?updates_id=$id'>SHOW ORIGINAL</a></button>";
      echo "</div>";
      echo "<br>";
      echo "<br>";
    }
  }
  else {
    echo "No new update! " .mysqli_error($conn);
  }
?>
