<?php
  $server = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'xantara';

  $conn = new mysqli($server, $username, $password, $dbname);

  $select = "select * from Updates where UpdatesIsActive = 1 && UpdatesIsApproved = 0";
  $result=mysqli_query($conn,$select);

  if ($result->num_rows > 0)
  {
    while ($row = mysqli_fetch_array($result))
    {
      $title = $row['UpdatesHeader'];
      $content = $row['UpdatesContent'];
      $id = $row['UpdatesID'];

      echo "<div class='col-12 col-m-12 articles'>";
        echo "<h2>$title</h2>";
        echo "<br>";
        echo "<br>";
        echo "<p>";
          echo $content;
        echo "</p>";
        echo "<button><a href='../php/approve-update.php?updates_id=$id'>APPROVE</a></button>";
        echo "<button><a href='../php/disapprove-update.php?updates_id=$id'>REJECT</button>";
      echo "</div>";
      echo "<br>";
      echo "<br>";
    }
  }
  else {
    echo "No new update! " .mysqli_error($conn);
  }
?>
