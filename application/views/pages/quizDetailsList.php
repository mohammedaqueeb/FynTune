<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Results </title>

    <script src="<?php echo base_url();?>assets/js/fontawesome.js"></script>

    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/core/core.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/feather-font/css/iconfont.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/sweetalert2/sweetalert2.min.css">

    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/dateRangePicker/daterangepicker.css" />

    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/datatables.net/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/datatables.net/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/vendors/datatables.net/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css">


    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/custom.css">

    <script src="<?php echo base_url();?>assets/vendors/core/core.js"></script>

    <style>
        .sidebar-dark .sidebar .sidebar-header {
            background: #ffffff;
            border-bottom: 1px solid #ffffff;
            border-right: 1px solid #ffffff;
            width: 100%;
        }

    </style>


</head>

<body class="sidebar-dark">
    <div class="main-wrapper">

        <!-- partial:partials/_sidebar.html -->
        <nav class="sidebar" style="width: 0;">
            <div class="sidebar-header">
                <a href="#" class="sidebar-brand">
                    <span>FynTune</span>
                </a>
            </div>
        </nav>



        <div class="page-wrapper" style="width: 100%;margin-left: 0px;">

            <!-- partial:partials/_navbar.html -->
            <nav class="navbar" style="width: 100%;left: 0px;">
                <a href="#" class="sidebar-toggler">
                    <i data-feather="menu"></i>
                </a>
                <div class="navbar-content">

                    <ul class="navbar-nav">
                        <li class="nav-item dropdown nav-profile">
                            <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img src="<?php echo base_url()?>assets/images/users/avatar-6.jpg" alt="user">

                            </a>
                            <div class="dropdown-menu" aria-labelledby="profileDropdown">
                                <div class="dropdown-header d-flex flex-column align-items-center">
                                    <div class="info text-center mb-3">
                                        <p class="name font-weight-bold mb-0"><?php echo $this->session->userdata('FullName')?></p>
                                    </div>
                                </div>
                                <div class="dropdown-body">
                                    <ul class="profile-nav p-0 pt-3">
                                        <li class="nav-item">
                                            <a href="<?php echo base_url() ?>Auth/logout" class="nav-link">
                                                <i data-feather="log-out"></i>
                                                <span>Log Out</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
            <!-- partial -->

            <div class="page-content">
                <div class="row" style="width:100%">
                    <div class="col-md-12 grid-margin stretch-card">
                        <form class="forms-sample" id="FilterForm" style="width:100%">

                            <div class="row">

                                <div class="col-md-4 input-icons">
                                    <i class="fa fa-calendar icon"></i>
                                    <input class="form-control input-field" type="text" id="DateStart" name="DateStart" />
                                </div>

                                <div class="col-md-2 float-right mt-1">
                                    <button type="button" class="btn btn-outline-success mb-2 mb-md-0 Submitbtn float-right" id="Submitbtn" onclick="FetchLeads()"> Filter <i class="fas fa-filter"></i></button>
                                </div>

                            </div>
                        </form>
                    </div>

                </div>

                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title mb-3">Quiz Details Lis CorrectQuestiont</h4>
 
                                <table class="table table-bordered mt-5 mb-5">
                                   <tr>
                                        <td><b>Full Name</b></td>
                                        <td id="FullName"></td>
                                    </tr>
                                    <tr>
                                        <td><b>Email</b></td>
                                        <td id="Email"></td>
                                    </tr>
                                    <tr>
                                        <td><b>Mobile No</b></td>
                                        <td id="MobileNo"></td>
                                    </tr>
                                    <tr>
                                        <td><b>TotalQuestion</b></td>
                                        <td id="TotalQuestion"></td>
                                    </tr>
                                    <tr>
                                        <td><b>AttemptQuestion</b></td>
                                        <td id="AttemptQuestion"></td>
                                    </tr>
                                    <tr>
                                        <td><b>CorrectQuestion</b></td>
                                        <td id="CorrectQuestion"></td>
                                    </tr>
                                    <tr>
                                        <td><b>Score</b></td>
                                        <td id="Score"></td>
                                    </tr>
                                </table>

                                <div style="width: 100%!important;">
                                    <table class="table table-bordered dt-responsive nowrap" style="width: 100%!important;">
                                        <thead>
                                            <tr>
                                                <th>Sr No</th>
                                                <th>Question</th>
                                                <th>Correct Answer</th>
                                                <th>User Answer</th>                                                
                                            </tr>
                                        </thead>
                                        <tbody id="TableData"></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>




            <footer class="footer d-flex flex-column align-items-center justify-content-between">
                <p class="text-muted text-center text-md-left">Copyright © 2021</p>
            </footer>
        </div>
    </div>

    <script src="<?php echo base_url();?>assets/vendors/feather-icons/feather.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/sweetalert2/sweetalert2.min.js"></script>

    <script src="<?php echo base_url();?>assets/vendors/moment/moment.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/dateRangePicker/daterangepicker.min.js"></script>

    <script src="<?php echo base_url();?>assets/vendors/datatables.net/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url();?>assets/vendors/datatables.net/responsive.bootstrap4.min.js"></script>

    <script src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script>



    <script src="<?php echo base_url();?>assets/js-project/util.js"></script>
    <script src="<?php echo base_url();?>assets/js-project/quiz.js"></script>

    <script>
        $(function() {

            $('input[name="DateStart"]').daterangepicker({

                startDate: moment().startOf('hour').subtract(90, 'd'),
                endDate: moment().startOf('hour').add(1, 'd'),
                opens: 'left'
            }, function(start, end, label) {});

            FetchLeadsDetails();

        });

    </script>

</body>

</html>
