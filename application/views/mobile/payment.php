<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="">
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/mobile/css/title.css">
    <link rel="stylesheet" type="text/css" href="assets/mobile/css/footer.css">
    <link rel="stylesheet" href="assets/mobile/css/payment.css">
    <title>支付页面</title>
</head>
<body>
    <?php include 'title.php';?>
    <p id="til-midlle">内推订单</p>
    <div id="order-info">
        <div class="separator-bar"></div>
        <div id="order-info-content">
            <ul class="wrapper">
                <li class="order-info-content-item clearfix" id="order-basic-info">
                    <p>
                        <span class="item-title">订单编号：</span>
                        <span class="item-info">328409234283</span>
                    </p>
                    <p>
                        <span class="item-title">导师信息：</span>
                        <span class="item-info">小王导师</span>
                    </p>
                    <p>
                        <span class="item-title">面试职位：</span>
                        <span class="item-info">前端编程工程师</span>
                    </p>
                    <p>
                        <span class="item-title three-word-title">求职</span>者：</span></span>
                        <span class="item-info">小李子</span>
                    </p>
                    <p>
                        <span class="item-title">面试时间：</span>
                        <span class="item-info">1小时</span>
                    </p>
                    <p>
                        <span class="item-title">面试金额：</span>
                        <span class="item-info">320元</span>
                    </p>
                </li>
                <li class="order-info-content-item clearfix">
                    <span class="item-title">内推时间</span>
                    <span class="green-word item-info">2019年9月31日9：00到10：00</span>
                </li>
                <li class="order-info-content-item clearfix">
                    <span class="item-title">内推方式</span>
                    <span class="green-word item-info">短信内推</span>
                </li>
                <li class="order-info-content-item clearfix">
                    <span class="item-title">联系方式</span>
                    <span class="green-word item-info">QQ：937298734</span>
                </li>
                <li class="order-info-content-item clearfix">
                    <span class="item-title">备注</span>
                    <span class="green-word item-info remark">工作，工作内容，做了什么什么项目，多长时间什么的。工作，工作内容，做了什么什么项目，多长时间什么的。</span>
                </li>
            </ul>
        </div>
    </div>
    <div id="pay-info">
        <div class="separator-bar">
            <div class="wrapper">
                <span id="payment-type-title">支付方式：</span>
            </div>
        </div>
        <div class="wrapper">
            <ul id="pay-type-wrapper">
                <li class="pay-type-item">
                    <span class="pay-type-icon">
                        <span class="pay-type-inner-icon"></span>
                    </span>
                    <span>支付宝</span>
                </li>
                <li class="pay-type-item select">
                    <span class="pay-type-icon">
                        <span class="pay-type-inner-icon"></span>
                    </span>
                    <span>微&nbsp;&nbsp;&nbsp;&nbsp;信</span>
                </li>
                <li class="pay-type-item">
                    <span class="pay-type-icon">
                        <span class="pay-type-inner-icon"></span>
                    </span>
                    <span>银行卡</span>
                </li>
            </ul>
            <button id="pay-button">确认支付</button>
            <a href="#" id="back">返&nbsp;&nbsp;&nbsp;回</a>
        </div>
    </div>
    <?php include 'footer.php';?>
    <script src="assets/js/require.js" data-main="assets/mobile/js/payment.js"></script>
</body>
</html>