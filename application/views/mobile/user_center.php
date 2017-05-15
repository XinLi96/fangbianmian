<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>用户中心</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/lib/awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="assets/mobile/css/title.css">
    <link rel="stylesheet" type="text/css" href="assets/mobile/css/footer.css">
    <link rel="stylesheet" href="assets/mobile/css/inter_appo_nav.css">
    <link rel="stylesheet" href="assets/mobile/css/user_center.css">
</head>
<body>
    <?php include 'title.php';?>
    <p id="til-midlle">个人中心</p>
    <div id="user-info">
        <div class="wrapper">
            <div class="table-cell" id="header-img-wrapper">
                <img src="assets/mobile/img/user_center/header.png" alt="" id="header-img">
            </div>
            <div id="user-info-text">
                <div class="table-cell">
                    <p id="user-info-name">求职者名字</p>
                    <p id="user-info-univer">东北林业大学</p>
                </div>
            </div>
            <div id="edit-resume" >
                <div class="table-cell" id="edit-resume-text">
                    <a href="#">
                        <p>编辑简历</p>
                        <p>完善程度80%</p>
                    </a>
                </div>
                <div class="table-cell">
                    <i class="icon-angle-right edit-resume-angle-right"></i>
                </div>
            </div>
        </div>
    </div>
    <div id="user-center">
        <div class="nav-container">
            <div class="order-nav-header">
                <div class="wrapper">
                    <span class="header-title">我的预约</span>
                    <a class="header-view-all" href="#">
                        <span>查看全部订单</span>
                        <span class="icon-angle-right view-all-angle-right"></span>
                    </a>
                </div>
            </div>
            <div class="order-nav-context">
                <?php include 'appointment_nav.php'?>
            </div>
        </div>
        <div class="separator-bar"></div>
        <div class="nav-container">
            <div class="order-nav-header">
                <div class="wrapper">
                    <span class="header-title">我的内推</span>
                    <a class="header-view-all" href="#">
                        <span>查看全部订单</span>
                        <span class="icon-angle-right view-all-angle-right"></span>
                    </a>
                </div>
            </div>
            <div class="order-nav-context">
                <?php include 'interview_nav.php'?>
            </div>
        </div>
        <div class="separator-bar"></div>
        <div class="nav-container">
            <div class="wrapper">
                <a class="nav-item">
                    <span class="nav-item-icon"></span>
                    <span class="nav-item-title">我的简历</span>
                </a>
                <a class="nav-item">
                    <span class="nav-item-icon"></span>
                    <span class="nav-item-title">消息中心</span>
                </a>
                <a class="nav-item">
                    <span class="nav-item-icon"></span>
                    <span class="nav-item-title">收藏</span>
                </a>
                <a class="nav-item">
                    <span class="nav-item-icon"></span>
                    <span class="nav-item-title">账号设置</span>
                </a>
            </div>
        </div>
    </div>
    <?php include 'footer.php';?>
    <script src="assets/js/require.js" data-main="assets/mobile/js/user_center.js"></script>
</body>
</html>