<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>内推订单</title>
	<base href="<?php echo site_url();?>" target=""/>
	<link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/rec_list.css">
	<link rel="stylesheet" href="assets/css/rec_order.css">
	<link rel="stylesheet" href="assets/css/resume_model.css">
	<link rel="stylesheet" href="assets/css/user_nav.css">
	<link rel="stylesheet" href="assets/css/header.css">
	<link rel="stylesheet" href="assets/css/footer.css">
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
					<?php if($stus){?>
						<?php foreach($stus as $stu){?>
							<div class="<?php echo $stu->rec_id;?> box">
								<li class="col">
                                <span class="order-status">
                                    订单状态：待预约
                                </span>
								</li>
								<li class="row1">
                                <span class="order-img" >
                                    <img src="assets/img/rec/1.png" alt="">
                                </span>
                                <span class="order-job">
                                    内推公司：<?php echo $stu->company;?>
                                </span>
                                <span class="order-way">
                                    内推职位：<?php echo $stu->position;?>
                                </span>
                                <span class="order-sallary">
                                    <?php echo $stu->money;?>元
                                </span>
									<span class="order-help2 del-wait" info="<?php echo $stu->rec_id?>">取消</span>
								</li>
							</div>
						<?php }?>
					<?php }?>
						<?php
							for($i=0;$i<count($orders);$i++){
						?>
						<div class="box">
							<li class="col">
							<span class="order-num">
							订单编号：<?php echo $orders[$i]->order_no;?>
							</span>
							<span class="order-time">
								订单时间：<?php echo $orders[$i]->order_date;?>
							</span>
							<span class="order-status">
								订单状态：<?php if($orders[$i]->status == 0){
									echo '预约中';}
									elseif($orders[$i]->status == 1){
										echo '内推进行中';
									}
									elseif($orders[$i]->status == 2){
										echo '内推成功';
									}
									elseif($orders[$i]->status == 3){
										echo '申请取消中';
									}
									elseif($orders[$i]->status == 4){
										echo '已取消';
									}
									elseif($orders[$i]->status == 5){
										echo '过期';
									}
								?>
							</span>
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
							<span class="order-x">
								<a href="#myModal" data-toggle="modal" class="order-info" data-id="<?php echo $orders[$i]->rec_id;?>">订单详情</a>
							</span>
							<span class="order-user">
								推荐人：<span class="user"><?php echo $names[$i]->nick_name;?></span>
							</span>
							<span class="order-jl">
								<a href="#consume-dialog" data-toggle="modal" class="resume-info" data-id="<?php echo $orders[$i]->rec_id;?>">查看简历</a>
							</span>
							<span class="order-con">
								<a href="#">联系他</a>
							</span>
							<span class="order-sallary">
								<?php echo $orders[$i]->money;?>元
							</span>
							<?php if($orders[$i]->status == 0){
								echo '<span class="order-help1">
								取消内推
							</span>';
							}
							elseif($orders[$i]->status == 1){
								echo '<span class="order-help1 apply">
								申请取消
							</span>
							<span class="order-help2 success">
								确认成功
							</span>';
							}
							elseif($orders[$i]->status == 2){
								echo '<span data-toggle="modal" data-target="#myEvaluate" class="order-wan evaluate"   >
								评价导师
							</span>';
							}
							elseif($orders[$i]->status == 3){
								echo '<span class="order-wan cancel">
								取消
							</span>';
							}
							elseif($orders[$i]->status == 4){
								echo '<span class="order-wan del">
								删除
							</span>';
							}
							elseif(($orders[$i]->status == 5)&&($orders[$i]->flag == 1)){
								echo '<span class="order-help1 restore">
								恢复
							</span>
							<span class="order-help2 del restore-second">
								删除
							</span>';
							}
							elseif(($orders[$i]->status == 5)&&($orders[$i]->flag == 0)){
								echo '';
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
<!-- 模态框（Modal） -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content" id="model-con">

			<button type="button" class="close" data-dismiss="modal" id="circle-btn" aria-hidden="true">&times;</button>
			<div class="modal-header" id="neitui-head">
				<h4 class="modal-title" id="neitui-title">内推订单详情</h4>
			</div>
			<div class="modal-body" id="mod-body">
				<p class="body-p"><span class="span1">订单编号:</span><span class="span2 data1">382900000000</span></p>
				<p class="body-p"><span class="span1">订单时间:</span><span class="span2 data2">2017年1月12日9:01</span></p>
				<p class="body-p"><span class="span1">求&nbsp;&nbsp;职&nbsp;&nbsp;者:</span><span class="span2 data10">小王子</span></p>
				<p class="body-p"><span class="span1">推&nbsp;&nbsp;荐&nbsp;&nbsp;人:</span><span class="span2 data4">小李子导师</span></p>
				<p class="body-p"><span class="span1">联系电话:</span><span class="span2 data5">18888888888</span></p>
				<p class="body-p"><span class="span1">订单状态:</span><span class="span2 data3">内推成功</span></p>
				<p class="body-p"><span class="span1">内推公司:</span><span class="span2 data6">腾讯科技</span></p>
				<p class="body-p"><span class="span1">内推职位:</span><span class="span2 data7">产品经理</span></p>
				<p class="body-p"><span class="span1">内推时间:</span><span class="span2 data8 ">2016&nbsp;年&nbsp;8&nbsp;月</span><span class="span2">至</span><span class="span2 data9">2016&nbsp;年&nbsp;12&nbsp;月</span></p>
				<p class="body-p"><span class="span1">内推方式:</span><span class="span2">发短信</span></p>
				<p class="body-p"><span class="span1">内推金额:</span><span class="span2 data11">4500元</span></p>
				<p class="body-p"><span class="span1">备&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;注:</span><span class="span2 data12">哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈</span></p>
			</div>
			<div class="modal-footer" id="mod-foot">
				<button type="button" class="btn btn-default" id="btn-back" data-dismiss="modal">返回</button>

			</div>
		</div><!-- /.modal-content -->
	</div><!-- /.modal -->
</div>
<!--简历弹层开始-->
<div class="modal fade consume-dialog" id="consume-dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button class="close">
					<span class="close-button" data-dismiss="modal">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="consume-dialog-item clearfix" id="job-seekers-name">
					<div id="job-seekers-name-info">
						<h2 class="res1">求职者名称:</h2>
						<div>
							<p class="job-seekers-name-info-item">
								<span>性别：</span>
								<span class="res2"></span>
							</p>

						</div>
						<div>
							<p class="job-seekers-name-info-item">
								<span>年龄：</span>
								<span class="res3">岁</span>
							</p>
						</div>
					</div>
					<img src="assets/img/rec-list/p6.jpg" alt="" id="job-seekers-name-head">
				</div>
				<div class="consume-dialog-item" id="job-seekers-company">
					<h3 class="consume-dialog-title">教育经历</h3>
					<p>
						<span>学校名称：</span>
						<span class="res4"></span>
					</p>
					<p>
						<span>学历：</span>
						<span class="res5"></span>
					</p>
					<p>
						<span>专业：</span>
						<span class="res6"></span>
					</p>
					<p>
						<span class="word-spacing-two">毕业年份：</span>
						<span class="remark-content res7"></span>
					</p>
				</div>
				<div class="consume-dialog-item" id="project-info">
					<h3 class="consume-dialog-title">工作经历</h3>
					<p>
						<span>实习公司：</span>
						<span class="res8"></span>
					</p>
					<p>
						<span>担任职位：</span>
						<span class="res9">前端技术总监</span>
					</p>
					<p>
						<span>实习感受：</span>
						<span class="remark-content res10">拉萨附近路口的撒娇疯了快解散分快递费数据库，啥地方了科技大楼是开发就来看撒娇法律的卡萨。范德萨看见了的空间撒弗兰克的撒娇了房间了飞洒的空间。</span>
					</p>
				</div>
				<div id="consume-dialog-footer" class="clearfix">
					<div id="consume-dialog-footer-left">
						<p class="consume-dialog-footer-left-wrapper">
							<span class="res11">求内推公司：</span>
						</p>
						<p>
							<span class="res12">求内推职位：</span>
						</p>
					</div>
					<div id="consume-dialog-footer-right">
						<div id="consume-dialog-price">
							<span>价格：</span>
							<span class="money res13">2333</span>
							<span class="money-unit">元</span>
						</div>
						<div class="clearfix"></div>
						<div id="consume-dialog-btn-group">
							<a href="#" class="back" data-dismiss="modal">返&nbsp;&nbsp;回</a>
<!--							<a href="#"><button type="submit" class="order-modal-submit">帮他内推</button></a>-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
	<!--评价弹层开始-->
<div class="modal fade" id="myEvaluate" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content" id="model-con">

			<button type="button" class="close" data-dismiss="modal" id="circle-btn" aria-hidden="true">&times;</button>
			<div class="modal-header" id="neitui-head">
				<h4 class="modal-title" id="neitui-title">评价</h4>
			</div>
			<div class="modal-body" id="mod-body">
				<textarea name="" id="" cols="30" rows="10" class="form-control content" placeholder="请输入评价"></textarea>
				<button class="btn btn-default submit" type="submit" id="submit">提交</button>
			</div>

			<div class="modal-footer" id="mod-foot">
				<button type="button" class="btn btn-default" id="btn-back" data-dismiss="modal">返回</button>
			</div>
		</div>
	</div>
</div>
<!--评价弹层结束-->

<?php include'footer.php'?>
<!--	<script src="assets/js/jquery.js"></script>-->
<!--	<script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>-->
<!--	<script src="assets/js/header.js"></script>-->
<!--	<script src="assets/js/user_nav.js"></script>-->
<script src="assets/js/require.js" data-main="assets/js/rec_order.js"></script>
</body>
</html>