<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikhna
 * Date: 07/11/17
 * Time: 13:44
 */

require(dirname( dirname(dirname(__FILE__))).'/stock-app/Dao/logging.php');
require(dirname( dirname(dirname(__FILE__))).'/stock-app/Dao/cnxn.php');



function   Dao_add_sale($name_p,$price_p,$bying_p,$selected_item,$new_p,$date_of_sales,$id_prodcut,$total_item,$user){

    $conn = open_cnxn();
    global $log;

    // Check connection
    if (!$conn) {

        $log->error("Connection failed: " . mysqli_connect_error());


    }


    if ($conn) {
        $benetif_total =0;
        $plus_benefit=0;
        $sales_money=0;
if($new_p == ""){
    $new_p=0;
    $sales_money =$bying_p * $selected_item ;

    $price_money =$price_p * $selected_item ;
    $benetif_total= $sales_money  - $price_money ;
    $plus_benefit=0;

}else{

    $sales_money =$new_p * $selected_item ;//3000

    $price_money =$price_p * $selected_item ;//1000/
    $benetif_total= $sales_money  - $price_money ;

    $sales_mormale =$bying_p * $selected_item ;//2000
    $plus_benefit=$sales_money - $sales_mormale;
    if($plus_benefit <  0){ $plus_benefit =0;}


}
if($date_of_sales == ""){ $date_of_sales="0000-00-00 00:00";}
$log->info("totl_item : ".$total_item."selected item :".$selected_item);
$rest= $total_item - $selected_item ;
$log->info("rest :".$rest);

        $sql = "INSERT INTO sales (name_p,price_p,bying_p,selected_item,new_p,date_of_sales,id_prodcut,plus_total_benefit,total_benefit,total_bying,user) VALUES ('$name_p','$price_p','$bying_p','$selected_item','$new_p','$date_of_sales','$id_prodcut','$plus_benefit','$benetif_total','$sales_money','$user')";

        if (mysqli_query($conn, $sql)) {
            $log->info("add new sale done ! : ");

            $sql = "update  products  set rest_products_number='$rest' where idproducts='$id_prodcut';";

            if (mysqli_query($conn, $sql)) {

            }else{
                $log->error("Error while update rest_products   in products table "  . $sql . "\n" . mysqli_error($conn));

            }



        }else{

            $log->error("Error while  insert  in sale table "  . $sql . "\n" . mysqli_error($conn));
        }



    }
    close_cnxn($conn);
}//end fun