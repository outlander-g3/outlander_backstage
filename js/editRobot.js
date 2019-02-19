$(document).ready(function () {
    $('#a').click(function () {
        let ans = confirm('確定離開編輯頁面嗎');
        if (ans == true) {
            location.href = 'robot.php';
        }
    });
    $('.btnCancel').click(function (e) {
        e.preventDefault();
        window.location.href = 'robot.php';
    });
    $('.btnSubmit').click(function (e) {
        //預設問題跟第一個回答不能是空值
        e.preventDefault();
        if ($.trim($('#defaultQ').val()) == '' || $.trim($('#ans1').val()) == '') {
            alert('預設問題或答案一不可為空值');
        } else {
            $('#robotForm').submit();
        }
    });
});