/**
 * Created by Administrator on 2016/12/21 0021.
 */
　define(['jquery'], function(mobile){
	 var tel = function (mobile){ 
			       var myreg = /^1([3][0-9]{1}|[8][0-9]{1}|[5][0-3]{1}|[5][5-9]{1}|45|47|76|77|78)[0-9]{8}$/; 
			       if(mobile.length!=11 || !myreg.test(mobile)) 
			       { 
			           return false; 
			       }else{
			        	return true;

			  		 } 
	   			} ;
	   	return {
　　　　　　tel : tel
　　　　};
});


