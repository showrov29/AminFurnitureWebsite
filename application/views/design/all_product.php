 <!-- start page title section -->
        <section class="page-title-section bg-img cover-background" data-overlay-dark="7" data-background="img/bg/bg5.html">
            <div class="container">

                <div class="row">
                    <div class="col-md-7 col-sm-12">
                        <h1>All Product List</h1>
                    </div>
                    <div class="col-md-5 col-sm-12">
                        <ul class="text-right xs-text-left sm-margin-8px-top xs-margin-5px-top">
                            <li><a href="<?= base_url()?>">Home</a></li>
                            <li><a href="javascript:void(0)">All Product List</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>
        <!-- end page title section -->

        <section>
            <div class="container">
                <div class="row">

                    <!-- start right panel section -->
                    <div class="col-12">

                       <!--  <div class="row margin-30px-bottom sm-margin-20px-bottom">

                            <div class="col-12">
                                <div class="float-left bg-light-gray width-100 padding-10px-tb padding-15px-lr">
                                    <div class="float-left xs-width-100 text-center">
                                        <p class="no-margin line-height-50">All Product List</p>
                                    </div>
                                </div>
                            </div>

                        </div> -->

                        <div class="row product-grid margin-50px-bottom sm-margin-30px-bottom">
                            <?php 
                                foreach ($products as $key => $product)
                                { 
                                       
                            ?>
                            <div class="col-xl-3 col-md-6 margin-30px-bottom sm-margin-20px-bottom">
                                <div class="border">

                                    <a href="<?= base_url()?>services/<?= $product->category ?>/<?php echo $product->project ?>" class="product-block">
                                        <img src="https://picsum.photos/200/300" alt="" style="height: 220px;width: 100%" />
                                    <div class="product-info">
                                        
                                        <p class="price text-center no-margin">
                                            <?php echo $product->project ?>
                                        </p>
                                    </div>
                                    </a>
                                    <!--<div class="buttons">
                                        <a href="javascript:void(0)" class="bg-extra-dark-gray text-white"><i class="fas fa-heart margin-10px-right"></i>Wishlist</a>
                                        <a href="javascript:void(0)" class="bg-theme text-white"><i class="fas fa-shopping-cart margin-10px-right"></i>Add to Cart</a>
                                    </div>-->

                                </div>
                            </div>
                            <?php } ?>
                        </div>

                    

                    </div>
                    <!-- end right panel section -->

                </div>
            </div>
        </section>
