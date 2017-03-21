<?php
  $select = "select * from slide4 where Slide4IsActive = 1";
  $result = mysqli_query($conn,$select);

  if ($result->num_rows > 0)
	{
    while ($row = mysqli_fetch_array($result))
		{
      $slide4headercolor = $row['Slide4HeaderColor'];
      $slide4headersize = $row['Slide4HeaderSize'];
      $slide4headercontent = $row['Slide4HeaderContent'];
      $slide4buttoncolor = $row['Slide4ButtonColor'];
      $slide4buttontextcolor = $row['Slide4ButtonTextColor'];
      $slide4buttontextsize = $row['Slide4ButtonTextSize'];
      $slide4buttontextcontent = $row['Slide4ButtonTextContent'];
      $slide4isactive = $row['Slide4IsActive'];
    }
  }
?>
