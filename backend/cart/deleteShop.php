<?php
include "../utils/sqlUtils.php";
session_start();
class deleteShop
{
    private $DataBase = 'weddingdress';
    function __construct($ID)
    {
        $this->ID = $ID;
        $this->init();
    }

    private function init()
    {
        $this->delShop();
    }

    private function delShop()
    {
        $Del_SQL_Str = "delete from shoppingcart where userName='" . $_SESSION['userName'] . "' and ID='" . $this->ID .  "';";
        sql_conn_insert($this->DataBase, $Del_SQL_Str);
        echo $Del_SQL_Str;
    }
}

$ID = $_POST['ID'];
$deleteShop = new deleteShop($ID);
