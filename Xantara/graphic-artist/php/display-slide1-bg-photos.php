<?php
  include '../php/database.php';
  $select = "select * from slide1bg";
  $result=mysqli_query($conn,$select);

  if ($result->num_rows > 0)
  {
    while ($row = mysqli_fetch_array($result))
    {
      $slide1bgpath = $row['Slide1BGPath'];
      echo "<div class='responsive'>";
        echo "<div class='img'>";
          echo "<img src='../../$slide1bgpath' width='300' height='200'>";
        echo "</div>";
      echo"</div>";
    }
  }
?>
