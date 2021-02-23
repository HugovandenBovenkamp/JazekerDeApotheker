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

function userValid($username, $fullname) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username, $fullname)) {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}

function emailValid($email) {
    $result;
    if () {
        $result = true;
    }
    else {
        $result = false;
    }
    return $result;
}
