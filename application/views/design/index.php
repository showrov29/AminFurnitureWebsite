 <style>
     /* body {
	align-items: center;
	justify-content: center;
    } */

   
    @keyframes scroll {
        0% { transform: translateX(0); }
        100% { transform: translateX(calc(-250px * 7))}
    }

    .slider {
        height: 100px;
        margin: auto;
        overflow:hidden;
        position: relative;
        width: auto;
        padding: auto;
        
        
        .slide-track {
            animation: scroll 40s linear infinite;
            display: flex;
            width: calc(250px * 14);
        }
        .slide {
            height: 100px;
            width: 250px;
        }
    }
</style>


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

        <!-- Carousel container -->
        <div>
            <div class="container">
                <div class="section-heading">
                    <h3>Our  Partners</h3>
                </div>
            </div>
        </div>
      
        <div class="slider">
	<div class="slide-track">
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
		</div>
		<div class="slide">
			<img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
		</div>
	</div>
    </div>



