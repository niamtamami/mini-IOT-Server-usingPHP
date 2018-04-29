<?php
include 'config.php';
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

if (isset($_GET[i])) {
		$id = $_GET[i];
		$sql = "SELECT * FROM data WHERE id = '$id' ORDER BY time DESC LIMIT 1";
		$result = $conn->query($sql);
	}
else {
		$sql = "SELECT * FROM data ORDER BY time DESC LIMIT 1";
		$result = $conn->query($sql);
}

$rows = $result->fetch_all(MYSQLI_ASSOC);
header('Content-Type: application/json');
echo json_encode($rows);

$conn->close();
?>