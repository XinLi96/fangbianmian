<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>预约订单</title>
    <base href="<?php echo site_url(); ?>" target=""/>
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/rec_reservation_stu.css">
    <link rel="stylesheet" href="assets/css/user_nav.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/resume_model.css">
</head>
<body>
<?php include 'header.php' ?>

<div class="container" id="container">
    <div class="wrapper zhuti">
        <?php include("user_nav.php")?>

        <div id="search-order">
            <div class="search">
                <input type="text">
                <button>搜索</button>
            </div>
            
            <div id="select_one" choose=<?php echo $number?>></div>
            
            <div class="order-details">
                <div class="datails">

                    <?php for($i=0;$i<count($student);$i++){?>
                        <?php if($student[$i]->is_deleted==0){?>
                        <?php for($j=0;$j<count($teacher);$j++){?>
                        <?php if($student[$i]->order_id==$teacher[$j]->order_id){?>
                        <?php if($teacher[$j]->status==0){?>
                            <div>
                                <li class="col">
                                    <span class="order-num">订单编号：<?php echo $teacher[$j]->order_no?></span>
                                    <span class="order-time">订单时间：<?php echo $teacher[$j]->order_date?></span>
                                    <span class="order-status">订单状态：预约面试</span>
                                </li>
                                <li class="row1">
                                    <span class="order-img"><img src="<?php echo $teacher[$j]->photo?>" class="photo" alt=""></span>
                                    <span class="order-job">面试职位:<?php echo $teacher[$j]->pos_name?></span>
                                    <span class="order-way">面试方式：<?php echo $teacher[$j]->way?></span>
                                    <span class="order-x"><a href="#myModal-order" data-toggle="modal" class="ajax_button" data_id=<?php echo $teacher[$j]->order_id?>>订单详情</a></span>
                                    <span class="order-user">导师：
                                        <?php if($teacher[$j]->name_flag==1){
                                            echo $teacher[$j]->real_name;
                                        }else if($teacher[$j]->name_flag==0){
                                            echo $teacher[$j]->nick_name;
                                        }?>
                                    </span>
                                    <span class="order-jl"><a href="#consume-dialog" data-toggle="modal" class="ajax_button2" data_id=<?php echo $teacher[$j]->user_id?>>查看简历</a></span>
                                    <span class="order-con"><a href="#">联系他</a></span>
                                    <span class="order-sallary"><?php echo $teacher[$j]->money?>元/次</span>
                                    <span>
                                        <button class="order-jie" id="oder" data-toggle="modal" data-target="#myModal-video" order_id="<?php echo $student[$i]->order_id?>">
                                            取消预约
                                        </button>
                                    </span>
                                </li>
                            </div>
                        <?php }?>
                        <?php if($teacher[$j]->status==1){?>
                            <div>
                                <li class="col xiayi">
                                    <span class="order-num">订单编号：<?php echo $teacher[$j]->order_no?></span>
                                    <span class="order-time">订单时间：<?php echo $teacher[$j]->order_date?></span>
                                    <span class="order-status">订单状态：面试进行中</span>
                                </li>
                                <li class="row1">
                                    <span class="order-img"><img src="<?php echo $teacher[$j]->photo?>" class="photo" alt=""></span>
                                    <span class="order-job">面试职位:<?php echo $teacher[$j]->pos_name?></span>
                                    <span class="order-way">面试方式：<?php echo $teacher[$j]->way?></span>
                                    <span class="order-x"><a href="#myModal-order" data-toggle="modal" class="ajax_button" data_id=<?php echo $teacher[$j]->order_id?>>订单详情</a></span>
                                    <span class="order-user">导师：<?php if($teacher[$j]->name_flag==1){
                                            echo $teacher[$j]->real_name;
                                        }else if($teacher[$j]->name_flag==0){
                                            echo $teacher[$j]->nick_name;
                                        }?></span>
                                    <span class="order-jl"><a href="#consume-dialog" data-toggle="modal" class="ajax_button2" data_id=<?php echo $teacher[$j]->user_id?>>查看简历</a></span>
                                    <span class="order-con"><a href="#">联系他</a></span>
                                    <span class="order-sallary"><?php echo $teacher[$j]->money?>元/次</span>
                                    <span>
                                        <button class="order-jie2" id="oder" data-toggle="modal" data-target="#myModal-video2" order_id="<?php echo $student[$i]->order_id?>">
                                            申请取消
                                        </button>
                                    </span>
                                </li>
                            </div>
                        <?php }?>
                        <?php if($teacher[$j]->status==2){?>
                            <div>
                                <li class="col xiayi">
                                    <span class="order-num">订单编号：<?php echo $teacher[$j]->order_no?></span>
                                    <span class="order-time">订单时间：<?php echo $teacher[$j]->order_date?></span>
                                    <span class="order-status">订单状态：面试成功</span>
                                </li>
                                <li class="row1">
                                    <span class="order-img"><img src="<?php echo $teacher[$j]->photo?>" class="photo" alt=""></span>
                                    <span class="order-success-job">面试职位:<?php echo $teacher[$j]->pos_name?></span>
                                    <span class="order-success-way">面试方式：<?php echo $teacher[$j]->way?></span>
                                    <span class="order-success-time1">面试时间：</span>
                                    <span class="order-success-time2"><?php echo $teacher[$j]->finish_date?></span>
                                    <span class="order-success-x"><a href="#myModal-order" data-toggle="modal" class="ajax_button" data_id=<?php echo $teacher[$j]->order_id?>>订单详情</a></span>
                                    <span class="order-user">导师：<?php if($teacher[$j]->name_flag==1){
                                            echo $teacher[$j]->real_name;
                                        }else if($teacher[$j]->name_flag==0){
                                            echo $teacher[$j]->nick_name;
                                        }?></span>
                                    <span class="order-jl"><a href="#consume-dialog" data-toggle="modal" class="ajax_button2" data_id=<?php echo $teacher[$j]->user_id?>>查看简历</a></span>
                                    <span class="order-con"><a href="#">联系他</a></span>
                                    <span class="order-sallary"><?php echo $teacher[$j]->money?>元/次</span>
                                    <span>
                                        <button class="order-shangchuan" id="oder" data-toggle="modal" order_id="<?php echo $student[$i]->order_id?>"
                                                data-target="#myModal-video3" >提交评价
                                        </button>
                                    </span>
                                    <span class="order-offer" data-toggle="modal" order_id="<?php echo $student[$i]->order_id?>"
                                          data-target="#myModal-video4">
                                        查看音频或评价
                                    </span>
                                    <span class="order-offer2" data-toggle="modal" order_id="<?php echo $student[$i]->order_id?>">
                                        删除
                                    </span>
                                </li>
                            </div>
                        <?php }?>
                        <?php if($teacher[$j]->status==3){?>
                            <div>
                                <li class="col xiayi">
                                    <span class="order-num">订单编号：<?php echo $teacher[$j]->order_no?></span>
                                    <span class="order-time">订单时间：<?php echo $teacher[$j]->order_date?></span>
                                    <span class="order-status">订单状态：申请取消</span>
                                </li>
                                <li class="row1">
                                    <span class="order-img"><img src="<?php echo $teacher[$j]->photo?>" class="photo" alt=""></span>
                                    <span class="order-job">面试职位:<?php echo $teacher[$j]->pos_name?></span>
                                    <span class="order-way">面试方式：<?php echo $teacher[$j]->way?></span>
                                    <span class="order-x"><a href="#myModal-order" data-toggle="modal" class="ajax_button" data_id=<?php echo $teacher[$j]->order_id?>>订单详情</a></span>
                                    <span class="order-user">导师：<?php if($teacher[$j]->name_flag==1){
                                            echo $teacher[$j]->real_name;
                                        }else if($teacher[$j]->name_flag==0){
                                            echo $teacher[$j]->nick_name;
                                        }?></span>
                                    <span class="order-qx-reason"><a href="#">取消原因：学生有事</a></span>
                                    <span class="order-con"><a href="#">联系他</a></span>
                                    <span class="order-sallary"><?php echo $teacher[$j]->money?>元/次</span>
                                    <span class="order-delete" data-toggle="modal" order_id="<?php echo $student[$i]->order_id?>">
                                        恢复
                                    </span>
                                </li>
                            </div>
                        <?php }?>
                        <?php if($teacher[$j]->status==4){?>
                            <div>
                                <li class="col xiayi">
                                    <span class="order-num">订单编号：<?php echo $teacher[$j]->order_no?></span>
                                    <span class="order-time">订单时间：<?php echo $teacher[$j]->order_date?></span>
                                    <span class="order-status">订单状态：已取消</span>
                                </li>
                                <li class="row1">
                                    <span class="order-img"><img src="<?php echo $teacher[$j]->photo?>" class="photo" alt=""></span>
                                    <span class="order-job">面试职位:<?php echo $teacher[$j]->pos_name?></span>
                                    <span class="order-way">面试方式：<?php echo $teacher[$j]->way?></span>
                                    <span class="order-x"><a href="#myModal-order" data-toggle="modal" class="ajax_button" data_id=<?php echo $teacher[$j]->order_id?>>订单详情</a></span>
                                    <span class="order-user">导师：<?php if($teacher[$j]->name_flag==1){
                                            echo $teacher[$j]->real_name;
                                        }else if($teacher[$j]->name_flag==0){
                                            echo $teacher[$j]->nick_name;
                                        }?></span>
                                    <span class="order-qx-reason"><a href="#">取消原因：临时有事</a></span>
                                    <span class="order-con"><a href="#">联系他</a></span>
                                    <span class="order-sallary"><?php echo $teacher[$j]->money?>元/次</span>
                                    <span class="order-jie3" data-toggle="modal" order_id="<?php echo $student[$i]->order_id?>">
                                        删除
                                    </span>
                                </li>
                            </div>
                        <?php }?>
                        <?php }?>
                        <?php }?>
                    <?php }?>
                    <?php }?>
                </div>
                <div id="tab">
                    <?php echo $links?>
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
                <p class="body-p"><span class="span1">面试职位:</span><span class="span2" id="pop-position">产品经理</span></p>
                <p class="body-p"><span class="span1">面试方式:</span><span class="span2" id="pop-way">发短信</span></p>
                <p class="body-p"><span class="span1">求&nbsp;&nbsp;职&nbsp;&nbsp;者:</span><span class="span2" id="pop-stu_name">小王子</span></p>
                <p class="body-p"><span class="span1">导师电话:</span><span class="span2" id="pop-tel">18846177835</span></p>
                <p class="body-p"><span class="span1">面试金额:</span><span class="span2" id="pop-money">4500元</span></p>
                <p class="body-p"><span class="span1">空闲时间</span><span class="span2" id="pop-text">哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈</span></p>
            </div>
            <div class="modal-footer" id="mod-oder-foot">
                <button type="button" class="btn btn-default" id="btn-oder-back" data-dismiss="modal">确认</button>

            </div>
        </div><!-- /.modal-content -->
    </div>
