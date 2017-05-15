<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <base href="<?php echo site_url();?>" target=""/>
    <link rel="stylesheet" type="text/css" href="assets/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/mobile/css/cancel_reason.css">
    <link rel="stylesheet" type="text/css" href="assets/mobile/css/title.css">

    <title></title>
</head>
<body>

<?php include 'title.php';?>
<p id="til-midlle">取消原因</p>
<div id="contant">
    <div class="wrapper">
        <ul class="list">
            <li class="first"><img src="assets/mobile/img/cancel_reason/1.png"><input type="text" placeholder="取消原因"></li>
            <li class="second"><img src="assets/mobile/img/cancel_reason/2.png"><input type="text" placeholder="备注"></li>

        </ul>

        <div class="inside">
            <textarea placeholder="&nbsp&nbsp&nbsp&nbsp填写备注细则"></textarea>
        </div>

        <div class="dianji">提交offer</div>
        <div class="cancel"><a href="">取消</a></div>
    </div>


</div>
</div>


<script src="assets/js/require.js" data-main="assets/mobile/js/cancel_reason"></script>


</body>
</html>
