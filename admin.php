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
                                <a href="javascript:;">商品数据管理</a>
                                <dl class="layui-nav-child">
                                    <dd><a href="javascript:;" class="item animated fadeInDown" class="choice">首页</a></dd>
                                    <dd><a href="javascript:;" class="item animated fadeInDown">欧式婚纱</a></dd>
                                    <dd><a href="javascript:;" class="item animated fadeInDown">中式婚纱</a></dd>
                                    <dd><a href="javascript:;" class="item animated fadeInDown">晚礼服</a></dd>
                                </dl>
                            </li>
                            <li class="layui-nav-item Management">
                                <a href="javascript:;">用户管理</a>
                                <dl class="layui-nav-child">
                                    <dd><a href="javascript:;" class="item animated fadeInDown">卖家</a></dd>
                                    <dd><a href="javascript:;" class="item animated fadeInDown">买家</a></dd>
                                    <dd><a href="javascript:;" class="item animated fadeInDown">仓库管理员</a></dd>
                                </dl>
                            </li>
                            <li class="layui-nav-item">
                                <a href="javascript:;">系统</a>
                                <dl class="layui-nav-child">
                                    <dd><a href="/weddingDress/index.php" class="item animated fadeInDown">返回首页</a></dd>
                                    <dd><a href="javascript:;" class="item logout animated fadeInDown">登出</a></dd>
                                </dl>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="layui-body">
                    <div class="idnex">
                        <div class="sales fadeInDown animated">
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
                        <div class="orders fadeInUp animated">
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
                        <div class="visitors fadeInDown animated">
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