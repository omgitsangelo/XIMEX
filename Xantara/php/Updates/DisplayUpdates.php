<?php
  $server = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'xantara';

  $conn = new mysqli($server, $username, $password, $dbname);

  $select = "SELECT * FROM updates WHERE UpdatesIsApproved = 1 && UpdatesIsActive = 1 ORDER BY DateTime DESC";
  $result = mysqli_query($conn,$select);

  if ($result->num_rows > 0)
  {
    while ($row = mysqli_fetch_array($result))
    {
      $title = $row['UpdatesHeader'];
      $content = $row['UpdatesContent'];
      $id = $row['UpdatesID'];
      $datetime = date_create($row['DateTime']);
      $month = date_format($datetime, 'M');
      $year = date_format($datetime, 'Y');
      $summary = substr($content, 0, 500);

      echo "<div class='row'>";
        echo "<div class='content-container'>";
          echo "<div class='col-3'>";
            echo "<div class='datetime-container'>";
              echo "<p class='datestamp month'>$month </p>";
              echo "<p class='datestamp year'>$year</p>";
              echo "<br/>";
              echo "<br/>";
            echo "</div>";
          echo "</div>";
          echo "<div class='col-9'>";
            echo "<p class='news-header'>$title</p>";
            echo "<p class='news-content'>$summary</p>";
            if (strlen($summary < $content )) {
              echo "<p class='news-content read-more'>Read More »</p>";
            };
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
