<?php
class Welcome
{
    function __construct($Permissions)
    {
        $this->Permissions = $Permissions;
        $this->init();
    }

    private function init()
    {
    }
}

$Permissions = $_SESSION['userPermissions'];
$userName = $_SESSION['userName'];
if (empty($Permissions) && empty($userName)) {
    echo "<script>window.location.href = '/weddingDress/index.php';</script>";
}
new Welcome($Permissions);
