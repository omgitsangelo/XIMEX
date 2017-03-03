<?php
  $select = "select * from slide3right";
  $result= mysqli_query($conn,$select);

  if ($result->num_rows > 0)
	{
    while ($row = mysqli_fetch_array($result))
		{
      $slide3righttextbgcolor = $row['Slide3RightTextBGColor'];
      $slide3righttextcolor = $row['Slide3RightTextColor'];
      $slide3righttextsize = $row['Slide3RightTextSize'];
      $slide3righttext1content = $row['Slide3RightText1Content'];
      $slide3righttext2content = $row['Slide3RightText2Content'];
      $slide3righttext3content = $row['Slide3RightText3Content'];
      $slide3righttext4content = $row['Slide3RightText4Content'];
    }
  }
?>
