<?php
include "./UserManager/User.php";
$role = "Sellers";
$Seller = new User($role);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./static/css/admin/User.css">
    <title>child_Seller</title>
</head>

<body>
    <div class="SellerInfo">
        <div class="SellerTitle">
            <div>ID</div>
            <div>Name</div>
            <div>Password</div>
            <div>Permissions</div>
            <div>Oprate</div>
        </div>
        <?php foreach ($Seller->Users as $User) : ?>
            <div class="SellerSig">
                <div>
                    <input disabled class="noInput" value="<?= $User[0] ?>"></input>
                </div>
                <div>
                    <input disabled class="noInput" value="<?= $User[1] ?>"></input>
                </div>
                <div>
                    <input disabled class="noInput" value="<?= $User[2] ?>"></input>
                </div>
                <div>
                    <input disabled class="noInput" value="<?= $User[3] ?>"></input>
                </div>
                <div>
                    <button class="delete">delete</button>
                    <button class="change">change</button>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>

</html>
<script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="./static/js/admin/User.js"></script>