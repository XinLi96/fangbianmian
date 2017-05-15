<?php $id=$this->session->userdata('status');?>
<div id="list">
	<div class="bar plus"><i class="iconfont">&#xe667;</i>我的面试<i class="iconfont arrow">&#xe630;</i><div class="line" id="iv_line"></div></div>
	<ul class="second-level interview">
		<li><a href="t_iv_order/index/5" class="select">全部面试</a></li>
		<li><a href="t_iv_order/select/6" class="select0">预约面试</a></li>
		<li><a href="t_iv_order/select/1" class="select1">进行中面试</a></li>
		<li><a href="t_iv_order/select/2" class="select2">已完成面试</a></li>
		<li><a href="t_iv_order/select/4" class="select4">取消面试</a></li>
	</ul>
	<div class="bar plus"><i class="iconfont pic1">&#xe616;</i>我的内推<i class="iconfont arrow">&#xe630;</i><div class="line"></div></div>
	<ul class="second-level rec">
		<li><a href="rec_order/index/6" class="selected ">全部内推</a></li>
		<li><a href="rec_order/select/0" class="selected0">预约内推</a></li>
		<li><a href="rec_order/select/1" class="selected1">进行中内推</a></li>
		<li><a href="rec_order/select/2" class="selected2">成功内推</a></li>
		<li><a href="rec_order/select/3" class="selected3">取消内退</a></li>
		<li><a href="rec_order/my_order/4" class="selected4">已发布内推</a></li>
		<li><a href="rec_order/my_del/5" class="selected5">已关闭内推</a></li>
	</ul>
	<div class="bar"><a href="t_work"><i class="iconfont">&#xe604;</i>我的简历</a><div class="line"></div></div>
	<?php if( $this->session->userdata('status') == 0){?>
	<div class="bar"><i class="iconfont">&#xe605;</i>我的收藏<i class="iconfont arrow">&#xe630;</i><div class="line"></div></div>



	<ul class="second-level collect">
		<li><a href="t_interviewer/getInterview_by_userId">面试收藏</a></li>
		<li><a href="rec_collect/index">内推收藏</a></li>

	</ul>
	<?php	}  ?>

	<div class="bar"><i class="iconfont pic2">&#xe64d;</i>消&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp息<div class="line"></div></div>
	<div class="bar"><i class="iconfont">&#xe600;</i>账号设置<div class="line"></div></div>

</div>


