<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
    $id = $this->session->userdata('session_id');
    $ci_admin = $this->db->select('*')->from('ci_admin')->where('id',$id)->get()->row();
    
    if(!empty($ci_admin->img)){
        $img = base_url() . $ci_admin->img;
    }else{
        $img = base_url('assets/images/portrait/small/avatar-s-23.png');
    }
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
    <meta name="author" content="DS Software">
    <title>Admin :: Amin Design Studio</title>
    <link rel="apple-touch-icon" href="<?= base_url();?><?= base_url();?>assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url();?>assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/vendors/css/weather-icons/climacons.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/fonts/meteocons/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/vendors/css/charts/morris.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/vendors/css/charts/chartist.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/vendors/css/charts/chartist-plugin-tooltip.css">
    <!-- END: Vendor CSS-->

    <!-- BEGIN: Theme CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/bootstrap-extended.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/colors.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/components.css">
    <!-- END: Theme CSS-->

    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/core/menu/menu-types/horizontal-menu.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/fonts/simple-line-icons/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/core/colors/palette-gradient.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/pages/timeline.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/pages/dashboard-ecommerce.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css">
    <!-- END: Custom CSS-->
</head>
<!-- END: Head-->
<!-- BEGIN: Body-->
<body class="horizontal-layout horizontal-menu 2-columns  " data-open="hover" data-menu="horizontal-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow navbar-static-top navbar-light navbar-brand-center">
        <div class="navbar-wrapper">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item mobile-menu d-md-none mr-auto"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu font-large-1"></i></a></li>
                    <li class="nav-item"><a class="navbar-brand" href="<?= base_url();?>admin"><img class="brand-logo" alt="" src="<?= base_url();?>assets/images/logo/logo.png">
                            <h3 class="brand-text">Nirjera</h3>
                        </a></li>
                    <li class="nav-item d-md-none"><a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile"><i class="la la-ellipsis-v"></i></a></li>
                </ul>
            </div>
            <div class="navbar-container content">
                <div class="collapse navbar-collapse" id="navbar-mobile">
                    <ul class="nav navbar-nav mr-auto float-left">
                        <li class="nav-item d-none d-md-block"><a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#"><i class="ft-menu"></i></a></li>
                        <li class="nav-item d-none d-lg-block"><a class="nav-link nav-link-expand" href="#"><i class="ficon ft-maximize"></i></a></li>

                        <li class="nav-item nav-search"><a class="nav-link nav-link-search" href="#"><i class="ficon ft-search"></i></a>
                            <div class="search-input">
                                <input class="input" type="text" placeholder="Explore DS..." tabindex="0" data-search="template-list">
                                <div class="search-input-close"><i class="ft-x"></i></div>
                                <ul class="search-list"></ul>
                            </div>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav float-right">

                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <span class="mr-1 user-name text-bold-700">
                                <?= ucwords($this->session->userdata('name'));?> (Admin)
                            </span>
                            <span class="avatar avatar-online">
                                <img src="#" alt=""><i></i>
                            </span></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="<?= base_url();?>admin/profile_edit"><i class="ft-user"></i> Edit Profile</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="<?= base_url();?>auth/logout"><i class="ft-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <?php #$this->load->view('admin/msg.php') ?>
            </div>
        </div>
    </nav>
    <!-- END: Header-->
