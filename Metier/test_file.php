<?php



include('../Dao/cnxn.php');
include('../Dao/logging.php');




function test(){

    global $conn;
    global $log;

    if ( !$conn ) {

        $log->error("Connection failed: " . mysqli_connect_error());
        echo "Connection failed: " . mysqli_connect_error();
    }else{

        $log->info("Connection success: ");
        $log->info("test from Metier".$_POST['product-date-creation0']);

        echo "Connection success: " ;
    }


}

test();
