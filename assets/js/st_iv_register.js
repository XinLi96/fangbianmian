require.config({　　　　
	baseUrl: "assets",
	　　　　paths: {　　　　　　
				"jquery": "js/jquery",
		　　　　"header": "js/header",
				"pic": "js/pic"
		　　
	}　　
});
require(['jquery', 'header','pic'], function($, _, _) {
	
	var $empty = $('.empty');
	$empty.each(function() {
		$(this).bind('input propertychange', function() {
			if ($(this).val() != '') {
				$(this).next('.tip').hide();
			}
		
		});

	});
	
	$('#img1').on('click',function(){
		$('.upload').hide();

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
		
		
 		if (!$('.tips').hasClass("glyphicon glyphicon-remove") && $('#company').val() != '' && $('#position').val() != '' && $('#imgInfo1').attr('src') != 'assets/img_upload.jpg') {
           
            $('#become').submit();
                
            }







	});
	











});