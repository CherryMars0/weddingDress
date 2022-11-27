<?php
session_start();
include './backend/index/shoppingCart.php';
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weeding Ress Store</title>
    <link rel="shortcut icon" href="./static/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./static/css/default.css">
    <link rel="stylesheet" href="./static/css/shoppingCart.css">
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
                <li class="userCenter"><a href="./welcome.php"><?=$shoppingCart->userName ?></a></li>
            </ul>
        </div>

        <div class="main">
            <div class="main_banner_title">
                <span>Shopping Cart</span>
                <span>购物车</span>
                <img src="./static/shopImg/q7_03.png">
            </div>
            <div class="shppingCart">
                <div class="shppingCart_detail">
                    <div class="shppingCart_detail_top">
                        <div class="shppingCart_detail_top_left">
                            <p>商品</p>
                        </div>
                        <div class="shppingCart_detail_top_right">
                            <p>单价</p>
                            <p>数量</p>
                            <p>小计</p>
                            <p>操作</p>
                        </div>
                    </div>
                    <div class="shppingCart_detail_shop">
                        <div class="shppingCart_detail_shop_left">
                            <img src="./static/shopImg/luomaA.png">
                            <div>
                                <span>恩捷罗（ENRLO）傅里叶变换公式数理化科学理工男衣服卫衣外套秋冬秋冬</span>
                            </div>
                            <div>
                                <span>白色-傅里叶2-厚 175/70kg/L</span>
                            </div>
                        </div>
                        <div class="shppingCart_detail_shop_right">
                            <div class="shop_price">
                                <p>¥<span>175.0</span></p>
                            </div>
                            <div class="shop_count">
                                <button>-</button>
                                <input type="text">
                                <button>+</button>
                            </div>
                            <div class="shop_price">
                                <p>¥<span>175.0</span></p>
                            </div>
                            <div class="shop_oprating">
                                <p>删除</p>
                            </div>
                        </div>
                    </div>
                    <div class="shppingCart_detail_total">
                        <div class="shppingCart_detail_total_left">
                            <button>清空购物车</button>
                        </div>
                        <div class="shppingCart_detail_total_right">
                            <p>已有<span>1</span>件商品</p>
                            <p>总价¥<span>256.0</span>件商品</p>
                            <button>去结算</button>
                        </div>
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
<script type="text/javascript" src="./static/js/shoppingCart.js"></script>


</html>