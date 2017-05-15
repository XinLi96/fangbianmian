<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>内推版</title>
    <base href="<?php echo site_url();?>" target=""/>
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/rec_list.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
</head>
<body>
<?php include("header.php") ?>

<div id="search" class="container">
    <div class="form-group">
        <form action="t_recom/search_keychar" method="post">
            <input type="text" class="form-control" name="keychar" id="search-input" placeholder="搜索您想查询的公司">
            <button type="submit"><img src="assets/img/rec-list/search.jpg" id="search-icon"></button>
        </form>
    </div>
</div>
<div id="pic" class="container">
    <img src="assets/img/rec-list/background.jpg" alt="" id="background">
    <a href="t_recom/qnt"><button id="astutor" class="btn btn-default">发布内推</button></a>
</div>
<div id="select" class="container">
    <select name="" class="form-control" id="select1">
        <option value="综合排名">综合排名</option>
        <option value="信誉排名">信誉排名</option>
    </select>
    <select name="" class="form-control" id="select2">
        <option value="价钱">价钱</option>
        <option value="3000">3000以下</option>
        <option value="2000">2000以下</option>
        <option value="1000">1000以下</option>
    </select>
</div>
<div id="select-company" class="container">
    <div id="mask">
        <div id="content">
            <img src="assets/img/rec-star/c1.jpg" alt="">
            <img src="assets/img/rec-star/c2.jpg" alt="">
            <img src="assets/img/rec-star/c3.jpg" alt="">
            <img src="assets/img/rec-star/c4.jpg" alt="">
            <img src="assets/img/rec-star/c5.jpg" alt="">
            <img src="assets/img/rec-star/c1.jpg" alt="">
            <img src="assets/img/rec-star/c2.jpg" alt="">
            <img src="assets/img/rec-star/c3.jpg" alt="">
            <img src="assets/img/rec-star/c4.jpg" alt="">
            <img src="assets/img/rec-star/c5.jpg" alt="">
        </div>
    </div>

    <div id="arrow">
        <img src="assets/img/rec-star/left.jpg" alt="" class="img-left" id="left">
        <img src="assets/img/rec-star/right.jpg" alt="" class="img-right" id="right">
    </div>

</div>
<div id="pics" class="container">
    <div class="row">
    <?php for($i = 0;$i < count($result); $i++){?>
<!--        <div class="row">-->
            <div class="col-xs-3 banner <?php if($i == 3||$i == 7||$i == 11){echo 'right';}?>">
                <div><img src="assets/img/rec-list/p<?php echo $i%4+5;?>.jpg" alt=""></div>
                <div class="name"><?php echo $result[$i]->company;?></div>
                <div class="company"><?php echo $result[$i]->memo;?></div>
                <div class="good-count">PHP/JAVA/xCSS3/HTML5</div>
                <button class="show-button" data-toggle="modal" data-target=".consume-dialog<?php echo $i+1;?>">查看简历</button>
                <button class="help-button" data-toggle="modal" data-target=".rec-order-dialog<?php echo $i+1;?>">帮你内推</button>
            </div>
<!--            <div class="col-md-3 banner right">-->
<!--                <div><img src="assets/img/rec-list/p8.jpg" alt=""></div>-->
<!--                <div class="name">腾讯科技/产品经理</div>-->
<!--                <div class="company">本科/计算机软件专业</div>-->
<!--                <div class="good-count">PHP/JAVA/CSS3/HTML5</div>-->
<!--                <button class="show-button" data-toggle="modal" data-target="#consume-dialog">查看简历</button>-->
<!--                <button class="help-button" data-toggle="modal" data-target="#rec-order-dialog">帮你内推</button>-->
<!--            </div>-->
<!--        </div>-->
    <?php }?>
    </div>
</div>
<div id="tab" class="container">
    <ul>
        <?php echo $this->pagination->create_links();?>
    </ul>
