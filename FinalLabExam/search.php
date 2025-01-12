<?php
$conn = new mysqli("localhost", "root", "", "webtech");

$query = $_GET['query'];
$sql = "SELECT * FROM usermodel WHERE name LIKE '%$query%'";
$result = $conn->query($sql);

$employees = [];
while ($row = $result->fetch_assoc()) {
    $employees[] = $row;
}
echo json_encode($employees);
$conn->close();
?>