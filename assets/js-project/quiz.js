var QuestionData = [];
var Quiz = [];

function GetQuestion() {
    $.ajax({
        url: "https://opentdb.com/api.php?amount=10",
        method: 'GET',
        dataType: "json",
        cache: false,
        timeout: 600000,
        success: function (result) {

            if (result.results.length > 0) {

                QuestionData = result.results;
                FetchQuestion(0);
            }
        },
        error: function (jqXHR, exception) {
            console.log(jqXHR);
        }
    });
}

function PushQuestion(Index) {

    var Previous = parseInt(Index) - parseInt(1);
    var Score = '';

    var InputRadio = $("input[name='radio-group" + Previous + "']:checked").val();



    if (Previous >= 0) {

        if (InputRadio != "" & typeof InputRadio !== "undefined") {

            /*alert(InputRadio);*/

            if (QuestionData[Previous].correct_answer == InputRadio) {
                Score = 10;
            } else {
                Score = 0;
            }
            Quiz.push({
                question: QuestionData[Previous].question,
                correct_answer: QuestionData[Previous].correct_answer,
                user_answer: InputRadio,
                correctQuestion: Score
            });
        }

    }

    console.log(Quiz);
    if (Index <= 9) {
        FetchQuestion(Index);
    }
    if (Index == 10) {

        $('#Submitbtn').attr('disabled', 'disabled');
        ManageResult();
    }

}

function FetchQuestion(Index) {


    var Next = parseInt(Index) + parseInt(1);
    var Previous = parseInt(Index) - parseInt(1);
    var Buttons = '';
    var Ans = '';


    if (Index <= 8) {
        Buttons = '<button type="button" class="btn btn-outline-success mr-2 mb-2 mb-md-0 Submitbtn float-right" onclick="PushQuestion(' + Next + ')"> Next <i class="btn-icon-prepend" data-feather="navigation"></i></button>';
    }
    if (Index == 9) {
        Buttons += '<button type="button" id="Submitbtn" class="btn btn-outline-success mr-2 mb-2 mb-md-0 Submitbtn float-right" onclick="PushQuestion(' + Next + ')"> Submit <i class="btn-icon-prepend" data-feather="navigation"></i></button>';
    }

    var BindData = "";


    $.each(QuestionData[Index].incorrect_answers, function (i, d) {
        var z = parseInt(i) + parseInt(2);
        Ans += '<div class="col-md-12"><input type="radio" id="q' + Index + 'ans' + z + '" name="radio-group' + Index + '" value="' + d + '"><label for="q' + Index + 'ans' + z + '">' + d + '</label></div>';

    });

    BindData += '<div id="question-' + Index + '" class="question">' +
        '<h6 class="text-right mb-3 mt-3">Q : ' + Next + '</h6>' +
        '<h6 class="text-right mb-3 mt-3">' + QuestionData[Index].category + '</h6>' +
        '<h4 class="question mb-3 mt-3" style="font-size: 20px;">' + QuestionData[Index].question + '</h4>' +
        '<form class="answer" id="answer' + Index + '"><div class="row"><div class="col-md-12">' +
        '<input type="radio" id="q' + Index + 'ans1" name="radio-group' + Index + '" value="' + QuestionData[Index].correct_answer + '" required><label for="q' + Index + 'ans1">' + QuestionData[Index].correct_answer + '</label></div>' +
        Ans +

        '</div></form>' +
        '<div style="text-align: center mt-5">' + Buttons + '</div></div>';

    $('#Mcqs').html(BindData);
}

