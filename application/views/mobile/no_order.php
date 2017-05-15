<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/mobile/css/title.css">
    <link rel="stylesheet" type="text/css" href="assets/mobile/css/footer.css">
    <link rel="stylesheet" href="assets/mobile/css/inter_appo_nav.css">
    <link rel="stylesheet" href="assets/mobile/css/inter_appo_common.css">
    <link rel="stylesheet" href="assets/mobile/css/no_order.css">
    <title>无订单</title>
</head>
<body>
    <?php include 'title.php';?>
    <p id="til-midlle">内推订单</p>
    <?php include "interview_nav.php"?>
    <div id="nav-bar">
        <div id="nav-bar-select"></div>
    </div>
    <div id="content">
        <p class="content-text">亲~没有任何订单。</p>
        <p class="content-text">尝试找寻心仪的导师吧！</p>
        <a href="#" class="content-button">查找导师</a>
    </div>
    <script src="assets/js/require.js" data-main="assets/mobile/js/order_list_entrance.js"></script>
</body>
</html>