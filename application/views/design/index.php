        <!-- start revolution slideshow-->
        <div class="rev_slider_wrapper">
            <div class="rev_slider" id="rev_slider_5" data-version="5.4.5">
                <ul>
                    <?php 
                        foreach ($sliders as $key => $slider)
                        { 
                           $id = $slider->id;
                    ?>
                    <!-- SLIDE  -->
                    <li data-fstransition="fade" data-transition="scaledownfrombottom" data-easein="default" data-easeout="default" data-slotamount="1" data-masterspeed="1200" data-delay="8000" data-title="Interior Design">
                        <!-- Overlay -->
                        <div class="opacity-light bg-black z-index-1"></div>
                        <!-- MAIN IMAGE -->
                        <img src="<?= base_url()?>assets/upload/slider/<?= $slider->pic?>" alt="" data-bgrepeat="no-repeat" data-bgfit="cover" data-bgparallax="7" class="rev-slidebg">
                        <!-- HERO SUBTITLE -->
                        <div class="tp-caption small-text text-white slider-text text-uppercase font-weight-300" data-x="30" data-y="center" data-voffset="[-102,-88,-98,-128]" data-fontsize="[21,21,21,21]" data-lineheight="34" data-width="[600, 500, 400, 300]" data-whitespace="[nowrap, nowrap, nowrap, normal]" data-frames='[{
                                    "delay":1000, "speed":900, "frame":"0", "from":"y:150px;opacity:0;", "ease":"Power3.easeOut", "to":"o:1;" },{ "delay":"wait", "speed":1000, "frame":"999",
                                    "to":"opacity:0;","ease":"Power3.easeOut"
                                }]'>
                            <p class="white-space"><?= $slider->details?></p>
                        </div>

                        <!-- HERO TITLE -->
                        <div class="tp-caption hero-text text-white alt-font font-weight-300 text-uppercase" data-x="30" data-y="center" data-voffset="[-28,-10,-20,-40]" data-fontsize="[72,62,52,46]" data-lineheight="[72,62,52,46]" data-width="[none, none, none, 300]" data-whitespace="[nowrap, nowrap, nowrap, normal]" data-frames='[{
                                    "delay":1100, "speed":900, "frame":"0", "from":"y:150px;opacity:0;", "ease":"Power3.easeOut", "to":"o:1;" },{ "delay":"wait", "speed":1000, "frame":"999",
                                    "to":"opacity:0;","ease":"Power3.easeOut"
                                }]' data-splitout="none"><?= $slider->heading?>
                        </div>

                        <!-- BUTTON -->
                        <div class="tp-caption" data-x="30" data-y="center" data-voffset="[64,100,85,94]" data-lineheight="55" data-hoffset="0" data-frames='[{
                                        "delay":1200,
                                        "speed":900,
                                        "frame":"0",
                                        "from":"y:150px;opacity:0;",
                                        "ease":"Power3.easeOut",
                                        "to":"o:1;"
                                        },{
                                        "delay":"wait",
                                        "speed":1000,
                                        "frame":"999",
                                        "to":"opacity:0;","ease":"Power3.easeOut"
                                    }]'><a href='<?= base_url()?>all-product' class='btn-style2 white'><span>See More</span></a>
                        </div>

                    </li>
                    <?php } ?>
                    <!-- end slide  -->
                </ul>
            </div>
        </div>
        <!-- end revolution slideshow-->

        <div class="container margin-70px-top sm-margin-50px-top">

            <!-- end offer section -->
            <section>
                <div class="container">
                    <div class="row">

                        <!-- start about left section -->
                        <div class="col-lg-5 col-md-12 sm-margin-30px-bottom">

                            <div class="section-heading title-style5 left half">
                                <!--<span>SMART & EFFICIENT HOME interiors with Superior Quality Material </span>-->
                                <div style="font-size: 14px; color: #42a4ff;" class="text-uppercase font-weight-600">SMART & EFFICIENT HOME interiors with Superior Quality Material</div>
                                <div class="square">
                                    <span class="separator-left bg-theme"></span>
                                    <span class="separator-right bg-theme"></span>
                                </div>
                            </div>

                            <p>We are professional manufacturer of Furniture and Interior. Our company is committed to the development of the industry for 30 years, with advanced technology and talents. We hope the majority of buyers can come to visit our company; your satisfaction is our greatest pursuit. We can manufacture and Design the products according to your requirements, for further information. Please do not hesitate to contact us.</p>
                            <p>We use Wood Melamine-faced chipboard or medium density fiberboard which is reach European 1 class environmental protection standard, high-quality hardware accessories.</p>
                            <a href="<?= base_url()?>aboutus" class="butn theme medium"><span>Read More <i class="fa fa-arrow-right"></i></span></a>
                        </div>
                        <!-- end about left section -->

                        <!-- start about right section -->
                        <div class="col-lg-7 col-md-12">
                            <div class="about-carousel margin-100px-left sm-margin-50px-left xs-no-margin-left">
                                <div class="owl-carousel owl-theme owl-loaded owl-drag">


                                    <div class="owl-stage-outer">
                                        <div class="owl-stage" style="transform: translate3d(-1070px, 0px, 0px); transition: all 0.5s ease 0s; width: 3745px;">
                                            <div class="owl-item cloned" style="width: 535px;">
                                                <div class="item"><img src="<?= base_url()?>design/img/interior/interior-about-02.jpg" alt=""></div>
                                            </div>
                                            <div class="owl-item cloned" style="width: 535px;">
                                                <div class="item"><img src="<?= base_url()?>design/img/interior/interior-about-03.jpg" alt=""></div>
                                            </div>
                                            <div class="owl-item active" style="width: 535px;">
                                                <div class="item"><img src="<?= base_url()?>design/img/interior/interior-about-01.jpg" alt=""></div>
                                            </div>
                                            <div class="owl-item" style="width: 535px;">
                                                <div class="item"><img src="<?= base_url()?>design/img/interior/interior-about-02.jpg" alt=""></div>
                                            </div>
                                            <div class="owl-item" style="width: 535px;">
                                                <div class="item"><img src="<?= base_url()?>design/img/interior/interior-about-03.jpg" alt=""></div>
                                            </div>
                                            <div class="owl-item cloned" style="width: 535px;">
                                                <div class="item"><img src="<?= base_url()?>design/img/interior/interior-about-01.jpg" alt=""></div>
                                            </div>
                                            <div class="owl-item cloned" style="width: 535px;">
                                                <div class="item"><img src="<?= base_url()?>design/img/interior/interior-about-02.jpg" alt=""></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="owl-nav disabled"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span></button></div>
                                    <div class="owl-dots disabled"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end about right section -->

                    </div>
                </div>

            </section>
            
            <div class="m-5">
            <div class="container-fluid">
                <div class="row">
                    <!-- start right panel section -->
                    <div class="col-12">

                        <div class="row margin-30px-bottom sm-margin-20px-bottom">

                            <div class="col-12">
                                <div class="float-left bg-light-gray width-100 padding-10px-tb padding-15px-lr">
                                    <div class="float-left xs-width-100 text-center">
                                        <div class="section-heading">
                                            <h3>Why Chose Us?</h3>
                                        </div>
                                    </div>
                                    
                                    <div class="float-right margin-5px-top xs-no-margin-top xs-width-100 text-center">


                                        <div class="float-right margin-20px-right xs-float-none xs-width-100 xs-no-margin-right xs-margin-10px-bottom">
                                            <a href="javascript:void(0)" class="butn medium">
                                        <span>Book a consultation</span>
                                    </a>
                                            
                                                                                </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <!-- end right panel section -->

                </div>
                <div class="row">
                    
                 <div class="col-md-3 margin-30px-bottom xs-margin-20px-bottom mt-4">
                        <div class="feature-box-05">
                        <img class="rounded mx-auto d-block" src="https://images.livspace-cdn.com/w:100/h:100/dpr:1/plain/https://d3gq2merok8n5r.cloudfront.net/bumblebee/in/homepage/why-chose-us-1616672114-DWwNb/price-match-icons-d-1616672182-w30ZV.png" alt="">
                        <h6 class="text-center no-margin pt-3">Price match guarantee²</h6>
                    </div>
                 </div> 
                 <div class="col-md-3 margin-30px-bottom xs-margin-20px-bottom mt-4">
                        <div class="feature-box-05">
                        <img class="rounded mx-auto d-block" src="https://images.livspace-cdn.com/w:100/h:100/dpr:1/plain/https://d3gq2merok8n5r.cloudfront.net/bumblebee/in/homepage/why-chose-us-1616672114-DWwNb/45-day-icons-d-1616672180-RcUMD.png" alt="">
                        <h6 class="text-center no-margin pt-3">45 day move-in guarantee³</h6>
                    </div>
                 </div> 
                 <div class="col-md-3 margin-30px-bottom xs-margin-20px-bottom mt-4">
                        <div class="feature-box-05">
                        <img class="rounded mx-auto d-block" src="https://images.livspace-cdn.com/w:100/h:100/dpr:1/plain/https://d3gq2merok8n5r.cloudfront.net/bumblebee/in/homepage/why-chose-us-1616672114-DWwNb/warranty-icons-d-1616672183-qLS3J.png" alt="">
                        <h6 class="text-center no-margin pt-3">10 year warranty⁴</h6>
                    </div>
                 </div>
                 <div class="col-md-3 margin-30px-bottom xs-margin-20px-bottom mt-4">
                        <div class="feature-box-05">
                        <img class="rounded mx-auto d-block" src="https://images.livspace-cdn.com/w:100/h:100/dpr:1/plain/https://d3gq2merok8n5r.cloudfront.net/bumblebee/in/homepage/why-chose-us-1616672114-DWwNb/qc-icons-d-1616672182-S1NZb.png" alt="">
                        <h6 class="text-center no-margin pt-3">146 quality checks</h6>
                    </div>
                 </div> 

                </div>
            </div>
        </div>
        <section>
            <div class="m-5">
                <div class="container">
                    <div class="section-heading mt-5">
                        <h3>Superior technology for superior cabinets</h3>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 margin-30px-bottom xs-margin-20px-bottom mt-4">
                        <div class="feature-box-05">
                        <img class="rounded mx-auto d-block" src="https://images.livspace-cdn.com/w:110/h:90/dpr:1/plain/https://d3gq2merok8n5r.cloudfront.net/bumblebee/website-images-1629829437-pyZ1U/tech-1629832228-shRzb/durabuild-trademarked-1629832250-XpQ3W.png" alt="">
                        <p class="text-center no-margin pt-3" style="font-size: 16px;color: #000; font-weight: 600">Advanced connector mechanism for sturdy build.</p>
                    </div>
                 </div> 
                 <div class="col-md-4 margin-30px-bottom xs-margin-20px-bottom mt-4">
                        <div class="feature-box-05">
                        <img class="rounded mx-auto d-block" src="https://images.livspace-cdn.com/w:110/h:90/dpr:1/plain/https://d3gq2merok8n5r.cloudfront.net/bumblebee/website-images-1629829437-pyZ1U/tech-1629832228-shRzb/antibubble-trademarked-1629832243-3zzuE.png" alt="">
                        <p class="text-center no-margin pt-3" style="font-size: 16px;color: #000; font-weight: 600">Ensures the panels are smooth and bubble-free.</p>
                    </div>
                 </div> 
                 <div class="col-md-4 margin-30px-bottom xs-margin-20px-bottom mt-4">
                        <div class="feature-box-05">
                        <img class="rounded mx-auto d-block" src="https://images.livspace-cdn.com/w:110/h:90/dpr:1/plain/https://d3gq2merok8n5r.cloudfront.net/bumblebee/website-images-1629829437-pyZ1U/tech-1629832228-shRzb/aquabloc-trademarked-1629832247-nZYsg.png" alt="">
                        <p class="text-center no-margin pt-3" style="font-size: 16px;color: #000; font-weight: 600">Prevents moisture from entering the core, making it long-lasting.</p>
                    </div>
                 </div> 
                 
                </div>
            </div>
        </section>
            

        </div>
        <div style="padding: 10px">
            <div class="container">
               <div class="row">

                    <!-- start our packages -->
                    <div class="col-lg-4 col-md-4 margin-30px-bottom xs-margin-20px-bottom">
                        <div class="feature-box-05">
                            <a href="javascript:void(0)">
                                <div class="fetaure-image"><img src="design/img/interior/projects/pro-14.jpg" alt="" style="height: 250px; width: 100%">
                                    <div class="package-detail">
                                        <h4 class="text-white font-weight-600 no-margin">SUMMER SALE!</h4>
                                        <p style="color: #fff">Get Up to 20% Off Office Furniture and Accessories</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 margin-30px-bottom xs-margin-20px-bottom">
                        <div class="feature-box-05">
                            <a href="javascript:void(0)">
                                <div class="fetaure-image"><img src="design/img/interior/projects/pro-17.jpg" alt="" style="height: 250px; width: 100%">
                                    <div class="package-detail">
                                        <h4 class="text-white font-weight-600 no-margin">FEATURED PRODUCT</h4>
                                        <p style="color: #fff">Wood Bed Frame – 20% Off</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 margin-30px-bottom xs-margin-20px-bottom">
                        <div class="feature-box-05">
                            <a href="javascript:void(0)">
                                <div class="fetaure-image"><img src="design/img/interior/projects/pro-20.jpg" alt="" style="height: 250px; width: 100%">
                                    <div class="package-detail">
                                        <h4 class="text-white font-weight-600 no-margin">FREE DELIVERY</h4>
                                        <p style="color: #fff">On all Kitchen Furniture</p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                  
                    <!-- end our packages -->

                </div>
            </div>
        </div>
        <div class="m-5">
            <div class="container">
                <div class="row">
                    <?php 
                        $ci_category2 = $this->db->query('select * from cat_m where sts = 1');
                        foreach ($ci_category2->result() as $key => $category2)
                        { 
                           $id = $category2->id;
                    ?>
                 <div class="col-md-4 margin-30px-bottom xs-margin-20px-bottom mt-4">
                        <div class="feature-box-05">
                        <img class="rounded mx-auto d-block" src="<?= base_url()?>assets/upload/category/<?= $category2->pic?>" alt="">
                        <h6 class="text-center no-margin pt-3"><?= $category2->name?></h6>
                    </div>
                 </div> 
        
             <?php } ?>
                </div>
            </div>
        </div>

        <section class="bg-img" data-overlay-dark="0" data-background="design/img/bg/bg6.jpg">
            <div class="container">
                <div class="section-heading"><span class="badge">Testmonials</span>
                    <h3>What Our Client Say</h3>
                </div>
                <div class="owl-carousel owl-theme owl-loaded owl-drag" id="testmonials-carousel">

                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(-1110px, 0px, 0px); transition: all 0.25s ease 0s; width: 3330px;">
                            <div class="owl-item" style="width: 1110px;">
                                <div class="testmonial-single center-col width-65 sm-width-90">

                                    <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.</p>
                                    <img src="https://www.w3schools.com/howto/img_avatar.png" class="rounded-circle" alt="" style="width: 70px">
                                    <h4>Jhon Due</h4>
                                    <h6>Networking Lead</h6>
                                </div>
                            </div>
                            <div class="owl-item active" style="width: 1110px;">
                                <div class="testmonial-single center-col width-65 sm-width-90">
                                    <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.</p>
                                    <img src="https://www.w3schools.com/howto/img_avatar.png" class="rounded-circle" alt="" style="width: 70px">
                                    <h4>Jhon Due</h4>
                                    <h6>Design Lead</h6>
                                </div>
                            </div>
                            <div class="owl-item" style="width: 1110px;">
                                <div class="testmonial-single center-col width-65 sm-width-90">
                                    <p>Exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa.</p>
                                    <img src="https://www.w3schools.com/howto/img_avatar.png" class="rounded-circle" alt="" style="width: 70px">
                                    <h4>Jhon Due</h4>
                                    <h6>Networking Lead</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                   <!--  <div class="owl-nav">
                        <button type="button" role="presentation" class="owl-prev"><i class="fa fa-angle-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="fa fa-angle-right"></i></button>
                    </div> -->
                    <div class="owl-dots disabled"></div>
                </div>
            </div>
        </section>
