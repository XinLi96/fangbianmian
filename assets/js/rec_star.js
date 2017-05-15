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
$(function(){
    $("#left").on("click",function(){
        if($("#content")[0].offsetLeft<0){

            $("#content").animate({left:"+=226"},500,function(){
                console.log("左:"+$("#content")[0].offsetLeft);
            });

        }
    });

    $("#right").on("click",function(){
        if($("#content")[0].offsetLeft>-1130){

            $("#content").animate({left:"-=226"},500,function(){
                console.log("右:"+$("#content")[0].offsetLeft);
            });

        }

    });
});
});