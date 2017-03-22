<?php
  $server = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'xantara';

  $conn = new mysqli($server, $username, $password, $dbname);


  $UpdatesID = $_GET['UpdatesID'];
  $select = "SELECT * FROM updates WHERE UpdatesID = '$UpdatesID' && UpdatesIsApproved = 1 && UpdatesIsActive = 1";
  $result = mysqli_query($conn,$select);

  if ($result->num_rows > 0)
  {
    while ($row = mysqli_fetch_array($result))
    {
      $title = $row['UpdatesHeader'];
      $content = $row['UpdatesContent'];
      $id = $row['UpdatesID'];
      $datetime = date_create($row['DateTime']);
      $date = date_format($datetime, 'F:j:Y');

      echo "<div class='full-news-column'>";
        echo "<p class='full-news-header'>$title</p>";
        echo "<p class='full-news-date'>$date</p>";
        echo "<p class='full-news-content'>$content</p>";
      echo "</div>";
    }
  }
  else {
    echo "Cannot add record! " .mysqli_error($conn);
  }
?>
