<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    if (empty($name)) {
        echo "invalid: Name can't be empty.";
    } 
    elseif (!preg_match('/^[a-zA-Z][a-zA-Z.\- ]{2,}$/', $name)) {
        echo "invalid: Name atleast contain three letters.";
    } 
    else {
        echo "Name: " . htmlspecialchars($name);
    }
}
?>