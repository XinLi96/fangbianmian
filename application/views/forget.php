<!DOCTYPE html>
<html lang="zh-hans">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <base href="<?php echo site_url();?>">
        <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/header.css">
        <link rel="stylesheet" href="assets/css/footer.css">
        <link rel="stylesheet" href="assets/css/forget.css">
        <title>忘记密码</title>
    </head>
    <body>
        <?php include 'header.php';?>
        <div class="container">
            <div class="information row">
                <div class="logo-register"></div>
                <div class="message col-md-4 col-md-offset-4">
                    <h2>找回密码</h2>
                    <form action="">
                        <ul>
                            <li>
                                <div class="icon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </div>
                                <input name="tel" type="text" class="ip" id="mobile" placeholder="请输入手机号码">
                                <span class="mobile tips"></span>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="glyphicon glyphicon-envelope"></span>
                                </div>
                                <input type="text" class="ip" placeholder="请输入短信验证码">
                                <div class="send">获取验证码</div>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="glyphicon glyphicon-lock"></span>
                                </div>
                                <input name="pass" type="password"  id="pass" placeholder="请输入密码(6-12位,由数字和字母组成)" style="width:300px;">
                                <span class="pass tips"></span>
                            </li>
                             <li>
                                <div class="icon">
                                    <span class="glyphicon glyphicon-lock"></span>
                                </div>
                                <input name="cpass" type="password" id="cpass"  placeholder="请确认新密码">
                                <span class="cpass tips"></span>
                            </li>
                            <li class="last checked">
                                <div class="icon">
                                    <span class="glyphicon glyphicon-comment"></span>
                                </div>
                                <input type="text" class="yan" placeholder="请输入验证码" name="captcha" id="cap">

                                 <div class=" captcha">
                                    <img src="user/code" alt="" id="captcha" />
                                </div>
                                <div class="icon icon-repeat">
                                    <span class="glyphicon glyphicon-repeat"></span>
                                </div>
                                <span class="cap tips"></span>
                            </li>
                        </ul>
                        <div class="btn-group btn-group-lg register-btn">
                            <button type="button" class="btn btn-default register">找回密码</button>
                        </div>
                        <a href="login.php">返回，登陆</a>
                    </form>
                </div>
            </div>
        </div>
        <?php include 'footer.php';?>
        <script src="assets/js/jquery.js"></script>
        <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/js/header.js"></script>
    </body>
</html>