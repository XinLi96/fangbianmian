require.config({
    baseUrl: "assets",
    paths: {
        "jquery": "js/jquery",
        "bootstrap": "lib/bootstrap/js/bootstrap.min",
        "header": "js/header",
        "laydate": "js/laydate",
        "pic": "js/pic",
        "company": "js/company"
    }
});
require(['jquery', 'bootstrap', 'header', 'laydate','pic','company'], function($, _, _, _, _,company) {
$(function(){



    var $mask=$("#mask-work");
    var $mask3=$("#mask3-work");

    var $mask2=$("#mask2-work");
    var $mask4=$("#mask4-work");

    var $addHTML=$(".add");
    var $addImg=$("#add-img");
    var $add2HTML=$(".add2");
    var $add2Img=$("#add2-img");
    var $maskCancle=$(".mask-span2");
    var $editHTML=$(".edit");
    var $editImg=$(".edit-img");
    var $edit2HTML=$(".edit2");
    var $edit2Img=$(".edit2-img");

    setTimeout(function() {


        laydate.skin('molv'); //切换皮肤，请查看skins下面皮肤库
        laydate({
            elem: '#start3'
        }); //绑定元素

        laydate.skin('molv'); //切换皮肤，请查看skins下面皮肤库
        laydate({
            elem: '#end3'
        }); //绑定元素


        laydate.skin('molv'); //切换皮肤，请查看skins下面皮肤库
        laydate({
            elem: '#start'
        }); //绑定元素

        laydate.skin('molv'); //切换皮肤，请查看skins下面皮肤库
        laydate({
            elem: '#end'
        }); //绑定元素

        laydate.skin('molv'); //切换皮肤，请查看skins下面皮肤库
        laydate({
            elem: '#graduation'
        }); //绑定元素

        laydate.skin('molv'); //切换皮肤，请查看skins下面皮肤库
        laydate({
            elem: '#graduation2'
        }); //绑定元素

        laydate.skin('molv'); //切换皮肤，请查看skins下面皮肤库
        laydate({
            elem: '#info-time'
        }); //绑定元素
    }, 0);

    $("#sideul li ").on("click",function () {

        $(this).find(".right-hover").stop().addClass("showed");
        $(this).siblings().find('.right-hover').stop().removeClass("showed");
        $(this).children("a").addClass("active");
        $(this).siblings().children("a").removeClass("active");

    });

    $(".add2-a").on('click',function () {/*教育经历添加*/
        if($("#mask4-work").css("display")=="none"){
            $("#mask4-work").css("display","block");
            $add2HTML.html("取消");
            $add2Img.hide();/*加号*/
            $(".edit2").hide();
            $(".edit2-img").hide();

        }else if($("#mask4-work").css("display")=="block"){
            $("#mask4-work").css("display","none");
            $add2HTML.html("添加");
            $add2Img.show();
            $(".edit2").show();
            $(".edit2-img").show();

        }
        
        $maskCancle.on("click",function () {
            $mask2.hide();
            $add2HTML.html("添加");
            $add2Img.show();

        });
    });


    $(".add-a").on('click',function () {/*工作经历添加*/
        $mask3.toggle();
        if($addHTML.html()=="添加"){/*按钮的内容的变化*/
            $addHTML.html("取消");
            $addImg.hide();
            $(".edit").hide();
            $(".edit-img").hide();
        }
        else if($addHTML.html()=="取消"){/*按钮的内容的变化*/
            $addHTML.html("添加");
            $addImg.show();
            $(".edit").show();
            $(".edit-img").show();
        }
        
        // $maskCancle.on("click",function () {
        //     alert(77777777777);
        //     $mask.hide();
        //     $addHTML.html("添加");
        //     $addImg.show();
        // });

        

    });


    $("#work_all").on('click',".edit-a",function () {/*工作经历点击编辑按钮*/
        $mask.toggle();
        $(".add-a").hide();/*添加按钮隐藏 */
        if($editHTML.html()=="编辑"){
            $editImg.hide();/*所有编辑按钮隐藏*/
            $editHTML.hide();
        }
        $maskCancle.on("click",function () {
            $mask.hide();
            $editImg.show();
            $editHTML.show();

        });
/*赋值编辑框内容代码*/

        var nowobj=$(this.parentNode.parentNode.parentNode);
        var conpany=nowobj.find(".simple-h2")[0].innerHTML;
        var position=nowobj.find(".simple-p1")[0].innerHTML;
        var timestart=nowobj.find(".start")[0].innerHTML;
        var timeend=nowobj.find(".end")[0].innerHTML;
        var text=nowobj.find(".span-left2")[0].innerHTML;
        var id=nowobj.find(".ipt-hid").val();/*work_id*/
        $("#company").val(conpany);
        $("#position").val(position);
        $("#start").val(timestart);
        $("#end").val(timeend);
        $("#text").val(text);
        $("#hidden5").val(id);
        $(this.parentNode.parentNode.parentNode).remove();
/**/

    });
    $("#edu_all").on('click',".edit2-a",function () {/*教育经历编辑按钮*//*事件委派解决后加入的元素的点击事件问题*/
        // console.log($(this));/*返回的不是edu_all而是点击事件的事件源*/
        $mask2.toggle();
        if($edit2HTML.html()=="编辑"){
            $(".edit2").hide();
            $(".edit2-img").hide();
            $add2HTML.html("");
            $add2Img.hide();/*加号*/
        }
        $maskCancle.on("click",function () {
            $mask2.hide();
            $edit2Img.show();
            $edit2HTML.show();
        });

        var nowobj=$(this.parentNode.parentNode.parentNode);/*不查询数据库只使用js复制数据到遮罩层中*/
        var school=nowobj.find(".simple-h2")[0].innerHTML;
        var degree=nowobj.find(".span-left2")[0].innerHTML;
        var major=nowobj.find(".simple-d1")[0].innerHTML;
        var graduation=nowobj.find(".span-right3")[0].innerHTML;
        var id=nowobj.find(".ipt-hid").val();/*edu_id*/

        console.log(id);

        switch (degree)
                {
                case '专科':
                   $("#degree").val(0);
                    break;
                case '本科':
                   $("#degree").val(1);
                    break;
                case '硕士':
                     $("#degree").val(2);
                    break;
                case '博士':
                      $("#degree").val(3);
                    break;
              
                }


        $("#school").val(school);
       
        $("#major").val(major);
        $("#graduation").val(graduation);/*编辑的遮罩层中输入值*/
        $("#hidden").val(id);/*把edu_id传给更新弹层的hidden中，点击保存时使用*/
        $(this.parentNode.parentNode.parentNode).remove();/*DOM操作删除本条信息*/


    });


    $("#delete2").on("click",function(){/*点击编辑中的删除*/
        var edu_id=$("#hidden").val();
        var obj={
            edu_id:edu_id
        };
        $.post("t_edu/delete_edu",obj,function(data){
            data=data.trim();
            console.log(data);
            if(data=="successful"){
                $mask2.hide();/*关闭INPUT*/
                $(".edit2").show();/*点击保存显示所有编辑*/
                $(".edit2-img").show();
                $add2HTML.html("添加");
                $add2Img.show();/*加号*/
                alert("删除成功");
            }
        },"text");
    });


    $("#delete").on("click",function(){/*点击编辑中的删除*/
        var work_id=$("#hidden5").val();
        var obj={
            work_id:work_id
        };
        $.post("t_work/delete_work",obj,function(data){
            data=data.trim();
            console.log(data);
            if(data=="successful"){
                $mask.hide();/*关闭INPUT*/

                $(".edit").show();/*点击保存显示所有编辑*/
                $(".edit-img").show();
                $(".add-a").show();/*添加按钮显示 */
                alert("删除成功");
            }
        },"text");
    });



    $("#saveEU").on("click",function(){/*点击编辑中的保存按钮发送ajax请求*/
        var edu_id=$("#hidden").val();/*获取教育经历的edu_id*/
        var user_id=$("#hidden3").val();/*获取登陆人员的user_id*/
        var school=$("#school").val();
        var major=$("#major").val();
        var degree=$("#degree").val();
        var graduation=$("#graduation").val();


        var degree_name="";
        if(degree==0){
            degree_name="本科";
        }else if(degree==1){
            degree_name="专科";
        }else if(degree==2){
            degree_name="硕士";
        }else if(degree==3){
            degree_name="博士";
        }


        $add2HTML.html("添加");
        $add2Img.show();/*加号*/


        var obj={
            edu_id:edu_id,
            user_id:user_id,
            school:school,
            major:major,
            degree:degree,
            graduation:graduation
        };

        $.post("t_edu/update_edu",obj,function(data){

            $(".edit2").show();/*点击保存显示所有编辑*/
            $(".edit2-img").show();

            $mask2.hide();/*关闭INPUT*/
            var max_id=data.trim();

            var odiv=$('<li class="simple-li">'+/*DOM操作*/
                '<div class="simple-li-right">'+
                '<h2 class="simple-h2">'+school+'</h2>'+
                '<p class="edit2-p">' +
                '<span class="edit2-a">' +
                '<span class=" glyphicon glyphicon-edit edit2-img" ></span> ' +
                '<span class="edit2">编辑</span>' +
                '</span>' +
                '</p>'+
                '<p class="simple-p1">' +
                '<span class="span-left2">'+degree_name+'&nbsp/&nbsp'+'</span>' +
                '<span class="simple-p1 simple-d1">'+major+'</span>' +
                '<span class="span-right3">'+graduation+'</span>' +
                '</p>'+
                '<input class="ipt-hid" type="hidden" value='+max_id+'>'+
                '</div>'+
                '</li>');
            $("#edu_all").append(odiv);



        },"text");
    });



    $("#saveWU").on("click",function(){/*点击编辑中的保存按钮发送ajax请求*/
        var work_id=$("#hidden5").val();/*获取工作经历的work_id*/
        var user_id=$("#hidden6").val();/*获取登陆人员的user_id*/
        var company=$("#company").val();
        var position=$("#position").val();
        var start=$("#start").val();
        var end=$("#end").val();
        var text=$("#text").val();

        $(".add-a").show();/*添加按钮显示 */
        $add2HTML.html("添加");
        $add2Img.show();/*加号*/


        var obj={
            work_id:work_id,
            user_id:user_id,
            company:company,
            position:position,
            start:start,
            end:end,
            text:text
        };

        $.post("t_work/update_work",obj,function(data){

            $(".edit").show();/*点击保存显示所有编辑*/
            $(".edit-img").show();

            $mask.hide();/*关闭INPUT*/
            var max_id=data.trim();

            var odiv=$('<li class="simple-li">'+
                '<div class="simple-li-right">'+
                '<h2 class="simple-h2">'+company+'</h2>'+
                '<p class="edit-p"><span class="edit-a"><span class=" glyphicon glyphicon-edit edit-img" ></span> <span class="edit">编辑</span></span></p>'+
                '<h2 class="simple-p1">'+position+'</h2>'+
                '<p class="simple-p1"><span class="span-left2">'+text+'</span><span class="span-right3"><span class="start">'+start+'</span>-<span class="end">'+end+'</span></span></p>'+
                '<input class="ipt-hid" type="hidden" value='+max_id+'>'+
                '</div>'+
                '</li>');
            $("#work_all").append(odiv);




        },"text");
    });





    $("#sideul li ").on("click",function(e){
        var href=$(this).children("a").attr("href");
        console.log(href);
        $(document.body).animate({
            scrollTop:$(href).offset().top -62+"px"
        },500);
        history.pushState($(href).offset().top,"");
        return false;
    });
    window.onpopstate=function(e){
        $(document.body).animate({
            scrollTop:e.state
        },500);
    };
    $('.money-ipt').prop('disabled',true);
    $(".view-ipts").on("change",function(){
        if($(this.parentNode).find(".money-ipt").prop('disabled')==true){
            $(this.parentNode).find(".money-ipt").prop("disabled",false);
        }else if($(this.parentNode).find(".money-ipt").prop('disabled')==false){
            $(this.parentNode).find(".money-ipt").val("");
            $(this.parentNode).find(".money-ipt").prop("disabled",true);
        }
    });
    $("#under-radio").prop("checked",null);
    $("#view-btn").prop("disabled",true);
    $("#under-radio").on("change",function(){
        if($("#view-btn").prop("disabled")==true){
            $("#view-btn").css("background","#5ce1a8");
            $("#view-btn").prop("disabled",false);
        }else if($("#view-btn").prop("disabled")==false){
            $("#view-btn").css("background","gray");
            $("#view-btn").prop("disabled",true);
        }

    });


    var stmpname=$("#info_name1")[0].innerHTML;

    $("#change_info").on("click",function() {
        var user_id=$("#info_hid").val();
            $.get("t_work/editor_select","user_id="+user_id,function(data){
                $("#editor_realname").val(data.real_name);
                $("#editor_nickname").val(data.nick_name);
                if(data.sex==0){/*男*/
                    $("#select_man").attr("selected",true);
                }else if(data.sex==1){/*女*/
                    $("#select_woman").attr("selected",true);
                }
                $("#info-time").val(data.birth);
                $("#editor_degree").val(data.degree);
                $("#editor_tel").val(data.tel);
                $("#editor_email").val(data.email);
                $("#imgInfo").attr("src",data.photo);
            },"json");
            $(".change_head").css("display", "block");
            // $("#change_info").css("display", "none");
    });

    $("#save").on("click",function(){
        var user_id=$("#info_hid").val();
        var real_name=$("#editor_realname").val();
        var nick_name=$("#editor_nickname").val();
        var sex=$("#editor_sex").val();
        var info_time=$("#info-time").val();
        var degree=$("#editor_degree").val();
        var email=$("#editor_email").val();
        var obj={
            user_id:user_id,
            real_name:real_name,
            nick_name:nick_name,
            sex:sex,
            birth:info_time,
            degree:degree,
            email:email
        };


        /*js修改信息*/


        if($("#check-span").is(":checked")){/*选中*/
            if(name_flag==1){
                $("#info_name1").text(real_name);
                stmpname=real_name;
                $("#info_name2").text(nick_name);
            }else if(name_flag==0){
                $("#info_name1").text(real_name);
                stmpname=nick_name;
                $("#info_name2").text(real_name);
            }

        }else{/*未选中*/
            if(name_flag==1){
                $("#info_name1").text(nick_name);
                stmpname=real_name;
                $("#info_name2").text(nick_name);
            }else if(name_flag==0){
                $("#info_name1").text(nick_name);
                stmpname=nick_name;
                $("#info_name2").text(real_name);
            }
        }
        if(sex==0){
            $("#nor_sex").text("男/");
        }else if(sex==1){
            $("#nor_sex").text("女/");
        }
        $("#nor_degree").text(degree+"/");
        $("#nor_email").text(email);
        /*js修改信息*/

        $.post("t_work/editor_update",obj,function(data){
            data=data.trim();
            if(data=="successful"){
                alert("保存成功");
                $(".change_head").css("display", "none");
            }
        },"text");



    });

 $("#cancel").on("click",function() {
     $(".change_head").css("display", "none");
 });
       

    var name_flag=$("#info_name1").attr("name_flag");

    $("#check-span").on("change",function(){
        var user_id=$("#info_hid").val();
        if($(this).is(":checked")){/*勾选状态*/
            if(name_flag==1){
                $("#info_name1")[0].innerHTML=stmpname;
            }else if(name_flag==0){
                $("#info_name1")[0].innerHTML=$("#info_name2")[0].innerHTML;
            }
            var obj={
                "user_id":user_id,
                "name_flag":1
            };
            $.get("t_work/name_flag",obj,function(data){
                data=data.trim(data);
                if(data=="successful"){

                }
            },"text");
        }else{/*非勾选状态*/
            if(name_flag==1){
                $("#info_name1")[0].innerHTML=$("#info_name2")[0].innerHTML;
            }else if(name_flag==0){
                $("#info_name1")[0].innerHTML=stmpname;
            }
            var obj={
                "user_id":user_id,
                "name_flag":0
            };
            $.get("t_work/name_flag",obj,function(data){
                data=data.trim(data);
                if(data=="successful"){

                }
            },"text");
        }
    });

    // 公司输入框
    // 自定义class
      var settings1 = {
        obj:'#company_add',
        liClass:'ist',
        company2IputClass:'mask-ipt',
        company2LabelClass:'mask-p'
    };
    company.list(settings1);

    var settings2 = {
        obj:'#company',
        liClass:'ist',
        company2IputClass:'mask-ipt',
        company2LabelClass:'mask-p'
    };
    company.list(settings2);

    //如果自行输入公司的input/name名叫company2
    //表单验证的判断条件是$('.tip2').is(':hidden')&&$('#company2 input').val() != ''
    // 公司输入框结束
  


    $("#saveEA").on('click',function(){/*教育经历添加页面点击保存按钮时*/
         if ($("#mask4-work .mask-ipt").val() != "") {
           $("#add-e").submit();
        }else{
            alert("请填写完整信息");
        }

        var user_id=$("#hidden2").val();/*获取登陆者的user_id为insert时提供*/
        var school2=$("#school2").val();
        var major2=$("#major2").val();
        var degree2=$("#degree2").val();
        var graduation2=$("#graduation2").val();

        var degree_name="";
        if(degree2==0){
            degree_name="本科";
        }else if(degree2==1){
            degree_name="专科";
        }else if(degree2==2){
            degree_name="硕士";
        }else if(degree2==3){
            degree_name="博士";
        }

        $(".edit2").show();/*点击保存显示所有编辑*/
        $(".edit2-img").show();

        var obj={
            user_id:user_id,
            school2:school2,
            major2:major2,
            degree2:degree2,
            graduation2:graduation2
        };
        $.post("t_edu/add_edu",obj,function(data){
            var max_id=data.trim();
            $("#mask4-work").css("display","none");/*关闭添加的DIV*/

            $add2HTML.html("添加");/*按钮恢复到添加*/
            $add2Img.show();

            $("#school2").val("");/*清空添加的表单因为只用一个*/
            $("#major2").val("");
            $("#degree2").val("");
            $("#graduation2").val("");


            var odiv=$('<li class="simple-li">'+/*DOM操作*/
                '<div class="simple-li-right">'+
                '<h2 class="simple-h2">'+school2+'</h2>'+
                '<p class="edit2-p">' +
                '<span class="edit2-a">' +
                '<span class=" glyphicon glyphicon-edit edit2-img" ></span> ' +
                '<span class="edit2">编辑</span>' +
                '</span>' +
                '</p>'+
                '<p class="simple-p1">' +
                '<span class="span-left2">'+degree_name+'&nbsp/&nbsp'+'</span>' +
                '<span class="simple-p1 simple-d1">'+major2+'</span>' +
                '<span class="span-right3">'+graduation2+'</span>' +
                '</p>'+
                '<input class="ipt-hid" type="hidden" value='+max_id+'>'+
                '</div>'+
                '</li>');
            $("#edu_all").append(odiv);



            alert("添加成功");

        },"text");


    });




    $("#saveWA").on('click',function(){/*工作经历添加页面点击保存按钮时*/

        var user_id=$("#hidden4").val();/*获取登陆者的user_id为insert时提供*/
        var company3=$("#company3").val();
        var position3=$("#position3").val();
        var start3=$("#start3").val();
        var end3=$("#end3").val();
        var text3=$("#text3").val();

        var obj={
            user_id:user_id,
            company3:company3,
            position3:position3,
            start3:start3,
            end3:end3, 
            text3:text3
        };
        $.post("t_work/add_work",obj,function(data){
            var max_id=data.trim();
            $("#mask3-work").css("display","none");/*关闭添加的DIV*/

            $addHTML.html("添加");
            $addImg.show();

            $("#company3").val("");/*清空添加的表单因为只用一个*/
            $("#position3").val("");
            $("#start3").val("");
            $("#end3").val("");
            $("#text3").val("");


            var odiv=$('<li class="simple-li">'+
                '<div class="simple-li-right">'+
                '<h2 class="simple-h2">'+company3+'</h2>'+
            '<p class="edit-p"><span class="edit-a"><span class=" glyphicon glyphicon-edit edit-img" ></span> <span class="edit">编辑</span></span></p>'+
                '<h2 class="simple-p1">'+position3+'</h2>'+
            '<p class="simple-p1"><span class="span-left2">'+text3+'</span><span class="span-right3"><span class="start">'+start3+'</span>-<span class="end">'+end3+'</span></span></p>'+
            '<input class="ipt-hid" type="hidden" value='+max_id+'>'+
            '</div>'+
            '</li>');
            $("#work_all").append(odiv);



            alert("添加成功");

        },"text");


    });

    $("#view-btn").on("click",function(){
        var own=$("#intr-text").val();
        var obj={
            own:own
        };
        $.post("t_work/release_interview_stu",obj,function(data){
            data=data.trim();
            if(data=="successful"){
                alert("更新成功");
            }
        },"text");
    });





});



});