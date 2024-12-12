<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $gender = $_POST['gender'];

    if (empty($gender)) {
        echo "invalid: Please select a gender.";
    } else {
        echo "Gender: " . htmlspecialchars($gender);
    }
}
?>