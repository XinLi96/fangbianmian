<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <base href="<?php echo site_url();?>" target=""/>
    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/user.css">
    <link rel="stylesheet" href="assets/css/user_nav.css">
    <link rel="stylesheet" href="assets/css/header.css">
    <link rel="stylesheet" href="assets/css/footer.css">

</head>
<body>
<?php include("header.php") ?>

<div id="contant" onselectstart="return false;" style="-moz-user-select:none;">
    <div class="container content">
        <?php include("user_nav.php")?>
    </div>
</div>
<?php include("footer.php")?>


<script src="assets/js/jquery.js"></script>
<script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
<script src="assets/js/user_nav.js"></script>
<script src="assets/js/header.js"></script>


</body>
</html>

