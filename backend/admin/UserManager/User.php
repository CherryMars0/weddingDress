<?php
include "../utils/sqlUtils.php";
class User{
    private $role;
    private $DataBase = 'weddingdress';
    public $Users;
    public function __construct($role){
        $this->role = $role;
        $this->init();
    }
    private function init(){
        $this->queryUser();
    }
    private function queryUser()
    {
        $User_SQL_Str = "select * from user where Permissions='" . $this->role . "';";
        $this->Users = sql_conn_query($this->DataBase, $User_SQL_Str);
    }
}
?>