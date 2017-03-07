<?php
  $select = "select * from slide3rightlogo where Slide3RightLogoIsActive = 1";
  $result = mysqli_query($conn,$select);

  if ($result->num_rows > 0)
	{
    while ($row = mysqli_fetch_array($result))
		{
      $slide3rightlogopath = $row['Slide3RightLogoPath'];
      $slide3rightlogopathisactive = $row['Slide3RightLogoPathIsActive'];
      $slide3rightlogosize = $row['Slide3RightLogoSize'];
    }
  }
?>
