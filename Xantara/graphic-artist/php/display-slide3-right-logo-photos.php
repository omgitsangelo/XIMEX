<?php
  include '../php/database.php';
  $select = "select * from slide3rightlogo";
  $result=mysqli_query($conn,$select);

  if ($result->num_rows > 0)
  {
    while ($row = mysqli_fetch_array($result))
    {
      $slide3rightlogopath = $row['Slide3RightLogoPath'];
      echo "<div class='responsive'>";
        echo "<div class='img'>";
          echo "<img src='../../$slide3rightlogopath' width='300' height='200'>";
        echo "</div>";
      echo"</div>";
    }
  }
?>
