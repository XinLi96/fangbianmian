<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <base href="<?php echo site_url();?>" target=""/>
     <link rel="stylesheet" type="text/css" href="assets/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/mobile/css/view_index.css">
    <link rel="stylesheet" type="text/css" href="assets/mobile/css/title.css">
    <link rel="stylesheet" type="text/css" href="assets/mobile/css/footer.css">
    <title></title>
</head>
<body>
<div id="til">
    <?php include 'title.php';?>
    <p id="til-midlle">导师面试网站名称</p>
</div>

<div id="header">
    <div id="header-search">
        <div id="header-span" ><span class="glyphicon glyphicon-search" id="search-img"></span></div>
        <input type="text" name="" value="搜索导师/内推/公司..." id="header-ipt">
    </div>


</div>
<div id="banner">
    <div id="imgs">
        <img src="./assets/mobile/img/view_index/banner.png" alt="">
        <img src="./assets/mobile/img/view_index/banner.png" alt="">
        <img src="./assets/mobile/img/view_index/banner.png" alt="">
    </div>
    <ul id="tab">
        <li class="tab-li selected"></li>
        <li class="tab-li"></li>
        <li class="tab-li"></li>
    </ul>
</div>
<div id="teacher">
    <div id="teacher-head">
        <span class="span-left span"></span>
        <span class="span-middle">名师推荐</span>
        <span class="span-right span"></span>
    </div>
    <div id="teacher-content">
        <ul id="teacher-ul" >
            <li class="teacher-li teacher-li-first"><img src="./assets/mobile/img/view_index/baidu.png" alt=""></li>
            <li class="teacher-li"><img src="./assets/mobile/img/view_index/teacher1.png" alt=""><p class="li-p">小吴导师</p></li>
            <li class="teacher-li"><img src="./assets/mobile/img/view_index/teacher1.png" alt=""><p class="li-p">小吴导师</p></li>
            <li class="teacher-li"><img src="./assets/mobile/img/view_index/teacher1.png" alt=""><p class="li-p">小吴导师</p></li>
            <li class="teacher-li teacher-li-first"><img src="./assets/mobile/img/view_index/baidu.png" alt=""></li>
            <li class="teacher-li"><img src="./assets/mobile/img/view_index/teacher1.png" alt=""><p class="li-p">小吴导师</p></li>
            <li class="teacher-li"><img src="./assets/mobile/img/view_index/teacher1.png" alt=""><p class="li-p">小吴导师</p></li>
            <li class="teacher-li"><img src="./assets/mobile/img/view_index/teacher1.png" alt=""><p class="li-p">小吴导师</p></li>


        </ul>

    </div>
    
</div>
<div id="student">
    <div id="student-head">
        <span class="span-left span"></span>
        <span class="span-middle">成功学员</span>
        <span class="span-right span"></span>
    </div>
    <div class="student-content">
        <div class="circle-div-left">
        </div>
        <h2 class="content-h2-left">王同学:</h2>
        <p class="content-p-left">通过学习,面试,我学到了很多,哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈和息我我嘻嘻嘻我嘻嘻嘻我嘻嘻嘻嘻嘻嘻爱家好爸爸是初步调查的差不多差不多差不多是 </p>
    </div>
    <div class="student-content">
        <div class="circle-div-right">
        </div>
        <h2 class="content-h2-right">王同学:</h2>
        <p class="content-p-right">通过学习,面试,我学到了很多,哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈和息我我嘻嘻嘻我嘻嘻嘻我嘻嘻嘻嘻嘻嘻爱家好爸爸是初步调查的差不多差不多差不多是 </p>

    </div>
    <div class="student-content">
        <div class="circle-div-left">
        </div>
        <h2 class="content-h2-left">王同学:</h2>
        <p class="content-p-left">通过学习,面试,我学到了很多,哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈哈和息我我嘻嘻嘻我嘻嘻嘻我嘻嘻嘻嘻嘻嘻爱家好爸爸是初步调查的差不多差不多差不多是 </p>
    </div>

</div>
<div id="company">
    <div id="company-head">
        <span class="span-left span"></span>
        <span class="span-middle">内推公司</span>
        <span class="span-right span"></span>
    </div>
    <ul id="company-ul">
        <li class="company-li-first"><img src="./assets/mobile/img/view_index/baidu.png" alt=""></li>
        <li class="company-li"><img src="./assets/mobile/img/view_index/baidu.png" alt=""></li>
        <li class="company-li"><img src="./assets/mobile/img/view_index/baidu.png" alt=""></li>
        <li class="company-li"><img src="./assets/mobile/img/view_index/baidu.png" alt=""></li>
        <li class="company-li"><img src="./assets/mobile/img/view_index/baidu.png" alt=""></li>
</div>
<?php include 'footer.php';?>
<script src="assets/js/require.js" data-main="assets/mobile/js/view_index"></script>


</body>
</html>
