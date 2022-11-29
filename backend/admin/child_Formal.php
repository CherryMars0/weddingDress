<?php
include "./ShopManager/Shop.php";
$page = "Formal";
$Shop = new Shop($page);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./static/css/admin/shop.css">
    <title>child_Seller</title>
</head>

<body>
    <div class="SellerInfo animated fadeInDown">
        <div class="SellerTitle">
            <div>商品编号</div>
            <div>商品名称</div>
            <div>说明</div>
            <div>设计师</div>
            <div>价格</div>
            <div>操作</div>
        </div>
        <?php foreach ($Shop->Shops as $shop) : ?>
            <div class="SellerSig">
                <div>
                    <p class="shopID"><?= $shop[9] ?></p>
                </div>
                <div>
                    <input disabled class="noInput" value="<?= $shop[0] ?>"></input>
                </div>
                <div>
                    <input disabled class="noInput" value="<?= $shop[6] ?>"></input>
                </div>
                <div>
                    <input disabled class="noInput" value="<?= $shop[5] ?>"></input>
                </div>
                <div>
                    <input disabled class="noInput" value="<?= $shop[8] ?>"></input>
                </div>
                <div class="btn">
                    <button class="changePic">更改图片</button>
                    <button class="change">更改信息</button>
                </div>
                <div>
                    <input type="file" name="img" id="uploadImage">
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>


</html>
<script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="./static/js/admin/Shop.js"></script>