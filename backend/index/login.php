<?php
include "../utils/sqlUtils.php";
class Login
{
    private $DataBase = 'weddingdress';
    private $User;
    private $State;
    private $userName;
    private $userPassword;

    function __construct($userName, $userPassword)
    {
        $this->userName = $userName;
        $this->userPassword = $userPassword;
        $this->init();
    }

    public function init()
    {
        $this->queryUser();
    }

    private function queryUser()
    {
        $User_SQL_Str = "select Permissions from user where Name='" . $this->userName . "'and Password='" . $this->userPassword . "';";
        $this->User = sql_conn_query($this->DataBase, $User_SQL_Str);
        $this->judgeUser();
    }
    private function setCookie()
    {
        $expire = time() + 60 * 24 * 30;
        setcookie("userName", $this->userName, $expire, '/weddingDress');
    }
    private function judgeUser()
    {
        if (empty($this->User)) {
            $this->State = "false";
            echo $this->State;
        } else {
            $this->setCookie();
            $this->setSession();
            $this->State = "true";
            echo $this->State;
        }
    }
    private function setSession()
    {
        session_start();
        $_SESSION['userName'] = $this->userName;
        $_SESSION['userPermissions'] = $this->User[0][0];
    }
}

$name = $_POST['userName'];
$pwd = $_POST['userPassword'];
$Login = new Login($name, $pwd);
