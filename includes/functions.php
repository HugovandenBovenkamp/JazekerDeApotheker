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

function userValid($username, $fullname, $pw, $pwrep) {
    $result;
    if (!preg_match("/^[a-zA-Z0-9]*$/", $username, $fullname, $pw, $pwrep)) {
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

function userExists ($conn, $username) {
    //$sql = ""
}
