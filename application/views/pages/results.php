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
                                <table class="table table-bordered mt-5 mb-5">
                                    <tr>
                                        <td><b>TotalQuestion</b></td>
                                        <td><?php echo (isset($_GET['TotalQuestion']) ? $_GET['TotalQuestion'] : "");?></td>
                                    </tr>
                                    <tr>
                                        <td><b>AttemptQuestion</b></td>
                                        <td><?php echo (isset($_GET['AttemptQuestion']) ? $_GET['AttemptQuestion'] : "");?></td>
                                    </tr>
                                    <tr>
                                        <td><b>CorrectQuestion</b></td>
                                        <td><?php echo (isset($_GET['CorrectQuestion']) ? $_GET['CorrectQuestion'] : "");?></td>
                                    </tr>
                                    <tr>
                                        <td><b>Score</b></td>
                                        <td><?php echo (isset($_GET['Score']) ? $_GET['Score'] : "");?></td>
                                    </tr>
                                </table>
                                

                                <div class="mt-3 text-right">
                                    
                                    <a href="<?php echo base_url(); ?>auth/logoutQuiz" class="btn btn-outline-success mb-2 mb-md-0 Submitbtn float-right">Start Quiz <i class="btn-icon-prepend" data-feather="navigation"></i></a>
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

</body>

</html>
