$(function() {
    var $good = $('.good');
    var $mid = $('.mid');
    var $bad = $('.bad');
    console.log($good);
    $good.on('click', function () {
        console.log(1);
        $good.addClass("sct");
        $mid.removeClass("sct");
        $bad.removeClass("sct");
    })
    $mid.on('click', function () {
        $mid.addClass("sct");
        $good.removeClass("sct");
        $bad.removeClass("sct");
    })
    $bad.on('click', function () {
            $mid.removeClass("sct");
            $good.removeClass("sct");
            $bad.addClass("sct");
        }
    )
})

