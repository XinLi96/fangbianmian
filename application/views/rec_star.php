<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>内推版</title>
    <base href="<?php echo site_url();?>" target=""/>
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/rec_star.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">
</head>
<body>
<?php include("header.php") ?>
<div id="search" class="container">
    <div class="form-group">
        <form action="t_recom/search_keychar" method="post">
            <input type="text" name="keychar" class="form-control" id="search-input" placeholder="搜索您想查询的公司/导师">
            <button type="submit"><img src="assets/img/rec-star/search.jpg" id="search-icon"></button>
        </form>
    </div>
</div>
<div id="pic" class="container">
    <img src="assets/img/rec-star/background.jpg" alt="" id="background">
    <a href="t_recom/qnt"><button id="astutor"class="btn btn-default">求内推</button></a>
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
    <select name="" class="form-control" id="select3">
        <option value="职位">职位</option>
        <option value="前端">前端工程师</option>
        <option value="后端">后端工程师</option>
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
            <div class="col-xs-3 banner <?php if($i == 3||$i == 7||$i == 11||$i==15){echo 'right';}?>">
                <div><a href="t_recom/get_details_by_id?rec_id=<?php echo $result[$i]->rec_id;?>"><img src="assets/img/rec-star/p<?php echo $i%4+5;?>.jpg" alt=""></a></div>
                <div class="name"><?php echo $result[$i]->company;?>/<?php echo $result[$i]->position;?></div>
                <div class="company"><?php echo $result[$i]->nick_name;?></div>
                <div class="good-count">内推次数<span><?php echo $result[$i]->total_num;?>次</span></div>
                <div class="interviews-count">好评数:<span><?php echo $result[$i]->good_num;?>次</span></div>
                <div class="red"><span class="red-count"><?php echo $result[$i]->money;?></span><span class="red-subsidiary">元</span></div>
            </div>
        <?php }?>
    </div>


</div>
<div id="tab" class="container"><?php echo $this->pagination->create_links();?></div>
<?php include'footer.php'?>
<script src="assets/js/require.js" data-main="assets/js/rec_list"></script>
</body>
</html>