</div>
<!--预约面试状态的取消预约操作-->
<div class="modal fade" id="myModal-video" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content model-video-con">
            <button type="button" class="close circle-btn" data-dismiss="modal" aria-hidden="true">&times;</button>
            <div class="modal-header neitui-head">
                <h4 class="modal-title neitui-title">取消原因</h4>
            </div>
            <div class="modal-body mod-body">
                <textarea name="" id="modal-textarea" cols="30" rows="10"></textarea>
            </div>
            <div class="modal-footer" id="mod-video-foot">
                <p class="footer-p foot-btn"><span class="btn-span" data-dismiss="modal">返&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;回</span>
                    <button type="button" class="btn btn-default" id="btn-video-back">提交</button>
                </p>

            </div>
        </div><!-- /.modal-content -->
    </div>
</div>
<!--进行中面试状态的取消预约操作-->
<div class="modal fade" id="myModal-video2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content model-video-con">
            <button type="button" class="close circle-btn" data-dismiss="modal" aria-hidden="true">&times;</button>
            <div class="modal-header neitui-head">
                <h4 class="modal-title neitui-title">取消原因</h4>
            </div>
            <div class="modal-body mod-body">
                <textarea name="" id="modal-textarea2" cols="30" rows="10"></textarea>
            </div>
            <div class="modal-footer" id="mod-video-foot">
                <p class="footer-p foot-btn"><span class="btn-span" data-dismiss="modal">返&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;回</span>
                    <button type="button" class="btn btn-default" id="btn-video-back2">提交</button>
                </p>

            </div>
        </div><!-- /.modal-content -->
    </div>
