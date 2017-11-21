<?php
/**
 * Created by IntelliJ IDEA.
 * User: cheikhna
 * Date: 21/11/17
 * Time: 19:29
 */


require(dirname( dirname(dirname(__FILE__))).'/stock-app/Dao/Dao_modify_debt.php');
function Metier_modify_debt(){




    Dao_modify_debt($_POST["m_name"],$_POST["m_tel"],$_POST["m_amount"],$_POST["m_reason"],$_GET["id"]);
}

Metier_modify_debt();