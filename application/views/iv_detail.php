<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <base href="<?php echo site_url();?>" target=""/>
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/iv_detail.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
</head>
<body>
<?php include("header.php") ?>
<form action="search_teacher/redirect" method="post">
    <div id="contant" onselectstart="return false;" style="-moz-user-select:none;">
        <div class="container">
            <div id="left">
                <img src="assets/img/iv_detail/20140211151505-1983394536.jpg">
            </div>
            <div id="right">
                <div id="right-top">
                    <p class="right-top-nav">
                        <?php if($up->name_flag==1){
                            echo $up->real_name;
                        }else if($up->name_flag==0){
                            echo $up->nick_name;
                        }?>
                    </p>
                </div>
                <div>
                    <input type="hidden" value="<?php echo $user_id?>" name="form-user_id">
                </div>
                <div id="right-body">
                    <ul>
                        <li class="item">价&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp格:
                            <input class="ys1" id="last-money" value="<?php $moneys=[];
                            for($k=0;$k<count($up3);$k++){
                                array_push($moneys,$up3[$k]->money);
                                sort($moneys);
                                $money=$moneys[0];
                            }
                            echo $money?>" readonly style="border:0;" name="form-money">
                            <span class="ys2"> 元/次</span>
                        </li>
                        <li  class="item">面试方法:<input class="ys3" value="<?php echo $up->way?>" readonly style="border:0;" name="form-way"><span class="ys4">好评率:<span class="glyphicon glyphicon-heart"></span><span
                                    class="glyphicon glyphicon-heart"></span><span class="glyphicon glyphicon-heart"></span><span
                                    class="glyphicon glyphicon-heart"></span><span class="glyphicon glyphicon-heart"></span></span></li>
                        <li  class="item">好评人数:<span class="ys3"><?php echo $good?>人</span><span class="ys4">面试人数:<?php echo $people?>人</span></li>
                        <li  class="item">面试职位:
                            <div id="interview">
                                <?php foreach ($up2 as $k){?>
                                    <div class="ys5" money=<?php echo $k->money?>><?php echo $k->pos_name?></div>
                                <?php }?>
                                <input type="hidden" id="form-hid" value="" name="form-position">
                            </div>
                        </li>
                    </ul>
                </div>
                <div id="right-bottom" user_status="<?php echo $user_status;?>">
                    <div id="right-bottom-left">收&nbsp藏</div>
                    <div id="right-bottom-right"><a><input type="submit" value="预约面试官" style="background: none;
                    border:0;"></a></div>
                </div>


            </div>
            <!-- Brand and toggle get grouped for better mobile display -->


        </div>  <!-- Collect the nav links, forms, and other content for toggling -->

        <div id="teacher" >
            <div class="row">
                <ul class=" nav-tabs" role="tablist">
                    <li class="active" id="iv_detail"><a>导师详情</a>|</li>
                    <li id="iv_detail2"><a>学员评价</a>|</li>
                </ul>
            </div>

            <div id="teacher-desc">
                <div class="row">
                    <div class="underline">
                        <div class="item">
                            <input type="hidden" id="hid" value=<?php echo $up->user_id?>>
                            <input class="name" name="form-name" value="<?php if($up->name_flag==1){
                                echo $up->real_name;
                            }else if($up->name_flag==0){
                                echo $up->nick_name;
                            }?>" readonly style="border:0;font-size: 23px;margin-bottom: -10px;">


                            <h5><span>性别：<?php if($up->sex==1){echo '女';}else if($up->sex==0){echo '男';}?>&nbsp;&nbsp;&nbsp;&nbsp;</span></h5>
                            <h5><span>年龄：<?php
                                    function getAge($real_bir){
                                        $nowtime=substr(date("Y-m-d",time()),0,4);
                                        $realtime=substr($real_bir,0,4);
                                        return $nowtime - $realtime;
                                    }
                                    echo getAge($up->birth);
                                    echo "岁";
                                    ?>
                            </span></h5>
                        </div>
                    </div>

                    <div class="underline">
                        <h3 class="title">现任岗位</h3>
                        <div class="item">
                            <h5>现任公司：<?php echo $up4->now_company?></h5>
                            <h5>现任职位：<?php echo $up4->now_duty?></h5>
                            空闲时间：<input name="form-time" value="<?php echo $up4->freetime?>" readonly style="border:0;">
                            <h5 class="text">备&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;注：<?php echo $up4->work?></h5>
                        </div>
                    </div>
                    <h3 class="title">工作经历</h3>
                    <?php foreach ($up5 as $k){?>
                        <div class="underline">
                            <div class="item">
                                <h5>公司：<?php echo $k->company?></h5>
                                <h5>职位：<?php echo $k->position?></h5>
                                <h5>任职时间：<?php echo $k->start?>至<?php echo $k->end?></h5>
                                <h5 class="text">备&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;注：<?php echo $k->work?></h5>
                            </div>
                        </div>
                    <?php }?>
                    <h3 class="title">教育经历</h3>
                    <?php foreach ($up6 as $k2){?>
                        <div class="underline">
                            <div class="item">
                                <h5>学校：<?php echo $k2->school?></h5>
                                <h5>学历：<?php echo $k2->degree?></h5>
                                <h5>专业：<?php echo $k2->major?></h5>
                                <h5 class="text">毕业时间<?php echo $k2->graduation?></h5>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
            <div id="student-eval" style="display: none">
                <div class="underline" style="background:white;">
                    <div class="item">
                        <h3 class="des">与描述相符</h3>
                        <div class="count">10.0</div>
                        <div class="star">
                            <img src="assets/img/iv_detail/star.jpg" alt="">
                            <img src="assets/img/iv_detail/star.jpg" alt="">
                            <img src="assets/img/iv_detail/star.jpg" alt="">
                            <img src="assets/img/iv_detail/star.jpg" alt="">
                            <img src="assets/img/iv_detail/star.jpg" alt="">
                        </div>
                        <div class="pinglun">
                            <div class="good"><input type="radio" name="rad" class="type" value="0" checked="checked">好评(<?php echo $comment_good?>)</div>
                            <div class="mid"><input type="radio" name="rad" class="type" value="1">中评(<?php echo $comment_mid?>)</div>
                            <div class="bad"><input type="radio" name="rad" class="type" value="2">差评(<?php echo $comment_bad?>)</div>
                        </div>

                    </div>
                </div>

                <div class="row" id="comment">
                    <?php foreach ($up7 as $a){?>
                        <div class="underline">
                            <div class="item">
                                <div class="row">
                                    <div class="left col-lg-8" >
                                        <h5><?php echo $a->user_iv_evaluate?></h5>
                                    </div>
                                    <div class="right col-lg-4" >
                                        <div class="name_iv"><?php echo $a->real_name?></div>
                                        <div class="data_iv"><?php echo $a->finish_date?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</form>
<?php include("footer.php") ?>
<script src="assets/js/require.js" data-main="assets/js/iv_detail.js"></script>
</body>
</html>