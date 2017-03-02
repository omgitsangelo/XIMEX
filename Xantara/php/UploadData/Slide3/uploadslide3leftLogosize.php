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

$size = $_POST['sld3leftlogsize'];

$query = "UPDATE slide3leftlogo SET Slide3LeftLogoSize = '$size'";

if ($conn->query($query) === TRUE) {
    header("location: ../../../admin/adminindex.php");
    exit();
} else {
    echo "Error: " . $query . "<br>" . $conn->error;
}

$conn->close();
?>
