<!DOCTYPE html>
<html lang="en">
<head>

    <!-- metas -->
    <meta charset="utf-8">
    <meta name="author" content="ChitrakootWeb" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="keywords" content="e" />
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

    <!-- switcher css -->
    <link href="<?= base_url()?>design/css/switcher.css" rel="stylesheet">

    <!-- search css -->
    <link rel="stylesheet" href="<?= base_url()?>design/search/search.css" />

    <!-- custom css -->
    <link href="<?= base_url()?>design/css/styles.css" rel="stylesheet" id="colors">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.3.0/css/all.css" integrity="sha384-yXyaKVWGB2SyDoYATyErcgoNH1iAnnf8fCXejZM4NYUbhWiGkZoMwh6IoJ4v5ogi" crossorigin="anonymous">

</head>

<body>

    <!-- start page loading -->
    <div id="preloader">
        <div class="row loader">
            <div class="loader-icon"></div>
        </div>
    </div>
    <!-- end page loading -->

    <!-- start main-wrapper section -->
    <div class="main-wrapper position-inherit">

       <!-- start header section -->
        <header>
            
            <div id="top-bar">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-xs-12">
                            <div class="top-bar-info">
                                <ul>
                                    <li><i class="fas fa-mobile-alt"></i>+880 1777 - 768148</li>
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
                                        <li><a href="<?= base_url() ?>"><i class="far fa-home"></i> Home</a></li>
                                        <li><a href="<?= base_url()?>aboutus"><i class="far fa-info"></i> About us</a></li>
                                        <li><a href="<?= base_url() ?>all-product"><i class="far fa-cart-plus"></i> All Product</a></li>
                                        <!--<li><a href="<?= base_url()?>blog"><i class="far fa-pencil-alt"></i> Blog</a></li>-->
                                        <li><a href="<?= base_url()?>contactus"><i class="far fa-paper-plane"></i> Contact Us</a></li>
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

        <section>
            <div class="container">

                <!-- Start Product Section -->
                <div class="row margin-90px-bottom md-margin-70px-bottom sm-margin-50px-bottom">
                     <?php 
                            $id = $this->uri->segment(3);
                            #echo $id.'<br>';
                            $ci_product = $this->db->get_where('product', array('id' => $id));
                            foreach ($ci_product->result() as $product) {
                        }
                    ?>
                    <div class="col-lg-5 sm-text-center sm-margin-30px-bottom">

                        <!-- product left start -->
                        <div class="xzoom-container">
                            <img class="xzoom5 margin-30px-bottom" id="xzoom-magnific" src="<?= base_url()?>assets/upload/product/<?= $product->pic ?>" xoriginal="<?= base_url()?>assets/upload/product/<?= $product->pic ?>" />
                            <div class="xzoom-thumbs no-margin">
                                <a href="<?= base_url()?>assets/upload/product/<?= $product->pic ?>"><img class="xzoom-gallery5" width="80" src="<?= base_url()?>assets/upload/product/<?= $product->pic ?>" xpreview="<?= base_url()?>assets/upload/product/<?= $product->pic ?>" title=""></a>
                                <!--<a href="<?= base_url()?>design/img/shop/original/02_product.jpg"><img class="xzoom-gallery5" width="80" src="<?= base_url()?>design/img/shop/preview/02_product.jpg" title=""></a>
                                <a href="<?= base_url()?>design/img/shop/original/03_product.jpg"><img class="xzoom-gallery5" width="80" src="<?= base_url()?>design/img/shop/preview/03_product.jpg" title=""></a>
                                <a href="<?= base_url()?>design/img/shop/original/04_product.jpg"><img class="xzoom-gallery5" width="80" src="<?= base_url()?>design/img/shop/preview/04_product.jpg" title=""></a>-->
                            </div>
                        </div>
                        <!-- product left end -->

                    </div>
                    <div class="col-lg-7 padding-40px-left sm-padding-15px-lr">
                        <div class="product-detail">
                            <h3 class="margin-8px-bottom"><?= $product->product_name?></h3>
                            <div class="bg-theme separator-line-horrizontal-full margin-20px-bottom"></div>

                            <div class="margin-20px-bottom">
                                <span class="font-size24 font-weight-700 text-theme-color">Price = </span>
                                <?php if ($product->discount_price>0) { ?><font color="gray" size="5"><del>৳<?= number_format($product->reguler_price) ?></del></font><?php } else { ?><font color="red" size="5">৳<?= number_format($product->reguler_price) ?></font><?php } ?>
                                <?php if ($product->discount_price>0) { ?><font color="red" size="5">৳<?= number_format($product->discount_price) ?></font><?php } ?>
                                <?php if ($product->discount_percentage!='') { ?><font color="orange" size="2"><?= $product->discount_percentage?> off</font><?php } ?>
                            </div>
                            <div class="margin-20px-bottom">
                                <p><?= $product->details?></p>
                            </div>

                            <div class="row">
                                <div class="col-lg-7">
                                    <label>Share on:</label>
                                    <ul class="social-icon-style3">
                                        <li><a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fab fa-google-plus-g"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fab fa-youtube"></i></a></li>
                                        <li><a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a></li>
                                    </ul>

                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Product Section -->

                <!-- Start Related Product -->
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading title-style3">
                            <h3 class="font-size22 xs-font-size18">Related Products</h3>
                        </div>
                    </div>

                    <div class="carousel-style4 col-12">
                        <div class="product-grid control-top owl-carousel owl-theme">
                        <?php 
                            $queryp = $this->db->query("select * from product where cat_m_id = '$product->cat_m_id' and id != '$product->id' and sts = '1' order by id desc limit 5 ");
                            foreach ($queryp->result() as $result) {
                        ?>
                            <div class="border">

                                <a href="<?= base_url()?>home/details/<?= $result->id?>" class="product-block">
                                   <img src="<?= base_url()?>assets/upload/product/<?= $result->pic ?>" alt=""  style="height: 220px" /></a>
                                <div class="product-info">
                                    <a href="<?= base_url()?>home/details/<?= $result->id?>"><?= $result->product_name?></a>
                                    <p class="price text-center no-margin">
                                        <span class="red line-through margin-10px-right">৳<?= $result->reguler_price?></span>
                                        <span>৳<?= $result->discount_price?></span>
                                         <?php if ($product->discount_percentage!='') { ?><font color="orange" size="2">৳<?= $product->discount_percentage ?> off</font><?php } ?>
                                    </p>
                                </div>

                            </div>
                            <?php } ?>

                        </div>
                    </div>

                </div>
                <!-- End Related Product -->

            </div>
        </section>

     <!-- start footer section -->
        <footer>
            <div class="container">
                <div class="row">

                    <div class="col-lg-4 col-md-6 sm-margin-30px-bottom">

                        <img alt="footer-logo" src="img/logos/logo-footer.png">
                        <p class="margin-20px-top">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quam doloribus, error hic id ullam dolorum iste ipsam atque unde voluptatem.</p>
                        <div class="margin-25px-top footer-social-icons">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-4 col-md-6 sm-margin-30px-bottom">
                        <h3 class="footer-title-style2 text-theme-color">Quick Links</h3>
                        <div class="row">
                            <div class="col-md-6 no-padding-right xs-padding-15px-right">
                                <ul class="footer-list xs-margin-5px-bottom">
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">History</a></li>
                                    <li><a href="#">Community</a></li>
                                    <li><a href="#">Portfolio</a></li>
                                    <li><a href="#">Safety</a></li>
                                </ul>
                            </div>
                            <div class="col-md-6 no-padding-right xs-padding-15px-right">
                                <ul class="footer-list">
                                    <li><a href="#">Construction</a></li>
                                    <li><a href="#">Case studies</a></li>
                                    <li><a href="#">Blog detail</a></li>
                                    <li><a href="#">Sales Services</a></li>
                                    <li><a href="#(0)">Services detail</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6 offset-lg-1">
                        <h3 class="footer-title-style2 text-theme-color">Get in Touch</h3>
                        <ul class="footer-list">
                            <li>
                                <span class="d-inline-block vertical-align-top font-size18"><i class="fas fa-map-marker-alt text-theme-color"></i></span>
                                <span class="d-inline-block width-85 vertical-align-top padding-10px-left">Dhaka, Bangladesh.</span>
                            </li>
                            <li>
                                <span class="d-inline-block vertical-align-top font-size18"><i class="fas fa-mobile-alt text-theme-color"></i></span>
                                <span class="d-inline-block width-85 vertical-align-top padding-10px-left">+880 1777- 768148</span>
                            </li>
                            <li>
                                <span class="d-inline-block vertical-align-top font-size18"><i class="far fa-envelope text-theme-color"></i></span>
                                <span class="d-inline-block width-85 vertical-align-top padding-10px-left">amindesignstudio@gmail.com</span>
                            </li>
                            <li>
                                <span class="d-inline-block vertical-align-top font-size18"><i class="fas fa-globe text-theme-color"></i></span>
                                <span class="d-inline-block width-85 vertical-align-top padding-10px-left">www.amindesignstudio.com</span>
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
            <div class="footer-bar xs-font-size13">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 text-left xs-text-center xs-margin-5px-bottom">
                            <p>&copy; Copyright <?= date('Y')?>. All Rights Reserved.</p>
                        </div>
                        <div class="col-md-6 text-right xs-text-center">
                            Design and Developed by: SAJIB AHMED
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end footer section -->

    </div>
    <!-- end main-wrapper section -->
    
    <!-- start scroll to top -->
    <a href="javascript:void(0)" class="scroll-to-top"><i class="fas fa-angle-up" aria-hidden="true"></i></a>
    <!-- end scroll to top -->

    <!-- all js include start -->

    <!-- Java script -->
    <script src="<?= base_url()?>design/js/core.min.js"></script>
    <!-- serch -->
    <script src="search/search.js"></script>

    <!-- zoom js -->
    <script src="<?= base_url()?>design/js/xzoom.js"></script>

    <!-- setup js -->
    <script src="<?= base_url()?>design/js/setup.js"></script>
        
    <!-- custom scripts -->
    <script src="<?= base_url()?>design/js/main.js"></script>

    <!-- contact form scripts -->
    <script src="<?= base_url()?>design/js/mailform/jquery.form.min.js"></script>
    <script src="<?= base_url()?>design/js/mailform/jquery.rd-mailform.min.c.js"></script>

    <!-- all js include end -->

</body>
</html>