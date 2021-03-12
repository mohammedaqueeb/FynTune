<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
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
                                <?php
                                    if($this->session->flashdata('message')){
                                        echo '<div class="alert alert-danger">
                                            '.$this->session->flashdata("message").'
                                            </div>';
                                    }
                                ?>
                                <form class="forms-sample" method="post" name="login" action="<?php echo base_url(); ?>auth/validateUser">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" class="form-control" id="UserName" name="UserName" value="<?php echo set_value('UserName');?>" placeholder="Enter User Name">
                                        <span class="text-danger"><?php echo form_error('UserName'); ?></span>
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">Password</label>
                                        <input type="password" class="form-control" id="Password" name="Password" value="<?php echo set_value('Password'); ?>" placeholder="Enter Password">
                                        <span class="text-danger"><?php echo form_error('Password'); ?></span>
                                    </div>

                                    <div class="mt-3 text-right">
                                        <button type="submit" class="btn btn-outline-success mr-2 mb-2 mb-md-0 Submitbtn" id="Submitbtn"> Login <i class="btn-icon-prepend" data-feather="log-in"></i></button>
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
</body>

</html>
