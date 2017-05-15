require.config({
    baseUrl: "assets",
    paths: {
        "jquery": "js/jquery",
        "bootstrap": "lib/bootstrap/js/bootstrap.min",
        "header": "js/header",
        "laydate": "js/laydate",
        "pic": "js/pic"
    }
});
require(['jquery', 'bootstrap', 'header', 'laydate','pic'], function($, _, _, _, _) {
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

    $(".add2-a").on('click',function () {
        $mask4.toggle();
        if($add2HTML.html()=="添加"){
            $add2HTML.html("取消");
            // console.log()
            $add2Img.hide();
        }
        else if($add2HTML.html()=="取消"){
            $add2HTML.html("添加");
            $add2Img.show();
        }
        $maskCancle.on("click",function () {
            $mask2.hide();
            $add2HTML.html("添加");
            $add2Img.show();

        });
    });


    $(".add-a").on('click',function () {
        $mask3.toggle();
        if($addHTML.html()=="添加"){/*按钮的内容的变化*/
            $addHTML.html("取消");
            $addImg.hide();
        }
        else if($addHTML.html()=="取消"){/*按钮的内容的变化*/
            $addHTML.html("添加");
            $addImg.show();
        }
        
        // $maskCancle.on("click",function () {
        //     alert(77777777777);
        //     $mask.hide();
        //     $addHTML.html("添加");
        //     $addImg.show();
        // });

        

    });


    $(".edit-a").on('click',function () {
        $mask.toggle();
        if($editHTML.html()=="编辑"){
            $editImg.hide();
            $editHTML.hide();
        }
        else if($editHTML.html()==""){
            $editImg.show();
            $editHTML.show();
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
        var id=nowobj.find(".ipt-hid").val();
        $("#company").val(conpany);
        $("#position").val(position);
        $("#start").val(timestart);
        $("#end").val(timeend);
        $("#text").val(text);
        $("#hidden").val(id);
        $("#delete")[0].href+=id;
        $(this.parentNode.parentNode.parentNode).css("display","none");
/**/

    });
    $(".edit2-a").on('click',function () {
        $mask2.toggle();
        if($edit2HTML.html()=="编辑"){
            $edit2Img.hide();
            $edit2HTML.hide();
        }
        else if($edit2HTML.html()==""){
            $edit2Img.show();
            $edit2HTML.show();
        }
        $maskCancle.on("click",function () {
            $mask2.hide();
            $edit2Img.show();
            $edit2HTML.show();

        });

     
        var nowobj=$(this.parentNode.parentNode.parentNode);
        var school=nowobj.find(".simple-h2")[0].innerHTML;
        var degree=nowobj.find(".span-left2")[0].innerHTML;
        var major=nowobj.find(".simple-d1")[0].innerHTML;
        var graduation=nowobj.find(".span-right3")[0].innerHTML;
        var id=nowobj.find(".ipt-hid").val();

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
        $("#graduation").val(graduation);
        $("#hidden2").val(id);
        $("#delete2")[0].href+=id;
        $(this.parentNode.parentNode.parentNode).css("display","none");


    });

    $("#sideul li").on("click",function(e){
        var href=$(this).children("a").attr("href");
        console.log(href);
        $(document.body).animate({
            scrollTop:$(href).offset().top -62+"px"
        },500);
        $(document.documentElement).animate({
            scrollTop:$(href).offset().top -62+"px"
            }, 500);
        history.pushState($(href).offset().top,"");
        return false;
    });
    window.onpopstate=function(e){
        $(document.body).animate({
            scrollTop:e.state
        },500);
         $(document.documentElement).animate({
                scrollTop: e.state
            }, 500);
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

    $(function(){
        for(var i=0;i<$(".hid_id").length;i++){
            $($("input[name='check[]']")[$(".hid_id")[i].value-1]).attr("checked","checked");/*设置勾选*/
            $($("input[name='money[]']")[$(".hid_id")[i].value-1]).prop("disabled",false);/*设置可编辑*/
            $($("input[name='money[]']")[$(".hid_id")[i].value-1]).val($(".hid_content")[i].value);/*设置金额*/
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
    // $("#save").on("click",function() {
    //         var user_id=$("#info_hid").val();
    //         var real_name=$("#editor_realname").val();
    //         var nick_name=$("#editor_nickname").val();
    //         var sex=$("#editor_sex").val();
    //         var time=$("#info-time").val();
    //         var degree=$("#editor_degree").val();
    //         var tel=$("#editor_tel").val();
    //         var email=$("#editor_email").val();
    //         var obj={
    //             "user_id":user_id,
    //             "real_name":real_name,
    //             "nick_name":nick_name,
    //             "sex":sex,
    //             "time":time,
    //             "degree":degree,
    //             "tel":tel,
    //             "email":email
    //         };
    //         /*js修改信息*/


    //         if($("#check-span").is(":checked")){/*选中*/
    //             if(name_flag==1){
    //                 $("#info_name1").text(real_name);
    //                 stmpname=real_name;
    //                 $("#info_name2").text(nick_name);
    //             }else if(name_flag==0){
    //                 $("#info_name1").text(real_name);
    //                 stmpname=nick_name;
    //                 $("#info_name2").text(real_name);
    //             }

    //         }else{/*未选中*/
    //             if(name_flag==1){
    //                 $("#info_name1").text(nick_name);
    //                 stmpname=real_name;
    //                 $("#info_name2").text(nick_name);
    //             }else if(name_flag==0){
    //                 $("#info_name1").text(nick_name);
    //                 stmpname=nick_name;
    //                 $("#info_name2").text(real_name);
    //             }
    //         }
    //         if(sex==0){
    //             $("#nor_sex").text("男/");
    //         }else if(sex==1){
    //             $("#nor_sex").text("女/");
    //         }
    //         $("#nor_degree").text(degree+"/");
    //         $("#nor_tel").text(tel+"/");
    //         $("#nor_email").text(email);
    //         /*js修改信息*/


          
    //         $.post("t_work/editor_update",obj,function(data){
    //             data=data.trim(data);
    //             if(data=="fail"){
    //                 alert("修改失败");
    //             }
    //         },"text");
    //         $(".change_head").css("display", "none");
           
    // });
  $("#cancel").on("click",function() {
     $(".change_head").css("display", "none");
 });
    var name_flag=$("#info_name1").attr("name_flag");

    $("#check-span").on("change",function(){/*是否显示真实姓名*/
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






$("#saveE").on('click',function(){
     if ($("#mask4-work .mask-ipt").val() != "") {
       $("#add-e").submit();
    }else{
        alert("请填写完整信息");
    }
});

});
});