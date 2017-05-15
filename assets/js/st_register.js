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
require(['jquery', 'header', 'laydate', 'email','pic'], function($, _, _, email, _) {
	setTimeout(function() {
		laydate.skin('molv'); //切换皮肤，请查看skins下面皮肤库
		laydate({
			elem: '#sdemo'
		}); //绑定元素
	}, 0);
	//邮箱验证码
	var $email = $('#email');
	$email.on('blur', function() {
		var status = email.email($email.val());
		if (!status) {
			$('.email').addClass('glyphicon glyphicon-remove');

		}
	});
	$email.bind('input propertychange', function() {
		var status = email.email($email.val());
		if (status) {
			$('.email').removeClass('glyphicon glyphicon-remove');
		}
	});
	var $empty = $('.empty');
	$empty.each(function() {
		$(this).bind('input propertychange', function() {
			if ($(this).val() != '') {
				$(this).next('.tip').hide();
			}
		
		});

	});
	$('#sdemo').on('focus',function(){
		$(this).next('.tip').hide();

	});
	$('#sub').on('click', function() {
		$('.tip').hide();
		$empty.each(function() {
			if ($(this).val() == '') {
				$(this).next('.tip').show();
			}
		});
		if ($('#imgInfo1').attr('src') == 'assets/img_upload.jpg') {
			$('.tip1').show();
		}
		// for (var i = 0; i < $empty.length; i++) {
		// 	// console.log($empty[i].addClass('111'));
		// 	// if ($empty[i].val() == "") {
		// 	// 	$empty[i].next('.tip').show();
		// 	// }
		// }
		
		if (document.getElementById("check").checked == true) {
            	$('#flag').val('1');
            }
 		if ($('#imgInfo1').attr('src') != 'assets/img_upload.jpg' && !$('.tips').hasClass("glyphicon glyphicon-remove")  && $('#name').val() != ''  && $('#email').val() != '' && $('#nname').val() != '' && $('#demo').val() != '' && $('#email').val() != '' && $('#degree').val() != '' && $('#mobile').val() != '' ) {
            $('#become').submit();
                
            }







	});
	











});