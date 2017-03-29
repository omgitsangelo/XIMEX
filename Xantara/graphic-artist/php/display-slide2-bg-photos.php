<?php
  include '../php/database.php';
  $select = "select * from slide2bg";
  $result=mysqli_query($conn,$select);

  if ($result->num_rows > 0)
  {
    while ($row = mysqli_fetch_array($result))
    {
      $slide2bgpath = $row['Slide2BGPath'];
      echo "<div class='responsive'>";
        echo "<div class='img'>";
          echo "<img src='../../$slide2bgpath' width='300' height='200'>";
        echo "</div>";
      echo"</div>";
    }
  }
?>
