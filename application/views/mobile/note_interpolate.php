<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <base href="<?php echo site_url();?>" target=""/>

    <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/mobile/css/note_interpolate.css">
</head>
<body>
<div id="contant" onselectstart="return false;" style="-moz-user-select:none;">
    <div id="search" class="row">
        <div class="search-box">
            <span class="search-icon glyphicon glyphicon-search col-xs-2">
                <span class="line"></span>
            </span>
            <input type="text" class="col-xs-10" placeholder="搜索导师/内推/公司...">
        </div>
    </div>
    <div id="company-list">
        <div class="col-xs-3">
            <div class="company-icon">
                <img src="assets\mobile\img\note_interpolate\baidu.jpg" class="img-responsive" alt="">
            </div>
        </div>
        <div class="col-xs-3">
            <div class="company-icon">
                <img src="assets\mobile\img\note_interpolate\alibaba.jpg" class="img-responsive" alt="">
            </div>
        </div>
        <div class="col-xs-3">
            <div class="company-icon">
                <img src="assets\mobile\img\note_interpolate\jingdong.jpg" class="img-responsive" alt="">
            </div>
        </div>
        <div class="col-xs-3">
            <div class="company-icon">
                <img src="assets\mobile\img\note_interpolate\tencent.jpg" class="img-responsive" alt="">
            </div>
        </div>
    </div>
    <div id="interpolate">
        <div class="row tab">
            <div class="col-xs-6 tab2">综合排名
                <span class="chevron-down1"></span>
                <div class="dec"></div>
            </div>
            <div class="col-xs-6 tab1">价钱
                <span class="chevron-down2"></span>
            </div>
        </div>
        <div class="row">
            <div class="pic col-xs-4">
                <img src="assets\mobile\img\note_interpolate\tencent.jpg" class="img-responsive" alt="">
            </div>
            <div class="sentence col-xs-8">
                <div class="company">腾讯科技公司</div><div class="cut">/</div><div class="position">产品经理</div>
                <div class="skill">PHP/CSS3HTML5/</div>
                <div class="degree">本科/计算机专业</div>
                <div class="price">3500
                    <div class="unit">元</div>
                </div>
                <div class="row button">
                    <div class="col-xs-6 ch-resume">查看简历</div>
                    <div class="col-xs-6 help-inter">帮你内推</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="pic col-xs-4">
                <img src="assets\mobile\img\note_interpolate\alibaba.jpg" class="img-responsive" alt="">
            </div>
            <div class="sentence col-xs-8">
                <div class="company">阿里科技公司</div><div class="cut">/</div><div class="position">产品经理</div>
                <div class="skill">PHP/CSS3HTML5/</div>
                <div class="degree">本科/计算机专业</div>
                <div class="price">3500
                    <div class="unit">元</div>
                </div>
                <div class="row button">
                    <div class="col-xs-6 ch-resume">查看简历</div>
                    <div class="col-xs-6 help-inter">帮你内推</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="adver">
                <div class="be-iv"><p>成为导师</p></div>
                <span class="glyphicon glyphicon-remove-circle"></span>
            </div>
        </div>
        <div class="row">
            <div class="pic col-xs-4">
                <img src="assets\mobile\img\note_interpolate\baidu.jpg" class="img-responsive" alt="">
            </div>
            <div class="sentence col-xs-8">
                <div class="company">百度科技公司</div><div class="cut">/</div><div class="position">产品经理</div>
                <div class="skill">PHP/CSS3HTML5/</div>
                <div class="degree">本科/计算机专业</div>
                <div class="price">3500
                    <div class="unit">元</div>
                </div>
                <div class="row button">
                    <div class="col-xs-6 ch-resume">查看简历</div>
                    <div class="col-xs-6 help-inter">帮你内推</div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="pic col-xs-4">
                <img src="assets\mobile\img\note_interpolate\jingdong.jpg" class="img-responsive" alt="">
            </div>
            <div class="sentence col-xs-8">
                <div class="company">京东科技公司</div><div class="cut">/</div><div class="position">产品经理</div>
                <div class="skill">PHP/CSS3HTML5/</div>
                <div class="degree">本科/计算机专业</div>
                <div class="price">3500
                    <div class="unit">元</div>
                </div>
                <div class="row button">
                    <div class="col-xs-6 ch-resume">查看简历</div>
                    <div class="col-xs-6 help-inter">帮你内推</div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>