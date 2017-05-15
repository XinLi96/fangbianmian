require.config({　　　　
	baseUrl: "assets",
	　　　　paths: {　　　　　　
				"jquery": "js/jquery",
		　　　　"bootstrap": "lib/bootstrap/js/bootstrap.min",
		　　　　"header": "js/header",
				"laydate": "js/laydate",
				"email": "js/email",
				"pic": "js/pic",
				"company": "js/company"
		　　
	}　　
});
require(['jquery', 'header', 'laydate', 'email','pic','company'], function($, _, _, email, _,company) {
	$(function(){
	setTimeout(function() {
	laydate.skin('molv'); //切换皮肤，请查看skins下面皮肤库
	laydate({
		elem: '#demo'
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
	$('#demo').on('focus',function(){
		$(this).next('.tip').hide();

	});
	$('#img1').on('click',function(){
		$('.upload').hide();
	});
	// 公司输入框
	var settings = {
		obj:'#company',
	};
	company.list(settings);
	//如果自行输入公司的input/name名叫company2
	//表单验证的判断条件是$('.tip2').is(':hidden')&&$('#company2 input').val() != ''
	// 公司输入框结束






















	$('#sub').on('click', function() {
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
		// if ($('#company2 input').val() == '') {
		// 	$('#company .tip').show();
		// }
	
		if (document.getElementById("check").checked == true) {
            	$('#flag').val('1');
            }
 		if ($('#company2 input').val() != '' && $('.tip2').is(':hidden') && !$('.tips').hasClass("glyphicon glyphicon-remove")  && $('#nname').val() != '' && $('#name').val() != '' && $('#demo').val() != '' && $('#company').val() != '' && $('#position').val() != '' && $('#imgInfo1').attr('src') != 'assets/img_upload.jpg') {
            $('#become').submit();
                
            }
	});
	






	});
	






});