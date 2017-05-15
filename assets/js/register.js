/**
 * Created by Administrator on 2016/12/11.
 */
require.config({　　　　
            baseUrl: "assets",
    　　　　paths: {　　　　　　
                "jquery": "js/jquery",
    　　　　　　"bootstrap": "lib/bootstrap/js/bootstrap.min",
    　　　　　　"header": "js/header",
                "tel": "js/tel"　　　　
    }　　
});
require(['jquery', 'bootstrap', 'header', 'tel'], function($, _, _,tel) {

    $(function() {
        var $checkbtn = $('.message .check-btn');
        var $teacher = $('.message .teacher');
        var $student = $('.message .student');

        $teacher.on('click', function() {
            $teacher.addClass("check");
            $student.removeClass("check");
            $('#status').val('1');
        })
        $student.on('click', function() {
                $student.addClass("check");
                $teacher.removeClass("check");
                $('#status').val('0');

            })
            //手机号码验证
        var $mobile = $('#mobile');
        $mobile.on('blur', function() {
            var status = tel.tel($mobile.val());
            if (status) {
                $.post("user/reg_check", {
                    tel: $mobile.val(),
                }, function(data) {
                    var newData = data.replace(/\s/g, '');

                    if (newData == 'have') {
                        $('.mobile').html('账户已存在*');
                    }
                    if (newData == 'none') {
                        $('.mobile').html('');
                    }
                }, 'text');
            } else {
                $('.mobile').html('');
                $('.mobile').addClass('glyphicon glyphicon-remove');

            }
        });

        $mobile.bind('input propertychange', function() {
              $('.mobile').html('');
            var status = tel.tel($mobile.val());
            if (status) {
                $('.mobile').removeClass('glyphicon glyphicon-remove');
            }
        });

        //密码验证
        var $pass = $('#pass');
        $pass.on('blur', function() {
            var mypass = /^(?=.*[a-zA-Z])(?=.*\d)[a-zA-Z\d]{6,12}$/;
            if (!mypass.test($pass.val())) {
                $('.pass').addClass('glyphicon glyphicon-remove');
            }
            if ($cpass.val() != '') {
                $('.cpass').addClass('glyphicon glyphicon-remove');
            }
            if ($cpass.val() == $pass.val()) {
                $('.cpass').removeClass('glyphicon glyphicon-remove');
            }
        });
        $pass.bind('input propertychange', function() {
            var mypass = /^(?=.*[a-zA-Z])(?=.*\d)[a-zA-Z\d]{6,10}$/;
            if (mypass.test($pass.val())) {
                $('.pass').removeClass('glyphicon glyphicon-remove');
            }
            if ($cpass.val() == $pass.val()) {
                $('.cpass').removeClass('glyphicon glyphicon-remove');
            }


        });
        // 确认密码验证
        var $cpass = $('#cpass');
        $cpass.on('blur', function() {
            if ($cpass.val() != $pass.val()) {
                $('.cpass').addClass('glyphicon glyphicon-remove');
            }

        });
        $cpass.bind('input propertychange', function() {
            if ($cpass.val() == $pass.val()) {
                $('.cpass').removeClass('glyphicon glyphicon-remove');
            }

        });
        $('#btn-send').on('click', function() {
            var status = $('#status').val();
            if (document.getElementById("check").checked == true && !$('.tips').hasClass("glyphicon glyphicon-remove") && $('.mobile').html() == '' && $('#pass').val() != '' && $('#cpass').val() != '' && $('#mobile').val() != '') {
                $('#reg').attr("action", "user/do_reg?status=" + status).submit();
            }
        })



    });


});