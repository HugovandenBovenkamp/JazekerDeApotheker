<?php
include('includes/dbconnect.php');

    echo $_POST['username'];
    $post = $_POST['username'];
    //create
    
    $sql = 'INSERT INTO test (voornaam) VALUES ("' . $post . '")';
    mysqli_query($con, $sql);

    // update
    $sql = 'UPDATE test SET voornaam = "Juan" WHERE voornaam = "Gordon"';
    mysqli_query($con, $sql);

    // delete
    $sql = 'DELETE FROM test WHERE voornaam = "Juan"';
    mysqli_query($con, $sql);

    //read
    $sql = 'SELECT * FROM test';
    $result = mysqli_query($con, $sql);
    while($row = mysqli_fetch_assoc($result)) {
        echo $row[0][1];
    }
