<?php
  $server = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'xantara';

  $conn = new mysqli($server, $username, $password, $dbname);

  $select = "SELECT * FROM updates WHERE UpdatesIsApproved = 1 && UpdatesIsActive = 1 ORDER BY date_time DESC";
  $result = mysqli_query($conn,$select);

  if ($result->num_rows > 0)
  {
    while ($row = mysqli_fetch_array($result))
    {
      $title = $row['UpdatesHeader'];
      $content = $row['UpdatesContent'];
      $id = $row['UpdatesID'];
      $datetime = date_create($row['date_time']);
      $month = date_format($datetime, 'Y-m-d H:i:s');
      $summary = substr($content, 0, 500);

      echo "<div class='row'>";
        echo "<div class='content-container' style='padding: 5% 5%;'>";
          echo "<div class='col-2'>";
              echo "<p style='text-align:center; margin-top: 10%; line-height: 100%;' class='month'>$month</p>";
          echo "</div>";
          echo "<div class='col-10'>";
            echo "<p class='news-header'>$title</p>";
            echo "<p class='news-content'>$content</p>";
            echo "<button><a href='../post-editor/edit-latest-updates.php?updates_id=$row[UpdatesID]'>EDIT</a></button>";
            echo "<br/>";
            echo "<br/>";
          echo "</div>";
        echo "</div>";
      echo "</div>";
    }
  }
  else {
    echo "Cannot add record! " .mysqli_error($conn);
  }
?>
