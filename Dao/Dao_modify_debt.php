<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikhna
 * Date: 21/11/17
 * Time: 19:30
*/



require(dirname( dirname(dirname(__FILE__))).'/stock-app/Dao/logging.php');
require(dirname( dirname(dirname(__FILE__))).'/stock-app/Dao/cnxn.php');

function Dao_modify_debt($name,$tel,$amount,$reason,$id){


    $conn = open_cnxn();
    global $log;

    // Check connection
    if (!$conn) {

        $log->error("Connection failed: " . mysqli_connect_error());

    }

    if ($conn) {

        $sql = "update  debt  set namess='$name'  , tel='$tel' , amount='$amount', unpayed='$amount',reason='$reason' where iddebt='$id';";


        if (mysqli_query($conn, $sql)) {

        } else {

            $log->error("Error while  update  debt table    " . $sql . "\n" . mysqli_error($conn));
        }



        close_cnxn($conn);
    }




}