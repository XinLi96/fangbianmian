/*马赫男开始*/
require.config({
    baseUrl: "assets",
    paths: {
        "jquery": "js/jquery",
        "bootstrap": "lib/bootstrap/js/bootstrap.min",
        "header": "js/header",
        "tel": "js/tel",
        "laydate": "js/laydate",
        "email": "js/email",
        "pic": "js/pic",
        "user_nav": "js/user_nav"
    }
});
require(['jquery','bootstrap','header','user_nav'],function($,_,_,_){
    $(function(){

        $("#iv_line").css("display","block");
        $(".ajax_button").on("click",function(){
            var order_id=$(this).attr("data_id");
            console.log(order_id);
            $.get("pop_div/index","order_id="+order_id,function(data){
                var status="";
                if(data.order_status.status==0){
                    status="预约面试";
                }else if(data.order_status.status==1||data.order_status.status==3){
                    status="面试进行中";
                }else if(data.order_status.status==2){
                    status="面试成功";
                }else if(data.order_status.status==4){
                    status="确认取消";
                }
                $("#pop-num")[0].innerHTML=data.student[0].order_no;/*订单编号*/
                $("#pop-time")[0].innerHTML=data.student[0].confirm_date;/*订单时间*/
                $("#pop-type")[0].innerHTML=status;/*订单状态*/
                $("#pop-tea_name")[0].innerHTML=data.teacher[0].real_name;/*导师姓名*/
                $("#pop-position")[0].innerHTML=data.teacher[0].pos_name;/*面试职位*/
                $("#pop-way")[0].innerHTML=data.teacher[0].way;/*面试方式*/
                $("#pop-stu_name")[0].innerHTML=data.student[0].real_name;/*求职者真实姓名*/
                $("#pop-tel")[0].innerHTML=data.teacher[0].tel;/*导师电话*/
                $("#pop-money")[0].innerHTML=data.teacher[0].money;/*面试职位的金额*/
                $("#pop-text")[0].innerHTML=data.teacher[0].freetime;/*导师的空闲时间*/
            },"json");
        });
        $(".ajax_button2").on("click",function(){/*查看简历*/
            var user_id=$(this).attr("data_id");
            $.get("pop_div/teacher","user_id="+user_id,function(data){
                if(data.information.name_flag==1){
                    $("#pop_name")[0].innerHTML=data.information.real_name;/*名字*/
                }else if(data.information.name_flag==0){
                    $("#pop_name")[0].innerHTML=data.information.nick_name;/*名字*/
                }

                if(data.information.sex == 0){
                    $("#pop_sex")[0].innerHTML="男";/*性别*/
                }else if(data.information.sex==1){
                    $("#pop_sex")[0].innerHTML="女";/*性别*/
                }
                function getAge(real_bir){
                    var   aDate=new   Date();
                    var   thisYear=aDate.getFullYear();
                    var brith=real_bir;
                    brith=brith.substr(0,4);
                    return thisYear-brith;
                }
                $("#pop_age")[0].innerHTML=getAge(data.information.birth);/*年龄*/
                $("#pop_info_company")[0].innerHTML=data.information.now_company;/*现任公司*/
                $("#pop_info_position")[0].innerHTML=data.information.now_duty;/*现任职位*/
                $("#pop_info_intro")[0].innerHTML=data.information.introduction;/*自我介绍*/
                if(data.edu!=null){
                    $("#pop_school")[0].innerHTML=data.edu.school;/*学校*/
                    $("#pop_degree")[0].innerHTML=data.edu.degree;/*学历*/
                    $("#pop_major")[0].innerHTML=data.edu.major;/*专业*/
                    $("#pop_graduation")[0].innerHTML=data.edu.graduation;/*毕业时间*/
                }else if(data.edu==null){
                    $("#pop_school")[0].innerHTML="无";/*学校*/
                    $("#pop_degree")[0].innerHTML="无";/*学历*/
                    $("#pop_major")[0].innerHTML="无";/*专业*/
                    $("#pop_graduation")[0].innerHTML="无";/*毕业时间*/
                }
                if(data.work!=null){
                    $("#pop_company")[0].innerHTML=data.work.company;/*公司*/
                    $("#pop_position")[0].innerHTML=data.work.position;/*职位*/
                    $("#pop_text")[0].innerHTML=data.work.worktest;/*描述*/
                }else if(data.work==null){
                    $("#pop_company")[0].innerHTML="无";/*公司*/
                    $("#pop_position")[0].innerHTML="无";/*职位*/
                    $("#pop_text")[0].innerHTML="无";/*描述*/
                }
            },"json");
        });


        
        
        /*预约面试*/
        $(".order-jie").on("click",function(){
            $("#btn-video-back").attr("order_id",$(this).attr("order_id"));/*取消预约的order_id给提交的order_id*/
        });

        $("#btn-video-back").on("click",function(){
            var value=$("#modal-textarea").val();
            $("#modal-textarea").val("");
            var order_id=$(this).attr("order_id");/*订单ID*/
            var obj={
                value:value,
                order_id:order_id
            };
            $.post("t_iv_order/change_cancel",obj,function(data){
                data=data.trim();
                if(data=="successful"){
                    location.reload();
                }
            },"text");
            
        });





        /*进行中面试*/
        $(".order-jie2").on("click",function(){
            $("#btn-video-back2").attr("order_id",$(this).attr("order_id"));/*取消预约的order_id给提交的order_id*/
        });
        $("#btn-video-back2").on("click",function(){
            var value=$("#modal-textarea2").val();
            $("#modal-textarea2").val("");
            var order_id=$(this).attr("order_id");/*订单ID*/
            var obj={
                value:value,
                order_id:order_id
            };
            $.post("t_iv_order/change_cancel",obj,function(data){
                data=data.trim();
                if(data=="successful"){
                    location.reload();
                }
            },"text");
        });




        /*已完成面试1*/
        $(".order-shangchuan").on("click",function(){
            $("#btn-video-back3").attr("order_id",$(this).attr("order_id"));/*取消预约的order_id给提交的order_id*/
        });
        $("#btn-video-back3").on("click",function(){
            var value=$("#modal-textarea3").val();
            $("#modal-textarea3").val("");
            var order_id=$(this).attr("order_id");/*订单ID*/
            var obj={
                value:value,
                order_id:order_id
            };
            $.post("t_iv_order/change_comment",obj,function(data){
                data=data.trim();
                if(data=="successful"){
                    location.reload();
                }
            },"text");
        });

        /*已完成面试2*/
        $(".order-offer").on("click",function(){
            var order_id=$(this).attr("order_id");/*订单ID*/
            var obj={
                order_id:order_id
            };
            $.post("t_iv_order/select_comment",obj,function(data){
                $("#iv_user_evaluate").text(data.iv_user_evaluate);
            },"json");
        });

        /*已完成面试3*/
        $(".order-offer2").on("click",function(){
            var order_id=$(this).attr("order_id");/*订单ID*/
            var obj={
                order_id:order_id
            };
            $.post("t_iv_order/change_deleted",obj,function(data){
                data=data.trim();
                if(data=="successful"){
                    alert("删除成功");
                    location.reload();
                }
            },"text");
        });


        /*申请取消面试*/
        $(".order-delete").on("click",function(){
            var order_id=$(this).attr("order_id");/*订单ID*/
            var obj={
                order_id:order_id
            };
            $.post("t_iv_order/change_status",obj,function(data){
                data=data.trim();
                if(data=="successful"){
                    alert("恢复成功");
                    location.reload();
                }
            },"text");
        });

        /*已取消面试*/
        $(".order-jie3").on("click",function(){
            var order_id=$(this).attr("order_id");/*订单ID*/
            var obj={
                order_id:order_id
            };
            $.post("t_iv_order/change_deleted",obj,function(data){
                data=data.trim();
                if(data=="successful"){
                    alert("删除成功");
                    location.reload();
                }
            },"text");
        });

        // var choose=$("#select_one").attr("choose");
        // if(choose==5){/*全部面试*/
        //
        // }else if(choose!=5){/*详细分类面试*/
        //
        // }
        // 查看全部订单时,点击按钮进行相应的操作后，应该改变其状态，再修改本条订单的状态和基本信息，
        // 查看详细分类的订单时，点击按钮进行相应的操作后，直接删除本条订单，因为点击别的分类会刷新页面，
        //     导致重新加载数据库，从而自动加入到相应的分类之中。
        // ajax配合location.reload()使用，减少了DOM的操作















    });
});
/*马赫男结束*/