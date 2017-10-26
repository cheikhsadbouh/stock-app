<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikhna
 * Date: 24/10/17
 * Time: 13:03
 */



include('../Dao/Dao_new_cmd.php');


function Metier_new_cmd(){

    global $log;

    $log->info("test from Metier".$_POST['product-date-creation0']);

    Dao_new_cmd
    (
        $_POST["count"],
        $_POST['product-date-creation0'],
        $_POST['product-name'],
        $_POST['product-unite-price'],
        $_POST['product-buying-price'],
        $_POST['product-numbers']


    );


}

Metier_new_cmd();

