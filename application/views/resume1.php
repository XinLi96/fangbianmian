<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <base href="<?php echo site_url();?>" target=""/>
    <link rel="stylesheet" type="text/css" href="assets/lib/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/company_list.css">

    <link rel="stylesheet" type="text/css" href="assets/css/resume2.css">
    <link rel="stylesheet" type="text/css" href="assets/css/header.css">
    <link rel="stylesheet" type="text/css" href="assets/css/footer.css">
    <title></title>
</head>
<body>
<?php include 'header.php' ?>
<div  id="continer">
    <div id="side" >
        <ul id="sideul">
            <li ><a href="#base-message" class="active"><span class="spans glyphicon glyphicon-user"></span><span>基本消息</span><span  class=" right-hover showed"></span></a></li>
            <li ><a href="#education"><span class="spans glyphicon glyphicon-flag"></span><span >教育经历</span><span  class=" right-hover"></span></a></li>
            <li ><a href="#work"><span class="spans glyphicon glyphicon-book"></span><span>工作经历</span><span  class=" right-hover "></span></a></li>
            <li ><a href="#introuduct"><span class="spans glyphicon glyphicon-list-alt"></span><span >自我介绍</span><span  class=" right-hover"></span></a></li>
        </ul>
    </div>
    <div id="content">
        <div class="wrapper">
            <div id="base-message">
                <img class="base-img" src="assets/img/resume/con-head.png" alt="">
                <div id="circle-img" style="background-image: url(<?php echo $up4->photo?>); background-size: 100% 100%">
                </div>
                <h1><span class="h1-span1" id="info_name1" name_flag="<?php echo $up4->name_flag?>">
                        <?php if($up4->name_flag==0){/*昵称*/
                            echo $up4->nick_name;
                        }else if($up4->name_flag==1){/*真实姓名*/
                            echo $up4->real_name;
                        }?></span>
                    <span class="h1-span1" id="info_name2">
                        <?php if($up4->name_flag==0){
                            echo $up4->real_name;
                        }else if($up4->name_flag==1){
                            echo $up4->nick_name;
                        }?></span>
                    <span class="span-right1">
                        <?php if($up4->name_flag==1){
                            echo '<input type="checkbox" id="check-span" checked="checked">';
                        }else if($up4->name_flag==0){
                            echo '<input type="checkbox" id="check-span">';
                        }?> <span class="h1-span2">显示真实姓名</span><span class="h1-icon2 "></span></span></h1>
                <ul id="mes-ul">
                    <li id="nor_sex"><?php if($up4->sex==0){echo "男";}else if($up4->sex==1){echo "女";}?>/</li>
                    <li>
                        <?php
                        function getAge($real_bir){
                            $nowtime=substr(date("Y-m-d",time()),0,4);
                            $realtime=substr($real_bir,0,4);
                            return $nowtime - $realtime;
                        }
                        echo getAge($up4->birth);
                        echo "岁/";
                        ?>
                    </li>
                    <li id="nor_degree"><?php if($up4->degree==0){echo "专科";}else if($up4->degree==1){echo "本科";}else if($up4->degree==2){echo "硕士";}else if($up4->degree==3){echo "博士";}?>/</li>
                    <li id="nor_tel"><?php echo $up4->tel?>/</li>
                    <li id="nor_email"><?php echo $up4->email?></li>
                    <li><input type="hidden" value="<?php echo $up4->user_id?>" id="info_hid"></li>
                    <li> <p id="change_info"><span><span class=" glyphicon glyphicon-edit" id="edit-img"></span> <span class="edit">编辑</span></span></p></li>
                    <!-- <input type="button" value="编辑基本信息" id="change_info"> -->
                </ul>

            </div>

            <div class="change_head">
                <div class="wrapper">
                        <div class="change_info"><span>真实姓名:</span><br><input type="text" name="real_name" class="normal" id="editor_realname"></div>
                        <div class="change_info"><span>昵称:</span><br><input type="text" name="nick_name" class="normal" id="editor_nickname"></div>
                        <div class="change_info"><span>性别:</span><br>
                            <select name="sex" id="editor_sex">
                                <option value="0" id="select_man">男</option>
                                <option value="1" id="select_woman">女</option>
                            </select></div>
                        <div class="change_info"><span>出生日期:</span><br><input type="text" name="birth" class="laydate-icon normal" id="info-time" readonly></div>
                        <div class="change_info"><span>最高学历:</span><br> <select name="degree" id="editor_degree" >
                                                <option value="0">专科</option>
                                                <option value="1">本科</option>
                                                <option value="2">硕士</option>
                                                <option value="3">博士</option>
                                            </select></div>
                        <div class="change_info"><span>电话:</span><br><input type="text" class="normal" id="editor_tel" disabled="true" style=""></div>
                        <div class="change_info"><span>邮箱:</span><br><input type="text" name="email" class="normal" id="editor_email"></div>

                        
                          <div class="portrait">
                                <input type = "file" accept="image/*" capture="camera" id="img" class="input-upload-image" name="update_photo" />
                                <img class="upload-btn events-pointer-none" src="assets/img_upload.jpg" id="imgInfo">
                                <div class="overlay" id="overlay">
                                    <img src="assets/loading.gif" alt="加载中...">
                                </div>
                                <label>更换头像</label>
                         </div>
                          <p class="mask-bottom">
                            <input type="submit" value="保存" id="save" class="mask-sub">
                             <span class="mask-span2"><a id="cancel" href="javascript:;">取消</a></span>
                        </p>
                          <input type = "file" accept="image/*" capture="camera" id="img1" class="input-upload-image" name="photo" style="display:none"  />
                </div>
            </div>

            <div id="education">
                <p class="add2-p" id="add2"><span class="add2-a"><span class="glyphicon glyphicon-plus-sign" id="add2-img"></span> <span class="add2">添加</span></span></p>
                <h2 class="simple-head">教育经历</h2>

                <div id="mask2-work" class="mask-form">
                        <p class="mask-p"> 学校</p>
                        <div class="mask-ipt-left">
                            <input type="text" class="mask-ipt" id="school" name="school">
                            <p class="mask-p"> 学历</p>
                            <!-- <input type="text" class="mask-ipt" id="degree" name="degree"> -->
                             <select id="degree"  name="degree" class="mask-ipt">
                                            <option value="0">本科</option>
                                            <option value="1">专科</option>
                                            <option value="2">硕士</option>
                                            <option value="3">博士</option>
                            </select>
                        </div>

                        <p class="mask-p " > 专业</p>
                        <input type="text"  class="time-left mask-ipt" id="major" name="major">
                        <p class="mask-p " > 毕业时间</p>
                        <input type="text"  class="time-left laydate-icon mask-ipt" id="graduation" name="graduation" readonly>
                        <input type="hidden" id="hidden" name="hid"><!--存储edu_id删除时使用-->
                        <input type="hidden" id="hidden3" name="hid3" value="<?php echo $up4->user_id?>"> <!--存储user_id-->
                        <p class="mask-bottom">
                            <span class="mask-span1"><span id="delete2" style="cursor: pointer">删除</span></span>
                            <input type="submit" value="保存" class="mask-sub" id="saveEU">
                        </p>
                </div>



                <div id="mask4-work" class="mask-form">
                        <p class="mask-p"> 学校<span class="i">*</span></p>
                        <div class="mask-ipt-left">
                            <input type="text" class="mask-ipt" id="school2">
                             <p class="mask-p " > 专业<span class="i">*</span></p>
                              <input type="text"  class="mask-ipt" id="major2">

                            <p class="mask-p"> 学历</p>
                            <select id="degree2" class="mask-ipt">
                                            <option value="0">本科</option>
                                            <option value="1">专科</option>
                                            <option value="2">硕士</option>
                                            <option value="3">博士</option>
                            </select>
                        </div>

                       
                        <p class="mask-p " > 毕业时间</p>
                        <input type="text"  class="mask-ipt laydate-icon" id="graduation2" readonly>
                        <input type="hidden" id="hidden2" value="<?php echo $up4->user_id?>"><!--保存登陆者的user_id-->

                        <p class="mask-bottom">
                            <input type="button" value="保存" class="mask-sub" id="saveEA" >
                        </p>
                </div>



                <div class="work-bottom">
                    <ul class="simple-ul" id="edu_all">
                        <?php if($up3!=null){?>
                        <?php foreach ($up3 as $k){?>
                            <li class="simple-li">
                                <div class="simple-li-right">
                                    <h2 class="simple-h2"><?php echo $k->school?></h2>
                                    <p class="edit2-p"><span class="edit2-a"><span class=" glyphicon glyphicon-edit edit2-img" ></span> <span class="edit2">编辑</span></span></p>
                                    <!-- <?php echo $k->degree ?>???????????????为什么全是1 -->
                                    <!-- <h2 class="simple-p1"><?php echo $k->major?></h2> -->
                                    <p class="simple-p1"><span class="span-left2"><?php if($k->a_degree==0){echo "本科";}else if($k->a_degree==1){echo "专科";}else if($k->a_degree==2){echo "硕士";}else if($k->a_degree==3){echo "博士";} ?></span>&nbsp/&nbsp<span class="simple-p1 simple-d1"><?php echo $k->major?></span><span class="span-right3"><?php echo $k->graduation?></span></p>
                                    <input class="ipt-hid" type="hidden" value=<?php echo $k->edu_id?>>
                                </div>
                            </li>
                        <?php }?>
                        <?php }else if($up3==null){?>
                            <div style="text-align: center;font-size: 20px;">还没有教育经历呦~</div>
                        <?php }?>
                    </ul>
                </div>




            </div>
            <div id="work">
                <p class="add-p"><span class="add-a"><span class="glyphicon glyphicon-plus-sign" id="add-img"></span> <span class="add">添加</span></span></p>
                <h2 class="simple-head">工作经历</h2>

                <div id="mask-work" class="mask-form">
                        <p class="mask-p"> 公司</p>
                        <div class="mask-ipt-left">
                            <input type="text" class="mask-ipt" id="company" autocomplete="off"  name="company">
                            <p class="mask-p"> 职位</p>
                            <input type="text" class="mask-ipt" id="position" name="position">
                        </div>
                        <p class="mask-p " >任职时间</p>
                        <input type="text"  class="laydate-icon time-left" id="start" name="start" readonly><div class="time-xian"><img src="assets/img/resume/xian.png" alt=""></div><input type="text"  class="laydate-icon time-right" id="end" name="end" readonly>
                        <p class="mask-p " >详细介绍</p>
                        <textarea name="text"  class="mask-textarea mask-text"  cols="30" rows="10" id="text"></textarea>
                        <input type="hidden" id="hidden5" name="hid"><!--保存work_id的使用-->
                        <input type="hidden" id="hidden6" name="hid" value="<?php echo $up4->user_id?>"><!--保存user_id的使用-->
                        <p class="mask-bottom">
                            <span class="mask-span1"><span id="delete">删除</span></span>
                            <input type="submit" value="保存" class="mask-sub" id="saveWU">
                        </p>
                </div>

                <div id="mask3-work">
                        <p class="mask-p"> 公司<span class="i">*</span></p>
                        <div class="mask-ipt-left">
                            <input type="text" class="mask-ipt" autocomplete="off"  id="company3">
                            <p class="mask-p"> 职位<span class="i">*</span></p>
                            <input type="text" class="mask-ipt" id="position3">
                        </div>
                        <p class="mask-p " > 任职时间</p>
                        <input type="text"  class="time-left laydate-icon" id="start3" readonly><div class="time-xian"><img src="assets/img/resume/xian.png" alt=""></div><input type="text"  class="time-right laydate-icon" id="end3" readonly>
                        <p class="mask-p " >详细介绍</p>
                        <textarea name=""  class="mask-textarea mask-text" id="text3" cols="30" rows="10"></textarea>
                        <input type="hidden" id="hidden4" name="hid3" value="<?php echo $up4->user_id?>">
                        <p class="mask-bottom">
                            <input type="submit" value="添加" class="mask-sub" id="saveWA">
                        </p>
                </div>
                <div class="work-bottom">
                    <ul class="simple-ul" id="work_all">
                        <?php if($up2!=null){?>
                        <?php foreach ($up2 as $s){?>
                            <li class="simple-li">
                                <div class="simple-li-right">
                                    <h2 class="simple-h2"><?php echo $s->company?></h2>
                                    <p class="edit-p"><span class="edit-a"><span class=" glyphicon glyphicon-edit edit-img" ></span> <span class="edit">编辑</span></span></p>
                                    <h2 class="simple-p1"><?php echo $s->position?></h2>
                                    <p class="simple-p1"><span class="span-left2"><?php echo $s->work?></span><span class="span-right3"><span class="start"><?php echo $s->start?></span>-<span class="end"><?php echo $s->end?></span></span></p>
                                    <input class="ipt-hid" type="hidden" value=<?php echo $s->work_id?>>
                                </div>
                            </li>
                        <?php }?>
                        <?php }else if($up2==null){?>
                            <div style="text-align: center;font-size: 20px;">还没有工作经历呦~</div>
                        <?php }?>
                    </ul>

                </div>


            </div>
            <div id="introuduct">
                <h2 class="simple-head">自我介绍</h2>
                <textarea name="own"  class="mask-textarea mask-text" id="intr-text" cols="30" rows="10" ><?php echo $up->introduction?></textarea>
            </div>
            <p id="view-under"><input type="checkbox" name="job" class="view-ipt" id="under-radio"><span id="understand">我已了解面试流程</span></p>
            <p><input type="submit" value="保存信息" id="view-btn" style="margin-bottom: 10px;"></p>
        </div>

    </div>


</div>

<?php include 'footer.php' ?>
<script src="assets/js/require.js" data-main="assets/js/resume"></script>
</body>
</html>
