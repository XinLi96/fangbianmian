<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <base href="<?php echo site_url();?>" target=""/>
    <link rel="stylesheet" type="text/css" href="assets/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/mobile/css/submit_offer.css">
    <link rel="stylesheet" type="text/css" href="assets/mobile/css/title.css">

    <title></title>
</head>
<body>

<?php include 'title.php';?>
<p id="til-midlle">提交offer</p>
<div id="contant">
    <div class="wrapper">
        <ul class="list">
            <li class="first"><img src="assets/mobile/img/submit_offer/1.png"><input type="text" placeholder="公司"></li>
            <li class="second"><img src="assets/mobile/img/submit_offer/2.png"><input type="text" placeholder="职位"></li>
            <li class="third"><img src="assets/mobile/img/submit_offer/3.png"><input type="text" placeholder="薪资"></li>
            <li class="fourth"><img src="assets/mobile/img/submit_offer/4.png"><input type="text" placeholder="联系电话"></li>
            <li class="fifth"><img src="assets/mobile/img/submit_offer/5.png"><input type="text" placeholder="备注"></li>
        </ul>
        <!-- <input type="text" placeholder="填写内推细则或者要求" name=""> -->
        <div class="inside">
            <textarea placeholder="&nbsp&nbsp&nbsp&nbsp填写内推细则或者要求..." class="neirong"></textarea>
        </div>
        <div class="ok"><input type="checkbox" name="read">我已阅读并同意网站协议</div>
        <div class="dianji">发布内推</div>
        <div class="cancel"><a href="">取消</a></div>
    </div>


</div>



<script src="assets/js/require.js" data-main="assets/mobile/js/submit_reason"></script>


</body>
</html>
