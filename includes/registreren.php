<?php
    if (isset($_POST["submit"])) {
        $username = $_POST["username"];
        $fullname = $_POST["fullname"];
        $email = $_POST["email"];
        $pw = $_POST["pw"];
        $pwrep = $_POST["pwrep"];
        

        require_once 'dbconnect.php';
        require_once 'functions.php';

        // Checken of de velden leeg zijn
        if (emptySignup($username, $fullname, $email, $pw, $pwrep) !== false) {
            header("location: ../mijnapo.php?error=emptyinputfield");
            exit();
        }
        //input validatie voor characters username en fullname
        if (userValid($username, $fullname, $pw, $pwrep) !== false) {
            header("location: ../mijnapo.php?error=emptyinputfield");
            exit();
        }

        if (emailValid($email) !== false) {
            header("location: ../mijnapo.php?error=emptyinputfield");
            exit();
        }

        if (pwMatch($pw, $pwrep) !== false) {
            header("location: ../mijnapo.php?error=emptyinputfield");
            exit();
        }

        if (userExists($conn, $username) !== false) {
            header("location: ../mijnapo.php?error=emptyinputfield");
            exit();
        }
        

        //functie die zorgt voor het verwerken van de data naar de database
        createUser($conn, $username, $fullname, $email, $pw);

    }
    else {
        header("location: ../mijnapo.php");
    }
