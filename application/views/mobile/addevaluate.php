<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <base href="<?php echo site_url();?>" target=""/>
    <link rel="stylesheet" type="text/css" href="assets/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/mobile/css/addevaluate.css">
    <link rel="stylesheet" type="text/css" href="assets/mobile/css/title.css">

    <title></title>
</head>
<body>

<?php include 'title.php';?>
<p id="til-midlle">添加评价</p>
<div id="contant">
    <div id="wrapper">
        <ul>
            <li class="first"><img src="assets/mobile/img/addevaluate/1.png"><span>订单评价</span></li>
            <li class="third">
                <div class="bangbang">
						<span class="third_one">
							<input type="checkbox" name="" class="ping one"><span>好</span></span>
                    <span class="third_two">
							<input type="checkbox" name="" class="ping two"><span>中</span></span>
                    <span class="third_three"><input type="checkbox" name="" class="ping three"><span>差</span></span>
                </div>

            </li>
            <li class="second"><img src="assets/mobile/img/addevaluate/2.png"><span>备注</span></li>

        </ul>

        <div class="inside">
            <textarea placeholder="&nbsp&nbsp&nbsp填写备注细则"></textarea>
        </div>

        <div class="dianji">添加评价</div>
        <div class="cancel"><a href="">取消</a></div>
    </div>


</div>
</div>


<script src="assets/js/require.js" data-main="assets/mobile/js/addevaluate"></script>


</body>
</html>
