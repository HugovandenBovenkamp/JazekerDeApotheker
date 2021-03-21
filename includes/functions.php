<?php


function emptySignup($username, $fullname, $email, $pw, $pwrep) {
    $result;
    if (empty($username) || empty($fullname) || empty($email) || empty($pw) || empty($pwrep)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}


function userValid($username) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/" ,$username )) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function emailValid($email) {
    $result;
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function pwMatch($pw, $pwrep) {
    $result;
    if ($pw !== $pwrep) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

// prepared statement
function userExists ($conn, $username, $email) {
    $sql = "SELECT * FROM users WHERE usersUid = ? OR usersEmail = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../registratiepagina.php?error=stmtfailed");
    }
    
    mysqli_stmt_bind_param($stmt, "ss", $username, $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if ($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    }
    else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);
}

function createUser($conn, $fullname, $email, $username, $pw) {
    $sql = "INSERT INTO users (usersName, usersEmail, usersUid, usersPwd ) VALUES (?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../registratiepagina.php?error=stmtfailed");
        exit();
    }
    
    $hashedPwd = password_hash($pw, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "ssss", $fullname, $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header("location: ../registratiepagina.php?error=none");
        exit();
}
