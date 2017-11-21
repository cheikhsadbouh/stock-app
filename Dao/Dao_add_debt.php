<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikhna
 * Date: 20/11/17
 * Time: 22:33
 */

require(dirname( dirname(dirname(__FILE__))).'/stock-app/Dao/logging.php');
require(dirname( dirname(dirname(__FILE__))).'/stock-app/Dao/cnxn.php');

function Dao_add_debt($name,$tel,$amount,$reason,$type_debt){
    $conn = open_cnxn();
    global $log;

    // Check connection
    if (!$conn)
    {

        $log->error("Connection failed: " . mysqli_connect_error());

    }

    if ($conn) {

        $sql = "INSERT INTO debt (namess,tel,reason,amount,debt_type) VALUES ('$name','$tel','$reason','$amount','$type_debt')";

        if (mysqli_query($conn, $sql))
        {

        } else
        {

            $log->error("Error while  insert  in debt table " . $sql . "\n" . mysqli_error($conn));
        }


    }


}