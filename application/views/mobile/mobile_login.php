<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" href="assets/mobile/css/mobile_login.css">
    <title>Document</title>
</head>
<body>
<?php include("title.php")?>
    <header>
        <p>登录</p>
    </header>
    <div class="content container">
        <div class="wrapper">
            <div class="login">
                <h2>欢迎登陆</h2>
            </div>
            <form action="">
                <ul>
                    <li class="font">请输入手机号/邮箱号：</li>
                    <li><input type="text" class="id"></li>
                    <li class="font">请输入密码：</li>
                    <li><input type="password" class="id"></li>
                </ul>
                <div class="btn-group btn-group-lg register-btn">
                    <button type="button" class="btn btn-default register">登陆</button>
                </div>
                <a href="../register.php" class="a-left">没有账号，马上注册</a>
                <a href="../login.php" class="a-right">忘记密码？</a>
            </form>
        </div>

    </div>
    <footer></footer>
</body>
</html>