<?php
$rootSrc = "E:\\program\\php\\study\\project\\weddingDress\\static\\shopImg";

class Admin
{

    function __construct()
    {

        $this->init();
    }

    private function init()
    {
    }
}
$Permissions = $_SESSION['userPermissions'];
$userName = $_SESSION['userName'];
if(empty($Permissions) && empty($userName)){
    echo "<script>window.location.href = '/weddingDress/index.php';</script>";
}
new Admin();
