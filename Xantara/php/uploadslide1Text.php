<?php
$server = 'localhost';
$username = 'root';
$password = '';
$dbname = 'xantara';

// Create connection
$conn = new mysqli($server, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$textcolor = $_POST['textcolor'];
$textsize = $_POST['textsize'];
$text1 = $_POST['text1'];
$text2 = $_POST['text2'];
$text3 = $_POST['text3'];
$text4 = $_POST['text4'];

$query = "Update slide1 set Slide1IsActive = 0 where Slide1IsActive = 1;";
$query .= "INSERT INTO slide1(Slide1TextSize, Slide1TextColor, Slide1TextContent1, Slide1TextContent2, Slide1TextContent3, Slide1TextContent4, Slide1IsActive)VALUES('$textcolor', '$textsize', '$text1', '$text2', '$text3', '$text4', 1)";

if ($conn->multi_query($query)) {
    header("location: ../admin/adminindex.php");
    exit();
} else {
    echo "Error: " . $query . "<br>" . multi_query_error($conn);
}

$conn->close();
?>
