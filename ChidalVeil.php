<?php
session_start();
include './backend/index/ChidalVeil.php';
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weeding Ress Store</title>
    <link rel="shortcut icon" href="./static/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./static/css/animate.min.css">
    <link rel="stylesheet" href="./static/css/ChidalVeil.css">
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
                    <li class="userCenter"><a href="./welcome.php"><?= $childalVeil->userName ?></a></li>
                </ul>
            </div>
        </div>
        <div class="main">
            <div class="main_banner">
                <img src="./static/shopImg/girl-gd5049a57c_1920.jpg">
                <div class="main_blur">
                </div>
                <div class="main_banner_words fadeInUp animated">
                    <p>专注于中式婚纱私人定制</p>
                    <span>
                        SUNVARY&nbsp;珍视传统，但同时更放眼未来。
                        SUNVARY凭借其在创新研发领域的杰出成就,
                        不断推动创新艺术迈向 新的高峰。SUNVARY从
                        创立至今提交的30多项专利充分证明了我们作为
                        行业创新先锋的超卓地位，对于婚纱晚礼服的发
                        展历史有着非 常深远的意义。
                    </span>
                </div>
            </div>
            <div class="main_banner_title fadeInUp animated">
                <span>Chidal Veil</span>
                <span>中式婚纱</span>
                <img src="./static/shopImg/q7_03.png">
            </div>
            <div class="shop_banner">
                <div class="shop_banner_top">
                    <img src="<?= $childalVeil->Goods[0][0] ?>">
                    <img src="<?= $childalVeil->Goods[1][0] ?>">
                    <img src="<?= $childalVeil->Goods[2][0] ?>">
                    <img src="<?= $childalVeil->Goods[3][0] ?>">
                </div>
                <div class="shop_banner_Bottom">
                    <div class="main_banner_title">
                        <span>Classic</span>
                    </div>
                    <div class="shop_banner_Bottom_top">
                        <img src="<?= $childalVeil->Goods[4][0] ?>">
                        <img src="<?= $childalVeil->Goods[5][0] ?>">
                        <img src="<?= $childalVeil->Goods[6][0] ?>">
                    </div>
                    <div class="shop_banner_Bottom_bottom">
                        <img src="<?= $childalVeil->Goods[7][0] ?>">
                        <img src="<?= $childalVeil->Goods[8][0] ?>">
                        <img src="<?= $childalVeil->Goods[9][0] ?>">
                        <img src="<?= $childalVeil->Goods[10][0] ?>">
                    </div>
                </div>
                <div class="main_banner_title">
                    <span>Accessories</span>
                </div>
                <div class="shop_banner_aquert">
                    <img src="<?= $childalVeil->Goods[11][0] ?>">
                    <img src="<?= $childalVeil->Goods[12][0] ?>">
                    <img src="<?= $childalVeil->Goods[13][0] ?>">
                    <img src="<?= $childalVeil->Goods[14][0] ?>">
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
<script type="text/javascript" src="./static/js/ChidalVeil.js"></script>


</html>