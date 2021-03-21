<?php

if (isset($_POST["submit"])) {
    
    $username = $_POST["uid"];
    $pwd = $_POST["pwd"];

    require_once 'dbconnect.php';
    require_once 'functions.php';

    if (emptyLogin($username, $pwd) !== false) {
        header("location: ../mijnapo.php?error=emptyinput");
        exit();
    }

    loginUser($conn, $username, $pwd);
}
else {
    header("location: ../mijnapo.php?error=failed");
    exit();
}