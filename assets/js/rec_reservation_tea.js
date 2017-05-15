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
        $(".ajax_button").on("click",function(){/*订单详情*/
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
                $("#pop-tel")[0].innerHTML=data.student[0].tel;/*求职者电话*/
                $("#pop-money")[0].innerHTML=data.teacher[0].money;/*面试职位的金额*/
                $("#pop-text")[0].innerHTML=data.teacher[0].freetime;/*订单的空闲时间*/
            },"json");
        });
        $(".ajax_button2").on("click",function(){/*查看简历*/
            var user_id=$(this).attr("data_id");
            $.get("pop_div/student","user_id="+user_id,function(data){
                if(data.information.name_flag==1){
                    $("#pop_name")[0].innerHTML=data.information.real_name;/*姓名*/
                }else if(data.information.name_flag==0){
                    $("#pop_name")[0].innerHTML=data.information.nick_name;/*姓名*/
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
                    var age=thisYear-brith;
                    return age;
                }
                $("#pop_age")[0].innerHTML=getAge(data.information.birth);/*年龄*/
                $("#pop_info_intro")[0].innerHTML=data.information.introduction;/*年龄*/
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
                    $("#pop_text")[0].innerHTML=data.work.work;/*描述*/
                }else if(data.work==null){
                    $("#pop_company")[0].innerHTML="无";/*公司*/
                    $("#pop_position")[0].innerHTML="无";/*职位*/
                    $("#pop_text")[0].innerHTML="无";/*描述*/
                }
            },"json");
        });



        /*预约面试*/
        $(".order-jie").on("click",function(){
            var order_id=$(this).attr("order_id");/*订单ID*/
            var obj={
                order_id:order_id
            };
            $.post("t_iv_order/change_status",obj,function(data){
                data=data.trim();
                if(data=="successful"){
                    alert("确认成功");
                    location.reload();
                }
            },"text");
        });

        /*面试完成*/
        $(".order-jie2").on("click",function(){
            $("#btn-video-back3").attr("order_id",$(this).attr("order_id"));/*取消预约的order_id给提交的order_id*/
        });
        $("#btn-video-back3").on("click",function(){
            for(var i=0;i<$("input[name='pass']").length;i++){
                if($("input[name=pass]")[i].checked){
                    var result=$($("input[name='pass']")[i]).val();
                }
            }
            var value=$("#modal-textarea").val();
            $("#modal-textarea").val("");/*因为共用，要清空*/
            var order_id=$(this).attr("order_id");/*订单ID*/
            var obj={
                result:result,
                value:value,
                order_id:order_id
            };
            $.post("t_iv_order/change_comment2",obj,function(data){
                data=data.trim();
                if(data=="successful"){
                    alert("提交成功");
                    location.reload();
                }
            },"text");
        });

        /*已完成面试查看评价*/
        $(".order-shangchuan").on("click",function(){
            var order_id=$(this).attr("order_id");/*订单ID*/
            var obj={
                order_id:order_id
            };
            $.post("t_iv_order/select_comment2",obj,function(data){
                $("#user_iv_evaluate").text(data.user_iv_evaluate);
            },"json");
        });


        /*已取消面试删除*/
        $(".order-offer3").on("click",function(){
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


        /*确认取消面试*/
        $(".order-qx").on("click",function(){
            var order_id=$(this).attr("order_id");/*订单ID*/
            var obj={
                order_id:order_id
            };
            $.post("t_iv_order/change_status2",obj,function(data){
                data=data.trim();
                if(data=="successful"){
                    alert("取消成功");
                    location.reload();
                }
            },"text");
        });



        /*已取消面试删除*/
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
        
    });
});
/*马赫男结束*/