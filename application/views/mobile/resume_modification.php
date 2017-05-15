<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>简历修改</title>
     <base href="<?php echo site_url();?>">
    <link rel="stylesheet" type="text/css" href="assets/mobile/css/resume_modification.css">
    <link rel="stylesheet" href="assets/mobile/css/lArea.css">
    <link rel="stylesheet" href="assets/mobile/css/LCalendar.css">
    <link rel="stylesheet" type="text/css" href="assets/mobile/css/title.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta content="black" name="apple-mobile-web-app-status-bar-style">
    <meta content="telephone=no" name="format-detection">
    <meta content="email=no" name="format-detection">
    

</head>
<body>
    <div id="out">
        <?php include("title.php")?>
        <p id="til-midlle">简历修改</p>
        <div class="jianlixiugai-content">
            <div class="container" id="container">
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
                        <span class="jianlixiugai-right sexchoose">女</span>
                    </li>
                    <li>
                        <span class="jianlixiugai-left">年龄</span>
                        <span class="jianlixiugai-right">26岁</span>
                    </li>
                    <li>
                        <span class="jianlixiugai-left">所在地区</span>
                        <input class="placechoose" type="text" readonly="" name="input_area" placeholder="城市选择"/>
                    </li>
                    <li>
                        <span class="jianlixiugai-left">联系电话</span>
                        <span class="jianlixiugai-right">13928039201</span>
                    </li>
                    <li>
                        <span class="jianlixiugai-left">邮箱</span>
                        <span class="jianlixiugai-right">8390283938@qq.com</span>
                    </li>
                </ul>
                <button id="jianlixiugai-keep">保&nbsp;&nbsp;&nbsp;存</button>
                <span class="jianlixiugai-cansel"><a href="">取消修改</a></span>
            </div>
        </div>
    </div>




    <script src="assets/js/jquery.js" data-main="assets/mobile/js/resume_modification"></script>
    <!-- <script type="text/javascript" src="lib/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="lib/holder.js"></script> -->
    <script src="assets/mobile/js/lArea.min.js"></script>
    
    <script type="text/javascript">
        $(function(){
            //     var oContainer = document.getElementById('container');
            //     var $sex = $('.sexchoose');
            // $sex.on('click',function(){
            //     var $sexchoose = $('<div></div>');
            //     $sexchoose.addClass('sexdiv');  
            //     var $btn1=$("<input type='button' id='man' value='man'>");
            //     var $btn2=$("<input type='button' id='woman' value='woman'>");
            //     oContainer.appendChild($sexchoose[0]);
            //     $sexchoose.append($btn1[0]);
            //     $sexchoose.append($btn2[0]);
            // });
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

        });
    </script>
    
    
</body>
</html>