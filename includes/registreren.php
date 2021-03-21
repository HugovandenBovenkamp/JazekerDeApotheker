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
            header("location: ../registratiepagina.php?error=emptyinput");
            exit();
        }
        //input validatie voor characters username en fullname
        if (userValid($username, $fullname, $pw, $pwrep) !== false) {
            header("location: ../registratiepagina.php?error=emptyinputfield");
            exit();
        }
        // check of email geldig is
        if (emailValid($email) !== false) {
            header("location: ../registratiepagina.php?error=invalidemail");
            exit();
        }
        // wachtwoord gelijk aan elkaar
        if (pwMatch($pw, $pwrep) !== false) {
            header("location: ../registratiepagina.php?error=passwordsdontmatch");
            exit();
        }
        // check gebruiker al in de database staat
        if (userExists($conn, $username, $email) !== false) {   
            header("location: ../registratiepagina.php?error=usernametaken");
            exit();
        }
        

        //functie die zorgt voor het verwerken van de data naar de database
        createUser($conn, $fullname, $email, $username, $pw);

    }
    else {
        header("location: ../registratiepagina.php");
    }
