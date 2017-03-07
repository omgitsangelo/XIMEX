<?php
  $select = "select * from slide3leftlogo where Slide3LeftLogoIsActive = 1";
  $result = mysqli_query($conn,$select);

  if ($result->num_rows > 0)
	{
    while ($row = mysqli_fetch_array($result))
		{
      $slide3leftlogopath = $row['Slide3LeftLogoPath'];
      $slide3leftlogopathisactive = $row['Slide3LeftLogoPathIsActive'];
      $slide3leftlogosize = $row['Slide3LeftLogoSize'];
    }
  }
?>
