<?php
  include '../php/database.php';
  $select = "select * from slide3leftlogo";
  $result=mysqli_query($conn,$select);

  if ($result->num_rows > 0)
  {
    while ($row = mysqli_fetch_array($result))
    {
      $slide3leftlogopath = $row['Slide3LeftLogoPath'];
      echo "<div class='responsive'>";
        echo "<div class='img'>";
          echo "<img src='../../$slide3leftlogopath' width='300' height='200'>";
        echo "</div>";
      echo"</div>";
    }
  }
?>
