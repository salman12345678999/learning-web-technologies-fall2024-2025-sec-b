
<?php
$conn = new mysqli("localhost", "root", "", "webtech");

$data = json_decode(file_get_contents("php://input"), true);

$id = $data['id'];
$name = $data['name'];
$contact = $data['contact'];
$username = $data['username'];
$password = $data['password'] ? password_hash($data['password'], PASSWORD_BCRYPT) : null;

$fields = [];
if ($name) $fields[] = "name='$name'";
if ($contact) $fields[] = "contact_no='$contact'";
if ($username) $fields[] = "username='$username'";
if ($password) $fields[] = "password='$password'";

$sql = "UPDATE usermodel SET " . implode(", ", $fields) . " WHERE id=$id";
if ($conn->query($sql)) {
    echo json_encode(["message" => "Employee updated successfully"]);
} else {
    echo json_encode(["message" => "Error: " . $conn->error]);
}
$conn->close();
?>
