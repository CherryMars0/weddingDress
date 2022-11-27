<?php
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
        
    }

    private function queryGoods()
    {
        $User_SQL_Str = "select * from shop where pic='" . $this->imgSrc . "'";
        $this->Goods = sql_conn_query($this->DataBase, $User_SQL_Str);
    }
}


$shoppingCart = new ShppingCart();
