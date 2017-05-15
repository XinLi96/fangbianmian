require.config({　　　　
            baseUrl: "assets",
    　　　　paths: {　　　　　　
                "jquery": "js/jquery",
        　　　　"bootstrap": "lib/bootstrap/js/bootstrap.min",
        　　　　"header": "js/header",
                "laydate": "js/laydate",
                "email": "js/email",
              
        　　
    }　　
});
require(['jquery', 'header', 'laydate', 'email'], function($, _, _, email) {

$(function(){
    var $studentList = $('.student .student-list');
    var $companyList = $('.company .company-list ');
    var $studentWidth = $('.student .student-list li').width() + 58;
    var $companyWidth = $('.company .company-list li').width() + 38;
    var $num = ($('.student .student-list').children('li').length)/2-1;
    var $left = 0;
    var isMoving=false;
    var $resume = $('.student .student-list li');
    //学员轮播
    $('.student .prev').on('click', function () {
        if(!isMoving){
            isMoving=true;
            $left = $studentList.position().left;

            if($left > (-$studentWidth*($num+1))){
                $studentList.stop().animate({
                    "left": "-=" + $studentWidth + "px"
                },300,function(){
                    isMoving=false;
                });
            }
            else{
                $studentList.stop().animate({
                    left:0
                },300,function(){
                    isMoving=false;
                })
            }
        }

    });
    $('.student .next').on('click',function(){
        if(!isMoving){
            isMoving=true;
            $left = $studentList.position().left;
            if($left >= 0){
                $studentList.stop().animate({
                    left:-$studentWidth*5
                },300,function(){
                    isMoving=false;
                })
            }
            else{
                $studentList.stop().animate({
                    "left": "+=" + $studentWidth + "px"
                },300,function(){
                    isMoving=false;
                });
            }
        }

    });
    //公司轮播
    $('.company .prev').on('click',function(){
        if(!isMoving){
            isMoving=true;
            $left = $companyList.position().left;
            $companyList.stop().animate({
                "left": "-=" + $companyWidth + "px"
            },500, function () {
                isMoving=false;
            });
            if($left <= (-$companyWidth*$num)){
                $companyList.stop().animate({
                    left:15
                },500, function () {
                    isMoving=false;
                });
            }
        }
    });
    $('.company .next').on('click',function(){
        if(!isMoving){
            isMoving=true;
            $left = $companyList.position().left;
            if($left >= 0){
                $companyList.stop().animate({
                    left:-$companyWidth*5 + 15
                },500, function () {
                    isMoving=false;
                })
            }
            else{
                $companyList.stop().animate({
                    "left" : "+=" + $companyWidth + "px"
                },500, function () {
                    isMoving=false;
                });
            }
        }
    });
    //学生简介
    $resume.hover(function(){
        $(this).find('.resume').stop().fadeIn();
    }, function () {
        $(this).find('.resume').stop().fadeOut();
    });
})


});