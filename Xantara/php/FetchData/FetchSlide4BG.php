<?php
  $select = "select * from slide4bg where Slide4BGPathIsActive = 1";
  $result=mysqli_query($conn,$select);

  if ($result->num_rows > 0)
	{
    while ($row = mysqli_fetch_array($result))
		{
      $slide4bgpath = $row['Slide4BGPath'];
      $slide4bgpathisactive = $row['Slide4BGPathIsActive'];
    }
  }
?>
