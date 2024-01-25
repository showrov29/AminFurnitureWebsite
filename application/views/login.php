<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
//get site_align setting
$settings = $this->db->get('ci_settings')->row();
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
<!-- BEGIN: Head-->
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <title>Admin Login</title>
    <link rel="apple-touch-icon" href="<?= base_url() ?>/img/logos/logo.png">

    <link rel="shortcut icon" href="<?= $settings->favicon;?>">
    <link rel="shortcut icon" href="<?= $settings->favicon;?>">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">
    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>/assets/vendors/css/vendors.min.css">

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>/assets/css/bootstrap.css">   
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>/assets/css/bootstrap-extended.css">   
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>/assets/css/colors.css">
  
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>/assets/css/components.css">
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>/assets/css/core/menu/menu-types/vertical-menu-modern.css">   
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>/assets/css/core/colors/palette-gradient.css">   
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>/assets/vendors/css/charts/jquery-jvectormap-2.0.3.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>/assets/vendors/css/charts/morris.css">
 
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>/assets/fonts/simple-line-icons/style.css">
  
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>/assets/css/core/colors/palette-gradient.css">

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>/assets/css/style.css">

    <!-- Font Awesome: CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<!-- END: Head-->
<!-- BEGIN: Body-->
<body class="vertical-layout vertical-menu-modern 1-column  bg-full-screen-image blank-page" data-open="click" data-menu="vertical-menu-modern" data-col="1-column">
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <section class="row flexbox-container">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="col-lg-4 col-md-8 col-10 box-shadow-2 p-0">
                            <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                                <div class="card-header border-0">
                                    <div class="card-title text-center">
                                        <a href="<?= base_url();?>">
                                        <img src="<?= base_url() ?>assets/upload/logo/b6a8b5cd8d62a96afb07ccb1c491ccd1.jpg" style="width:150px;">
                                        </a>
                                    </div>

                                </div>
                                <div class="card-content">
                                    <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>Using Account
                                            Details</span></p>
                                             
                                    <div class="card-body">
                                   
                                    <?php $this->load->view('admin/msg.php') ?>
                                   
                                    <?php echo validation_errors('<div class="alert alert-danger alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <strong><i class="icon fa fa-exclamation-triangle"></i> ','</strong></div>'); ?>

                                            <?php echo form_open('auth/login', 'class="form-horizontal"');?>
                                             <!-- <?php echo form_error('username','<div class="alert alert-danger alert-dismissible" role="alert">
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                        <strong>','</strong></div>'); ?>  -->
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="text" class="form-control" id="email" placeholder="Your Email Address" name="email" value="<?php echo set_value('email'); ?>">
                                                <div class="form-control-position">
                                                    <i class="la la-user"></i>
                                                </div>
                                            </fieldset>
                                            
                                            <fieldset class="form-group position-relative has-icon-left">
                                                <input type="password" class="form-control" id="user-password" placeholder="Enter Password" name="password" >
                                                <div class="form-control-position">
                                                    <i class="la la-key"></i>
                                                </div>
                                            </fieldset>
                                            <div class="form-group row">
                                                <div class="col-sm-6 col-12 text-center text-sm-left pr-0">
                                                    <fieldset>
                                                        <input type="checkbox" id="remember-me" class="chk-remember">
                                                        <label for="remember-me"> Remember Me</label>
                                                    </fieldset>
                                                </div>
                                                <div class="col-sm-6 col-12 float-sm-left text-center text-sm-right"><a href="#" class="card-link">Forgot Password?</a></div>
                                            </div>
                                            <button type="submit" name="submit" class="btn btn-outline-info btn-block"><i class="ft-unlock"></i> Login</button>
                                           <?php echo form_close(); ?>
                                         <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Easily Using</span></h6>
                                          <div class="text-center">
                                        <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook"><span class="la la-facebook"></span></a>
                                        <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter"><span class="la la-twitter"></span></a>
                                        <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-linkedin"><span class="la la-linkedin font-medium-4"></span></a>
                                        <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-github"><span class="la la-github font-medium-4"></span></a>
                                    </div>
                                    </div>
<!--
                                    <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>New to Modern
                                            ?</span></p>
                                    <div class="card-body">
                                        <a href="register-with-bg-image.html" class="btn btn-outline-danger btn-block"><i class="la la-user"></i>
                                            Register</a>
                                    </div>
-->
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
    <!-- END: Content-->
     <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>
   
    <!-- BEGIN: Footer-->
     <footer class="footer footer-dark navbar-border navbar-shadow">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">
                &copy; Copyright <?php echo date('Y');?></span><span class="float-md-right d-none d-lg-block">
                Developed By <a style="color: #ed4c83" href="https://www.facebook.com/shahariarahmedsajib">SAJIB AHMED</a>
                <span id="scroll-top"></span></span></p>
    </footer>
    <!-- END: Footer-->
    <!-- BEGIN: Vendor JS-->
    <script src="<?= base_url();?>assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->
    <!-- BEGIN: Page Vendor JS-->
    <script src="<?= base_url();?>assets/vendors/js/charts/chart.min.js"></script>
    <script src="<?= base_url();?>assets/vendors/js/charts/raphael-min.js"></script>
    <script src="<?= base_url();?>assets/vendors/js/charts/morris.min.js"></script>
    <script src="<?= base_url();?>assets/vendors/js/charts/jvector/jquery-jvectormap-2.0.3.min.js"></script>
    <script src="<?= base_url();?>assets/vendors/js/charts/jvector/jquery-jvectormap-world-mill.js"></script>
    <script src="<?= base_url();?>assets/data/jvector/visitor-data.js"></script>
    <!-- END: Page Vendor JS-->
    <!-- BEGIN: Theme JS-->
    <script src="<?= base_url();?>assets/js/core/app-menu.js"></script>
    <script src="<?= base_url();?>assets/js/core/app.js"></script>
    <!-- END: Theme JS-->
    <!-- BEGIN: Page JS-->
    <script src="<?= base_url();?>assets/js/scripts/pages/dashboard-sales.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->
</html>