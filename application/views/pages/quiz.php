<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quiz</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/core/core.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/sweetalert2/sweetalert2.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css">
</head>

<body class="sidebar-dark">
    <div class="main-wrapper">
        <div class="page-wrapper full-page">
            <div class="page-content d-flex align-items-center justify-content-center">

                <div class="row w-100 mx-0 auth-page">
                    <div class="col-md-8 col-xl-8 mx-auto">
                        <div class="card">
                            <div class="auth-form-wrapper px-5 py-5">
                                <a href="#" class="noble-ui-logo d-block mb-2 text-center">MCQs Test</a>
                                <div id="Mcqs">
                                    <!--<div id="question-1" class="question">
                                        <h4 class="question mb-3 mt-3">1. Which team won the toss?</h4>
                                        <form class="answer" id="answer1">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <input type="radio" id="q1ans1" name="radio-group1" value="Chennai Super Kings" required>
                                                    <label for="q1ans1">Chennai Super Kings</label>
                                                </div>
                                                <div class="col-md-12">
                                                    <input type="radio" id="q1ans2" name="radio-group1" value="Mumbai Indians">
                                                    <label for="q1ans2">Mumbai Indians</label>
                                                </div>
                                            </div>
                                        </form>
                                        <div style="text-align: center">
                                            <button type="button" class="btn btn-outline-success mr-2 mb-2 mb-md-0 Submitbtn float-right" onclick="QuizManage()"> Next <i class="btn-icon-prepend" data-feather="navigation"></i></button>
                                        </div>
                                    </div>-->
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="<?php echo base_url();?>assets/vendors/core/core.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/feather-icons/feather.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/template.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/sweetalert2/sweetalert2.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/parsleyjs/dist/parsley.min.js"></script>

    <script src="<?php echo base_url();?>assets/js-project/util.js"></script>
    <script src="<?php echo base_url();?>assets/js-project/quiz.js"></script>


    <script>
        $(function() {
            GetQuestion();
        });

    </script>

</body>

</html>
