define(["jquery"],function($){
		var $bar = $('.bar');
		$bar.on('click',function(){
			$('.line').hide();
			$(this).find('.line').show();
			var $second = $(this).next('.second-level');
			$second.toggle();
			$second.siblings(".second-level").css("display", "none");
		});

		var choose=$("#select_one").attr("choose");
		if(choose==6){
			$(".select0").addClass("click");
			$('.selected').addClass('click');
		}else if(choose==1){
			$(".select1").addClass("click");
			$('.selected1').addClass('click');
			$('.selected').removeClass('click');
		}else if(choose==2){
			$(".select2").addClass("click");
			$('.selected2').addClass('click');
			$('.selected').removeClass('click');
		}else if(choose==4){
			$(".select4").addClass("click");
			$('.selected4').addClass('click');
			$('.selected').removeClass('click');
		}else if(choose==5){
			$(".select").addClass("click");
			$('.selected5').addClass('click');
			$('.selected').removeClass('click');
		}else if(choose==3){
			$('.selected3').addClass('click');
			$('.selected').removeClass('click');
		}else if(choose==''){
			$('.selected').addClass('click');
			//$('.selected').removeClass('click');
		}else if(choose==0){
			$('.select').addClass('click');
			$('.selected0').addClass('click');
			$('.selected').removeClass('click');
		}

});
