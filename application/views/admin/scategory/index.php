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

                                     <button type="button" name="" class="btn btn-primary d-flex justify-content-center" data-toggle="modal" data-target="#CategoryAdd">
                                            <i class="ft-plus"></i> Add Sub Category
                                    </button>

                                        <p class="card-text text-center">All of the Sub Category Name export buttons.
                                        </p>

                                        <table class="table table-striped table-bordered file-export">
                                            <table class="table table-striped table-bordered dataex-html5-selectors">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Id</th>
                                                    <th class="text-center">Sub Category Name</th>
                                                    <th class="text-center">Main Category Name</th>
                                                    <th class="text-center">Edit</th>
                                                    <th class="text-center">Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                <?php 
                                                    #$ci_scategory = $this->db->query('select * from cat_s where sts = 1');
                                                    foreach ($scategories as $key => $scategory)
                                                    { 
                                                       $id = $scategory->id;

                                                ?>
                                                <tr>
                                                    <td class="text-center"><?= ++$key?></td>
                                                    <td class="text-center"><?= $scategory->name ?></td>
                                                    <td class="text-center">
                                                        <button type="button" class="btn btn-sm btn-outline-warning round"> <?= get_name_by_auto_id('cat_m',$scategory->cat_id,'name');?></button>
                                                    </td>  
                                                    </td>

                                                    <td class="text-center">
                                                        <button type="button" name="" class="btn btn-sm btn-outline-success round" data-toggle="modal" data-target="#CategoryEdit<?= $id?>">
                                                            <i class="fal fa-edit"></i>
                                                        </button>
                                                        <!-- ===== Edit Model Start ===== -->
                                                          <div class="modal animated pulse text-left" id="CategoryEdit<?= $id?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel68" style="display: none;" aria-hidden="true">
                                                           <div class="modal-dialog modal-lg" role="document">
                                                                <div class="modal-content">
                                                                <?php echo form_open_multipart('subcategory/edit_scategory/'.$id,'class=""'); ?>
                                                                    <div class="modal-header modal-header bg-success white">
                                                                        <h4 class="modal-title white" id="myModalLabel68">Edit Sub Category Name </h4>
                                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                            <span aria-hidden="true">×</span>
                                                                        </button>
                                                                    </div>
                                                                    <div class="modal-body">
                                                                    <div class="row">
                                                                   
                                                                    <div class="col-md-6"> 
                                                                        <label for="">Edit Category Name<span style="color:red"> (Required)</span></label>
                                                                         <select class="select-placeholder form-control form-control-lg" id="category" name="cat_m_id">
                                                                            <option value="" selected disabled>Select</option>
                                   
                                        <?php $ci_categories = $this->db->select('*')->from('cat_m')->where('sts', 1)->get(); ?>
                                            <?php foreach ($ci_categories->result() as $item): ?>
                                            <option value="<?php echo $item->id; ?>" <?php echo ($scategory->cat_id == $item->id) ? 'selected' : ''; ?>>
                                                <?= $item->name; ?></option>
                                        <?php endforeach; ?>
                                                                               
                                                                            </select>
                                                                        </div>

                                                                        <div class="col-md-6">
                                                                         <div class="form-group">
                                                                            <label for="">Edit Sub Category Name<span style="color:red"> (Required)</span></label>
                                                                            <input type="text" id="" class="form-control form-control-lg" name="scategory_name" value="<?= $scategory->name ?>" required="" data-validation-required-message="This field is required" max="25" aria-invalid="true">
                                                                        </div>
                                                                    </div>
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
                                                     <!-- ===== Edit Model Start ===== -->

                                                    </td>
                                                    <td class="text-center">
                                                        <a href="<?php base_url();?>subcategory/delete_scategory/<?= $id;?>"><button type="button" class="btn btn-sm btn-outline-danger round" onclick="return confirm('Are you sure to delete this id?')"><i class="fas fa-trash"></i></button></a>
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
                        <?php echo form_open_multipart('subcategory/add_scategory','class=""'); ?>
                        <div class="modal-header modal-header bg-success white">
                            <h4 class="modal-title white" id="myModalLabel68">Add Sub Category Name </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <div class="row">
                       
                        <div class="col-md-6"> 
                            <label for="">Main Category Name<span style="color:red"> (Required)</span></label>
                             <select class="select-placeholder form-control form-control-lg" id="category" name="cat_id">
                                <option value="" selected disabled>Select</option>
                                 <?php 
                                        $cat_m = $this->db->query('select * from cat_m where sts = 1');
                                        foreach ($cat_m->result() as $cat)
                                        {
                                    ?>
                                        <option value="<?= $cat->id;?>"><?= $cat->name;?></option>
                                   
                                <?php } ?>
                                   
                                </select>
                            </div>

                            <div class="col-md-6">
                             <div class="form-group">
                                <label for="">Sub Category Name<span style="color:red"> (Required)</span></label>
                                <input type="text" id="" class="form-control form-control-lg" placeholder="Category Name" name="s_name" required="" data-validation-required-message="This field is required" max="25" aria-invalid="true">
                            </div>
                        </div>
                    </div> 

                  <!--   <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="">Date </label>
                                <input type="date" id="" class="form-control singledate" value="<?php #echo date("d-m-Y"); ?>" name="date" required="" data-validation-required-message="This field is required" max="25" aria-invalid="true">
                            </div>
                        </div>
                        <div class="col-md-6">
                             <div class="form-group">
                                <label for="">News Headline</label>
                                <input type="text" id="" class="form-control" placeholder="Picture caption" name="headline" required="" data-validation-required-message="This field is required" max="25" aria-invalid="true">
                            </div>
                        </div>
                    </div> -->
                            
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

   