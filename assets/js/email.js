/**
 * Created by Administrator on 2016/12/21 0021.
 */
　define(['jquery'], function(em){

	 var email = function (em){ 
			       var myreg = /^([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/; 
			       if(!myreg.test(em)) 
			       { 
			           return false; 
			       }else{
			        	return true;

			  		 } 
	   			} ;
	   	return {
　　　　　　email : email
　　　　};








　
});
