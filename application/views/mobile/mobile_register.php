<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/mobile/css/mobile_register.css">
    <title>Document</title>
</head>
<body>
<?php include("title.php")?>
<header>
    <p>注册</p>
</header>
<div class="content container">
    <div class="wrapper">
        <div class="regist">
            <h2>欢迎注册</h2>
        </div>
        <form action="">
            <ul>
                <li class="font">请输入手机号/邮箱号：</li>
                <li><input type="text" class="id"></li>
                <li class="font">请输入密码：</li>
                <li><input type="password" class="id"></li>
                <li class="font">请输入短信验证码：</li>
                <li><input type="text" class="id yanzhengma"><button type="button" class="btn btn-default yanzheng">验证码</button></li>
                <li class="last">
                    <div class="btn-group btn-group-lg check-btn">
                        <button type="button" class="btn btn-default student check">求职者</button>
                        <button type="button" class="btn btn-default teacher">导师</button>
                        <input name="status" id="status" value="0" type="hidden">
                    </div>
                </li>
            </ul>

            <div class="btn-group btn-group-lg register-btn long">
                <button type="button" class="btn btn-default register">注册</button>
            </div>
            <a href="../login.php" class="a-right">已有账号？马上登陆</a>
        </form>
    </div>

</div>
<footer></footer>
<script src="assets/js/jquery.js"></script>
<script src="assets/mobile/js/mobile_register.js"></script>
</body>
</html>