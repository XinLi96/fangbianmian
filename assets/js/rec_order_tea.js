require.config({
    baseUrl: "assets",
    paths: {
        "jquery": "js/jquery",
        "bootstrap": "lib/bootstrap/js/bootstrap.min",
        "header": "js/header",
        "user_nav": "js/user_nav"
    }
});
require(["jquery",'bootstrap','header','user_nav'], function ($,_,_,_) {
    $("#iv_line").css("display","block");
    var $order = $('#search-order');
    var $val;
    var $name;
    var $id;
    var $str;
    $('#search-order .order-info').on('click', function () {
        var $recId = $(this).attr('data-id');
        $.get('rec_order/order_info',{'id':$recId}, function (data) {
            $('#myModal .data1').html(data.stu1.order_no);
            $('#myModal .data2').html(data.stu1.order_date);
            if(data.stu1.flag==1){
                $('#myModal .data10').html(data.stu2.nick_name);
                $('#myModal .data5').html(data.stu2.tel);
            }
            if(data.stu1.flag==0){
                $('#myModal .data10').html(data.stu4.nick_name);
                $('#myModal .data5').html(data.stu4.tel);
            }
            $('#myModal .data4').html(data.stu3.nick_name);
            $('#myModal .data6').html(data.stu1.company);
            $('#myModal .data7').html(data.stu1.position);
            $('#myModal .data8').html(data.stu1.post_date);
            $('#myModal .data9').html(data.stu1.end_date);
            $('#myModal .data11').html(data.stu1.money);
            $('#myModal .data12').html(data.stu1.memo);
            if(data.stu1.status==1){
                $('#myModal .data3').html('内推进行中');
            }
            else if(data.stu1.status==2){
                $('#myModal .data3').html('内推成功');
            }
            else if(data.stu1.status==3){
                $('#myModal .data3').html('申请取消中');
            }
            else if(data.stu1.status==4){
                $('#myModal .data3').html('已取消');
            }
            else if(data.stu1.status==5){
                $('#myModal .data3').html('内推过期');
            }

        },'json');
    });
    $('#search-order .resume-info').on('click', function () {
        var $recId = $(this).attr('data-id');
        $name=$(this).parent().siblings('.order-user').children('.user').html();
        $.get('rec_order/resume_info',{'recId':$recId,'name':$name}, function (data) {
            $('#consume-dialog .res1').html('求职者名称:'+data.rs1.nick_name);
            $('#consume-dialog .res2').html('男');
            $('#consume-dialog .res3').html(age(data.rs1.birth));
            if(data.rs2){
                $('#consume-dialog .res4').html(data.rs2.school);
                $('#consume-dialog .res5').html(data.rs2.degree);
                $('#consume-dialog .res6').html(data.rs2.major);
                $('#consume-dialog .res7').html(data.rs2.graduation);
            }
            if(data.rs3){
                $('#consume-dialog .res8').html(data.rs3.company);
                $('#consume-dialog .res9').html(data.rs3.position);
                $('#consume-dialog .res10').html(data.rs3.work);
            }
            if(data.rs2==null){
                $('#job-seekers-company').css({
                    'display':'none'
                });
            }
            if(data.rs3==null){
                $('#job-seekers-company').css({
                    'display':'none'
                });
            }
            if(data.rs2==null){
                $('#project-info').css({
                    'display':'none'
                });
            }
            if(data.rs3==null){
                $('#project-info').css({
                    'display':'none'
                });
            }
            if(data.rs4.flag==1){
                $('#consume-dialog .res11').html('求内推公司：'+ data.rs4.company);
                $('#consume-dialog .res12').html('求内推职位：'+ data.rs4.position);
            }
            if(data.rs4.flag==0){
                $('#consume-dialog .res11').html('被内推公司：'+ data.rs4.company);
                $('#consume-dialog .res12').html('被内推职位：'+ data.rs4.position);
            }
            $('#consume-dialog .res13').html(data.rs4.money);
        },'json');
        $('#job-seekers-company').css({
            'display':'block'
        });
        $('#project-info').css({
            'display':'block'
        });
    });

    $('#container .del-wait').on('click', function () {
        $id=$(this).attr('info');
        if(confirm("确认要删除吗")){
            $.get('rec_order/del_order_wait',{'id':$id}, function () {
                $('.'+$id).remove();
            },'json');
        }
    });//删除
    $('#container .del').on('click',function () {
        $id=$(this).parent('.row1').attr('data-id');
        $obj=$(this).parents('.box');
        if(confirm("确认要删除吗")){
            $.get('rec_order/del_order',{'id':$id}, function () {
                $obj.remove();
            },'json');
        }

    });//删除
    $('#container .restore').on('click', function () {
        $id=$(this).parent('.row1').attr('data-id');
        //$sta=$(this).parent().siblings('.col').children('.order-status');
        //var $del=$(this).siblings('.restore-second');
        //var that=this;
        console.log($(this).parent('.row1').attr('data-id'));

        $.get('rec_order/restore',{'id':$id}, function (data) {
            if(data==1){
                alert('恢复成功');
                //$sta.html('订单状态：内推进行中');
                //$(that).remove();
                //$del.remove();
                location.reload();
            }
            else{
                alert('恢复失败');
            }
        });
    });//恢复按钮
    $('#container .my-restore').on('click', function () {
        $id=$(this).parent('.row1').attr('data-id');
        $.get('rec_order/my_restore',{'id':$id}, function (data) {
            if(data >= 1){
                alert('恢复成功');
                location.reload();
            }
            else{
                alert('恢复失败');
            }
        });
    });//已关闭内推的恢复
    $('#container .help-it').on('click',function(){
        $id=$(this).parents('.row1').attr('data-id');
        $.get('rec_order/restore',{'id':$id}, function (data) {
            if(data == 1){
                alert('帮他成功');
                location.reload();
            }
            else{
                alert('帮他失败');
            }
        });
    });//帮他内推按钮
    $('#container .evaluate').on('click', function () {
        $id=$(this).parent('.row1').attr('data-id');
        $val=$id;
    });
    $('#myEvaluate .submit').on('click', function () {
        var $con = $('#myEvaluate .content').val();

        $.get('rec_order/evaluate_tea',{'content':$con,'id':$val}, function (data) {
            if(data){
                alert('评论成功');
            }
            else{
                alert('评论失败');
            }
            $('#myEvaluate .content').val("");
            $('#myEvaluate .close').trigger('click');
        });
    });//评价
    var $sta;
    var _this;
    $('#container .cancel').on('click', function () {
        $id=$(this).parent('.row1').attr('data-id');
        $val=$id;
        _this=this;
    });
    $('#btn-video-back2').on('click', function () {
        $sta=$(_this).parent().siblings('.col').children('.order-status');
        $str='<span class="order-wan del">'+'删除'+'</span>';
        var $con = $('#modal-textarea2').val();
        var $cancel=$(_this).siblings('.success');
        $.get('rec_order/cancel',{'content':$con,'id':$val}, function (data) {
            if(data==2){
                alert('申请取消成功');
                $sta.html('订单状态：已取消');
                $(_this).parent('.row1').append($str);
                $(_this).remove();
                $cancel.remove();
            }
            else{
                alert('申请取消失败');
            }
        $('#modal-textarea2').val("");
        $('#myModal-video2 .close').trigger('click');
        });
    });//确认取消按钮
    function age(strBirthday){
        var returnAge;
        var strBirthdayArr=strBirthday.split("-");
        var birthYear = strBirthdayArr[0];
        var birthMonth = strBirthdayArr[1];
        var birthDay = strBirthdayArr[2];

        d = new Date();
        var nowYear = d.getFullYear();
        var nowMonth = d.getMonth() + 1;
        var nowDay = d.getDate();

        if(nowYear == birthYear){
            returnAge = 0;//同年 则为0岁
        }
        else{
            var ageDiff = nowYear - birthYear ; //年之差
            if(ageDiff > 0){
                if(nowMonth == birthMonth) {
                    var dayDiff = nowDay - birthDay;//日之差
                    if(dayDiff < 0)
                    {
                        returnAge = ageDiff - 1;
                    }
                    else
                    {
                        returnAge = ageDiff ;
                    }
                }
                else
                {
                    var monthDiff = nowMonth - birthMonth;//月之差
                    if(monthDiff < 0)
                    {
                        returnAge = ageDiff - 1;
                    }
                    else
                    {
                        returnAge = ageDiff ;
                    }
                }
            }
            else
            {
                returnAge = -1;//返回-1 表示出生日期输入错误 晚于今天
            }
        }
        return returnAge;//返回周岁年龄
    }
});