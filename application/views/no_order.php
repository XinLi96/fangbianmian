<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <base href="<?php echo site_url();?>" target=""/>
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/no_order.css">
    <link rel="stylesheet" href="assets/css/user_nav.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
</head>
<body>
<?php include'header.php'?>
<div id="contant" onselectstart="return false;" style="-moz-user-select:none;">
    <div class="container">
        <?php include("user_nav.php")?>
        <div id="no-order">
            <div class="input-group">
                <input type="text" class="form-control">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">搜&nbsp&nbsp&nbsp索</button>
                </span>
            </div>
            <div class="sentence">亲~还没有任何订单。看看心仪的导师&nbsp
                <span class="glyphicon glyphicon-arrow-right"></span>
            </div>
            <button class="search-iv">查找面试官</button>
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