</div>
<!--面试成功状态的提交评价操作-->
<div class="modal fade" id="myModal-video3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content model-video-con">
            <button type="button" class="close circle-btn" data-dismiss="modal" aria-hidden="true">&times;</button>
            <div class="modal-header neitui-head">
                <h4 class="modal-title neitui-title">对导师的评价</h4>
            </div>
            <div class="modal-body mod-body">
                <textarea name="" id="modal-textarea3" cols="30" rows="10"></textarea>
            </div>
            <div class="modal-footer" id="mod-video-foot">
                <p class="footer-p foot-btn"><span class="btn-span" data-dismiss="modal">返&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;回</span>
                    <button type="button" class="btn btn-default" id="btn-video-back3">提交</button>
                </p>

            </div>
        </div><!-- /.modal-content -->
    </div>
</div>


<!--面试成功状态的查看音频和查看操作操作-->
<div class="modal fade" id="myModal-video4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content model-video-con" style="height: 400px;">
            <button type="button" class="close circle-btn" data-dismiss="modal" aria-hidden="true">&times;</button>
            <div class="modal-header neitui-head">
                <h4 class="modal-title neitui-title">导师对你的评价</h4>
            </div>
            <div id="iv_user_evaluate">

            </div>
            <div class="modal-header neitui-head">
                <h4 class="modal-title neitui-title">下载音频</h4>
            </div>
            <div class="modal-footer" id="mod-video-foot">
                <p class="footer-p foot-btn"><span class="btn-span" data-dismiss="modal">返&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;回</span>
                </p>

            </div>
        </div><!-- /.modal-content -->
    </div>
