<?php
$rootSrc = "E:\\program\\php\\study\\project\\weddingDress\\static\\shopImg";

class Admin
{
    public $Permissions;
    public $userName;
    function __construct()
    {
        $this->Permissions = $_SESSION['userPermissions'];
        $this->userName = $_SESSION['userName'];
        $this->init();
    }

    private function init()
    {
        if (empty($this->Permissions) && empty($this->userName)) {
            echo "<script>window.location.href = '/weddingDress/index.php';</script>";
        }
    }
}

$admin = new Admin();
