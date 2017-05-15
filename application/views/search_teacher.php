<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <base href="<?php echo site_url();?>" target=""/>
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/search_teacher.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
</head>
<body>
<?php include("header.php") ?>
<div id="search" class="container">
    <div class="form-group">
        <input type="email" class="form-control" id="search-input" placeholder="搜索您想查询的公司/导师">
        <img src="assets/img/search-teacher/search.jpg" id="search-icon">
    </div>
</div>
<div id="pic" class="container">
    <img src="assets/img/search-teacher/background.jpg" alt="" id="background">
    <button id="astutor"class="btn btn-default">成为导师</button>
</div>
<div id="select" class="container">
    <select name="" class="form-control" id="select1">
        <option value="综合排名">综合排名</option>
    </select>
    <select name="" class="form-control" id="select2">
        <option value="价钱">价钱</option>
    </select>
    <select name="" class="form-control" id="select3">
        <option value="职位">职位</option>
    </select>
</div>
<div id="pics" class="container">
    <div class="row">
        <?php  $count=1;
        for($i=0;$i<count($up);$i++){?>
            <?php
                $work="";
                for($j=0;$j<count($up2);$j++){
                    if($up2[$j]->user_id==$up[$i]->user_id){
                        $work=$work."/".$up2[$j]->pos_name;
                        $work[0]="";/*生成面试职业的字符串*/
                    }
                }
                $moneys=[];
                for($k=0;$k<count($up3);$k++){
                    if($up3[$k]->user_id==$up[$i]->user_id){
                        array_push($moneys,$up3[$k]->money);
                        sort($moneys);
                        $money=$moneys[0];
                    }
                }
            ?>
            <?php if($count%4!=0){?>
                <div class="col-xs-3 banner">
                    <div><a href="search_teacher/detail/<?php echo $up[$i]->user_id?>"><img class="photo" src="<?php echo $up[$i]->photo?>" alt=""></a></div>
                    <div class="name">
                        <?php if($up[$i]->name_flag==1){
                            echo $up[$i]->real_name;
                        }else if($up[$i]->name_flag==0){
                            echo $up[$i]->nick_name;
                        }?>
                    </div>
                    <div class="company"><?php echo $work?>/<?php echo $up[$i]->now_company?></div>
                    <div class="good-count">好评数:<span><?php echo $up[$i]->good?></span></div>
                    <div class="interviews-count">面试人数:<span><?php echo $up[$i]->people?></span></div>
                    <div class="red"><span class="red-count"><?php echo $money?></span><span class="red-subsidiary">元/小时</span></div>
                </div>
            <?php $count++;
                }else if($count%4==0){ ?>
                <div class="col-xs-3 banner right">
                    <div><a href="search_teacher/detail/<?php echo $up[$i]->user_id?>"><img class="photo" src="<?php echo $up[$i]->photo?>" alt=""></a></div>
                    <div class="name">
                        <?php if($up[$i]->name_flag==1){
                            echo $up[$i]->real_name;
                        }else if($up[$i]->name_flag==0){
                            echo $up[$i]->nick_name;
                        }?>
                    </div>
                    <div class="company"><?php echo $work?>/<?php echo $up[$i]->now_company?></div>
                    <div class="good-count">好评数:<span><?php echo $up[$i]->good?></span></div>
                    <div class="interviews-count">面试人数:<span><?php echo $up[$i]->people?></span></div>
                    <div class="red"><span class="red-count"><?php echo $money?></span><span class="red-subsidiary">元/小时</span></div>
                </div>
            <?php $count++;
                } ?>
        <?php }?>
    </div>
</div>
<div id="tab" class="container">
    <?php echo $links?>
</div>
<?php include'footer.php'?>
<script src="assets/js/require.js" data-main="assets/js/search_teacher"></script>

</body>
</html>