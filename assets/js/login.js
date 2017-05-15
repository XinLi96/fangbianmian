require.config({　　　　
	baseUrl: "assets",
	　　　　paths: {　　　　　　
				"jquery": "js/jquery",
				　"header": "js/header",
                "tel": "js/tel"　　　　

		　　
	}　　
});
require(['jquery', 'header', 'tel'], function($, _,tel) {
	$('.glyphicon-repeat').on('click',function(){
        console.log(11);
		$('#captcha').attr("src","user/code");
	});
	 var $mobile = $('#mobile');
	$mobile.on('blur', function() {
            var status = tel.tel($mobile.val());
            if (status) {
                $.post("user/reg_check", {
                    tel: $mobile.val(),
                }, function(data) {
                    var newData = data.replace(/\s/g, '');
                    if (newData == 'have') {
                        $('.mobile').html('');
                    }
                    if (newData == 'none') {
                    	$('.mobile').html('该用户不存在*');
                        
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
     $('#cap').on('focus',function(){
         $('.cap').html('');
     })
     $('#login').on('click',function(){
        if ($mobile.val() != '') {
             $.post("user/captcha", {
                    captcha: $('#cap').val(),
                }, function(data) {
                    if (data == 'right') {
                        if(!$('.tips').hasClass("glyphicon glyphicon-remove") && $('.mobile').html() == '' && $('#mobile').val() != ''){
                            $('#log').submit();
                        }
                    }
                    if (data == 'wrong') {
                        $('.cap').html('验证码错误*');
                    }
                }, 'text');

        }
      
        
        
       
     })


});