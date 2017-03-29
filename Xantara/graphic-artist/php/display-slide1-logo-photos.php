<?php
  include '../php/database.php';
  $select = "select * from slide1logo";
  $result=mysqli_query($conn,$select);

  if ($result->num_rows > 0)
  {
    while ($row = mysqli_fetch_array($result))
    {
      $slide1logopath = $row['Slide1LogoPath'];
      echo "<div class='responsive'>";
        echo "<div class='img'>";
          echo "<img src='../../$slide1logopath' width='300' height='200'>";
        echo "</div>";
      echo"</div>";
    }
  }
?>
