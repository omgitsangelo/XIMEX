<?php
  $select = "select * from slide2bg where Slide2BGPathIsActive = 1";
  $result=mysqli_query($conn,$select);

  if ($result->num_rows > 0)
	{
    while ($row = mysqli_fetch_array($result))
		{
      $slide2bgpath = $row['Slide2BGPath'];
      $slide2bgpathisactive = $row['Slide2BGPathIsActive'];
    }
  }
?>
