<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <base href="<?php echo site_url();?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
        <meta content="yes" name="apple-mobile-web-app-capable">
        <meta content="black" name="apple-mobile-web-app-status-bar-style">
        <meta content="telephone=no" name="format-detection">
        <meta content="email=no" name="format-detection">
        <meta http-equiv="refresh" content="100">
    <title>工作修改</title>
    <link rel="stylesheet" type="text/css" href="assets/mobile/css/job_change.css">
    <link rel="stylesheet" href="assets/mobile/css/LCalendar.css">
    <link rel="stylesheet" href="assets/mobile/css/lArea.css">
    <link rel="stylesheet" type="text/css" href="assets/mobile/css/title.css">
</head>
<body>
    <div id="out">
        <?php include("title.php")?>
        <p id="til-midlle">工作经历</p>
        <div class="gongzuoxiugai-content">
            <div class="container">
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
                        <input type="text" name="input_date" placeholder="日期选择>>" data-lcalendar="2011-01-1,2019-12-31" readonly="" id="time">
                    </li>
                    <li>
                        <span class="gongzuoxiugai-left">结束时间</span>
                        <input type="text" name="input_date" placeholder="日期选择>>" data-lcalendar="2011-01-1,2019-12-31" id="time2">
                    </li>
                    <li>
                        <span class="gongzuoxiugai-left">备注</span>
                    </li> 
                    <li id="remarks">
                        <p >&nbsp;&nbsp;工作，工作内容，做了什么什么项目，多长时间什么的，一起工作，工作内容，做了什么项目，多长时间什么的</p>
                    </li>     
                </ul>
                
                        
                 
                <button id="gongzuoxiugai-keep">保&nbsp;&nbsp;&nbsp;存</button>
                <div class="choose">
                    <span class="gongzuoxiugai-cansel-l"><a href="">取消修改</a></span>
                    <span class="gongzuoxiugai-cansel-r"><a href="">删除</a></span>
                </div>
            </div>
        </div>
    </div>




    <script src="assets/js/jquery.js" data-main="assets/mobile/js/job_change"></script>
    <!-- <script type="text/javascript" src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="lib/holder.js"></script> -->
    
    <script src="assets/mobile/js/lCalendar.js"></script>

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
             var calendar = new lCalendar();
            calendar.init({
                'trigger': '#time',
                'type': 'date'
                
            });
            var calendar2 = new lCalendar();
            calendar2.init({
                'trigger': '#time2',
                'type': 'date'
            });
            
    </script>
</body>
</html>