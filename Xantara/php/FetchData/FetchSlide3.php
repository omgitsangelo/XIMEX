<?php
  $select = "select * from slide3";
  $result=mysqli_query($conn,$select);

  if ($result->num_rows > 0)
	{
    while ($row = mysqli_fetch_array($result))
		{
      $slide3lefttextbgcolor = $row['Slide3LeftTextBGColor'];
      $slide3lefttextcolor = $row['Slide3LeftTextColor'];
      $slide3lefttextsize = $row['Slide3LeftTextSize'];
      $slide3lefttext1content = $row['Slide3LeftText1Content'];
      $slide3lefttext2content = $row['Slide3LeftText2Content'];
      $slide3lefttext3content = $row['Slide3LeftText3Content'];
      $slide3lefttext4content = $row['Slide3LeftText4Content'];
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
