$(function() {
    var $checkbtn = $('.wrapper .check-btn');
    var $teacher = $('.wrapper .teacher');
    var $student = $('.wrapper .student');

    $teacher.on('click', function () {
        $teacher.addClass("check");
        $student.removeClass("check");
        $('#status').val('1');
    })
    $student.on('click', function () {
        $student.addClass("check");
        $teacher.removeClass("check");
        $('#status').val('0');

    })
})
