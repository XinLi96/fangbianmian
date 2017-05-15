<!DOCTYPE html>
<html lang="zh-hans">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <base href="<?php echo site_url();?>" target=""/>
        <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/footer.css">
        <link rel="stylesheet" href="assets/css/login.css">
        <link rel="stylesheet" href="assets/css/header.css">
        <title>登陆</title>
    </head>
    <body>
        <?php include 'header.php';?>
        <div class="container">
            <div class="information row">
                <div class="logo-register"></div>
                <div class="message col-sm-4 col-sm-offset-4">
                    <h2>欢迎登陆</h2>
                    <form action="user/do_login" method="post" name="login" id="log">
                        <ul>
                            <li>
                                <div class="icon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </div>
                                <input type="text" id="mobile" class="ip" placeholder="请输入手机号" name="tel" value="<?php
echo $this->session->userdata('tel');
?>">
                                <span class="mobile tips"></span>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="glyphicon glyphicon-lock"></span>
                                </div>
                                <input type="password" class="ip" placeholder="请输入密码" name="pass" >
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
                            <button type="button" class="btn btn-default register" id="login">登陆</button>

                        </div>
                        <a href="user/reg" class="a-left">没有账号，马上注册</a>
                        <a href="login.php" class="a-right">忘记密码？</a>
                    </form>
                    <div class="line"></div>
                    <h4>第三方登录</h4>
                    <div class="picture">
                        <div class="wechat">
                            <div class="lg"><a href="wechat">微信登录</a></div>
                        </div>
                        <div class="qq">
                            <div class="lg"><a href="qq">QQ登陆</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php';?>
     <script src="assets/js/require.js" data-main="assets/js/login.js"></script>
</body>

</html>