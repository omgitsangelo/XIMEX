<?php
  $select = "select * from slide3leftbg where Slide3LeftBGIsActive = 1";
  $result = mysqli_query($conn,$select);

  if ($result->num_rows > 0)
	{
    while ($row = mysqli_fetch_array($result))
		{
      $slide3leftbgpath = $row['Slide3LeftBGPath'];
      $slide3leftbgisactive = $row['Slide3LeftBGIsActive'];
    }
  }
?>
