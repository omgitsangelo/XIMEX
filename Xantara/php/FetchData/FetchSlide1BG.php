<?php
  $select = "select * from slide1bg where Slide1BGPathIsActive = 1";
  $result=mysqli_query($conn,$select);

  if ($result->num_rows > 0)
	{
    while ($row = mysqli_fetch_array($result))
		{
      $slide1bgpath = $row['Slide1BGPath'];
      $slide1bgpathisactive = $row['Slide1BGPathIsActive'];
    }
  }
?>
