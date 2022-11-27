<?php
include "./backend/utils/sqlUtils.php";
class Detail
{
    public $userName;
    public $imgSrc;
    public $Goods;
    private $DataBase = 'weddingdress';
    function __construct($imgSrc)
    {
        $this->imgSrc = $imgSrc;
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
        $User_SQL_Str = "select * from shop where position='" . $this->imgSrc . "';";
        $this->Goods = sql_conn_query($this->DataBase, $User_SQL_Str)[0];
    }
}

$imgSrc = $_SERVER["QUERY_STRING"];
$detail = new Detail($imgSrc);
