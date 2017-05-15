<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
<!--    <meta http-equiv="X-UA-Compatible" content="IE=edge">-->

	<title>demo</title>
	<base href="<?php echo site_url();?>" target=""/>
	<link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/neitui.css">
	<link rel="stylesheet" href="assets/css/header.css">
	<link rel="stylesheet" href="assets/css/footer.css">
</head>
<body>
	<?php include('header.php');?>

	<div id="container">
		<div id="neck">
			<div id="left">
				<img src="assets/img/neitui/20140211151505-1983394536.jpg">
			</div>
			<div id="right">
				<div id="right-top">
					<p class="right-top-nav"><?php echo $result->company;?>/<?php echo $result->position;?></p>
				</div>
				<div id="right-body">
					<ul class="right-ul">
						<li class="item">价&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp格&nbsp:<span class="ys1"><?php echo $result->money;?></span><span class="ys2">元</span></li>
						<li  class="item">内&nbsp&nbsp推&nbsp&nbsp人&nbsp:<span class="ys3"><?php echo $result->nick_name;?></span></li>
						<li  class="item">内推次数&nbsp:<span class="ys3"><?php echo $result->total_num;?>&nbsp次</span></li>
						<li  class="item">好&nbsp&nbsp评&nbsp数&nbsp&nbsp:<span class="ys3"><?php echo $result->good_num;?>&nbsp次</span></li>
					</ul>
				</div>
				<div id="right-bottom">
					<a href="t_recom/collect?rec_id=<?php echo $result->rec_id;?>"><div id="right-bottom-left" >收&nbsp藏</div></a>
					<div id="right-bottom-right">拍下内推</div>
				</div>
			</div>
		</div>
		
	</div>
	<div id="teacher">
        <div class="row1">
            <ul class="nav-tabs" role="tablist">
                <li class="active"><a href="#">内推要求</a></li>
            </ul>
        </div>
		<div id="teacher-desc" class="container">
                <div class="teacher-desc-container">
                    <div class="underline">
                        <div class="underline-container">
                           	 <span class="yaoqiu hang" >内推要求:</span>
							 <span><?php echo $result->memo;?></span>
<!--		                     <span >年龄：25岁以上</span>-->
<!--		                     <SPAN >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;所在城市：北京</SPAN>-->
<!--		                     <span class="hang">工作年龄：4年以上</span>-->
                        </div>
                    </div>
<!--                    <div class="underline">-->
<!--                       <div class="underline-container">-->
<!--                            <span class="yaoqiu">学习要求</span>-->
<!--                            <span class="hang">学习要求：本科</span>-->
<!--                            <span class="hang">专业要求：艺术设计相关专业</span>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="underline">-->
<!--                        <div class="underline-container">-->
<!--                           <span class="yaoqiu">项目介绍</span>-->
<!--                           <span class="hang">项目名称：电商 app</span>-->
<!--                           <span class="hang">担任职位：前段艺术总监</span>-->
<!--                           <span class="hang">时间：2015年5月至今</span>-->
<!--                           <span class="hang">项目描述：计算机科学技术学院软件学院是最好的学院，啦啦啦啦啦啦啦啦啦啦</span>-->
<!---->
<!--                    </div>-->



                </div>
            </div>
        </div>

		<?php include('footer.php');?>
	<script type="text/javascript" defer="defer" src="assets/js/neitui.js"></script>
</body>
</html>