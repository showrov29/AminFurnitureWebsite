<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
    $id = $this->session->userdata('session_id');
    $ci_admin = $this->db->select('*')->from('ci_admin')->where('id',$id)->get()->row();
    
    if(!empty($ci_admin->img)){
        $img = base_url() . $ci_admin->img;
    }else{
        $img = 'https://www.w3schools.com/howto/img_avatar.png';
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
    <meta name="author" content="Nirjera">
    <title><?= $settings->website_title;?> | <?php if (!empty($title)) echo $title;?></title>
    <link rel="apple-touch-icon" href="<?= base_url();?>assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url();?>assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/vendors/css/forms/selects/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/vendors/css/tables/datatable/datatables.min.css">

    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/vendors/css/tables/extensions/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/vendors/css/tables/datatable/buttons.bootstrap4.min.css">
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
    <!-- END: Page CSS-->
     <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.3.0/css/all.css" integrity="sha384-yXyaKVWGB2SyDoYATyErcgoNH1iAnnf8fCXejZM4NYUbhWiGkZoMwh6IoJ4v5ogi" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/plugins/animate/animate.css">

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
                    <li class="nav-item"><a class="navbar-brand" href="index.php"><img class="brand-logo" alt="" src="<?= base_url()?>assets/images/logo/logo.png">
                            <h3 class="brand-text">Amin Design Studio</h3>
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
                       <!--  <li class="dropdown dropdown-notification nav-item"><a class="nav-link nav-link-label" href="#" data-toggle="dropdown"><i class="ficon ft-bell"></i><span class="badge badge-pill badge-danger badge-up badge-glow">5</span></a>
                            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
                                <li class="dropdown-menu-header">
                                    <h6 class="dropdown-header m-0"><span class="grey darken-2">Notifications</span></h6><span class="notification-tag badge badge-danger float-right m-0">5 New</span>
                                </li>
                                <li class="scrollable-container media-list w-100"><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-plus-square icon-bg-circle bg-cyan mr-0"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">You have new order!</h6>
                                                <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">30 minutes ago</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-download-cloud icon-bg-circle bg-red bg-darken-1 mr-0"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading red darken-1">99% Server load</h6>
                                                <p class="notification-text font-small-3 text-muted">Aliquam tincidunt mauris eu risus.</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Five hour ago</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-alert-triangle icon-bg-circle bg-yellow bg-darken-3 mr-0"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading yellow darken-3">Warning notifixation</h6>
                                                <p class="notification-text font-small-3 text-muted">Vestibulum auctor dapibus neque.</p><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-check-circle icon-bg-circle bg-cyan mr-0"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Complete the task</h6><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last week</time></small>
                                            </div>
                                        </div>
                                    </a><a href="javascript:void(0)">
                                        <div class="media">
                                            <div class="media-left align-self-center"><i class="ft-file icon-bg-circle bg-teal mr-0"></i></div>
                                            <div class="media-body">
                                                <h6 class="media-heading">Generate monthly report</h6><small>
                                                    <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Last month</time></small>
                                            </div>
                                        </div>
                                    </a></li>
                                <li class="dropdown-menu-footer"><a class="dropdown-item text-muted text-center" href="javascript:void(0)">Read all notifications</a></li>
                            </ul>
                        </li> -->

                        <li class="dropdown dropdown-user nav-item"><a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
                            <span class="mr-1 user-name text-bold-700">
                                <?= ucwords($this->session->userdata('name'));?> (Admin)
                            </span>
                            <span class="avatar avatar-online">
                                <img src="<?= $img ?>" alt=""><i></i>
                            </span></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="<?= base_url()?>admin/profile_edit"><i class="ft-user"></i> Edit Profile</a>
                                <div class="dropdown-divider"></div><a class="dropdown-item" href="<?= base_url()?>auth/logout"><i class="ft-power"></i> Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <?php #$this->load->view('msg.php') ?>
            </div>
        </div>
    </nav>
    <!-- END: Header-->
