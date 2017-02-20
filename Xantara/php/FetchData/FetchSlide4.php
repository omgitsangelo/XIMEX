<?php
  $select = "select * from slide3";
  $result=mysqli_query($conn,$select);

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
      $slide4formcolor = $row['Slide4FormColor'];
      $slide4formtextsize = $row['Slide4FormTextSize'];
      $slide4formtextcolor = $row['Slide4FormTextColor'];
      $slide4form1content = $row['Slide4Form1Content'];
      $slide4form2content = $row['Slide4Form2Content'];
      $slide4form3content = $row['Slide4Form3Content'];
      $slide4form4content = $row['Slide4Form4Content'];
      $slide4formheadersize = $row['Slide4FormHeaderSize'];
      $slide4formheadercolor = $row['Slide4FormHeaderColor'];
      $slide4formheadercontent = $row['Slide4FormHeaderContent'];
      $slide4formbuttoncolor = $row['Slide4FormButtonColor'];
      $slide4formbuttontextcolor = $row['Slide4FormButtonTextColor'];
      $slide4formbuttontextsize = $row['Slide4FormButtonTextSize'];
      $slide4formbuttontextcontent = $row['Slide4FormButtonTextContent'];
      $slide4isactive = $row['Slide4IsActive'];
    }
  }
?>
