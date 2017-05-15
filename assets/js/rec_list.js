/**
 * Created by lenovo on 2016/12/14.
 */
require.config({
    baseUrl: "assets",
    paths: {
        "jquery": "js/jquery",
        "bootstrap": "lib/bootstrap/js/bootstrap.min",
        "header": "js/header",
        "tel": "js/tel",
        "laydate": "js/laydate",
        "email": "js/email",
    }
});
require(['jquery', 'bootstrap', 'header', 'laydate', 'tel','email'], function($, _, _, _,tel,email) {
    setTimeout(function () {
        laydate.skin('molv'); //切换皮肤，请查看skins下面皮肤库
        laydate({
            elem: '#demo1'
        }) //绑定元素

    });
    var isMoving=false;
    $("#left").on("click",function(){
        if(!isMoving){
            isMoving=true;
            if($("#content")[0].offsetLeft<0){
                $("#content").stop().animate({left:"+=226"},1000,function(){
                    isMoving=false;
                });
            }
        }
    });

    $("#right").on("click",function(){
        if(!isMoving){
            isMoving=true;
            if($("#content")[0].offsetLeft>-1130){
                $("#content").stop().animate({left:"-=226"},1000,function(){
                    isMoving=false;
                });
            }
        }

    });
    $(".checkbox").on('click', function(){
        $(this).parent().toggleClass("glyphicon glyphicon-ok");
    });
});