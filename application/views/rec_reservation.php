<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>预约订单</title>
    <base href="<?php echo site_url(); ?>" target=""/>
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/rec_reservation.css">
    <link rel="stylesheet" href="assets/css/user_nav.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
</head>
<body>
<?php include 'header.php' ?>

<div class="container" id="container">
    <div class="wrapper zhuti">
        <?php include("user_nav.php") ?>

        <div id="search-order">
            <div class="search">
                <input type="text">
                <button>搜索</button>
            </div>
            <div id="select_one" choose=<?php echo $number?>></div>
            <div class="order-details">
                <div class="datails">

                    <?php for($i=0;$i<count($teacher);$i++){?>
                        <?php for($j=0;$j<count($student);$j++){?>
                        <?php if($teacher[$i]->order_id==$student[$j]->order_id){?>
                        <?php if($student[$j]->status==0){?>
                            <div>
                                <li class="col">
                                    <span class="order-num">订单编号：<?php echo $teacher[$i]->order_no?></span>
                                    <span class="order-time">订单时间：<?php echo $teacher[$i]->order_date?></span>
                                    <span class="order-status">订单状态：预约面试</span>
                                </li>
                                <li class="row1">
                                    <span class="order-img"><img src="assets/img/rec/1.png" alt=""></span>
                                    <span class="order-job">面试职位:<?php echo $teacher[$i]->pos_name?></span>
                                    <span class="order-way">面试方式：<?php echo $teacher[$i]->way?></span>
                                    <span class="order-x"><a href="#myModal-order" data-toggle="modal" class="ajax_button" data_id=<?php echo $teacher[$i]->order_id?>>订单详情</a></span>
                                    <span class="order-user">求职者：<?php echo $student[$j]->real_name?></span>
                                    <span class="order-jl"><a href="#">查看简历</a></span>
                                    <span class="order-con"><a href="#">联系他</a></span>
                                    <span class="order-sallary"><?php echo $teacher[$i]->money?>元/次</span>
                                    <span>
                                        <button class="order-jie" id="oder" data-toggle="modal" data-target="#myModal-order">
                                            确认订单
                                        </button>
                                    </span>
                                </li>
                            </div>
                        <?php }?>
                        <?php if($student[$j]->status==1){?>
                            <div>
                                <li class="col xiayi">
                                    <span class="order-num">订单编号：<?php echo $teacher[$i]->order_no?></span>
                                    <span class="order-time">订单时间：<?php echo $teacher[$i]->order_date?></span>
                                    <span class="order-status">订单状态：面试进行中</span>
                                </li>
                                <li class="row1">
                                    <span class="order-img"><img src="assets/img/rec/1.png" alt=""></span>
                                    <span class="order-job">面试职位:<?php echo $teacher[$i]->pos_name?></span>
                                    <span class="order-way">面试方式：<?php echo $teacher[$i]->way?></span>
                                    <span class="order-x"><a href="#myModal-order" data-toggle="modal" class="ajax_button" data_id=<?php echo $teacher[$i]->order_id?>>订单详情</a></span>
                                    <span class="order-user">求职者：<?php echo $student[$j]->real_name?></span>
                                    <span class="order-jl"><a href="#">查看简历</a></span>
                                    <span class="order-con"><a href="#">联系他</a></span>
                                    <span class="order-sallary"><?php echo $teacher[$i]->money?>元/次</span>
                                    <span class="order-wan">面试已完成</span>
                                </li>
                            </div>
                        <?php }?>
                        <?php if($student[$j]->status==2){?>
                            <div>
                                <li class="col xiayi">
                                    <span class="order-num">订单编号：<?php echo $teacher[$i]->order_no?></span>
                                    <span class="order-time">订单时间：<?php echo $teacher[$i]->order_date?></span>
                                    <span class="order-status">订单状态：面试成功</span>
                                </li>
                                <li class="row1">
                                    <span class="order-img"><img src="assets/img/rec/1.png" alt=""></span>
                                    <span class="order-success-job">面试职位:<?php echo $teacher[$i]->pos_name?></span>
                                    <span class="order-success-way">面试方式：<?php echo $teacher[$i]->way?></span>
                                    <span class="order-success-time1">面试时间：</span>
                                    <span class="order-success-time2"><?php echo $teacher[$i]->finish_date?></span>
                                    <span class="order-success-x"><a href="#myModal-order" data-toggle="modal" class="ajax_button" data_id=<?php echo $teacher[$i]->order_id?>>订单详情</a></span>
                                    <span class="order-user">求职者：<?php echo $student[$j]->real_name?></span>
                                    <span class="order-jl"><a href="#">查看简历</a></span>
                                    <span class="order-con"><a href="#">联系他</a></span>
                                    <span class="order-sallary"><?php echo $teacher[$i]->money?>元/次</span>
                                    <span>
                                        <button class="order-shangchuan" id="oder" data-toggle="modal"
                                                data-target="#myModal-video">上传音频/评语
                                        </button>
                                    </span>
                                    <span class="order-offer">
        
                                        提交offer
                                    </span>
                                </li>
                            </div>
                        <?php }?>
                        <?php if($student[$j]->status==3){?>
                            <div>
                                <li class="col xiayi">
                                    <span class="order-num">订单编号：<?php echo $teacher[$i]->order_no?></span>
                                    <span class="order-time">订单时间：<?php echo $teacher[$i]->order_date?></span>
                                    <span class="order-status">订单状态：申请取消</span>
                                </li>
                                <li class="row1">
                                    <span class="order-img"><img src="assets/img/rec/1.png" alt=""></span>
                                    <span class="order-job">面试职位:<?php echo $teacher[$i]->pos_name?></span>
                                    <span class="order-way">面试方式：<?php echo $teacher[$i]->way?></span>
                                    <span class="order-x"><a href="#myModal-order" data-toggle="modal" class="ajax_button" data_id=<?php echo $teacher[$i]->order_id?>>订单详情</a></span>
                                    <span class="order-user">求职者：<?php echo $student[$j]->real_name?></span>
                                    <span class="order-qx-reason"><a href="#">取消原因：学生有事</a></span>
                                    <span class="order-con"><a href="#">联系他</a></span>
                                    <span class="order-sallary"><?php echo $teacher[$i]->money?>元/次</span>
                                    <span class="order-delete">删除</span>
                                    <span class="order-qx">确认取消</span>
                                </li>
                            </div>
                        <?php }?>
                        <?php if($student[$j]->status==4){?>
                            <div>
                                <li class="col xiayi">
                                    <span class="order-num">订单编号：<?php echo $teacher[$i]->order_no?></span>
                                    <span class="order-time">订单时间：<?php echo $teacher[$i]->order_date?></span>
                                    <span class="order-status">订单状态：已取消</span>
                                </li>
                                <li class="row1">
                                    <span class="order-img"><img src="assets/img/rec/1.png" alt=""></span>
                                    <span class="order-job">面试职位:<?php echo $teacher[$i]->pos_name?></span>
                                    <span class="order-way">面试方式：<?php echo $teacher[$i]->way?></span>
                                    <span class="order-x"><a href="#myModal-order" data-toggle="modal" class="ajax_button" data_id=<?php echo $teacher[$i]->order_id?>>订单详情</a></span>
                                    <span class="order-user">求职者：<?php echo $student[$j]->real_name?></span>
                                    <span class="order-qx-reason"><a href="#">取消原因：临时有事</a></span>
                                    <span class="order-con"><a href="#">联系他</a></span>
                                    <span class="order-sallary"><?php echo $teacher[$i]->money?>元/次</span>
                                    <span class="order-jie">删除</span>
                                </li>
                            </div>
                        <?php }?>
                        <?php }?>
                        <?php }?>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>




<!--弹层开始-->
<div class="modal fade" id="myModal-order" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">


    <div class="modal-dialog">
        <div class="modal-content model-oder-con">

            <button type="button" class="close circle-btn" data-dismiss="modal" aria-hidden="true">&times;</button>
            <div class="modal-header neitui-head">
                <h4 class="modal-title neitui-title">预约订单详情</h4>
            </div>
            <div class="modal-body mod-body">
                <p class="body-p"><span class="span1">订单编号:</span><span class="span2" id="pop-num">382900000000</span></p>
                <p class="body-p"><span class="span1">订单时间:</span><span class="span2" id="pop-time">2017年1月12日9:01</span></p>
                <p class="body-p"><span class="span1">订单状态:</span><span class="span2" id="pop-type">等待面试</span></p>
                <p class="body-p"><span class="span1">导师名字:</span><span class="span2" id="pop-tea_name">小李子导师</span></p>
                <p class="body-p"><span class="span1">内推公司:</span><span class="span2" id="pop-company">腾讯科技</span></p>
                <p class="body-p"><span class="span1">面试职位:</span><span class="span2" id="pop-position">产品经理</span></p>
                <p class="body-p"><span class="span1">面试时间:</span><span class="span2" id="pop-time2">2016&nbsp;年&nbsp;8&nbsp;月<span class="span-contanct">至</span>2016&nbsp;年&nbsp;12&nbsp;月</span></p>
                <p class="body-p"><span class="span1">面试方式:</span><span class="span2" id="pop-way">发短信</span></p>
                <p class="body-p"><span class="span1">求&nbsp;&nbsp;职&nbsp;&nbsp;者:</span><span class="span2" id="pop-stu_name">小王子</span></p>
                <p class="body-p"><span class="span1">联系电话:</span><span class="span2" id="pop-tel">18846177835</span></p>
                <p class="body-p"><span class="span1">内推金额:</span><span class="span2" id="pop-money">4500元</span></p>
                <p class="body-p"><span class="span1">备&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;注:</span><span class="span2" id="pop-text">哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈</span></p>
            </div>
            <div class="modal-footer" id="mod-oder-foot">
                <button type="button" class="btn btn-default" id="btn-oder-back" data-dismiss="modal">确认</button>

            </div>
        </div><!-- /.modal-content -->
    </div>
</div>
<div class="modal fade" id="myModal-video" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content model-video-con">

            <button type="button" class="close circle-btn" data-dismiss="modal" aria-hidden="true">&times;</button>
            <div class="modal-header neitui-head">
                <h4 class="modal-title neitui-title">预约订单详情</h4>
            </div>
            <div class="modal-body mod-body">
                <p class="body-p"><span class="span1">订单编号:</span><span class="span2">382900000000</span></p>
                <p class="body-p"><span class="span1">订单时间:</span><span class="span2">2017年1月12日9:01</span></p>
                <p class="body-p"><span class="span1">订单状态:</span><span class="span2">等待面试</span></p>
                <p class="body-p"><span class="span1">导师名字:</span><span class="span2">小李子导师</span></p>
                <p class="body-p"><span class="span1">内推公司:</span><span class="span2">腾讯科技</span></p>
                <p class="body-p"><span class="span1">面试职位:</span><span class="span2">产品经理</span></p>
                <p class="body-p"><span class="span1">面试时间:</span><span class="span2">2016&nbsp;年&nbsp;8&nbsp;月<span
                            class="span-contanct">至</span>2016&nbsp;年&nbsp;12&nbsp;月</span></p>
                <p class="body-p"><span class="span1">面试方式:</span><span class="span2">发短信</span></p>
                <p class="body-p"><span class="span1">求&nbsp;&nbsp;职&nbsp;&nbsp;者:</span><span class="span2">小王子</span>
                </p>
                <p class="body-p"><span class="span1">联系电话:</span><span class="span2">18846177835</span></p>
                <p class="body-p"><span class="span1">内推金额:</span><span class="span2">4500元</span></p>
                <p class="body-p"><span class="span1">备&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;注:</span><span
                        class="span2">哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈</span></p>


            </div>
            <div class="modal-footer" id="mod-video-foot">
                <h4 class="modal-title neitui-title">面试测评</h4>
                <p class="footer-p"><span class="footer-span1">面试结果:</span><input type="checkbox" name="pass"
                                                                                  class="foot-check1"><span
                        class="span2 foot-pass">通过</span><input type="checkbox" name="pass" class="foot-check2"><span
                        class="span2 foot-pass">没通过</span></p>
                <p class="footer-p"><span class="footer-span1 foot-span-left">导师评语:</span><textarea name="" class="foot-span-right" id="foot-area" cols="50" rows="6"></textarea></p>
                <p class="footer-p"><span class="footer-span1 ">上传音频:</span><input type="text" class="foot-span-right foot-text">
                    <input type="button" value="添加" class="foot-btn-add"></p>
                <p class="footer-p foot-btn"><span class="btn-span" data-dismiss="modal">返&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;回</span>
                    <button type="button" class="btn btn-default" id="btn-video-back">提交</button>
                </p>

            </div>
        </div><!-- /.modal-content -->
    </div>
</div>
<!--弹层结束-->
<?php include("footer.php") ?>

<script src="assets/js/require.js" data-main="assets/js/rec_reservation"></script>
</body>
</html>