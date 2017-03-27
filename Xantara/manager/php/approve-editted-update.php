<?php
  $server = 'localhost';
  $username = 'root';
  $password = '';
  $dbname = 'xantara';

  $conn = new mysqli($server, $username, $password, $dbname);

  $ref_no = $_GET['updates_id'];

  $select = "Select * from edited-updates where UpdatesID = '$ref_no'";
  $result=mysqli_query($conn,$select);

  if ($result->num_rows > 0)
	{
    while ($row = mysqli_fetch_array($result))
		{
      $etitle = $row['UpdatesHeader'];
      $econtent = $row['UpdatesContent'];
      $eref_no = $row['ref_no'];

      echo $etitle;
      echo $econtent;
      echo $eref_no;
    }
  }

  $select = "Select * from updates where UpdatesID = '$eref_no'";
  $result=mysqli_query($conn,$select);

  if ($result->num_rows > 0)
	{
    while ($row = mysqli_fetch_array($result))
		{
      $ltitle = $row['UpdatesHeader'];
      $lcontent = $row['UpdatesContent'];

      echo $ltitle;
      echo $lcontent;
    }
  }

  $query = "Update edited-updates set UpdatesIsApproved = 1 where UpdatesID = '$ref_no';";
  $query .= "Update Updates set UpdatesHeader = '$etitle', UpdatesContent = '$econtent' where UpdatesID = '$eref_no';";
  $query .= "INSERT INTO logfiles(logdatetime, logname, logdesc) VALUES(Now(), 'Manager', 'Approved editted post')";

  if(!$conn->multi_query($query))
  {
    echo "Insert and Update function unsuccessful" . mysqli_error($conn);
  }
  else
  {
    header("location: ../manage-post/view-current-post.php");
  }

?>
