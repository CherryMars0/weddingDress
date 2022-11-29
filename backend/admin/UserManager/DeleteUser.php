<?php
include "../../utils/sqlUtils.php";
class DeleteUser
{
    private $id;
    private $DataBase = 'weddingdress';
    public function __construct($id)
    {
        $this->id = $id;
        $this->init();
    }
    private function init()
    {
        $this->DeleteUser();
    }
    private function DeleteUser()
    {
        $User_SQL_Str = "delete from user where ID='" . $this->id . "';";
        sql_conn_insert($this->DataBase, $User_SQL_Str);
        echo true;
    }
}
$id = $_POST['id'];
new DeleteUser($id);
