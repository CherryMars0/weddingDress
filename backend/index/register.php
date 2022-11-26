<?php
include "../utils/sqlUtils.php";
class Register
{
    private $DataBase = 'weddingdress';
    private $Permissions;
    private $State;
    private $userName;
    private $userPassword;

    function __construct($userName, $userPassword)
    {
        $this->userName = $userName;
        $this->userPassword = $userPassword;
        $this->init();
    }

    private function init()
    {
        $this->queryUser();
    }

    private function queryUser()
    {
        $User_SQL_Str = "select Permissions from user where Name='" . $this->userName . "';";
        $this->Permissions = sql_conn_query($this->DataBase, $User_SQL_Str);
        $this->judgeUser();
    }
    private function insertUser()
    {
        $User_SQL_Str = "insert into user(Name,Password,Permissions)values('" . $this->userName . "','" . $this->userPassword . "','Buyers');";
        sql_conn_insert($this->DataBase, $User_SQL_Str);
    }
    private function judgeUser()
    {
        if (count($this->Permissions) == 0) {
            $this->insertUser();
            $this->setCookie();
            $this->setSession();
            $this->State = "true";
            echo $this->State;
        } else {
            $this->State = "false";
            echo $this->State;
        }
    }
    private function setSession()
    {
        session_start();
        $_SESSION['userName'] = $this->userName;
        $_SESSION['userPermissions'] = "Buyers";
    }
    private function setCookie()
    {
        $expire = time() + 60 * 24 * 30;
        setcookie("userName", $this->userName, $expire, '/weddingDress');
    }
}
$userName = $_POST['userName'];
$userPassword = $_POST['userPassword'];
new Register($userName, $userPassword);
