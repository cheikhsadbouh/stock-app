<?php
;

error_reporting(E_ALL);
ini_set('display_errors', 1);




require(dirname( dirname(dirname(__FILE__))).'/stock-app/Dao/logging.php');
require(dirname(dirname(dirname(__FILE__))).'/stock-app/Dao/cnxn.php');


$conn = open_cnxn();
global $log;


$a=0;
function check(){
    global  $a;
    $a=12;
    echo $a.'<br>';
}
check();
echo 'after call method '.$a.'<br>' ;


function b(){
    global $a;
    echo 'from method b '.$a;

}

b();
/**

 *
select * from products
inner join  cmd_has_products on products.idproducts= cmd_has_products.products_idproducts
where cmd_has_products.cmd_idcmd=47
 *
 */
