<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikhna
 * Date: 25/10/17
 * Time: 19:04
 */





function open_cnxn()
{

    /* database config */
    $servername = "localhost";
    $username = "root";
    $password = "cheikh";
    $dbname = "stock";

// Create connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    if ($conn) {

        mysqli_query($conn, "SET NAMES 'utf8'");
        mysqli_query($conn, 'SET CHARACTER SET utf8');


    }

    return $conn;
}

function close_cnxn($conn){

    mysqli_close($conn);
}



