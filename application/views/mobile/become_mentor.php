<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>成为导师</title>
     <base href="<?php echo site_url();?>">
     <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="assets/mobile/css/become_mentor.css">
    <link rel="stylesheet" href="assets/mobile/css/LCalendar.css">
    <link rel="stylesheet" href="assets/mobile/css/lArea.css">
    <link rel="stylesheet" type="text/css" href="assets/mobile/css/title.css">
</head>
<body>
    <div id="out">
        <?php include("title.php")?>
        <p id="til-midlle">成为导师</p>
        <div class="gongzuoxiugai-content">
            <div class="container">
                <ul class="jianlixiugai-ul">
                    <li class="jianlixiugai-ul-first">
                        <span class="jianlixiugai-left">头像</span>
                        <img src="assets/mobile/img/dog_and_edit/dog.jpg" class="jianlixiugai-right">
                    </li>
                    <li>
                        <span class="jianlixiugai-left">真实姓名</span>
                        <span class="jianlixiugai-right">小宝小小</span>
                    </li>
                    <li>
                        <span class="jianlixiugai-left">性别</span>
                        <span class="jianlixiugai-right">女</span>
                    </li>
                    <li>
                        <span classs"jianlixiugai-left">年龄</span>
                        <span class="jianlixiugai-right">26岁</span>
                    </li>
                    <li>
                        <span class="jianlixiugai-left">所在地区</span>
                        <input class="placechoose" type="text" readonly="" name="input_area" placeholder="城市选择特效"/>
                    <li>
                        <span class="jianlixiugai-left">联系电话</span>
                        <span class="jianlixiugai-right">13928039201</span>
                    </li>
                    <li>
                        <span class="jianlixiugai-left">邮箱</span>
                        <span class="jianlixiugai-right">8390283938@qq.com</span>
                    </li>
                </ul>
                <div class="realname">     
                    <span>是否显示真实姓名</span>
                    <input type="checkbox" name="显示">
                </div>
                <div class="label-company">
                    <span>任职公司</span>
                </div>
                <ul class="gongzuoxiugai-ul">
                    <li class="gongzuoxiugai-ul-first">
                        <span class="gongzuoxiugai-left">公司</span>
                        <span class="gongzuoxiugai-right">小公司</span>
                    </li>
                    <li>
                        <span class="gongzuoxiugai-left">职务</span>
                        <span class="gongzuoxiugai-right">前端编程工程师</span>
                    </li>
                    <li>
                        <span class="gongzuoxiugai-left">开始时间</span>
                        <input type="text" name="input_date" placeholder="日期选择>>" data-lcalendar="2010-01-11,2019-12-31" id="time">
                    </li>
                    <li>
                        <span class="gongzuoxiugai-left">结束时间</span>
                        <input type="text" name="input_date" placeholder="日期选择>>" data-lcalendar="2010-01-11,2019-12-31" id="time2">
                    </li>
                    <li>
                        <span class="gongzuoxiugai-left">备注</span>
                    </li> 
                    <li class="remarks">
                        <p >&nbsp;&nbsp;工作，工作内容，做了什么什么项目，多长时间什么的，一起工作，工作内容，做了什么项目，多长时间什么的</p>
                    </li>     
                </ul>
                
                        
                <button id="gongzuoxiugai-certificate">上传工作凭证</button>
                <span id="gongzuoxiugai-certificate-text">(&nbsp;上传工牌或者任职合同&nbsp;)</span>
                <button id="gongzuoxiugai-keep">保&nbsp;&nbsp;&nbsp;存</button>
                <div class="choose">
                    <span class="gongzuoxiugai-cansel-l"><a href="">取消</a></span>
                </div>
            </div>
        </div>
    </div>




    <script src="assets/js/jquery.js" data-main="assets/mobile/js/become_mentor"></script>
    <!-- <script type="text/javascript" src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="lib/holder.js"></script> -->
    <script src="assets/mobile/js/LCalendar.js"></script>
    <script src="assets/mobile/js/lArea.min.js"></script>
    <script type="text/javascript">

            $('.gongzuoxiugai-right').click(function(){
                var td = $(this);
                var txt = td.text();
                var oInput = $("<input type='text' value='"+ txt +"'>");
                td.html(oInput);
                // input.click(function(){return false;});
                
                
                var input = document.getElementsByTagName('input')[0];  
                var val = input.value;  
                input.focus();  
                input.value = '';  
                input.value = val;  oInput.trigger("focus");
                oInput.blur(function(){
                    var newtext = $(this).val();
                    if(newtext != txt){
                        td.html(newtext);
                    }else{
                        td.html(newtext);
                    }
                });


            });
            $('.jianlixiugai-right').click(function(){
                var td = $(this);
                var txt = td.text();
                var oInput = $("<input type='text' value='"+ txt +"'>");
                td.html(oInput);
                // input.click(function(){return false;});
                
                
                var input = document.getElementsByTagName('input')[0];  
                var val = input.value;  
                input.focus();  
                input.value = '';  
                input.value = val;  oInput.trigger("focus");
                oInput.blur(function(){
                    var newtext = $(this).val();
                    if(newtext != txt){
                        td.html(newtext);
                    }else{
                        td.html(newtext);
                    }
                });


            });
            var area = new lArea();
            area.init({
                'trigger': '.placechoose',
                'data':lAreaData//'js/AreaData.json'
            });

   			 var calendar = new lCalendar();
            calendar.init({
            'trigger': '#time', //标签id
            'type': 'date', //date 调出日期选择 datetime 调出日期时间选择 time 调出时间选择 ym 调出年月选择,
            'minDate': '1900-1-1', //最小日期
            'maxDate': new Date().getFullYear() + '-' + (new Date().getMonth() + 1) + '-' + new Date().getDate() //最大日期
            });
            var calendar2 = new lCalendar();
            calendar2.init({
            'trigger': '#time2', //标签id
            'type': 'date', //date 调出日期选择 datetime 调出日期时间选择 time 调出时间选择 ym 调出年月选择,
            'minDate': '1900-1-1', //最小日期
            'maxDate': new Date().getFullYear() + '-' + (new Date().getMonth() + 1) + '-' + new Date().getDate() //最大日期
            });
    </script>
</body>
</html>