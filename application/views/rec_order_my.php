<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>内推订单</title>
    <base href="<?php echo site_url();?>" target=""/>
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/rec_order.css">
    <link rel="stylesheet" href="assets/css/user_nav.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">

    <link rel="stylesheet" href="assets/css/resume_model.css">
    <!--	<link rel="stylesheet" href="assets/css/pop.css">-->
</head>
<body>
<?php include'header.php' ?>

<div class="container" id="container">
    <div class="wrapper zhuti">
        <?php include("user_nav.php") ?>
        <div id="search-order">
            <div class="search">
                <input type="text">
                <button>搜索</button>
            </div>
            <div id="select_one" choose="<?php echo $number?>"></div>
            <div class="order-details">
                <div class="datails">
                    <?php
                    for($i=0;$i<count($orders);$i++){
                        ?>
                        <div class="box">
                            <li class="col">
<!--							<span class="order-status">-->
<!--								订单状态：--><?php //if($orders[$i]->status == 0){
//                                    echo '预约中';}
//                                elseif($orders[$i]->status == 1){
//                                    echo '内推进行中';
//                                }
//                                elseif($orders[$i]->status == 2){
//                                    echo '内推成功';
//                                }
//                                elseif($orders[$i]->status == 3){
//                                    echo '申请取消中';
//                                }
//                                elseif($orders[$i]->status == 4){
//                                    echo '已取消';
//                                }
//                                elseif($orders[$i]->status == 5){
//                                    echo '过期';
//                                }
//                                ?>
<!--							</span>-->
                            </li>
                            <li class="row1" data-id="<?php echo $orders[$i]->rec_id;?>">
							<span class="order-img">
								<img src="assets/img/rec/1.png" alt="">
							</span>
							<span class="order-job">
								内推公司：<?php echo $orders[$i]->company;?>
							</span>
							<span class="order-way">
								内推职位：<?php echo $orders[$i]->position;?>
							</span>
							<span class="order-sallary">
								<?php echo $orders[$i]->money;?>元
                            </span>
                                <?php if($number == 4){
                                    echo '<span class="order-wan del restore-second">
								关闭
							</span>';}
                                else{
                                    echo '<span class="order-wan my-restore">
								恢复
							</span>';
                                }
                                ?>
                            </li>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include'footer.php'?>
<!--	<script src="assets/js/jquery.js"></script>-->
<!--	<script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>-->
<!--	<script src="assets/js/header.js"></script>-->
<!--	<script src="assets/js/user_nav.js"></script>-->
<script src="assets/js/require.js" data-main="assets/js/rec_order_tea.js"></script>
</body>
</html>