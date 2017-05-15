require.config({
    baseUrl: "assets",
    paths: {
        "jquery": "js/jquery",
        "title":"mobile/js/title"
    }
});
require(['jquery', 'title'], function($, _){
    $(function(){
        var $payTypeItems = $('#pay-info .wrapper .pay-type-item');
        $payTypeItems.on('click', function(){
            $payTypeItems.removeClass('select');
            $(this).addClass('select');
        });
    });
});
