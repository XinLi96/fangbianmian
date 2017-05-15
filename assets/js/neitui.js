/**
 * Created by 美婷 on 2016/12/11.
 */
window.onload=function(){
    var getYs5=document.getElementsByClassName("ys5");
    var getRightbottomleft=document.getElementById("right-bottom-left");



    getRightbottomleft.onclick=function(){
        alert("已成功收藏");
    }



    for(var i=0;i<getYs5.length;i++){
        getYs5[i].id=i;

        getYs5[i].onclick=function(){
            for(var j=0;j<getYs5.length;j++){
                getYs5[j].style.borderColor="#AAA"
            }
            getYs5[this.id].style.borderColr="#9F9";
        }
    }












}