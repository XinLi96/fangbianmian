<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <base href="<?php echo site_url();?>" target=""/>
    <link rel="stylesheet" type="text/css" href="./assets/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/coll-interpolate.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/user_nav.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/header.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/footer.css">
    <title></title>
</head>
<body>

<?php include 'header.php' ?>
<div id="continers">

    <?php include 'user_nav.php' ?>
    <div id="content">
       <ul  class="content-ul">
           <?php foreach($collects as $collect): ?>
               <li class="content-li">
                   <div class="content-img">
                       <img src="./assets/img/coll-interpolate/li1.png" alt="">
                   </div>
                   <h5 class="li-head"><ul class="uls"><li class="lis"><?php echo $collect->company;?>/</li><li  class="lis"><?php echo $collect->position;?></li></ul></h5>
                  <ul class="uls ul-p1"><li  class="lis li-p1"><?php if($collect->degree==0){echo '专科';}
                          elseif($collect->degree==1){echo '本科';}
                          elseif($collect->degree==2){echo '硕士';}
                          elseif($collect->degree==3){echo '博士';}?>/</li><li  class="lis li-p1">计算机专业</li></ul>
                   <ul class="uls ul-p2"><li  class="lis li-p2">PHP/</li><li  class="lis li-p2">JAVA/</li><li  class="lis li-p2">CSS3</li></ul>
                   <span class="span-money"><?php echo $collect->money;?></span>
                   <span  class="span-yuan">元</span>
               </li>
           <?php endforeach ?>
       </ul>
    </div>
    <div class="partpage">
        <?php echo $links;?>

    </div>
</div>
<?php include 'footer.php' ?>

<script src="assets/js/require.js" data-main="assets/js/coll-interpolate.js"></script>
</body>
</html>
