define(['jquery'], function(){
    var $itemContents = $('#nav .item-content');
    var i = 0;
    $itemContents.each(function(index){
        $(this).prop("index", index);
    });
    $itemContents.on('click', function(){
        $itemContents.parent().removeClass("select");
        $(this).parent().addClass("select");
        var that = this;
        $('#nav-bar-select').animate({
            marginLeft: 20 * $(that).prop("index") + "%"
        }, 500);
    });
    return {};
});