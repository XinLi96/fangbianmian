<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <base href="<?php echo site_url();?>" target=""/>
    <link rel="stylesheet" type="text/css" href="assets/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/mobile/css/uploading_frequency.css">
    <link rel="stylesheet" type="text/css" href="assets/mobile/css/title.css">

    <title></title>
</head>
<body>

<?php include 'title.php';?>
<p id="til-midlle">上传音频</p>
<div id="contant">
    <div id="wrapper">
        <ul class="list">
            <li class="first"><img src="assets/mobile/img/uploading_frequency/1.png"><span>面试结果</span></li>
            <li class="third">
                <div id="biabia">
						<span class="third_one">
							<input type="checkbox" name="" class="ping one"><span>通过</span></span>
                <span class="third_two">
							<input type="checkbox" name="" class="ping two"><span>未通过</span></span>
                </div>

            </li>
            <li class="second"><img src="assets/mobile/img/uploading_frequency/2.png"><span>导师评语</span></li>

        </ul>

        <div class="inside">
            <textarea placeholder="&nbsp&nbsp&nbsp填写导师评语。。。"></textarea>
        </div>

        <div class="shangchuan">上传音频</div>
        <div class="dianji">添加评价</div>
        <div class="cancel"><a href="">取消</a></div>
    </div>


</div>
</div>




<script src="assets/js/require.js" data-main="assets/mobile/js/uploading_frequency"></script>


</body>
</html>
