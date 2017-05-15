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
    <p>忘记密码</p>
</header>
<div class="content container">
    <div class="wrapper">
        <div class="regist">
            <h2>忘记密码</h2>
        </div>
        <form action="">
            <ul>
                <li class="font">请输入手机号/邮箱号：</li>
                <li><input type="text" class="id"></li>
                <li class="font">请输入新密码：</li>
                <li><input type="password" class="id"></li>
                <li class="font">请输入短信验证码：</li>
                <li><input type="text" class="id yanzhengma"><button type="button" class="btn btn-default yanzheng">验证码</button></li>
            </ul>

            <div class="btn-group btn-group-lg register-btn long">
                <button type="button" class="btn btn-default register">找回密码</button>
            </div>
            <a href="../login.php" class="a-right">返回，登陆</a>
        </form>
    </div>

</div>
<footer></footer>
</body>
</html>