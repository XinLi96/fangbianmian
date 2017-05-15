/**
 * Created by 美婷 on 2016/12/11.
 */
require.config({
    baseUrl: "assets",
    paths: {
        "jquery": "js/jquery",
        "bootstrap": "lib/bootstrap/js/bootstrap.min",
        "header": "js/header",
        "laydate": "js/laydate",
        "email": "js/email",
        "pic": "js/pic"

    }
});
require(['jquery','bootstrap','header'],function($,_,_){
        var getYs5=document.getElementsByClassName("ys5");
        var getRightbottomleft=document.getElementById("right-bottom-left");

        for(var i=0;i<getYs5.length;i++){
            getYs5[i].id=i;
            getYs5[i].onclick=function(){
                for(var j=0;j<getYs5.length;j++){
                    getYs5[j].style.borderColor="#AAA";
                }
                getYs5[this.id].style.borderColor="#9F9";
                $("#form-hid").val($(getYs5[this.id]).text());
            }
        }
/*马赫男开始*/
        $(".ys5").on("click",function(){
            $($(".ys1")[0]).val($(this).attr("money"));
        });

        $("#iv_detail").on("click",function(){
            $("#iv_detail2").removeClass("active");
            $("#iv_detail").addClass("active");
            $("#teacher-desc").css("display","block");
            $("#student-eval").css("display","none");
        });
        $("#iv_detail2").on("click",function(){
            $("#iv_detail2").addClass("active");
            $("#iv_detail").removeClass("active");
            $("#student-eval").css("display","block");
            $("#teacher-desc").css("display","none");
        });

        $(".type").on("change",function(){
            var type=$(this).val();/*评论的种类*/
            var hid=$("#hid").val();/*该导师的ID*/
            $.get("search_teacher/type",{"type":type,"hid":hid},function(data){
                if(data[0]==null){
                    $("#comment").empty();
                }else if(data[0]!=null){
                    $("#comment").empty();
                    for(var i=0;i<data.length;i++){
                        var odiv=$('<div class="underline">'+
                            '<div class="item">'+
                            '<div class="row">'+
                            '<div class="left col-lg-8" >'+
                            '<h5>'+data[i].user_iv_evaluate+'</h5>'+
                            '</div>'+
                            '<div class="right col-lg-4" >'+
                            '<div class="name_iv">'+data[i].real_name+'</div>'+
                            '<div class="data_iv">'+data[i].finish_date+'</div>'+
                            '</div>'+
                            '</div>'+
                            '</div>'+
                            '</div>');
                        $("#comment").append(odiv);
                    }
                }
            },"json");
        });

        var user_status=$("#right-bottom").attr("user_status");
        if(user_status==1){
            $("#right-bottom-left").on("click",function(){
                alert("导师不可以执行该操作");
            });
            $("#right-bottom-right").on("click",function(){
                alert("导师不可以执行该操作");
            });
        }else if(user_status==2){
            $("#right-bottom-left").on("click",function(){
                alert("请登陆");
            });
            $("#right-bottom-right").on("click",function(){
                alert("请登陆");
                return false;
            });
        }

        for(var i=0;i<$(".ys5").length;i++){
            if($("#last-money").val()==$($(".ys5")[i]).attr("money")){
                $($(".ys5")[i]).css("border-color","#9F9");
                $("#form-hid").val($($(".ys5")[i]).text());
                break;
            }
        }/*默认选中最低价格对应的职位*/


/*马赫男结束*/




});
