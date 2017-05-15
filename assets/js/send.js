/**
 * Created by lixin on 2017/1/4.
 */
require.config({
    baseUrl: "assets",
    paths: {
        "jquery": "js/jquery",
        "header": "js/header",
        "laydate": "js/laydate",
        "company": "js/company"
    }
});
require(['jquery', 'header','laydate','company'], function($, _, _, _,company) {
    setTimeout(function () {
        laydate.skin('molv'); //切换皮肤，请查看skins下面皮肤库
        laydate({
            elem: '#demo'
        }); //绑定元素
    })
    var $com = $('#com');
    $com.on('blur',function () {
        var status = $com.val();
        if(!status){
            $('.company').addClass('glyphicon glyphicon-remove');
        }else{
            $('.company').removeClass('glyphicon glyphicon-remove');
            $('.company').html('');
        }
    });
    var $pos = $('#pos');
    $pos.on('blur',function () {
        var status = $pos.val();
        if(!status){
            $('.position').addClass('glyphicon glyphicon-remove');
        }else{
            $('.position').removeClass('glyphicon glyphicon-remove');
            $('.position').html('');
        }
    });
    var $mon = $('#mon');
    $mon.on('blur',function () {
        var status = $mon.val();
        if(!status){
            $('.money').addClass('glyphicon glyphicon-remove');
        }else{
            $('.money').removeClass('glyphicon glyphicon-remove');
            $('.money').html('');
        }
    });
    var $demo = $('#demo');
    $demo.on('blur',function () {
        var status = $demo.val();
        if(!status){
            $('.time').addClass('glyphicon glyphicon-remove');
        }else{
            $('.time').removeClass('glyphicon glyphicon-remove');
            $('.time').html('');
        }
    });
    //公司输入框
    var settings = {
        obj:'#com',
    };
    company.list(settings);
    //公司输入框
});