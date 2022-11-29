<?php
session_start();
include './backend/index/index.php';
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weeding Ress Store</title>
    <link rel="shortcut icon" href="./static/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./static/css/animate.min.css">
    <link rel="stylesheet" href="./static/css/index.css">
    <link rel="stylesheet" href="./static/css/default.css">
    <script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="header">
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
                    <li class="userCenter"><a href="./welcome.php"><?= $index->userName ?></a></li>
                </ul>
            </div>
        </div>
        <div class="main fadeInUp animated">
            <div class="banner-slide">
                <div class="slide-box">
                    <div class="banner-box"></div>
                    <button class="slide-left-btn material-icons">arrow_back_ios</button>
                    <button class="slide-right-btn material-icons">arrow_forward_ios</button>
                    <div class="pagination-box"></div>
                </div>
            </div>
            <div class="shop_banner">
                <div class="shop_banner_left">
                    <img src="<?= $index->Goods[0][0] ?>">
                </div>
                <div class="shop_banner_right">
                    <img src="<?= $index->Goods[3][0] ?>">
                    <img src="<?= $index->Goods[2][0] ?>">
                    <img src="<?= $index->Goods[1][0] ?>">
                    <img src="<?= $index->Goods[4][0] ?>">
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
<script src="./static/js/slide.js"></script>
<script type="text/javascript" src="./static/js/index.js"></script>

</html>