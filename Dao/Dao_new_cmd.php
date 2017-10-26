<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikhna
 * Date: 25/10/17
 * Time: 20:33
 */

include('../Dao/cnxn.php');
include('../Dao/logging.php');





   function Dao_new_cmd
 (
        $count,
        $product_date_creation0,
        $product_name,
        $product_unite_price,
        $product_buying_price,
        $product_numbers

 )
 {

     global $conn;
     global $log;
// Check connection
    if ( !$conn ) {

        $log->error("Connection failed: " . mysqli_connect_error());

    }

    if($conn){
        $i=0;


        $log->info(" count :".$count);
        $sql = "INSERT INTO cmd (income_date) VALUES ('$product_date_creation0')";

        if (mysqli_query($conn, $sql)) {
            $last_id_cmd=mysqli_insert_id($conn);
            for($i;$i<=$count;$i++){
                $log->info("i=   ".$i);
                $sql = "INSERT INTO products (name_produts,unite_price,buying_price,number_products)
   VALUES ('$product_name.''.$i',
   '$product_unite_price.''.$i',
   '$product_buying_price.''.$i',
   '$product_numbers.''.$i')";

                if (mysqli_query($conn, $sql)) {

                    $last_id_products=mysqli_insert_id($conn);
                    $log->info("id_cmd : ".$last_id_cmd."  id_produt :  ".$last_id_products);
                    //  $sql = "INSERT INTO cmd (income_date) VALUES ('".$_POST['product-date-creation0']."')";

                    /* if (mysqli_query($conn, $sql)) {


                     } else {

                         $log->error("Error while  insert in keys for cmd and products "  . $sql . "\n" . mysqli_error($conn));

                     }*/

                } else {

                    $log->error("Error while  insert  new products iteration number".$i.""  . $sql . "\n" . mysqli_error($conn));

                }

            }
        } else {

            $log->error("Error while insert  new cmd  " . $product_date_creation0 . ''.$sql."\n" . mysqli_error($conn));
        }





        mysqli_close($conn);

    }



}//end Dao_new_cmd