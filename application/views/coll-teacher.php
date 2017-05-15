<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <base href="<?php echo site_url();?>" target=""/>
    <link rel="stylesheet" type="text/css" href="assets/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/coll-teacher.css">
    <link rel="stylesheet" type="text/css" href="assets/css/user_nav.css">
    <link rel="stylesheet" type="text/css" href="assets/css/header.css">
    <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
    <title></title>
</head>
<body>

<?php include 'header.php'?>
<div id="continers">
    <?php include 'user_nav.php'?>
    <div id="content">
        <ul  class="content-ul">
            <?php foreach ($categories as $v){?>
            <li class="content-li">
                <div class="content-img">
                    <img src="<?php echo $v->photo?>" alt="">
                </div>
                <h5 class="li-head"><ul class="uls"><li class="lis"><?php echo $v->real_name?>/</li><li  class="lis"><?php echo $v->nick_name?></li></ul><span  class="span-yuan">元/小时</span><span class="span-money"><?php echo $v->money?></span></h5>

                <ul class="uls ul-p1"><li  class="lis li-p1"><?php echo $v->pos_name?>/</li><li  class="lis li-p1"><?php echo $v->now_company?></li></ul>
                <span class="spans span1">好评数:</span><span class="spans span2">20</span>
                <span class="span3">面试人数:</span><span class="span4">98</span>
            </li>
                <?php }?>



        </ul>
    </div>
    <div class="partpage">
        <?php echo $this->pagination->create_links();?>

    </div>
</div>

<?php include 'footer.php'?>
<script src="assets/js/require.js" data-main="assets/js/coll-teacher"></script>

</body>
</html>
