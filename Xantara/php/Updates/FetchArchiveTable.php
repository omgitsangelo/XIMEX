<?php
  $server = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'xantara';

  $conn = new mysqli($server, $username, $password, $dbname);

  $select = "SELECT * FROM updates WHERE UpdatesIsApproved = 1 && UpdatesIsActive = 1";
  $result = mysqli_query($conn,$select);

  if ($result->num_rows > 0)
  {
    while ($row = mysqli_fetch_array($result))
    {
      $id = $row['UpdatesID'];
      $title = $row['UpdatesHeader'];
      $content = $row['UpdatesContent'];
      $datetime = date_create($row['DateTime']);
      $date = date_format($datetime, 'F Y');

        echo "<li><span class='news-dates'>$date</span></li>";
    }
  }
  else {
    echo "Cannot add record! " .mysqli_error($conn);
  }
?>
