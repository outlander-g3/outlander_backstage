$(document).ready(function () {
    $('.delete').click(function (e) {
        e.preventDefault();

        let rptNo = $(this).closest('tr').attr('id').replace('rptNo', '');
        let result = confirm('是否屏蔽該日誌？');
        let txt = $(this).closest('tr').children('.result');
        $.ajax({
            type: 'post',
            url: 'result.php',
            data: 'result=' + result + '&rptNo=' + rptNo,
            success: function (data) {

                if (result == true) {
                    alert('已屏蔽該日誌');
                    txt.html('屏蔽');
                }
                else {
                    alert('該日誌未受屏蔽');
                    txt.html('不屏蔽');
                }
            },
        });
    });

});