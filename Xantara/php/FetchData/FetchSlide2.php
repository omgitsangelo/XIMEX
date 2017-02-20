<?php
  $select = "select * from slide2";
  $result=mysqli_query($conn,$select);

  if ($result->num_rows > 0)
	{
    while ($row = mysqli_fetch_array($result))
		{
      $slide2missionheadercolor = $row['Slide2MissionHeaderColor'];
      $slide2missionheadersize = $row['Slide2MissionHeaderSize'];
      $slide2missiontextboxcolor = $row['Slide2MissionTextboxColor'];
      $slide2missiontextcolor = $row['Slide2MissionTextColor'];
      $slide2missiontextcontent = $row['Slide2MissionTextContent'];
      $slide2visionheadercolor = $row['Slide2VisionHeaderColor'];
      $slide2visionheadersize = $row['Slide2VisionHeaderSize'];
      $slide2visiontextboxcolor = $row['Slide2VisionTextboxColor'];
      $slide2visiontextcolor = $row['Slide2VisionTextColor'];
      $slide2visiontextcontent = $row['Slide2VisionTextContent'];
    }
  }
?>
