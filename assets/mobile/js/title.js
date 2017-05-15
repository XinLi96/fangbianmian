 define(['jquery'], function($){
   $(function () {
    var $winHeight=$(window).height();
    console.log($winHeight);
    var $moveRight=$("#side").width();
    var flag=true;
    $("#side").height($winHeight);
    $("#mask").height($winHeight);
    $("#til-right").on("click",function () {

        if(flag){
            $("body").addClass("overflow");
            $("#side").stop().show();
            $("#side").stop().animate({
                right:0
            },500);
            $("#mask").stop().show();
            flag=false;
        }else{
            $("body").removeClass("overflow");
            $("#side").stop().animate({
                right:-$moveRight +"px"
            },500,function () {
                $("#side").hide();
                $("#mask").hide();
            });
            flag=true;
        }

    });
    $("#mask").on("click",function () {
        $("body").removeClass("overflow");
        $("#side").stop().animate({
            right:-$moveRight +"px"
        },500,function () {
            $("#side").hide();
            $("#mask").hide();
        });

        flag=true;
    });
    var $isClick=true;
    $(".side-li").on("click",function () {

        $(this).find(".right-hover").stop().addClass("showed");
        $(this).siblings().find('.right-hover').stop().removeClass("showed");
        $(this).addClass("changeBack");
        $(this).siblings().removeClass("changeBack");
        if($isClick){
            $(this).next("ul").stop().slideDown("slow");
            $isClick=false;
        }else{
            $(this).next("ul").stop().slideUp("fast");
            $isClick=true;
        }


    });
    $(".side-li").on("mouseover",function () {
        $(this).find(".right-hover").stop().addClass("showed");
        $(this).siblings().find('.right-hover').stop().removeClass("showed");
    });
    
    

});
});
