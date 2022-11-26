<?php
include "./backend/utils/sqlUtils.php";

class Index
{
    public $Goods;
    private $DataBase = 'marvelous';
    function __construct()
    {

        $this->init();
    }

    private function init()
    {

    }

    private function getGoods()
    {
        $this->Goods = sql_conn_query($this->DataBase, $this->Goods_SQL_Str);
    }
}

new Index();
