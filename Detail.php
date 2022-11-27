<?php
session_start();
include './backend/index/Detail.php';
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weeding Ress Store</title>
    <link rel="shortcut icon" href="./static/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./static/css/Detail.css">
    <link rel="stylesheet" href="./static/css/default.css">
    <script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="header-container-bottom">
            <span class="header-logo">
                <img src="./static/shopImg/logo_03.png">
            </span>
            <ul>
                <li><a href="./index.php">首页</a></li>
                <li><a href="./BridalVeil.php">西式婚纱</a></li>
                <li><a href="./ChidalVeil.php">中式婚纱</a></li>
                <li><a href="./formal.php">晚礼服</a></li>
                <li class="login"><a href="./login.php">登录</a></li>
                <li class="register"><a href="./register.php">注册</a></li>
                <li class="userCenter"><a href="./welcome.php"><?= $detail->userName ?></a></li>
            </ul>
        </div>
        <div class="main">
            <div class="main_banner_title">
                <span>Veil Detail</span>
                <img src="./static/shopImg/q7_03.png">
            </div>
            <div class="shop_Detail">
                <div class="shop_pic">
                    <img src="<?= $detail->Goods[7] ?>">
                    <div class="shop_price"><?= $detail->Goods[8] ?>$</div>
                </div>
                <div class="shop_info">
                    <div class="shop_desc">
                        <p><?= $detail->Goods[0] ?></p>
                        <p>关键字: <span><?= $detail->Goods[1] ?></span></p>
                        <p>面料: <span><?= $detail->Goods[2] ?></span></p>
                        <p>风格: <span><?= $detail->Goods[3] ?></span></p>
                        <p>款型: <span><?= $detail->Goods[4] ?></span></p>
                        <p>设计师: <span><?= $detail->Goods[5] ?></span></p>
                        <p>说明: <span><?= $detail->Goods[6] ?></span></p>
                    </div>
                    <div class="shop_count ">
                        <button class="subtract">-</button>
                        <input type="text" readonly class="count">
                        <button class="add">+</button>
                    </div>
                    <div class="shop_submit ">
                        <button>加入购物车</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="bottom">
            <div class="bottom-container-left">
                <ul>
                    <li>西式婚纱</li>
                    <li>2021新款</li>
                    <li>2022春季新款</li>
                </ul>
                <ul>
                    <li>中式婚纱</li>
                    <li>2022新款</li>
                    <li>2022春季新款</li>
                    <li>配饰</li>
                </ul>
                <ul>
                    <li>晚礼服</li>
                    <li>酒会礼服</li>
                    <li>鸡尾酒礼服</li>
                    <li>亲子礼服</li>
                    <li>毕业礼服</li>
                    <li>小黑裙</li>
                    <li>演出服</li>
                </ul>
                <ul>
                    <li>配饰</li>
                    <li>头纱</li>
                    <li>手套</li>
                </ul>
                <ul>
                    <li>品牌店</li>
                    <li>旗舰店展示</li>
                </ul>
                <ul>
                    <li>预约服务</li>
                    <li>进店试纱</li>
                    <li>上门量体</li>
                </ul>
                <ul>
                    <li>加盟服务</li>
                    <li>进销商加盟</li>
                    <li>设计师加盟</li>
                </ul>
            </div>
        </div>
    </div>
</body>

<script src="./static/js/axios.min.js"></script>
<script src="./static/js/userJudge.js"></script>
<script type="text/javascript" src="./static/js/Detail.js"></script>


</html>