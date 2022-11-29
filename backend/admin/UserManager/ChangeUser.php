<?php
include "../../utils/sqlUtils.php";
class ChangeUser
{
    private $id;
    private $name;
    private $password;
    private $permissions;
    private $DataBase = 'weddingdress';
    public function __construct($id, $name, $password, $permissions)
    {
        $this->id = $id;
        $this->name = $name;
        $this->password = $password;
        $this->permissions = $permissions;
        $this->init();
    }
    private function init()
    {
        $this->ChangeUser();
    }
    private function ChangeUser()
    {
        $User_SQL_Str = "update user set Name='" . $this->name . "',Password='" . $this->password .  "',Permissions='" . $this->permissions . "' where ID='" . $this->id . "';";
        sql_conn_insert($this->DataBase, $User_SQL_Str);
        echo true;
    }
}
$id = $_POST['id'];
$name = $_POST['name'];
$password = $_POST['password'];
$permissions = $_POST['permissions'];
new ChangeUser($id, $name, $password, $permissions);
