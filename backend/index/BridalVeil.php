<?php
include "./backend/utils/sqlUtils.php";
class BridalVeil
{
    public $userName;
    public $Goods;
    private $DataBase = 'weddingdress';
    function __construct()
    {

        $this->init();
        if (empty($_SESSION['userName'])) {
            $this->userName = 404;
        } else {
            $this->userName = $_SESSION['userName'];
        }
    }

    private function init()
    {
        $this->getGoods();
    }

    private function getGoods()
    {
        $Goods_SQL_Str = "select pic from shop where page='bridal';";
        $this->Goods = sql_conn_query($this->DataBase, $Goods_SQL_Str);
    }
}

$bridalVeil =  new BridalVeil();
