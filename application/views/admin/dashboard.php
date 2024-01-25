  
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
            </div>
            <div class="content-body">
                <!-- eCommerce statistic -->
                <div class="row">
                    
                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3 class="warning">
                                            <?php 
                                                $ci_admin = $this->db->select('*')->from('cat_m')->where('sts',1)->get();
                                                echo $ci_admin->num_rows();
                                            ?>
                                            </h3>
                                            <h6>Total Main Category</h6>
                                        </div>
                                        <div><i class="icon-pie-chart warning font-large-2 float-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3 class="warning">
                                            <?php 
                                                $ci_admin = $this->db->select('*')->from('product')->where('sts',1)->get();
                                                echo $ci_admin->num_rows();
                                            ?>
                                            </h3>
                                            <h6>Total Sub Category</h6>
                                        </div>
                                        <div><i class="icon-pie-chart warning font-large-2 float-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-xl-4 col-lg-6 col-12">
                        <div class="card pull-up">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="media d-flex">
                                        <div class="media-body text-left">
                                            <h3 class="warning">
                                            <?php 
                                                $ci_admin = $this->db->select('*')->from('ci_admin')->where('sts',1)->get();
                                                echo $ci_admin->num_rows();
                                            ?>
                                            </h3>
                                            <h6>Total Admin</h6>
                                        </div>
                                        <div><i class="icon-pie-chart warning font-large-2 float-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    
                </div>
                <!--/ eCommerce statistic -->

               

              
            </div>
        </div>
    </div>
    <!-- END: Content-->