<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikhna
 * Date: 24/10/17
 * Time: 13:03
 */

$servername = "localhost";
$username = "root";
$password = "cheikh";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if($conn){
    echo "Connected successfully";
}




?>