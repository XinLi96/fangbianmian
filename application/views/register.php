<!DOCTYPE html>
<html lang="zh-hans">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
           <base href="<?php echo site_url();?>" target=""/>
        <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/header.css">
        <link rel="stylesheet" href="assets/css/footer.css">
        <link rel="stylesheet" href="assets/css/register.css">

        <title>注册</title>
    </head>
    <body>
        <?php include 'header.php';?>
        <div class="container">
            <div class="information row">
                <div class="logo-register"></div>
                <div class="message col-sm-4 col-sm-offset-4">
                    <h2>欢迎注册</h2>
                    <form action="" method="post" name="reg" id="reg">
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
                                <input name="cpass" type="password" id="cpass"  placeholder="请确认密码">
                                <span class="cpass tips"></span>
                            </li>
                            <li class="last">
                                <div class="btn-group btn-group-lg check-btn">
                                    <button type="button" class="btn btn-default student check">求职者</button>
                                    <button type="button" class="btn btn-default teacher">导师</button>
                                    <input name="status" id="status" value="0" type="hidden">
                                </div>
                            </li>
                            <li class="next"><input type="checkbox" class="checkbox" id="check"></input><span class="h">我已同意并阅读</span><a href="javascript:;">《网站相关协议》</a></li>
                            </ul>
                            <div class="btn-group btn-group-lg register-btn">
                                <button type="button" class="btn btn-default register" id="btn-send">注册</button>
                            </div>
                            <a class="haven" href="login.php">已有账号？马上登陆</a>
                        </form>
                    </div>
                </div>
            </div>

            <?php include 'footer.php';?>
            <script src="assets/js/require.js" data-main="assets/js/register"></script>

        </body>
    </html>