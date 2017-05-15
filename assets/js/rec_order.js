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
    var $name;
    var $id;
    var $str;
    var $sta;
    var $val;
    var $cancel;
    $('#search-order .order-info').on('click', function () {
        var $recId = $(this).attr('data-id');
        $.get('rec_order/order_info',{'id':$recId}, function (data) {
            $('#myModal .data1').html(data.stu1.order_no);
            $('#myModal .data2').html(data.stu1.order_date);
            if(data.stu1.flag==1){
                $('#myModal .data4').html(data.stu4.nick_name);
                $('#myModal .data5').html(data.stu4.tel);
            }
            if(data.stu1.flag==0){
                $('#myModal .data4').html(data.stu2.nick_name);
                $('#myModal .data5').html(data.stu2.tel);
            }
            $('#myModal .data6').html(data.stu1.company);
            $('#myModal .data7').html(data.stu1.position);
            $('#myModal .data8').html(data.stu1.post_date);
            $('#myModal .data9').html(data.stu1.end_date);
            $('#myModal .data10').html(data.stu3.nick_name);
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
    });//订单弹层
    $('#search-order .resume-info').on('click', function () {
        var $recId = $(this).attr('data-id');
        $name=$(this).parent().siblings('.order-user').children('.user').html();
        $.get('rec_order/resume_info',{'recId':$recId,'name':$name}, function (data) {
            $('#consume-dialog .res1').html('求职者名称:'+data.rs1.nick_name);
            $('#consume-dialog .res2').html('男');
            $('#consume-dialog .res3').html(age(data.rs1.birth));
            if(data.rs2){
                for(var i=0;i<data.rs2.length;i++){
                    $('#consume-dialog .res4').html(data.rs2[i].school);
                    $('#consume-dialog .res5').html(data.rs2[i].degree);
                    $('#consume-dialog .res6').html(data.rs2[i].major);
                    $('#consume-dialog .res7').html(data.rs2[i].graduation);
                }

            }
            if(data.rs3){
                for(var i=0;i<data.rs3.length;i++){
                    $('#consume-dialog .res8').html(data.rs3[i].company);
                    $('#consume-dialog .res9').html(data.rs3[i].position);
                    $('#consume-dialog .res10').html(data.rs3[i].work);
                }

            }
            if(data.rs2==''){
                $('#job-seekers-company').css({
                    'display':'none'
                });
                $('#project-info').css({
                    'display':'none'
                });
            }
            if(data.rs3==''){
                $('#job-seekers-company').css({
                    'display':'none'
                });
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
    });//简历弹层
    $('#container .del-wait').on('click', function () {
        $id=$(this).attr('info');
        if(confirm("确认要删除吗")){
            $.get('rec_order/del_order_wait',{'id':$id}, function (data) {
                $('.'+$id).remove();
            });
        }

    });//删除
    $('#container .del').on('click',function () {
        var $id=$(this).parent('.row1').attr('data-id');
        var $obj=$(this).parents('.box');
        if(confirm("确认要删除吗")){
            $.get('rec_order/del_order',{'id':$id}, function (data) {
                $obj.remove();
            });
        }
    });//删除

    $('#container .restore').on('click', function () {
        $id=$(this).parent('.row1').attr('data-id');
        //$str='<span class="order-help1 apply">'+'申请取消'+'</span>'+
        //'<span class="order-help2 success">'+'确认成功'+'</span>';
        //$sta=$(this).parent().siblings('.col').children('.order-status');
        //var $del=$(this).siblings('.restore-second');
        //var that=this;
        console.log($id);
        $.get('rec_order/restore',{'id':$id}, function (data) {
            if(data==1){
                alert('恢复成功');
                //$sta.html('订单状态：内推进行中');
                //$(that).parent('.row1').append($str);
                //$(that).remove();
                //$del.remove();
                location.reload();
            }
            else{
                alert('恢复失败');
            }
        });
    });//恢复按钮
    $('#container .evaluate').on('click', function () {
        $id=$(this).parent('.row1').attr('data-id');
        $val=$id;
    });
    $('#myEvaluate .submit').on('click', function () {
        var $con = $('#myEvaluate .content').val();
        $.get('rec_order/evaluate_stu',{'content':$con,'id':$val}, function (data) {
            if(data){
                alert('评论成功');
            }
            else{
                alert('评论失败');
            }
            $('#myEvaluate .content').val("");
            $('#myEvaluate .close').trigger('click');
        });
    });//评论
    $('#container .cancel').on('click', function (data) {
        $id=$(this).parent('.row1').attr('data-id');
        //var that=this;
        //$str='<span class="order-help1 apply">'+'申请取消'+'</span>'+
        //    '<span class="order-help2 success">'+'确认成功'+'</span>';
        //$sta=$(this).parent().siblings('.col').children('.order-status');
        $.get('rec_order/restore',{'id':$id}, function (data) {
            if(data==1){
                alert('取消成功');
                //$sta.html('订单状态：内推进行中');
                //$(that).parent('.row1').append($str);
                //$(that).remove();
                location.reload();
            }
            else{
                alert('取消失败');
            }
        });
    });//取消申请取消
    $('.apply').on('click', function () {
        $id=$(this).parent('.row1').attr('data-id');
        //$str='<span class="order-wan cancel">'+'取消'+'</span>';
        //$sta=$(this).parent().siblings('.col').children('.order-status');
        //var that=this;
        //$cancel=$(this).siblings('.success');
        $.get('rec_order/apply',{'id':$id}, function (data) {
            if(data==1){
                alert('申请取消成功');
                //$sta.html('订单状态：申请取消中');
                //$(that).parent('.row1').append($str);
                //$(that).remove();
                //$cancel.remove();
                location.reload();
            }
            else{
                alert('申请取消失败');
            }
        });
    });//申请取消按钮
    $('.success').on('click', function () {
        $id=$(this).parent('.row1').attr('data-id');
        //$str='<span data-toggle="modal" data-target="#myEvaluate" class="order-wan evaluate">'+'评价导师'+'</span>';
        //$sta=$(this).parent().siblings('.col').children('.order-status');
        //var that=this;
        //$cancel=$(this).siblings('.apply');
        $.get('rec_order/success',{'id':$id}, function (data) {
            if(data==1){
                alert('内推成功');
                //$sta.html('订单状态：内推成功');
                //$(that).parent('.row1').append($str);
                //$(that).remove();
                //$cancel.remove();
                location.reload();
            }
            else{
                alert('确认成功失败');
            }
        });
    });
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