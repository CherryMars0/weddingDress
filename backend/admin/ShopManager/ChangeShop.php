<?php
include "../../utils/sqlUtils.php";
class ChangeShop
{
    private $id;
    private $name;
    private $illustrate;
    private $designer;
    private $price;
    private $DataBase = 'weddingdress';
    public function __construct($id, $name, $illustrate, $designer, $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->illustrate = $illustrate;
        $this->designer = $designer;
        $this->price = $price;
        $this->init();
    }
    private function init()
    {
        $this->ChangeShop();
    }
    private function ChangeShop()
    {
        $Shop_SQL_Str = "update shop set name='" . $this->name . "',illustrate='" . $this->illustrate .  "',designer='" . $this->designer . "',price='" . $this->price . "' where ID='" . $this->id . "';";
        sql_conn_insert($this->DataBase, $Shop_SQL_Str);
        echo true;
    }
}
$id = $_POST['id'];
$name = $_POST['name'];
$illustrate = $_POST['illustrate'];
$designer = $_POST['designer'];
$price = $_POST['price'];
new ChangeShop($id, $name, $illustrate, $designer, $price);
