define(['jquery'], function($){
    $(function(){
    //header下拉菜单
        $('.nav .dropdown').hover(function(){
            $('.dropdown .down-menu').stop().fadeIn();
        },function(){
            $('.dropdown .down-menu').stop().fadeOut();
        });
        $('.nav .interview').hover(function(){
            $('.nav .interview .down-menu').stop().fadeIn();
        },function(){
            $('.nav .interview .down-menu').stop().fadeOut();
        });
    });
});
