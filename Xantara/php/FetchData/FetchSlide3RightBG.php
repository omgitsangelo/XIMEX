<?php
  $select = "select * from slide3rightbg where Slide3RightBGIsActive = 1";
  $result = mysqli_query($conn,$select);

  if ($result->num_rows > 0)
	{
    while ($row = mysqli_fetch_array($result))
		{
      $slide3rightbgpath = $row['Slide3RightBGPath'];
      $slide3rightbgisactive = $row['Slide3RightBGIsActive'];
    }
  }
?>
