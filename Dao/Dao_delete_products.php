<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikhna
 * Date: 27/10/17
 * Time: 17:41
 */




require(dirname( dirname(dirname(__FILE__))).'/stock-app/Dao/logging.php');
require(dirname( dirname(dirname(__FILE__))).'/stock-app/Dao/cnxn.php');
function Dao_delete_product($id_product){


    $conn = open_cnxn();
    global $log;

    // Check connection
    if (!$conn) {

        $log->error("Connection failed: " . mysqli_connect_error());

    }


    if($conn){

    $sql = "DELETE FROM  cmd_has_products  WHERE products_idproducts='$id_product'";

//cmd_idcmd

    if (mysqli_query($conn, $sql)) {


        $sql = "DELETE FROM  products  WHERE idproducts='$id_product'";

        if(mysqli_query($conn, $sql)){

        }else{
            $log->error("Error while  delete  product  from table products "  . $sql . "\n" . mysqli_error($conn));

        }

    }else{

        $log->error("Error while  delete  product from  table cmd_has_products  "  . $sql . "\n" . mysqli_error($conn));
    }




        close_cnxn($conn);

  }


}