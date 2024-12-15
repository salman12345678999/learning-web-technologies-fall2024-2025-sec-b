<?php

    session_start();
    unset($_SESSION['MNO']);
    session_destroy();

    header('location: login.html');

?>