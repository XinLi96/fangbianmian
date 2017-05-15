<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <base href="<?php echo site_url();?>" target=""/>
        <link rel="stylesheet" href="assets/lib/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/css/iv_register.css">
        <link rel="stylesheet" href="assets/css/user_nav.css">
        <link rel="stylesheet" href="assets/css/header.css">
        <link rel="stylesheet" href="assets/css/footer.css">
    </head>
    <body>
        <?php include'header.php' ?>
        <div id="contant" onselectstart="return false;" style="-moz-user-select:none;">
            <div class="container">
                <div id="adver">
                    <div class= "be-teacher">
                        <div class="title">
                            <div class="icon"><div class="icon-img"></div></div>
                            <div class="sentence">成为求职者</div>
                        </div>
                        <div class="dec"></div>
                    </div>
                    <div class="adver-pic"></div>
                </div>
                <div  id="register">
                    <div id="dec"></div>
                    <div class="wrapper">
                        <form action="user/st_reg" name="ivreg" method="post" id="become" enctype="multipart/form-data">
                            <div class="headline">基本信息</div>
                            <div class="information">
                                <div class="form-group">
                                    <label for="nname">昵称</label><span class="i">*</span>
                                    <input type="text" name="nname" class="form-control  empty" id="nname">
                                    <div class="tip">不能为空</div>
                                </div>
                                <div class="form-group">
                                    <label for="name">真实姓名</label><span class="i">*</span>
                                    <input type="text" name="name" class="form-control  empty" id="name">
                                    <div class="tip">不能为空</div>
                                </div>
                                <div class="form-group ">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" id="check" checked="checked"><div class="name">可显示真实姓名<div class="name-pic"></div></div>
                                            <input type="hidden" name="status" value="0" id="flag">
                                        </label>
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    <div class="sex">
                                        性别
                                    </div><span class="i">*</span>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="sex" class="point"  value="0" checked="checked"><div class="sex-w">男</div>
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="sex" class="point"  value="1" ><div class="sex-w">女</div>
                                        </label>
                                    </div>
                                </div>
                                    <div class="form-group">
                                        <label for="birthday">出生日期</label><span class="i">*</span>
                                        <br>
                                        <input name="birth" class="laydate-icon empty" id="sdemo" style="width: 390px" >
                                        <div class="tip">不能为空</div>
                                    </div>
                                    
                                  
                                
                                    <div class="form-group">
                                        <label for="email">邮箱</label><span class="i">*</span>
                                        <input type="email" name="email" class="form-control  empty" id="email">
                                         <div class="tip">不能为空</div>
                                        <span class="email tips"></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="degree">最高学历</label><span class="i">*</span>
                                        <select name="degree" id="degree"  class="form-control">
                                            <option value="0">专科</option>
                                            <option value="1">本科</option>
                                            <option value="2">硕士</option>
                                            <option value="3">博士</option>
                                        </select>
                                    </div>


                                   
                                </div>
                                <div class="portrait">
                                    <label>头像</label>
                                    <input type = "file" accept="image/*" capture="camera" id="img" class="input-upload-image" name="photos" />
                                    <img class="upload-btn events-pointer-none" src="assets/img_upload.jpg" id="imgInfo">
                                    <div class="portrait-img">
                                        <span class="glyphicon glyphicon-plus"></span>
                                    </div>
                                    <div class="overlay" id="overlay">
                                        <img src="assets/loading.gif" alt="加载中...">
                                    </div>
                                </div>
                                
                                <div class="button-group">
                                    <button  type="button" class="btn btn-default save" id="sub" name="sub">提&nbsp&nbsp&nbsp交</button>
                                  
                                    <a href="" class="cancel">取消</a>
                                </div>
                                <div class="line"></div>
                                 <input type = "file" accept="image/*" capture="camera" id="img1" class="input-upload-image" name="photo" style="display:none"  />
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <?php include'footer.php' ?>

            <script src="assets/js/require.js" data-main="assets/js/st_register.js"></script>
            
        </body>
    </html>