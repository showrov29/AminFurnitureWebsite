<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
    $id = $this->session->userdata('id');
    $profile = $this->db->select('*')->from('ci_admin')->where('id',$id)->get()->row();
    if(!empty($profile->img)){
        $img = base_url() . $profile->img;
    }else{
        $img = base_url('assets/images/portrait/small/avatar-s-23.png');
    }
?>

<?php $this->load->view('admin/header'); ?>
    <!-- BEGIN: Main Menu-->

    <?php $this->load->view('admin/menu'); ?>

    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url()?>admin">Home</a>
                                </li>
                                <li class="breadcrumb-item active">Account setting
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="content-body">
                <!-- account setting page start -->
                <section id="page-account-settings">
                    <div class="row">
                        <!-- left menu section -->
                        <div class="col-md-3 mb-2 mb-md-0">
                            <ul class="nav nav-pills flex-column mt-md-0 mt-1">
                                <li class="nav-item">
                                    <a class="nav-link d-flex active" id="account-pill-general" data-toggle="pill" href="#account-vertical-general" aria-expanded="true">
                                        <i class="ft-globe mr-50"></i>
                                        General
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link d-flex" id="account-pill-password" data-toggle="pill" href="#account-vertical-password" aria-expanded="false">
                                        <i class="ft-lock mr-50"></i>
                                        Change Password
                                    </a>
                                </li>
                            
                            </ul>
                        </div>
                        <!-- right content section -->
                        <div class="col-md-9">
                            <div class="card">
                                <div class="card-content">
                                    <div class="card-body">
                                        <?php $this->load->view('admin/msg'); ?>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane active" id="account-vertical-general" aria-labelledby="account-pill-general" aria-expanded="true">
                                               
                                                 <?php echo form_open_multipart('admin/general','class=""'); ?>
                                                    <div class="row">
                                                        <!-- <?=  $profile->id ?>
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-username">Username</label>
                                                                    <input type="text" class="form-control" name="username" placeholder="Username" value="<?= $profile->username?>" required data-validation-required-message="This username field is required">
                                                                </div>
                                                            </div>
                                                        </div> -->

                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-name">Full Name</label>
                                                                    <input type="text" class="form-control" name="name" placeholder="Name" value="<?= $profile->name?>" required data-validation-required-message="This name field is required">
                                                                </div>
                                                            </div>
                                                        </div> 
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-mobile">Mobile Number</label>
                                                                    <input type="text" class="form-control" name="mobile" placeholder="Username" value="<?= $profile->mobile?>" required data-validation-required-message="This mobile number field is required">
                                                                </div>
                                                            </div>
                                                        </div>
                                                
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-e-mail">E-mail</label>
                                                                    <input type="email" class="form-control" name="email" placeholder="Email" value="<?= $profile->email?>" required data-validation-required-message="This email field is required">
                                                                </div>
                                                            </div>
                                                        </div>
                                      
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <label for="account-company">Company Name</label>
                                                                <input type="text" class="form-control" name="business_name" placeholder="Company name" value="<?= $profile->business_name?>">
                                                            </div>
                                                        </div>
                                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                            <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                                                changes</button>
                                                            <button type="reset" class="btn btn-light" onclick="javascript:history.go(-1)">Cancel</button>
                                                        </div>
                                                    </div>
                                                <?= form_close(); ?>
                                            </div>
                                            <div class="tab-pane fade " id="account-vertical-password" role="tabpanel" aria-labelledby="account-pill-password" aria-expanded="false">
                                                <?php echo form_open('admin/changePassword','class=""'); ?>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-old-password">Old Password</label>
                                                                    <input type="password" class="form-control" name="old_password" required placeholder="Old Password" data-validation-required-message="This old password field is required">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-new-password">New Password</label>
                                                                    <input type="password" name="password" id="account-new-password" class="form-control" placeholder="New Password" required data-validation-required-message="The password field is required" minlength="6">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <div class="controls">
                                                                    <label for="account-retype-new-password">Confirm New
                                                                        Password</label>
                                                                    <input type="password" name="c_password" class="form-control" required id="account-retype-new-password" data-validation-match-match="password" placeholder="New Password" data-validation-required-message="The Confirm password field is required" minlength="6">
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-12 d-flex flex-sm-row flex-column justify-content-end">
                                                            <button type="submit" class="btn btn-primary mr-sm-1 mb-1 mb-sm-0">Save
                                                                changes</button>
                                                            <button type="reset" class="btn btn-light" onclick="javascript:history.go(-1)">Cancel</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- account setting page end -->
            </div>
        </div>
    </div>
    <!-- END: Content-->
<?php $this->load->view('admin/footer'); ?>
    <script src="<?= base_url();?>assets/js/scripts/pages/account-setting.js"></script>
    <!-- END: Page JS-->

</body>
<!-- END: Body-->
</html>