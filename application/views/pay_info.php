<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/pay_info.css">
    <title>Payment Info</title>
</head>
<body>
    <?php include "header.php"?>
    <div id="content">
        <h2 id="content-header">确认订单信息</h2>
        <div id="order">
            <ul id="order-header">
                <li class="order-header-item">导师信息</li>
                <li class="order-header-item">面试职业</li>
                <li class="order-header-item">面试时间</li>
                <li class="order-header-item">时间长度</li>
                <li class="order-header-item">支付金额</li>
            </ul>
            <div class="clearfix"></div>
            <div id="order-content">
                <div id="order-content-head">
                    <div class="innerbox">
                        <img src="assets/img/pay_info/head.jpg" alt="">
                    </div>
                </div>
                <div id="order-content-teacher-info">
                    <div class="innerbox">
                        <?php echo $name?>
                    </div>
                </div>
                <span class="separator"></span>
                <div id="order-content-profession">
                    <div class="innerbox">
                        <p>面试职位：<?php echo $position?></p>
                    </div>
                </div>
                <span class="separator"></span>
                <div id="order-content-date">
                    <div class="innerbox">
                        <p><?php echo $time?></p>
                    </div>
                </div>
                <span class="separator"></span>
                <div id="order-content-time">
                    <div class="innerbox">
                        1小时
                    </div>
                </div>
                <span class="separator"></span>
                <div id="order-content-money">
                    <div class="innerbox money">
                        <span><?php echo $money?></span>&nbsp;
                        <span class="money-unit">元</span>
                    </div>
                </div>
            </div>
            <div class="order-item-box">
                <div class="order-item-title">面试方式：</div>
                <div class="order-item-square"><?php echo $way?></div>
            </div>
            <div class="order-item-box" id="contact-type">
                <div class="order-item-title">联系方式：</div>
                <div class="order-item-square">电话：<?php echo $tel?></div>
            </div>
            <div class="order-item-box" id="add-remarks">
                <div class="order-item-title">添加备注：</div>
                <input type="text" name="remark" class="order-item-square" id="add-remarks-square" placeholder="添加备注信息...">
            </input>
        </div>
            <div class="clearfix"></div>
            <div id="pay-box">
                <div id="pay-box-total">
                    实付款：
                    <span class="money-actual"><?php echo $money?></span>
                    <span class="money-unit">元</span>
                </div>
                <div class="clearfix"></div>
                <div id="pay-box-submit">
                    <a href="search_teacher/detail/<?php echo $user_id?>" id="back">返回</a>
                    <input type="submit" name="sub" id="sub" value="确认支付">
                </div>
            </div>
        </div>
    </div>



    <?php include "footer.php"?>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/header.js"></script>
</body>
</html>