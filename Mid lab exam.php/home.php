<?php
    session_start();
    if(!isset($_SESSION['ABC'])){
        header('location: registration.php');
    }
    if(!isset($_SESSION['MNO'])){
        header('location: login.php');
    }
?>
?>


<html>
<head>
    <title>HOME Page</title>
</head>
<body>
        <h1>Welcome Home!</h1>
        <a href='logout.php' > logout </a>
</body>
</html>