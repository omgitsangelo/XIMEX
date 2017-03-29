<?php
  include '../php/database.php';
  $select = "select * from slide3leftbg";
  $result=mysqli_query($conn,$select);

  if ($result->num_rows > 0)
  {
    while ($row = mysqli_fetch_array($result))
    {
      $slide3leftbgpath = $row['Slide3LeftBGPath'];
      echo "<div class='responsive'>";
        echo "<div class='img'>";
          echo "<img src='../../$slide3leftbgpath' width='300' height='200'>";
        echo "</div>";
      echo"</div>";
    }
  }
?>
