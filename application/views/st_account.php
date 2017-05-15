<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <base href="<?php echo site_url();?>" target=""/>
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/st_account.css">
    <link rel="stylesheet" href="assets/css/user_nav.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
</head>
<body>
<?php include'header.php'?>
<div id="contant" onselectstart="return false;" style="-moz-user-select:none;">
    <div class="container">
        <?php include("user_nav.php")?>
        <div  id="setting">
            <div id="dec"></div>
            <div class="headline">账号设置</div>
            <div class="wrapper">
                <form role="form">
                    <div class="form-group">
                        <label for="nickname">昵称</label>
                        <input type="text" class="form-control" id="nickname">
                    </div>
                    <div class="form-group">
                        <label for="realname">真实姓名</label>
                        <input type="text" class="form-control" id="realname">
                    </div>
                    <div class="form-group ">
                        <div class="checkbox">
                            <label>
                                <input type="checkbox"><div class="name">可显示真实姓名<div class="name-pic"></div></div>
                            </label>
                        </div>
                    </div>
                        <div class="form-group">
                            <label for="identity" >绑定手机号</label>
                            <br>
                            <input type="text" class="form-control" id="binding">
                            <button type="submit" class="btn btn-default btn-right">更换手机号</button>
                        </div>


                    <div class="form-group">
                        <label for="email">邮箱</label>
                        <input type="text" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="identity">目前身份</label>
                        <br>
                        <input type="text" class="form-control" id="identity">
                        <button type="submit" class="btn btn-default btn-right">升级成导师</button>
                    </div>

                    <br>
<!--                    <button type="submit" class="btn btn-default cancel" >取消</button>-->
                    <button type="submit" class="btn btn-default reset">修&nbsp&nbsp&nbsp改</button>
                    <a class="cancel" href="">取消</a>
                </form>
            </div>
            <div class="portrait">
                <label>头像</label>
                <div class="portrait-img">
                    <span class="glyphicon glyphicon-plus"></span>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include'footer.php'?>


<script src="assets/js/jquery.js"></script>
<script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/user_nav.js"></script>
<script src="assets/js/header.js"></script>
</body>
</html>

