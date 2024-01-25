<!-- start page title section -->
       <!-- <section class="page-title-section bg-img cover-background" data-overlay-dark="7" data-background="img/bg/bg5.html">
            <div class="container">

                <div class="row">
                    <div class="col-md-7 col-sm-12">
                        <h1>Product Detail</h1>
                    </div>
                    <div class="col-md-5 col-sm-12">
                        <ul class="text-right xs-text-left sm-margin-8px-top xs-margin-5px-top">
                            <li><a href="#">Home</a></li>
                            <li><a href="javascript:void(0)">Product Detail</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>-->
        <!-- end page title section -->
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
                            <img class="xzoom5 margin-30px-bottom" id="xzoom-magnific" src="<?= base_url()?>assets/upload/product/<?= $product->pic ?>" xoriginal="<?= base_url()?>design/img/shop/original/01_product.jpg" />
                           <!--  <div class="xzoom-thumbs no-margin">
                                <a href="<?= base_url()?>design/img/shop/original/01_product.jpg"><img class="xzoom-gallery5" width="80" src="<?= base_url()?>design/img/shop/thumbs/01_product.jpg" xpreview="img/shop/preview/01_product.jpg" title="The description goes here"></a>
                                <a href="<?= base_url()?>design/img/shop/original/02_product.jpg"><img class="xzoom-gallery5" width="80" src="<?= base_url()?>design/img/shop/preview/02_product.jpg" title="The description goes here"></a>
                                <a href="<?= base_url()?>design/img/shop/original/03_product.jpg"><img class="xzoom-gallery5" width="80" src="<?= base_url()?>design/img/shop/preview/03_product.jpg" title="The description goes here"></a>
                                <a href="<?= base_url()?>design/img/shop/original/04_product.jpg"><img class="xzoom-gallery5" width="80" src="<?= base_url()?>design/img/shop/preview/04_product.jpg" title="The description goes here"></a>
                            </div> -->
                        </div>
                        <!-- product left end -->

                    </div>
                    <div class="col-lg-7 padding-40px-left sm-padding-15px-lr">
                        <div class="product-detail">
                            <h3 class="margin-8px-bottom"> <?= $product->product_name ?></h3>
                            <div class="bg-theme separator-line-horrizontal-full margin-20px-bottom"></div>
                            <p><?= $product->details ?></p>

                            <div class="margin-20px-bottom">
                                <span class="font-size24 font-weight-700 text-theme-color">Price = <?= $product->reguler_price ?></span>
                                <?php if ($product->discount_price>0) { ?><span><del><?= $product->reguler_price ?></del></span><?php } else { ?><span><?= $product->reguler_price ?></span><?php } ?>
                                <?php if ($product->discount_price>0) { ?><span style="color:red;"><?= $product->discount_price ?></span><?php } ?>
                                <?php if ($product->discount_percentage!='') { ?><span style="color:orange;"><font size="2"><?= $product->discount_percentage ?> off</font></span><?php } ?>
                            </div>

                           <!-- <div class="row">
                                <div class="col-4 col-lg-2">
                                    <label>Qty:</label>
                                    <input type="text" value="1" placeholder="1" class="margin-20px-bottom">
                                </div>

                            </div>

                            <div class="row margin-20px-bottom">
                                <div class="col-lg-12">
                                    <button class="butn theme margin-15px-right xs-margin-10px-bottom"><span><i class="fas fa-shopping-cart margin-5px-right"></i> Add to Cart</span></button>
                                    <button href="javascript:void(0)" class="butn text-uppercase"><span><i class="fas fa-heart margin-5px-right"></i> Add to wishlist</span></button>
                                </div>
                            </div>-->

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
                <?php #} ?>
                </div>
                <!-- End Product Section -->

                <!-- Start Product Description -->
              <!--  <div class="row margin-70px-bottom md-margin-70px-bottom sm-margin-50px-bottom">

                    <div class="col-12">
                        <div class="horizontaltab tab-style5">
                            <ul class="resp-tabs-list hor_1 text-left">
                                <li>Description</li>
                                <li>Additional Info</li>
                                <li>Reviews (2)</li>
                            </ul>
                            <div class="resp-tabs-container hor_1">
                                <div>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto in ea voluptate velit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto in ea voluptate velit.</p>
                                    <p class="no-margin">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto in ea voluptate velit. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto in ea voluptate velit.</p>

                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <ul class="list-style-5">
                                                <li><strong>Weight:</strong> 0.150 Kg</li>
                                                <li><strong>Dimensions:</strong> 90x60x90 Cm</li>
                                                <li><strong>Size:</strong> One Size Fits All</li>
                                                <li><strong>Color:</strong> Gray</li>
                                                <li><strong>Guarantee:</strong> 5 Years</li>
                                            </ul>
                                        </div>
                                        <div class="col-lg-6 padding-30px-left margin-20px-top sm-padding-15px-lr">
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto in ea voluptate velit.</p>
                                            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto in ea voluptate velit.</p>
                                        </div>
                                    </div>

                                </div>
                                <div>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <form id="review-form">
                                                <div class="form-group no-margin">
                                                    <input type="text" id="form_name" name="name" placeholder="Name *" required="required" data-error="Name is required.">
                                                </div>
                                                <div class="form-group no-margin">
                                                    <input type="email" id="form_email" name="email" placeholder="Email *" required="required" data-error="Valid email is required.">
                                                </div>
                                                <div class="form-group">
                                                    <label class="rating">Rating</label>
                                                    <div class="product-rating">
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star"></i>
                                                        <i class="fas fa-star-half-alt"></i>
                                                    </div>
                                                </div>
                                                <div class="form-group no-margin">
                                                    <textarea placeholder="Comment" name="comment" rows="5"></textarea>
                                                </div>
                                                <div class="form-group">
                                                    <button type="submit" class="butn" value="Leave Rating"><span>Send Message</span></button>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="col-lg-6 padding-30px-left sm-margin-20px-top sm-padding-15px-lr">

                                            <div class="margin-20px-bottom">
                                                <p class="no-margin"><strong>Nathan Ford,</strong> Sep 15, 2018</p>
                                                <div class="margin-15px-bottom">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text.</p>
                                                <div class="bg-medium-light-gray separator-line-horrizontal-full"></div>
                                            </div>

                                            <div class="last-paragraph-no-margin">
                                                <p class="no-margin"><strong>Mac Still,</strong> Aug 08, 2018</p>
                                                <div class="margin-15px-bottom">
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star"></i>
                                                    <i class="fas fa-star-half-alt"></i>
                                                </div>
                                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the standard dummy text.</p>

                                            </div>

                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                -->
                <!-- End Product Description -->

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

                                <a href="javascript:void(0)" class="product-block">
                                   <img src="<?= base_url()?>design/img/shop/product-10.jpg" alt="" /></a>
                                <div class="product-info">
                                    <a href="javascript:void(0)"><?= $result->name?></a>
                                    <p class="price text-center no-margin">
                                        <span><?= $result->price?></span>
                                    </p>
                                </div>
                              <!--  <div class="buttons">
                                    <a href="javascript:void(0)" class="bg-extra-dark-gray text-white"><i class="fas fa-heart margin-10px-right"></i>Wishlist</a>
                                    <a href="javascript:void(0)" class="bg-theme text-white"><i class="fas fa-shopping-cart margin-10px-right"></i>Add to Cart</a>
                                </div>-->

                            </div>
                            <?php } ?>

                        </div>
                    </div>

                </div>
                <!-- End Related Product -->

            </div>
        </section>
        <!-- end clients section -->
        