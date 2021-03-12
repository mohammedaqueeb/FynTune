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
                    <div class="col-md-6 col-xl-6 mx-auto">
                        <div class="card">
                            <div class="auth-form-wrapper px-5 py-5">
                                <a href="#" class="noble-ui-logo d-block mb-2">FynTune</a>

                                <form class="forms-sample" method="post" id="QuizForm">
                                    <div class="form-group">
                                        <label>Full Name</label>
                                        <input type="text" class="form-control" id="FullName" name="FullName" placeholder="Enter Full Name" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Email Address</label>
                                        <input type="email" class="form-control" id="EmailAddress" name="EmailAddress" placeholder="Enter Email Address" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Mobile No</label>
                                        <input type="tel" class="form-control" id="MobileNo" name="MobileNo" placeholder="Enter Mobile No" minlength="10" maxlength="10" required>
                                    </div>

                                    <div class="mt-3 text-right">
                                        <button type="button" class="btn btn-outline-success mb-2 mb-md-0 Submitbtn float-right" id="Submitbtn" onclick="QuizManage()"> Start Quiz <i class="btn-icon-prepend" data-feather="navigation"></i></button>
                                    </div>
                                </form>
                                
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
    <script src="<?php echo base_url();?>assets/js-project/admin.js"></script>
</body>

</html>
