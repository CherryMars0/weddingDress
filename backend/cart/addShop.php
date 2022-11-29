<?php
include "../utils/sqlUtils.php";
session_start();
class Cart
{
    private $DataBase = 'weddingdress';

    private $shopName;
    private $ID;
    private $count;

    function __construct($ID, $shopName, $count)
    {
        $this->shopName = $shopName;
        $this->ID = $ID;
        $this->count = $count;
        $this->init();
    }

    private function init()
    {
        if (empty($_SESSION['userPermissions'])) {
            echo "请先登录！";
        } elseif ($_SESSION['userPermissions'] == "Sellers" || $_SESSION['userPermissions'] == "WarehouseAdministartor") {
            echo "仓库管理员和卖家没有购物车！";
        } elseif ($_SESSION['userPermissions'] == "Buyers") {
            $this->update();
            echo "购物车添加成功，请到购物车页面进行查看！";
        }
    }

    private function update()
    {
        $update_SQL_Str = "select count(*) from shoppingcart where userName='" . $_SESSION['userName'] . "' and ID='" . $this->ID . "';";
        $count = sql_conn_query($this->DataBase, $update_SQL_Str);
        
        if ($count[0][0] == 1) {
            $update_SQL_Str = "update shoppingcart set shopName='" . $this->shopName . "',count='" . $this->count .  "' where ID='" . $this->ID . "' and userName='" . $_SESSION['userName'] . "';";
            sql_conn_insert($this->DataBase, $update_SQL_Str);
        } else {
            
            $update_SQL_Str = "insert into shoppingcart (userName,shopName,ID,count) values ('" . $_SESSION['userName'] . "','" . $this->shopName . "','" . $this->ID . "','" . $this->count .  "');";
            sql_conn_insert($this->DataBase, $update_SQL_Str);
        }
    }
}
$ID = $_POST['ID'];
$shopName = $_POST['shopName'];
$count = $_POST['count'];

new Cart($ID, $shopName, $count);
