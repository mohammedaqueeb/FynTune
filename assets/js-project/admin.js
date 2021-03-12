function QuizManage() {

    $('#QuizForm').parsley().validate();
    if ($('#QuizForm').parsley().isValid()) {

        $.ajax({
            url: base_url + 'Auth/QuizValidate',
            method: 'POST',
            dataType: "json",
            data: {
                FullName: $('#FullName').val(),
                MobileNo: $('#EmailAddress').val(),
                EmailAddress: $('#MobileNo').val()
            },
            cache: false,
            timeout: 600000,
            beforeSend: function () {
                $('#Submitbtn').attr('disabled', 'disabled');
            },
            success: function (result) {

                if (parseInt(result.HasError)) {

                    $('#Submitbtn').removeAttr('disabled');
                    Swal.fire('Error!', result.Message, 'error');

                } else {

                    if (result[0].ID > 0) {
                        
                        window.location.href = base_url + 'Quiz/QuizQuestion';

                    } else {

                        Swal.fire('Error!', result[0].ResponseMessage, 'error');
                        $('#Submitbtn').removeAttr('disabled');
                    }

                }
            },
            error: function (jqXHR, exception) {
                console.log(jqXHR);
            }
        });
    }
}
