<?php
include "./backend/utils/sqlUtils.php";
class ShppingCart
{
    public $userName;
    public $Goods;
    private $DataBase = 'weddingdress';
    function __construct()
    {
        $this->init();
    }

    private function init()
    {
        if (empty($_SESSION['userName'])) {
            $this->userName = 404;
        } else {
            $this->userName = $_SESSION['userName'];
        }
        $this->GetInfo();
    }

    private function GetInfo()
    {
        $this->queryGoods();
    }

    private function queryGoods()
    {
        $User_SQL_Str = "select * from shopping_info where userName='" . $_SESSION['userName'] . "';";
        if (empty(sql_conn_query($this->DataBase, $User_SQL_Str))) {
            $this->Goods = "null";
        } else {
            $this->Goods = sql_conn_query($this->DataBase, $User_SQL_Str);
            
        }
    }
}


$shoppingCart = new ShppingCart();
