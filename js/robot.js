$(document).ready(function () {

    $('.tdEdit').click(function () {
        //進入編輯頁 但要先傳送好qsNo
        let qsNo = $(this).closest('tr').children('input[type="hidden"]').val();
        // alert(qsNo);
        // alert('有');
        $('form[id="qsNo' + qsNo + '"]').submit();
    });
    $('.tdDelete').click(function () {
        //先跳窗是否刪除
        //是的話刪除
        //進入編輯頁 但要先傳送好qsNo
        let qsNo = $(this).closest('tr').children('input[type="hidden"]').val();
        let ans = confirm('確定刪除編號 ' + qsNo + " 的問題嗎");
        if (ans == true) {
            $.ajax({
                type: 'post',
                url: 'deleteRobot.php',
                data: "qsNo=" + qsNo,
                success: function (data) {
                    if (data == 'success') {
                        alert('成功刪除');
                        $('#itineraryType tr[class="qsNo' + qsNo + '"]').remove();
                    }
                }
            });
        }

    });
});
