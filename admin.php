<?php
session_start();
include './backend/admin/admin.php';
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weeding Ress</title>
    <link rel="shortcut icon" href="./static/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./static/js/layui-v2.6.8/layui/css/layui.css">
    <link rel="stylesheet" href="./static/css/animate.min.css">
    <link rel="stylesheet" href="./static/css/admin.css">
</head>

<body>
    <div class="panel">
        <div class="container">
            <div class="layui-layout layui-layout-admin">
                <div class="layui-header fadeInDown animated border_none">
                    <div class="title" id="title">
                        <p>Weeding Ress</p>
                    </div>
                    <ul class="layui-nav layui-layout-right a">
                        <li class="layui-nav-item layui-hide layui-show-md-inline-block">
                            <p class="userName"><?= $admin->userName ?></p>
                        </li>
                    </ul>
                </div>

                <div class="layui-side layui-bg-black fadeInLeft animated">
                    <div class="layui-side-scroll ">
                        <ul class="layui-nav layui-nav-tree" lay-filter="test">
                            <li class="layui-nav-item layui-nav-itemed">
                                <a href="javascript:;">Product Datas</a>
                                <dl class="layui-nav-child">
                                    <dd><a href="javascript:;" class="item" class="choice">Bridal Veil</a></dd>
                                    <dd><a href="javascript:;" class="item">Chidal Veil</a></dd>
                                    <dd><a href="javascript:;" class="item">formal </a></dd>
                                </dl>
                            </li>
                            <li class="layui-nav-item Management">
                                <a href="javascript:;">User Management</a>
                                <dl class="layui-nav-child">
                                    <dd><a href="javascript:;" class="item">Seller</a></dd>
                                    <dd><a href="javascript:;" class="item">Buyers</a></dd>
                                    <dd><a href="javascript:;" class="item">Warehouse Administartor</a></dd>
                                </dl>
                            </li>
                            <li class="layui-nav-item">
                                <a href="javascript:;">System</a>
                                <dl class="layui-nav-child">
                                    <dd><a href="/weddingDress/index.php" class="item">back Index page</a></dd>
                                    <dd><a href="javascript:;" class="item logout">Logout</a></dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="layui-body">
                    <div class="sales">
                        <div>
                            <div class="sales-top">
                                <img src="./static/shopImg/icon/yen.png">
                                <p>销售额</p>
                            </div>
                            <div class="sales-bottom">
                                <p>今日: ￥<span>17010</span></p>
                                <p>昨日: ￥<span>282960</span></p>
                            </div>
                        </div>
                        <button>每日销售额</button>
                    </div>
                    <div class="orders">
                        <div>
                            <div class="orders-top">
                                <img src="./static/shopImg/icon/text.png">
                                <p>订单数</p>
                            </div>
                            <div class="orders-bottom">
                                <p>今日: <span>6</span></p>
                                <p>昨日: <span>110</span></p>
                            </div>
                        </div>
                        <button>每日订单数</button>
                    </div>
                    <div class="visitors">
                        <div>
                            <div class="visitors-top">
                                <img src="./static/shopImg/icon/user.png">
                                <p>访客数</p>
                            </div>
                            <div class="visitors-bottom">
                                <p>今日: <span>959</span></p>
                                <p>昨日: <span>14193</span></p>
                            </div>
                        </div>
                        <button>每日访客数</button>
                    </div>
                </div>
                <div class="layui-footer fadeInUp animated">
                    <span class="role"><?= $admin->Permissions ?></span>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="./static/js/axios.min.js"></script>
<script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
<script src="./static/js/layui-v2.6.8/layui/layui.js"></script>
<script src="./static/js/admin.js"></script>

</html>