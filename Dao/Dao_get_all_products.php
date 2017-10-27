<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikhna
 * Date: 27/10/17
 * Time: 17:12
 */


include('../Dao/cnxn.php');
include('../Dao/logging.php');

function get_all_products(){
    $conn = open_cnxn();
    global $log;



    // Check connection
    if (!$conn) {

        $log->error("Connection failed: " . mysqli_connect_error());

    }

      $sql = "SELECT * FROM products";
    if (mysqli_query($conn, $sql)) {

           close_cnxn($conn);

        return "";
    }else{

        $log->error("Error while  insert  in cmd table "  . $sql . "\n" . mysqli_error($conn));
    }



        close_cnxn($conn);

    return "";
}