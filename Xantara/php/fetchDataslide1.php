<?php
  $select = "select * from slide1";
  $result=mysqli_query($conn,$select);

  if ($result->num_rows > 0)
	{
    while ($row = mysqli_fetch_array($result))
		{
      $header_title = $row['header_title'];
      $header_sub_title = $row['header_sub_title'];
      $header_title_font_size = $row['header_title_font_size'];
      $header_sub_title_font_size = $row['header_sub_title_font_size'];
      $header_logo_size = $row['header_logo_size'];
    }
  }
?>
