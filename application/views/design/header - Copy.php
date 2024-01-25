<!DOCTYPE html>
<html lang="en">
<head>
    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="ChitrakootWeb" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <!-- title  -->
    <title><?php if (!empty($title)) echo $title;?> | Amin Design Studio</title>
    <!-- favicon -->
    <link rel="shortcut icon" href="<?= base_url()?>design/img/logo.png">
    <link rel="apple-touch-icon" href="<?= base_url()?>design/img/logo.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?= base_url()?>design/img/logo.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?= base_url()?>design/img/logo.png">
    <!-- plugins -->
    <link rel="stylesheet" href="<?= base_url()?>design/css/plugins.css" />

    <!-- revolution slider css -->
    <link rel="stylesheet" href="<?= base_url()?>design/css/rev_slider/settings.css">
    <link rel="stylesheet" href="<?= base_url()?>design/css/rev_slider/layers.css">
    <link rel="stylesheet" href="<?= base_url()?>design/css/rev_slider/navigation.css">

    <!-- switcher css -->
    <link href="<?= base_url()?>design/css/switcher.css" rel="stylesheet">

    <!-- search css -->
    <link rel="stylesheet" href="<?= base_url()?>design/search/search.css" />

    <!-- custom css -->
    <link href="<?= base_url()?>design/css/styles.css" rel="stylesheet" id="colors">
<!--     <link href="<?= base_url()?>design/css/styles-6.css" rel="stylesheet" id="colors">
 --></head>
<body>

    <!-- start page loading -->
    <div id="preloader">
        <div class="row loader">
            <div class="loader-icon"></div>
        </div>
    </div>
    <!-- end page loading -->

    <!-- start main-wrapper section -->
    <div class="main-wrapper">

        <!-- start header section -->
        <header>
            
            <div id="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-xs-12">
                            <div class="top-bar-info">
                                <ul>
                                    <li><i class="fas fa-mobile-alt"></i>+880 1777- 768148</li>
                                    <li><i class="fas fa-envelope"></i>amindesignstudio@gmail.com</li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-12 col-md-3 xs-display-none">
                            <ul class="top-social-icon">
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="navbar-default">

                <!-- Start Top Search -->
                <div class="top-search bg-theme">
                    <div class="container">
                        <form class="search-form" action="#" method="GET" accept-charset="utf-8">
                            <div class="input-group">
                                <span class="input-group-addon cursor-pointer">
                                    <button class="search-form_submit fas fa-search font-size18 text-white" type="submit"></button>
                                </span>
                                <input type="text" class="search-form_input form-control" name="s" autocomplete="off" placeholder="Type & hit enter...">
                                <span class="input-group-addon close-search"><i class="fas fa-times font-size18 line-height-28 margin-5px-top"></i></span>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- End Top Search -->
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-12 col-lg-12">
                            <div class="menu_area alt-font">
                                <nav class="navbar navbar-expand-lg navbar-light no-padding">

                                    <div class="navbar-header navbar-header-custom">
                                        <?php 
                                            $ci_logos = $this->db->select('*')->from('ci_settings')->order_by('id', 'asc')->limit(1)->get();
                                            foreach ($ci_logos->result() as $key => $logo)
                                            { 
                                        ?>
                                        <!-- Start Logo -->
                                        <a href="<?= base_url() ?>" class="navbar-brand logodefault"><img id="logo" src="<?= base_url()?>assets/upload/logo/<?= $logo->logo?>" alt=""></a>
                                        <!-- End Logo -->
                                        <?php } ?>
                                    </div>

                                    <div class="navbar-toggler"></div>

                                    <!-- Menu Area -->
                                    <ul class="navbar-nav ml-auto" id="nav" style="display: none;">
                                        <li><a href="<?= base_url() ?>">Home</a></li>
                                        <li><a href="<?= base_url()?>aboutus">About us</a></li>
                                        <li><a href="<?= base_url() ?>all-product">All Product</a></li>
                                        <?php
                                            $query = $this->db->query("select * from cat_m where sts = '1' ");
                                            foreach ($query->result() as $value) {
                                        ?>
                                        <li><a href="#"><?= $value->name ?></a>
                                            <ul>
                                                <?php
                                                    $query2 = $this->db->query("select * from cat_s where cat_id = '$value->id' and sts = '1' ");
                                                    foreach ($query2->result() as $value2) {
                                                        $id = $value2->id
                                                ?>
                                                <li><a href="<?= base_url()?>home/category/<?= $id?>"><?= $value2->name ?></a></li>
                                                <?php } ?>
                                            </ul>
                                        </li>   
                                        <?php } ?>
                                        <li><a href="<?= base_url()?>blog">Blog</a></li>
                                        <li><a href="<?= base_url()?>contactus">Contact Us</a></li>
                                    </ul>
                                    <!-- End Menu Area -->

                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>
        <!-- end header section -->