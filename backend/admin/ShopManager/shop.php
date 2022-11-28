<?php
include "../utils/sqlUtils.php";
class Shop{
    private $page;
    private $DataBase = 'weddingdress';
    public $Shops;
    public function __construct($page){
        $this->page = $page;
        $this->init();
    }
    private function init(){
        $this->queryShop();
    }
    private function queryShop()
    {
        $Shop_SQL_Str = "select * from shop where page='" . $this->page . "';";
        $this->Shops = sql_conn_query($this->DataBase, $Shop_SQL_Str);
    }
}
?>