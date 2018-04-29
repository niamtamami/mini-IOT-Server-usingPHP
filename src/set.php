<?php
include 'config.php';

$source = $_GET["s"];
$destination = $_GET["d"];
$id = $_GET["i"];
$value = $_GET["v"];

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO data (source, destination, id, value)
VALUES ('$source', '$destination', '$id', '$value')";

if ($conn->query($sql) === TRUE) {
    echo "successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>