</div>
<!--内推订单弹层开始-->
<?php for($i = 0;$i < count($result); $i++){?>
<div class="modal fade rec-order-dialog<?php echo $i+1;?>" id="rec-order-dialog">
    <div class="modal-dialog">
        <form action="" method="post">
            <div class="modal-content">
                <div class="modal-header">
                    <button class="close">
                        <span class="close-button" data-dismiss="modal">&times;</span>
                    </button>
                    <h4 class="modal-title">内推订单</h4>
                </div>
                <div class="modal-body">
                    <p class="order-modal-item">
                        <span class="order-modal-title"><span>订单编号</span>：</span>
                        <span class="order-modal-content">3812907174832749</span>
                    </p>
                    <p class="order-modal-item">
                        <span class="order-modal-title"><span class="word-spacing-three">推荐</span>人：</span>
                        <span class="order-modal-content">小李子导师</span>
                    </p>
                    <p class="order-modal-item">
                        <span class="order-modal-title"><span>内推公司</span>：</span>
                        <span class="order-modal-content"><?php echo $result[$i]->company;?></span>
                    </>
                    <p class="order-modal-item">
                        <span class="order-modal-title"><span>内推职位</span>：</span>
                        <span class="order-modal-content"><?php echo $result[$i]->position;?></span>
                    </p>
                    <p class="order-modal-item">
                        <span class="order-modal-title"><span>内推时间</span>：</span>
                        <span class="order-modal-content">
                            2016年8月&nbsp;至&nbsp;
                            <input type="text" name="end-time" class="form-control order-modal-input">
                        </span>
                    </p>
                    <p class="order-modal-item">
                        <span class="order-modal-title"><span>内推方式</span>：</span>
                        <span class="order-modal-content">
                            <input type="text" name="rec-type" class="form-control order-modal-input">
                        </span>
                    </p>
                    <p class="order-modal-item">
                        <span class="order-modal-title"><span class="word-spacing-three">求职</span>者：</span>
                        <span class="order-modal-content"><?php echo $result[$i]->real_name;?></span>
                    </p>
                    <p class="order-modal-item">
                        <span class="order-modal-title"><span>内推金额</span>：</span>
                        <span class="order-modal-content"><?php echo $result[$i]->money;?></span>元
                    </p>
                    <p class="order-modal-item">
                        <span class="order-modal-title"><span class="word-spacing-two">备</span>注：</span>
                        <span class="order-modal-content">
                            <textarea name="remarks" class="textarea form-control" rows="4" ></textarea>
                        </span>
                    </p>
                </div>
                <div class="modal-footer">
                    <p class="modal-footer-condition">
                        <lable class="checkbox-lable">
                            <input type="checkbox" class="checkbox">
                        </lable>
                        <span>我已阅读并同意网站协议</span>
                    </p>
                    <a href="#" class="back" data-dismiss="modal">返&nbsp;&nbsp;&nbsp;回</a>
                    <input type="submit" class="order-modal-submit" value="帮他内推">
                </div>
            </div>
        </form>
    </div>
</div>
<?php }?>
<!--内推订单弹层结束-->
<!--简历弹层开始-->
<?php
function birthday($birthday){//计算数据库中年龄从出生年月日计算
    $age = strtotime($birthday);
    if($age === false){
        return false;
    }
    list($y1,$m1,$d1) = explode("-",date("Y-m-d",$age));
    $now = strtotime("now");
    list($y2,$m2,$d2) = explode("-",date("Y-m-d",$now));
    $age = $y2 - $y1;
    if((int)($m2.$d2) < (int)($m1.$d1))
        $age -= 1;
    return $age;
}
?>
<?php for($i = 0;$i < count($result); $i++){?>
<div class="modal fade consume-dialog<?php echo $i+1;?>" id="consume-dialog">
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
                        <h2><?php echo $result[$i]->real_name;?></h2>
                        <div>
                            <p class="job-seekers-name-info-item">
                                <span>性别：</span>
                                <span><?php echo $result[$i]?'男':'女';?></span>
                            </p>
                            <p class="job-seekers-name-info-item">
<!--                                <span>所在城市：</span>-->
<!--                                <span>--><?php //echo $result[$i]->introduction;?><!--</span>-->
                            </p>
                        </div>
                        <div>
                            <p class="job-seekers-name-info-item">
                                <span>年龄：</span>
                                <span><?php echo birthday($result[$i]->birth);?>岁</span>
                            </p>
                            <p class="job-seekers-name-info-item">
                                <span>公司：</span>
                                <span><?php echo $result[$i]->company;?></span>
                            </p>
                        </div>
                    </div>
                    <img src="assets/img/rec-list/p6.jpg" alt="" id="job-seekers-name-head">
                </div>
                <div class="consume-dialog-item" id="job-seekers-company">
                    <h3 class="consume-dialog-title">任职公司</h3>
                    <p>
                        <span><span>公司名称</span>：</span>
                        <span><?php echo $result[$i]->company;?></span>
                    </p>
                    <p>
                        <span><span>担任职位</span>：</span>
                        <span><?php echo $result[$i]->now_duty;?></span>
                    </p>
                    <p>
                        <span><span>工作时间</span>：</span>
                        <span>2015年6月至今</span>
                    </p>
                    <p>
                        <span><span class="word-spacing-two">备</span>注：</span>
                        <span class="remark-content"><?php echo $result[$i]->work;?></span>
                    </p>
                </div>
                <div class="consume-dialog-item" id="project-info">
<!--                    <h3 class="consume-dialog-title">项目介绍</h3>-->
<!--                    <p>-->
<!--                        <span><span>项目名称</span>：</span>-->
<!--                        <span>电商 app</span>-->
<!--                    </p>-->
<!--                    <p>-->
<!--                        <span><span>担任职位</span>：</span>-->
<!--                        <span>前端技术总监</span>-->
<!--                    </p>-->
<!--                    <p>-->
<!--                        <span><span class="word-spacing-two">时</span>间：</span>-->
<!--                        <span>电商 app</span>-->
<!--                    </p>-->
<!--                    <p>-->
<!--                        <span><span>项目描述</span>：</span>-->
<!--                        <span class="remark-content">拉萨附近路口的撒娇疯了快解散分快递费数据库，啥地方了科技大楼是开发就来看撒娇法律的卡萨。范德萨看见了的空间撒弗兰克的撒娇了房间了飞洒的空间。</span>-->
<!--                    </p>-->
                </div>
                <div id="consume-dialog-footer" class="clearfix">
                    <div id="consume-dialog-footer-left">
                        <p class="consume-dialog-footer-left-wrapper">
                            <span>求内推公司：</span>
                            <span><?php echo $result[$i]->company;?></span>
                        </p>
                        <p>
                            <span>求内推职位：</span>
                            <span><?php echo $result[$i]->position;?></span>
                        </p>
                    </div>
                    <div id="consume-dialog-footer-right">
                        <div id="consume-dialog-price">
                            <span>价格：</span>
                            <span class="money"><?php echo $result[$i]->money;?></span>
                            <span class="money-unit">元</span>
                        </div>
                        <div class="clearfix"></div>
                        <div id="consume-dialog-btn-group">
                            <a href="#" class="back" data-dismiss="modal">返&nbsp;&nbsp;回</a>
                            <a href="#"><button type="submit" class="order-modal-submit">帮他内推</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php }?>
<!--简历弹层结束-->
<?php include'footer.php'?>
<!--<script src="assets/js/jquery.js"></script>-->
<script src="assets/js/require.js" data-main="assets/js/rec_list"></script>
<!--<script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>-->
<!--<script src="assets/js/header.js"></script>-->
<!--<script src="assets/js/rec_list.js"></script>-->
</body>
</html>
