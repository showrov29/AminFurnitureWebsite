<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<script src="<?= base_url();?>/assets/vendors/js/vendors.min.js"></script>

    <?php if($this->session->flashdata('errors')): ?>
    <div class="alert alert-danger alert-dismissible mb-2" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
        </button>
        <strong><i class="icon fa fa-exclamation-triangle"></i> <?= $this->session->flashdata('errors')?></strong>
    </div>
    <?php endif; ?>


    <!--print custom error message-->
   <!--  <?php if ($this->session->flashdata('error')): ?>
        <div class="m-b-15">
            <div class="alert alert-danger alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <p>
                    <i class="icon fa fa-times"></i>
                    <?php echo $this->session->flashdata('error'); ?>
                </p>
            </div>
        </div>
    <?php endif; ?> -->

    <!--print custom success message-->
   <!--  <?php if ($this->session->flashdata('success')): ?>
        <div class="m-b-15">
            <div class="alert alert-success alert-dismissable">
                <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
                <p>
                    <i class="icon fa fa-check"></i>
                    <?php echo $this->session->flashdata('success'); ?>
                </p>
            </div>
        </div>
    <?php endif; ?> -->

    <?php if($this->session->flashdata('success')): ?>
      <div class="alert alert-success">
        <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
        <strong><i class="icon fa fa-check"></i> <?= $this->session->flashdata('success')?></strong>
      </div>
    <?php endif; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script type="text/javascript">
      <?php if ($this->session->flashdata('toast_success')) {?>
        toastr.success("<?php echo $this->session->flashdata('toast_success'); ?>");
    <?php } else if ($this->session->flashdata('toast_error')) {?>
        toastr.error("<?php echo $this->session->flashdata('toast_error'); ?>");
    <?php } else if ($this->session->flashdata('toast_warning')) {?>
        toastr.warning("<?php echo $this->session->flashdata('toast_warning'); ?>");
    <?php } else if ($this->session->flashdata('toast_info')) {?>
        toastr.info("<?php echo $this->session->flashdata('toast_info'); ?>");
    <?php }?>
    </script>
    
    <script type="text/javascript">
       $(document).ready(function () {

        window.setTimeout(function() {
            $(".alert").fadeTo(1000, 0).slideUp(1000, function(){
                $(this).remove(); 
            });
        }, 30000);
     
    });
    </script>