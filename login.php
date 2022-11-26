<?php
session_start();
?>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weeding Ress Store</title>
    <link rel="shortcut icon" href="./static/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="./static/css/login.css">
    <link rel="stylesheet" href="./static/css/default.css">
    <script src="https://apps.bdimg.com/libs/jquery/2.1.4/jquery.min.js"></script>
</head>

<body>
    <div class="container">
        <div class="main">
            <div class="main_left">
                <div class="loginContainer">
                    <p class="loginTitle">Login</p>
                    <div class="login">
                        <form class="loginForm" id="loginForm" action="/user/login" method="post">
                            <div class="inputBox">
                                <p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z" />
                                    </svg>
                                </p>
                                <input id="userName" type="text" name="userName" placeholder="userName" />
                            </div>
                            <div class="inputBox">
                                <p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-key" viewBox="0 0 16 16">
                                        <path d="M0 8a4 4 0 0 1 7.465-2H14a.5.5 0 0 1 .354.146l1.5 1.5a.5.5 0 0 1 0 .708l-1.5 1.5a.5.5 0 0 1-.708 0L13 9.207l-.646.647a.5.5 0 0 1-.708 0L11 9.207l-.646.647a.5.5 0 0 1-.708 0L9 9.207l-.646.647A.5.5 0 0 1 8 10h-.535A4 4 0 0 1 0 8zm4-3a3 3 0 1 0 2.712 4.285A.5.5 0 0 1 7.163 9h.63l.853-.854a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.793-.793-1-1h-6.63a.5.5 0 0 1-.451-.285A3 3 0 0 0 4 5z" />
                                        <path d="M4 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0z" />
                                    </svg>
                                </p>
                                <input id="userPassword" type="password" name="userPassword" placeholder="password" />
                            </div>
                            <div class="inputBox">
                                <p>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-ppt" viewBox="0 0 16 16">
                                        <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                                        <path d="M6 5a1 1 0 0 1 1-1h1.188a2.75 2.75 0 0 1 0 5.5H7v2a.5.5 0 0 1-1 0V5zm1 3.5h1.188a1.75 1.75 0 1 0 0-3.5H7v3.5z" />
                                    </svg>
                                </p>
                                <input id="Captcha" type="text" name="Captcha" placeholder="Captcha" />
                            </div>
                            <div class="inputCaptcha">
                                <p>Captcha(点击验证码更换):</p>
                                <div id="code"></div>
                            </div>
                            <p class="errorTab"></p>
                        </form>
                        <button class="loginBtn" id="login">Login</button>
                        <div class="loginContainer-bottom">
                            <ul>
                                <li><a href="./index.php">首页</a></li>
                                <li></li>
                                <li><a href="./register.php">注册</a></li>
                            </ul>
                        </div>
                        <div class="icon">
                            <img src="./static/shopImg/q7_03.png">
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner">
                <img src="./static/ShopImg/n3.jpg">
                <div class="banner_words">
                    <p>&nbsp;&nbsp;&nbsp;&nbsp;—Brand Story</p>
                    <br>
                    <span>品牌创立以来，设计团队始终秉持着传承领先的设计理念，致力于为用户</span>
                    <br>
                    <span>量身定制时尚、经典简洁、高雅的婚纱晚礼服产品。SUNVARY设计师团队在</span>
                    <br>
                    <span>Franziska Lange和Emma女士的带领下深入钻研国际时尚潮流 …</span>
                </div>
            </div>
        </div>
    </div>
</body>

<script src="./static/js/axios.min.js"></script>
<script type="text/javascript" src="./static/js/login.js"></script>

</html>