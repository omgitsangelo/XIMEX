<?php
  include '../php/database.php';
  $select = "select * from slide4bg";
  $result=mysqli_query($conn,$select);

  if ($result->num_rows > 0)
  {
    while ($row = mysqli_fetch_array($result))
    {
      $slide4bgpath = $row['Slide4BGPath'];
      echo "<div class='responsive'>";
        echo "<div class='img'>";
          echo "<img src='../../$slide4bgpath' width='300' height='200'>";
        echo "</div>";
      echo"</div>";
    }
  }
?>