function ManageResult() {

    var Score = 0;
    var AttemptQuestion = 0;
    var CorrectQuestion = 0;

    $.each(Quiz, function (i, d) {
        Score += parseInt(d.correctQuestion);
        if (d.correctQuestion == 10) {
            CorrectQuestion += 1;
        }
        if (d.user_answer) {
            AttemptQuestion += 1;
        }
    });


    $.ajax({
        url: base_url + 'Quiz/QuizSubmit',
        method: 'POST',
        dataType: "json",
        data: {
            TotalQuestion: 10,
            AttemptQuestion: AttemptQuestion,
            CorrectQuestion: CorrectQuestion,
            Score: Score,
            Quiz: Quiz
        },
        cache: false,
        timeout: 600000,
        success: function (result) {
            /*console.log(result);*/
            window.location = base_url + "Quiz/QuizResult?TotalQuestion=" + result.TotalQuestion + "&AttemptQuestion=" + result.AttemptQuestion + "&CorrectQuestion=" + result.CorrectQuestion + "&Score=" + result.Score + "";
        },
        error: function (jqXHR, exception) {
            console.log(jqXHR);
        }
    });
}

function FetchLeads() {

    var Date = $('#DateStart').val();
    var SplitDate = Date.split("-");

    $.ajax({
        url: base_url + 'Admin/QuizList',
        method: 'POST',
        dataType: "json",
        data: {
            DateFrom: moment(SplitDate[0]).format('YYYY-MM-DD'),
            DateTo: moment(SplitDate[1]).format('YYYY-MM-DD')
        },
        cache: false,
        timeout: 600000,
        success: function (result) {

            if (parseInt(result.HasError)) {

                Swal.fire('Error!', result.Message, 'error');

            } else {

                var inc = 1;
                var BindData = '';
                var FeedBack = '';

                $.each(result, function (i, d) {


                    BindData += '<tr>' +
                        '<td>' + inc++ + '</td>' +
                        '<td>' + d.FullName + '</td>' +
                        '<td>' + d.Email + '</td>' +
                        '<td>' + d.MobileNo + '</td>' +
                        '<td>' + d.TotalQuestion + '</td>' +
                        '<td>' + d.AttemptQuestion + '</td>' +
                        '<td>' + d.CorrectQuestion + '</td>' +
                        '<td>' + d.Score + '%</td>' +
                        '<td><a href="' + base_url + 'Admin/QuizDetailsList/' + d.QuizId + '" class="btn btn-primary ml-3 SubmitbtnSM"><i class="fa fa-eye"></i></a></td></tr>';



                });
                $('#dataTable').DataTable().destroy();
                $('#TableData').html(BindData);


                $('#dataTable').DataTable({
                    dom: 'Bfrtip',
                    buttons: [
                                'excelHtml5'
                            ]
                });

            }
        },
        error: function (jqXHR, exception) {
            console.log(jqXHR);
        }
    });
}


function FetchLeadsDetails() {

    var QuizId = (getParameterByPageName('QuizDetailsList') ? getParameterByPageName('QuizDetailsList') : 0);

    $.ajax({
        url: base_url + 'Admin/QuizDetailsList',
        method: 'POST',
        dataType: "json",
        data: {
            QuizId: QuizId
        },
        cache: false,
        timeout: 600000,
        success: function (result) {

            if (parseInt(result.HasError)) {

                Swal.fire('Error!', result.Message, 'error');

            } else {

                var inc = 1;
                var BindData = '';
                var FeedBack = '';

                $.each(result, function (i, d) {

                    BindData += '<tr>' +
                    '<td>' + inc++ + '</td>' +
                    '<td>' + d.Question + '</td>' +
                    '<td>' + d.CorrectAns + '</td>' +
                    '<td>' + d.UserAns + '</td></tr>';



                });
                $('#TableData').html(BindData);
                
                $('#FullName').html(result[0].FullName);
                $('#Email').html(result[0].Email);
                $('#MobileNo').html(result[0].MobileNo);
                $('#TotalQuestion').html(result[0].TotalQuestion);
                $('#AttemptQuestion').html(result[0].AttemptQuestion);
                $('#CorrectQuestion').html(result[0].CorrectQuestion);
                $('#Score').html(result[0].Score + "%");
                
                
            }
        },
        error: function (jqXHR, exception) {
            console.log(jqXHR);
        }
    });
}
