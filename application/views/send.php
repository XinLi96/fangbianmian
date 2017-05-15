<!DOCTYPE html>
<html lang="zh-hans">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <base href="<?php echo site_url();?>">
        <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/header.css">
        <link rel="stylesheet" href="assets/css/footer.css">
        <link rel="stylesheet" href="assets/css/send.css">
        <title>发布内推</title>
    </head>
    <body>
        <?php include 'header.php';?>
        <div class="container">
            <div class="information row">
                <div class="logo-register"></div>
                <div class="message col-md-4 col-md-offset-4">
                    <h2>
                        <?php
                            $status=$this->session->userdata('status');
                            if($status==0){
                                echo "发布求内推";
                            }else if($status==2) {
                                echo "发布内推";
                            }
                        ?>
                    </h2>
                    <form action="t_recom/add_recom" method="post" id="form">
                        <ul>
                            <li>
                                <div class="icon">
                                    <span class="glyphicon glyphicon-user"></span>
                                </div>
                                <input type="text" class="ip" id="com" name="nt_company" placeholder="内推公司">
                                <span class="company tips"></span>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="glyphicon glyphicon-th-list"></span>
                                </div>
                                <input type="text" class="ip" id="pos" name="nt_position" placeholder="内推职位">
                                <span class="position tips"></span>
                            </li>
                            <li>
                                <div class="icon">
                                    <span class="glyphicon glyphicon-comment"></span>
                                </div>
                                <input type="text" class="ip" id="mon" name="nt_salary" placeholder="内推金额">
                                <span class="money tips"></span>
                            </li>
                            <li class="last">
                                <div class="icon">
                                    <span class="glyphicon glyphicon-calendar"></span>
                                </div>
                                <input type="text" class="ip" id="demo" name="nt_endtime" placeholder="内推截止日期" readonly="readonly">
                                <span class="time tips"></span>
                            </li>
                            <li class="last">
                                <textarea name="" class="text" cols="20" rows="4" placeholder="内推要求或细则"></textarea>
                            </li>
                            <li class="next"><input type="checkbox" class="checkbox"><h5>我已同意并阅读</h5></li>
                        </ul>
                            <div class="btn-group btn-group-lg register-btn">
                                <button type="submit" class="btn btn-default register">发布</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <?php include 'footer.php';?>
<!--            <script src="assets/js/jquery.js"></script>-->
<!--            <script src="assets/lib/bootstrap/js/bootstrap.min.js"></script>-->
<!--            <script src="assets/js/header.js"></script>-->
        <script src="assets/js/require.js" data-main="assets/js/send.js"></script>
        </body>
    </html>