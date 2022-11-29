<?php
session_start();
include './backend/index/formal.php';
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weeding Ress Store</title>
    <link rel="shortcut icon" href="./static/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./static/css/animate.min.css">
    <link rel="stylesheet" href="./static/css/formal.css">
    <link rel="stylesheet" href="./static/css/default.css">
    <script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="header-container-bottom">
            <span class="header-logo">
                <img class="fadeInDown animated" src="./static/shopImg/logo_03.png">
            </span>
            <ul>
                <li><a href="./index.php">首页</a></li>
                <li><a href="./BridalVeil.php">西式婚纱</a></li>
                <li><a href="./ChidalVeil.php">中式婚纱</a></li>
                <li><a href="./formal.php">晚礼服</a></li>
                <li class="login"><a href="./login.php">登录</a></li>
                <li class="register"><a href="./register.php">注册</a></li>
                <li class="userCenter"><a href="./welcome.php"><?= $formal->userName ?></a></li>
            </ul>
        </div>

        <div class="main">
            <div class="main_banner">
                <img src="./static/shopImg/14712448458045ppexn.jpg">
                <div class="main_banner_words fadeInUp animated">
                    <p>器物有魂魄 匠人自谦恭</p>
                    <span>
                        SUNVARY&nbsp;在婚纱高档晚礼服定制行业具有较高的声誉和地位,
                        不仅源于我们精致完美的作品以及严谨的制作工艺，同时也来自公
                        司从创立之初就始终秉承的卓越制造，引领新时代匠工精神的理念。
                        这种精神已经融入SUNVARY品牌,成为SUNVARY至尊品质的象征
                        ，同我们的杰作将代代相传。
                    </span>
                </div>
            </div>
            <div class="main_banner_title  fadeInUp animated">
                <span>FORMAL DRESS</span>
                <span>晚礼服</span>
                <img src="./static/shopImg/q7_03.png">
            </div>
            <div class="shop_banner">
                <div class="shop_banner_first">
                    <img src="<?= $formal->Goods[0][0] ?>">
                    <img src="<?= $formal->Goods[1][0] ?>">
                </div>
                <div class="shop_banner_second">
                    <img src="<?= $formal->Goods[2][0] ?>">
                    <img src="<?= $formal->Goods[3][0] ?>">
                </div>
                <div class="shop_banner_third">
                    <img src="<?= $formal->Goods[4][0] ?>">
                    <img src="<?= $formal->Goods[5][0] ?>">
                </div>
                <div class="main_banner_title">
                    <span>Accessories</span>
                </div>
                <div class="shop_banner_aquert">
                    <img src="<?= $formal->Goods[6][0] ?>">
                    <img src="<?= $formal->Goods[7][0] ?>">
                    <img src="<?= $formal->Goods[8][0] ?>">
                    <img src="<?= $formal->Goods[9][0] ?>">
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
<script type="text/javascript" src="./static/js/formal.js"></script>


</html>