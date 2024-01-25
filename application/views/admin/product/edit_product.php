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
    <meta name="description" content="Modern admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities with bitcoin dashboard.">
    <meta name="keywords" content="admin template, modern admin template, dashboard template, flat admin template, responsive admin template, web app, crypto dashboard, bitcoin dashboard">
    <meta name="author" content="PIXINVENT">
    <title><?= $settings->website_title;?> | <?php if (!empty($title)) echo $title;?></title>
    <link rel="apple-touch-icon" href="<?= base_url();?>assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="<?= base_url();?>assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i%7CQuicksand:300,400,500,700" rel="stylesheet">

    <!-- BEGIN: Vendor CSS-->
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/vendors/css/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/vendors/css/forms/spinner/jquery.bootstrap-touchspin.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/vendors/css/forms/icheck/icheck.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/vendors/css/forms/toggle/bootstrap-switch.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/vendors/css/forms/toggle/switchery.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/vendors/css/forms/selects/select2.min.css">
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
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/plugins/forms/validation/form-validation.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/plugins/forms/switch.css">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->
<!--     <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/css/style.css">
 -->    <!-- END: Custom CSS-->

</head>
<!-- END: Head-->

<!-- BEGIN: Body-->

<body class="horizontal-layout horizontal-menu 2-columns  " data-open="hover" data-menu="horizontal-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <?php $this->load->view('admin/header'); ?>
    <!-- END: Header-->

    <!-- BEGIN: Main Menu-->

   <?php $this->load->view('admin/menu'); ?>

    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
      
            <div class="content-body">
                <!-- Input Validation start -->
                <section class="input-validation">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title text-center">Edit Product</h4>
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="card-content collapse show">

                                    <div class="card-body">
                                        <?php $this->load->view('admin/msg'); ?>
                                       <?php 
                                            $formData = array(
                                                'class' => 'form-horizontal',
                                                'novalidate' => ''
                                            );
                                            $id = $this->uri->segment(3);
                                            $ci_product = $this->db->select('*')->from('product')->where('id', $id)->where('sts', 1)->get();
                                            foreach ($ci_product->result() as $product) {

                                            }
                                            echo form_open_multipart('product/update_product/'.$product->id, $formData); 
                                        ?>
                                          <div class="row">
                                                    <div class="col-md-3">
                                                        <div class="form-group ">
                                                            <h5>Edit Product Name <code>*</code></h5>
                                                            <div class="controls">
                                                                <input type="text" name="product_name" class="form-control mb-1" required data-validation-required-message="This field is required" placeholder="Product Name" value="<?= $product->product_name?>">
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <h5>Edit Main Category <code>*</code> <a href="<?= base_url()?>category">(Add Category)</a></h5>
                                                            <div class="controls">
                                                                <select class="select2 form-control mb-1" name="main_category" data-placeholder="Select Your Main Category" id="main_category" required>
                                                                    <option></option>
                                        <?php $ci_categories = $this->db->select('*')->from('cat_m')->where('sts', 1)->get(); ?>
                                        <?php foreach ($ci_categories->result() as $item): ?>
                                            <option value="<?php echo $item->id; ?>" <?php echo ($product->cat_m_id == $item->id) ? 'selected' : ''; ?>>
                                                <?php echo $item->name; ?></option>
                                        <?php endforeach; ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- <div class="col-md-3">
                                                        <div class="form-group">
                                                        <h5>Edit Sub Category <code>*</code><a href="<?= base_url()?>subcategory">(Add Sub Category)</a></h5>
                                                            <div class="controls">
                                                                <select class="select select2 form-control mb-1 sub_category" name="sub_category" data-placeholder="Select Your Sub Category" id="sub_category" required>
                                                                    <option></option> 
                                         <?php $ci_scategories = $this->db->select('*')->from('cat_s')->where('sts', 1)->get(); ?>
                                        <?php foreach ($ci_scategories->result() as $item2): ?>
                                            <option value="<?php echo $item2->id; ?>" <?php echo ($product->cat_s_id == $item2->id) ? 'selected' : 'disabled'; ?>>
                                                <?php echo $item2->name; ?></option>
                                        <?php endforeach; ?>
                                                              </select>
                                                            </div>
                                                        </div>
                                                    </div> -->
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <h5>Edit Product Image: <span class="required">*</span></h5>
                                                            <div class="controls">
                                                                <input type="file" name="new_img" id="img" class="form-control mb-1" >
                                                            </div>
                                                        </div>
                                                    </div> 
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <h5>Current Image:</h5>
                                                            <div class="controls">
                                                               <img name="" class="img-rounded" src="<?= base_url()?>assets/upload/product/<?= $product->pic?>" alt="" style="width: 100px">
                                                                <input type="hidden" name="old_img" value="<?= $product->pic?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                
                                                    <div class="col-md-3">
                                                        <div class="form-group ">
                                                            <h5>Edit Reguler Price: <span class="required">*</span></h5>
                                                            <div class="controls">
                                                                <input type="text" name="reguler_price" class="form-control mb-1" required data-validation-required-message="This field is required" placeholder="Reguler Price" value="<?= $product->reguler_price?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group ">
                                                            <h5>Edit Discount Price: </h5>
                                                            <div class="controls">
                                                                <input type="text" name="discount_price" class="form-control mb-1" placeholder="Discount Price" value="<?= $product->discount_price?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group ">
                                                            <h5>Edit Discount Percentage: </h5>
                                                            <div class="controls">
                                                                <input type="text" name="discount_percentage" class="form-control mb-1" placeholder="Discount Percentage" value="<?= $product->discount_percentage?>">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3">
                                                        <div class="form-group ">
                                                            <h5>Edit Discount Validity: <span class="required">*</span></h5>
                                                            <div class="controls">
                                                                <input type="date" name="discount_date" class="form-control mb-1" required data-validation-required-message="This field is required" placeholder="Discount Validity" value="<?= $product->discount_date?>">
                                                            </div>
                                                        </div>
                                                    </div>

                                            </div>
                                            
                                            <div class="row">
                                                    <div class="col-md-12">
                                                       <div class="form-group">
                                                        <h5>Description: <code>*</code></h5>
                                                        <div class="controls">
                                                            <textarea cols="30" rows="10" name="details" id="details" class="form-control mb-1" required placeholder="product Details"><?= $product->details?></textarea>
                                                        </div>
                                                    </div>
                                                    </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                 <div class="text-right">
                                                    <button type="submit" class="btn btn-success">Save <i class="la la-thumbs-o-up position-right"></i></button>
                                                    <a href="javascript:history.go(-1)" class="btn btn-danger">Back </a>
                                                </div>
                                             </div>
                                            </div>
                                        <?= form_close(); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Input Validation end -->
            </div>
        </div>
    </div>
    <!-- END: Content-->

    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>

     <!-- BEGIN: Footer-->
       <footer class="footer footer-dark navbar-border navbar-shadow">
        <p class="clearfix blue-grey lighten-2 text-sm-center mb-0 px-2"><span class="float-md-left d-block d-md-inline-block">Copyright &copy; <?= date('Y');?> <a class="text-bold-800 grey darken-2" href="#" target="_blank">Digital Synapse</a></span><span class="float-md-right d-none d-lg-block">Hand-crafted & Made with<i class="ft-heart pink"></i> <a style="color: #ed4c83" href="https://www.facebook.com/shahariar69">SAJIB AHMED</a><span id="scroll-top"></span></span></p>
    </footer>
    <!-- END: Footer-->


    <!-- BEGIN: Vendor JS-->
    <script src="<?= base_url();?>assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="<?= base_url();?>assets/vendors/js/ui/jquery.sticky.js"></script>
    <script src="<?= base_url();?>assets/vendors/js/charts/jquery.sparkline.min.js"></script>
    <script src="<?= base_url();?>assets/vendors/js/forms/select/select2.full.min.js"></script>
    <script src="<?= base_url();?>assets/vendors/js/forms/spinner/jquery.bootstrap-touchspin.js"></script>
    <script src="<?= base_url();?>assets/vendors/js/forms/validation/jqBootstrapValidation.js"></script>
    <script src="<?= base_url();?>assets/vendors/js/forms/icheck/icheck.min.js"></script>
    <script src="<?= base_url();?>assets/vendors/js/forms/toggle/bootstrap-switch.min.js"></script>
    <script src="<?= base_url();?>assets/vendors/js/forms/toggle/switchery.min.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="<?= base_url();?>assets/js/core/app-menu.js"></script>
    <script src="<?= base_url();?>assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <script src="<?= base_url();?>assets/js/scripts/ui/breadcrumbs-with-stats.js"></script>
    <script src="<?= base_url();?>assets/js/scripts/forms/validation/form-validation.js"></script>
    <script src="<?= base_url();?>assets/js/scripts/forms/select/form-select2.js"></script>
    <!-- END: Page JS-->
    <style type="text/css">
        .is-invalid .select2-container--default .select2-selection--single {
            border-color: #dc3545;
        }
    </style>
    <script>
        $(document).ready(function() {
    // Init all select2 elements
    $('.js-select2').select2();
  
        $('form').on('submit', function(e) {
          var $select2 = $('.js-select2', $(this));
          // Reset
          $select2.parents('.form-group').removeClass('is-invalid');
          
          if ($select2.val() === '') {
            // Add is-invalid class when select2 element is required
            $select2.parents('.form-group').addClass('is-invalid');
            
            // Stop submiting
            e.preventDefault();
            return false;
          }
        });
    });
    </script>
    <script type="text/javascript">
    $(document).ready(function () {                
        $("#main_category").change(function(){
            var main_category = $(this).val();
            $("#sub_category").load("<?= base_url()?>product/ajaxx", 
                { main_category : main_category });
        });        
    });
    </script>

</body>
<!-- END: Body-->
</html>