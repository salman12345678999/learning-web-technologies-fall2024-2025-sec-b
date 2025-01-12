<?php
$conn = new mysqli("localhost", "root", "", "webtech");

$data = json_decode(file_get_contents("php://input"), true);

$name = $data['name'];
$contact = $data['contact'];
$username = $data['username'];
$password = password_hash($data['password'], PASSWORD_BCRYPT);

if (!$name || !$contact || !$username || !$password) {
    echo json_encode(["message" => "All fields are required"]);
    exit;
}

$sql = "INSERT INTO usermodel (name, contact_no, username, password) VALUES ('$name', '$contact', '$username', '$password')";
if ($conn->query($sql)) {
    echo json_encode(["message" => "Employee registered successfully"]);
} else {
    echo json_encode(["message" => "Error: " . $conn->error]);
}
$conn->close();
?>