</div>








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
                        <h2 class="res1">导师名称:<span id="pop_name"></span></h2>
                        <div>
                            <p class="job-seekers-name-info-item">
                                <span>性别：<span id="pop_sex"></span></span>
                                <span class="res2"></span>
                            </p>

                        </div>
                        <div>
                            <p class="job-seekers-name-info-item">
                                <span>年龄：</span>
                                <span class="res3"><span id="pop_age"></span>岁</span>
                            </p>
                        </div>
                        <div>
                            <p class="job-seekers-name-info-item">
                                <span>现任公司：</span>
                                <span class="res3"><span id="pop_info_company"></span></span>
                            </p>
                        </div>
                        <div>
                            <p class="job-seekers-name-info-item">
                                <span>现任职位：</span>
                                <span class="res3"><span id="pop_info_position"></span></span>
                            </p>
                        </div>
                        <div>
                            <p class="job-seekers-name-info-item">
                                <span>自我介绍：</span>
                                <span class="res3"><span id="pop_info_intro"></span></span>
                            </p>
                        </div>
                    </div>
                    <img src="assets/img/rec-list/p6.jpg" alt="" id="job-seekers-name-head">
                </div>
                <div class="consume-dialog-item" id="job-seekers-company">
                    <h3 class="consume-dialog-title">教育经历</h3>
                    <p>
                        <span>学校名称：</span>
                        <span class="res4"><span id="pop_school"></span></span>
                    </p>
                    <p>
                        <span>学历：</span>
                        <span class="res5"><span id="pop_degree"></span></span>
                    </p>
                    <p>
                        <span>专业：</span>
                        <span class="res6"><span id="pop_major"></span></span>
                    </p>
                    <p>
                        <span class="word-spacing-two">毕业年份：</span>
                        <span class="remark-content res7"><span id="pop_graduation"></span></span>
                    </p>
                </div>
                <div class="consume-dialog-item" id="project-info">
                    <h3 class="consume-dialog-title">实习经历</h3>
                    <p>
                        <span>实习公司：</span>
                        <span class="res8"><span id="pop_company"></span></span>
                    </p>
                    <p>
                        <span>担任职位：</span>
                        <span class="res9"><span id="pop_position"></span></span>
                    </p>
                    <p>
                        <span>实习感受：</span>
                        <span class="remark-content res10"><span id="pop_text"></span></span>
                    </p>
                </div>
                <div id="consume-dialog-footer" class="clearfix">
                    <div id="consume-dialog-footer-left">

                    </div>
                    <div id="consume-dialog-footer-right">
                        <div id="consume-dialog-price">

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
<!--弹层结束-->
<?php include("footer.php") ?>

<script src="assets/js/require.js" data-main="assets/js/rec_reservation_stu"></script>
</body>
</html>