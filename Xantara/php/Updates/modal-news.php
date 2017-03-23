<?php
$UpdatesID = $_GET['id'];

$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'xantara';

$conn = new mysqli($server, $username, $password, $dbname);

$select = "SELECT * FROM updates WHERE UpdatesID = $UpdatesID";
$result = mysqli_query($conn,$select);

if ($result->num_rows > 0)
{
  while ($row = mysqli_fetch_array($result))
  {
    $modaltitle = $row['UpdatesHeader'];
    $modalcontent = $row['UpdatesContent'];
    $modaldatetime = date_create($row['DateTime']);
  }
}
else
{
  {
    // echo "Cannot add record! " .mysqli_error($conn);
  }
}
?>
