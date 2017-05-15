<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <base href="<?php echo site_url();?>" target=""/>
    <link rel="stylesheet" type="text/css" href="assets/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/mobile/css/publish_interpolate.css">
    <link rel="stylesheet" type="text/css" href="assets/mobile/css/title.css">

    <title></title>
</head>
<body>

    <?php include 'title.php';?>
    <p id="til-midlle">发布内推</p>
    <div id="contant">
        <div class="wrapper">
            <ul class="list">
                <li class="first"><img src="assets/mobile/img/publish_interpolate/1.png"><input type="text" placeholder="内推公司"></li>
                <li class="second"><img src="assets/mobile/img/publish_interpolate/2.png"><input type="text" placeholder="内推职位"></li>
                <li class="third"><img src="assets/mobile/img/publish_interpolate/3.png"><input type="text" placeholder="内推金额"></li>
                <li class="fourth"><img src="assets/mobile/img/publish_interpolate/4.png"><input type="text" placeholder="内推截至时间"></li>
                <li class="fifth"><img src="assets/mobile/img/publish_interpolate/5.png"><input type="text" placeholder="内推要求细则"></li>
            </ul>

            <div class="inside">
                <textarea placeholder="&nbsp&nbsp&nbsp填写内推细则或者要求..." class="neirong"></textarea>
            </div>
            <div class="ok"><input type="checkbox" name="read">我已阅读并同意网站协议</div>
            <div class="dianji">发布内推</div>
            <div class="cancel"><a href="">取消</a></div>
        </div>


    </div>



<script src="assets/js/require.js" data-main="assets/mobile/js/publish_interpolate"></script>


</body>
</html>
