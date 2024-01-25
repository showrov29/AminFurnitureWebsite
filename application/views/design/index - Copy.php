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

            <!-- start offer section -->
            <div class="row margin-70px-bottom sm-margin-50px-bottom">
                <div class="col-lg-12">
                    
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                            <a href="javascript:void(0)" class="display-inline-block margin-30px-bottom xs-margin-20px-bottom width-100 text-center">
                                <img src="<?= base_url()?>design/img/shop/product-banner-01.jpg" style="width:100%;">
                            </a>
                            <a href="javascript:void(0)" class="display-inline-block sm-margin-30px-bottom xs-margin-20px-bottom width-100 text-center">
                                <img src="<?= base_url()?>design/img/shop/product-banner-04.jpg" style="width:100%;">
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-6 text-center xs-margin-20px-bottom">
                            <div class="owl-carousel owl-theme">
                                <div>
                                    <a href="javascript:void(0)">
                                        <img src="<?= base_url()?>design/img/shop/product-banner-02.jpg" style="width:100%;">
                                    </a>
                                </div>
                                <div>
                                    <a href="javascript:void(0)">
                                        <img src="<?= base_url()?>design/img/shop/product-banner-07.jpg" style="width:100%;">
                                    </a>
                                </div>
                                <div>
                                    <a href="javascript:void(0)">
                                        <img src="<?= base_url()?>design/img/shop/product-banner-08.jpg" style="width:100%;">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
               
            </div>
            <!-- end offer section -->

            <!-- start special offer section -->
            <div class="row margin-70px-bottom sm-margin-50px-bottom">
                    <?php 
                        $ci_category = $this->db->query('select * from cat_m where sts = 1');
                        foreach ($ci_category->result() as $key => $category)
                        { 
                           $id = $category->id;
                    ?>
                    <div class="col-12">
                    <div class="section-heading title-style3 pt-5">
                        <h3 class="font-size22 xs-font-size18"><?= $category->name ?></h3>
                    </div>
                </div>

                <div class="carousel-style4 col-12">
                    <div class="product-grid control-top owl-carousel owl-theme">
                     <?php 
                        $ci_product = $this->db->select('*')->from('product')->where('cat_m_id',$id)->where('sts', 1)->order_by('id', 'desc')->limit(5)->get();
                        foreach ($ci_product->result() as $key => $product)
                        { 
                           $id2 = $product->id;
                    ?>
                        <div class="border">
                            <a href="<?= base_url()?>home/details/<?= $product->id?>" class="product-block">
                                <img src="<?= base_url()?>assets/upload/product/<?= $product->pic?>" alt="" style="height: 220px" /></a>
                            <div class="product-info">
                                <a href="<?= base_url()?>home/details/<?= $product->id?>"><?= $product->product_name?></a>
                                <p class="price text-center no-margin">
                                    <!-- <span class="red line-through margin-10px-right">$800</span> -->
                                    <?php if ($product->discount_price>0) { ?>
                                        <span><del>৳<?= $product->reguler_price ?></del></span>
                                    <?php } else { ?><span>৳<?= $product->reguler_price ?></span><?php } ?>
                                    <?php if ($product->discount_price>0) { ?>
                                        <span style="color:red;">৳<?= $product->discount_price ?></span><?php } ?>

                                    <?php if ($product->discount_percentage!='') { ?>
                                        <span style="color:orange;"><font size="2"><?= $product->discount_percentage ?> off</font></span><?php } ?>
                                </p>
                            </div>
                            <!-- <div class="buttons">
                                <a href="javascript:void(0)" class="bg-extra-dark-gray text-white"><i class="fas fa-heart margin-10px-right"></i>Wishlist</a>
                                <a href="javascript:void(0)" class="bg-theme text-white"><i class="fas fa-shopping-cart margin-10px-right"></i>Add to Cart</a>
                            </div> -->

                        </div>
                        <?php } ?>
                    </div>
                </div>
                 <?php } ?>
            </div>
            <!-- end special offer section -->


        </div>

        