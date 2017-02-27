<?php
  $select = "select * from slide1logo where Slide1LogoPathIsActive = 1";
  $result=mysqli_query($conn,$select);

  if ($result->num_rows > 0)
	{
    while ($row = mysqli_fetch_array($result))
		{
      $slide1logopath = $row['Slide1LogoPath'];
      $slide1logopathisactive = $row['Slide1LogoPathIsActive'];
      $slide1logosize = $row['Slide1LogoSize'];
    }
  }
?>
