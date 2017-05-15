/**
 * Created by apple on 16/12/30.
 */

require.config({
    baseUrl: "assets",
    paths: {
        "jquery": "js/jquery",
        "bootstrap": "lib/bootstrap/js/bootstrap.min",
        "title":"mobile/js/title"
    }
});
require(['jquery', 'bootstrap', "title"], function($, _, _) {
$(function(){
    /*响应式*/
    var $liWidth= $(".teacher-li").width();

    $(".teacher-li").height($liWidth*1.3);
    $(".teacher-li-first").height($liWidth*1.3);
    $(".teacher-li-first img").height($liWidth*1.3);
    $(".teacher-li img").height($(".teacher-li").height()*0.84);
    $(".li-p").height($(".teacher-li").height()*0.16);

    var $ipt=$("#header-ipt");
    var $serimg=$("#search-img");
    $serimg.on("click",function(){
    var $val=$ipt.val();
        if($ipt.val()=="搜索导师/内推/公司..."){
            $ipt.val("");
        }
        else if($ipt.val()==""){
            $ipt.val("搜索导师/内推/公司...");
        }
    });
    $("#header-ipt").on("focus",function(){

        if($ipt.val()=="搜索导师/内推/公司..."){
            $ipt.val("");
        }
        else if($ipt.val()==""){
            $ipt.val("搜索导师/内推/公司...");
        }
       
    });
    $("#header-ipt").on("blur",function(){

        if($ipt.val()==""){
            $ipt.val("搜索导师/内推/公司...");
        }

    });
    // 轮播图
    var $bannerWidth=$("#banner").width();
    $("#banner").height($bannerWidth*0.43);
    var bodyWidth=document.body.clientWidth;
    var $imgs=$("#imgs img");
    var $imgDiv=$("#imgs");
    $imgDiv.append($imgs.eq(0).clone());
    console.log($imgs.length);
    var $imgs=$("#imgs img");
    console.log($imgs.length);
    $imgs.width(bodyWidth);
    $imgs.height($bannerWidth*0.43);
    $imgDiv.width(bodyWidth*5);
    var $index=0;
    var $lis=$(".tab-li");

    $lis.on("click",function () {
        var $index=$(this).index();
        changeImg($index);

    });
    function changeImg($idx) {
        $liIdx=($idx==$lis.length ? 0 :$idx);
        $lis.eq($liIdx).addClass("selected").siblings("li").removeClass("selected");
        $imgDiv.stop().animate({
            left:-$idx*$imgs.eq(0).width()
        },500);
    }
    var timer=setInterval(function () {
        $index++;
        console.log($index);
        if($index==$imgs.length){
            $index=1;
            $imgDiv.css("left","0");
        }
        changeImg($index);
    },1000);
    $("#banner").on("mouseover",function () {
        clearInterval(timer);
    });
    $("#banner").on("mouseout",function () {
        clearInterval(timer);
        timer=setInterval(function () {
            $index++;
            if($index==$imgs.length){
                $index=1;
                $imgDiv.css("left","0");
            }
            changeImg($index);
        },1000);
    });

});
});