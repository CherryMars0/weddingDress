<?php
include "./backend/utils/sqlUtils.php";

class Index
{
    public $Goods;
    public $userName;
    private $DataBase = 'weddingdress';
    function __construct()
    {
        $this->init();
        if (empty($_SESSION['userName'])) {
            $this->userName = 404;
        }else{
            $this->userName = $_SESSION['userName'];
        }
    }

    private function init()
    {
        $this->getGoods();
    }

    private function getGoods()
    {
        $Goods_SQL_Str = "select * from shop ;";
        $this->Goods = sql_conn_query($this->DataBase, $Goods_SQL_Str)[0];
    }
}

$index = new Index();
