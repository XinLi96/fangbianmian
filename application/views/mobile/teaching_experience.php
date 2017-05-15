<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>教学经历</title>
     <base href="<?php echo site_url();?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="assets/mobile/css/teaching_experience.css">
    <link rel="stylesheet" href="assets/mobile/css/lCalendar.css">
    <link rel="stylesheet" href="assets/mobile/css/lArea.css">
    <link rel="stylesheet" type="text/css" href="assets/mobile/css/title.css">
</head>
<body>
    <div id="out">
        <?php include("title.php")?>
        <p id="til-midlle">教学经历</p>

        <div class="jiaoxuexiugai-content">
            <div class="container">
                <ul class="jiaoxuexiugai-ul">
                    <li class="jiaoxuexiugai-ul-first">
                        <span class="jiaoxuexiugai-left">学校名称</span>
                        <span class="jiaoxuexiugai-right">东北农业大学</span>
                    </li>
                    <li>
                        <span class="jiaoxuexiugai-left">毕业时间</span> 
                        <input type="text" name="input_date" placeholder="日期选择>>" data-lcalendar="2010-01-11,2019-12-31" id="time">
                    </li>
                    <li>
                        <span class="jiaoxuexiugai-left">专业</span>
                        <span class="jiaoxuexiugai-right">计算机相关专业</span>
                    </li>
                    <li>
                        <span class="jiaoxuexiugai-left">学历</span>
                        <span class="jiaoxuexiugai-right">本科</span>
                    </li>
                    <li>
                        <span class="jiaoxuexiugai-left">备注</span>
                    </li> 
                    <li id="remarks">
                        <p >&nbsp;&nbsp;工作，工作内容，做了什么什么项目，多长时间什么的，一起工作，工作内容，做了什么项目，多长时间什么的</p>
                    </li>     
                </ul>
                
                        
                 
                <button id="jiaoxuexiugai-keep">保&nbsp;&nbsp;&nbsp;存</button>
                <div class="choose">
                    <span class="jiaoxuexiugai-cansel-l"><a href="">取消修改</a></span>
                    <span class="jiaoxuexiugai-cansel-r"><a href="">删除</a></span>
                </div>
            </div>
        </div>
    </div>




    <script src="assets/js/jquery.js" data-main="assets/mobile/js/teaching_experience"></script>
    <!-- <script type="text/javascript" src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="lib/holder.js"></script>
 --><script src="assets/mobile/js/lCalendar.js"></script>
    <script type="text/javascript">
        $(function(){
            $('.jiaoxuexiugai-right').click(function(){
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
            'trigger': '#time', //标签id
            'type': 'date', //date 调出日期选择 datetime 调出日期时间选择 time 调出时间选择 ym 调出年月选择,
            'minDate': '1900-1-1', //最小日期
            'maxDate': new Date().getFullYear() + '-' + (new Date().getMonth() + 1) + '-' + new Date().getDate() //最大日期
            });
        });
    </script>

</body>
</html>