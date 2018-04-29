<?php
include 'config.php';

$timeLimit = date('Y-m-d H:i:s', strtotime('last month'));

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "DELETE FROM `data` WHERE `time` < '$timeLimit'";

if ($conn->query($sql) === TRUE) {
    echo "successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>

