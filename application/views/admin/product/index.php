    <!-- BEGIN: Main Menu-->

    <?php $this->load->view('admin/menu'); ?>
  
    <!-- END: Main Menu-->
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
         
            <div class="content-body">
                <!-- File export table -->
                <section id="column-selectors">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                              <!--   <div class="card-header">
                                    <a class="heading-elements-toggle"><i class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div> -->
                                <div class="card-content collapse show">
                                   <div class="card-body card-dashboard">
                                    <?php $this->load->view('admin/msg.php') ?>

                                    <!--  <button type="button" name="" class="btn btn-primary d-flex justify-content-center" data-toggle="modal" data-target="#CategoryAdd">
                                            <i class="ft-plus"></i> Add New Product
                                    </button> -->
                                    <a href="<?= base_url()?>product/add_product" class="btn btn-primary"><i class="ft-plus"></i> Add new Product</a>

                                        <p class="card-text text-center">All of the Product Name export buttons.
                                        </p>

                                        <table class="table table-striped table-bordered file-export">
                                            <table class="table table-striped table-bordered dataex-html5-selectors">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Id</th>
                                                    <th class="text-center">Product Images</th>
                                                    <th class="text-center">Product Name</th>
                                                    <th class="text-center">Reguler Price</th>
                                                    <th class="text-center">Discount Price</th>
                                                    <th class="text-center">%</th>
                                                    <th class="text-center">Validity</th>
                                                    <!--<th class="text-center">Product Details</th>-->
                                                    <th class="text-center">Main Category</th>
                                                    <th class="text-center">Edit</th>
                                                    <th class="text-center">Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    foreach ($products as $key => $product)
                                                    { 
                                                       $id = $product->id;
                                                ?>
                                                <tr>
                                                    <td class="text-center"><?= ++$key?></td>
                                                    <td class="text-center">
                                                        <img src="<?= base_url()?>assets/upload/product/<?= $product->pic?>" alt="" style="width: 100px"> 
                                                    </td>
                                                    <td class="text-center"><?= $product->product_name?></td>
                                                    <td class="text-center"><?= $product->reguler_price?></td>
                                                    <td class="text-center"><?= $product->discount_price?></td>
                                                    <td class="text-center"><?= $product->discount_percentage?></td>
                                                    <td class="text-center"><?= $product->discount_date?></td>
                                                    <!--<td class="text-left"><?= $product->details?></td>-->
                                                    <td class="text-center">
                                                        <button type="button" class="btn btn-sm btn-outline-info round"> <?= get_name_by_auto_id('cat_m',$product->cat_m_id,'name');?></button>
                                                    </td>

                                                    <td class="text-center">
                                                         <a href="<?= base_url()?>product/edit/<?= $id;?>" class="btn btn-sm btn-outline-success round"><i class="fal fa-edit"></i></a>
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="<?php base_url();?>supplier/delete_supplier/<?= $id;?>"><button type="button" class="btn btn-sm btn-outline-danger round" onclick="return confirm('Are you sure to delete this id?')"><i class="fas fa-trash"></i></button></a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
                                            </tbody>
                                           <!--  <tfoot>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>Position</th>
                                                    <th>Office</th>
                                                    <th>Age</th>
                                                    <th>Start date</th>
                                                    <th>Salary</th>
                                                </tr>
                                            </tfoot> -->
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- File export table -->

            </div>

              <!-- ===================== Model Added Start==================== -->
            <div class="modal animated pulse text-left" id="CategoryAdd" tabindex="-1" role="dialog" aria-labelledby="myModalLabel68" style="display: none;" aria-hidden="true">
               <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <?php echo form_open_multipart('supplier/add_supplier','class=""'); ?>
                        <div class="modal-header modal-header bg-success white">
                            <h4 class="modal-title white" id="myModalLabel68">Add New Supplier </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <div class="row">
                        <div class="col-md-6">
                             <div class="form-group">
                                <label for="">Full Name<span style="color:red"> (Required)</span></label>
                                <input type="text" id="" class="form-control" placeholder="Name" name="name" required="" data-validation-required-message="This field is required" max="25" aria-invalid="true">
                            </div>
                        </div>
                       <div class="col-md-6">
                             <div class="form-group">
                                <label for="">Business Name<span style="color:red"> (Required)</span></label>
                                <input type="text" id="" class="form-control" placeholder="Business Name" name="business_name" required="" data-validation-required-message="This field is required" max="25" aria-invalid="true">
                            </div>
                        </div>
                    </div> 

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Mobile Number<span style="color:red"> (Required)</span></label>
                                <input type="text" id="" class="form-control" placeholder="Mobile" name="mobile" required="" data-validation-required-message="This field is required" max="25" aria-invalid="true">
                            </div>                        </div>
                        <div class="col-md-6">
                             <div class="form-group">
                                <label for="">Email Address</label>
                                <input type="text" id="" class="form-control" placeholder="Email Address" name="email" data-validation-required-message="This field is required" max="25" aria-invalid="true">
                            </div>
                        </div>
        
                    </div> 
             
                        <div class="form-group">
                            <label for="companyName">Client Address</label>
                            <textarea id="address" cols="30" rows="5" class="form-control" name="address" placeholder="Add Client Address"></textarea>
                        </div>
                            
                    </div>
                        <div class="modal-footer">
                            <button type="button" class="btn grey btn-outline-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-outline-primary"><i class="ft-plus"></i> Save changes</button>

                        </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>

            <!-- ====================== Model Added End========================= --> 
           
        </div>
    </div>
    <!-- END: Content-->

   