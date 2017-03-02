<?php
  $select = "select * from slide1 where Slide1IsActive = 1";
  $result=mysqli_query($conn,$select);

  if ($result->num_rows > 0)
	{
    while ($row = mysqli_fetch_array($result))
		{
      $slide1textcontent1 = $row['Slide1TextContent1'];
      $slide1textcontent2 = $row['Slide1TextContent2'];
      $slide1textcontent3 = $row['Slide1TextContent3'];
      $slide1textcontent4 = $row['Slide1TextContent4'];
      $slide1textsize = $row['Slide1TextSize'];
      $slide1textcolor = $row['Slide1TextColor'];
    }
  }
?>
