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
                                            <i class="ft-plus"></i> Add Slider Image
                                    </button>

                                        <p class="card-text text-center">All of the Slider Images export buttons.
                                        </p>

                                        <table class="table table-striped table-bordered file-export">
                                            <table class="table table-striped table-bordered dataex-html5-selectors">
                                            <thead>
                                                <tr>
                                                    <th class="text-center">Id</th>
                                                    <th class="text-center">Heading</th>
                                                    <th class="text-center">Heading 2</th>
                                                    <th class="text-center">Slider Images</th>
                                                    <th class="text-center">Edit</th>
                                                    <th class="text-center">Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                
                                                <?php 
                                                    foreach ($sliders as $key => $slider)
                                                    { 
                                                       $id = $slider->id;
                                                ?>
                                                <tr>
                                                    <td class="text-center"><?= ++$key?></td>
                                                    <td class="text-center"><?= $slider->heading    ?></td>
                                                 
                                                    <td class="text-center"><?= $slider->details    ?></td>
                                                    <td class="text-center">
                                                        <img src="<?= base_url()?>assets/upload/slider/<?= $slider->pic?>" alt="Slider" style="width: 150px;"></td>

                                                    <td class="text-center">
                                                        <button type="button" name="" class="btn btn-sm btn-outline-success round" data-toggle="modal" data-target="#CategoryEdit<?= $id?>">
                                                            <i class="fal fa-edit"></i>
                                                        </button>
            <!-- ===================== Model Edit Start==================== -->
            <div class="modal animated pulse text-left" id="CategoryEdit<?= $slider->id?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel68" style="display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <?php echo form_open_multipart('slider/edit_slider/'.$id,'class=""'); ?>
                         <div class="modal-header modal-header bg-success white">
                            <h4 class="modal-title white" id="myModalLabel68">Edit Slider </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <div class="row">
                        <div class="col-md-6">
                             <div class="form-group">
                                <label for="">Edit Heading</label>
                                <input type="text" id="" class="form-control" placeholder="Edit Heading" name="heading" required="" data-validation-required-message="This field is required" max="25" aria-invalid="true" value="<?= $slider->heading;?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                           <div class="form-group">
                                <label for="">Edit Heading 2</label>
                                <input type="text" id="" class="form-control" placeholder="Edit Heading 2" name="details" required="" data-validation-required-message="This field is required" max="25" aria-invalid="true" value="<?= $slider->details;?>">
                            </div>
                        </div>
                    </div> 

                    <div class="row">
                        <div class="col-md-6">
                            <fieldset class="form-group">
                                <label for="companyName">Edit Slider Image</label>
                                <div class="custom-file">
                                    <input type="hidden" name="old_img" value="<?php echo $slider->pic ?>">
                                    <input type="file" class="custom-file-input" id="inputGroupFile02" name="new_img">
                                    <label class="custom-file-label" for="inputGroupFile02" aria-describedby="inputGroupFile02">Choose file</label>
                                </div>
                            </fieldset>
                        </div>
                        <div class="col-md-6">
                            <fieldset class="form-group">
                                <label for="companyName">Current  Images</label>
                                <div class="custom-file">
                                    <img src="<?php base_url()?>assets/upload/slider/<?= $slider->pic?>" alt="" style="width: 100px">
                                </div>
                            </fieldset>
                        </div>
                      
                    </div> 
                       <!--  <div class="form-group">
                            <label for="companyName">Add News Details</label>
                            <textarea id="details" cols="30" rows="10" class="form-control" name="details" placeholder="Add Notice Details"></textarea>
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

<!-- ========================== Model Edit End============================= -->
                                                    </td>
                                                    <td class="text-center">
                                                        <a href="<?php base_url();?>slider/delete_slider/<?= $id;?>"><button type="button" class="btn btn-sm btn-outline-danger round" onclick="return confirm('Are you sure to delete this id?')"><i class="fas fa-trash"></i></button></a>
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
                        <?php echo form_open_multipart('slider/add_slider','class=""'); ?>
                        <div class="modal-header modal-header bg-success white">
                            <h4 class="modal-title white" id="myModalLabel68">Add Slider Image </h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        <div class="row">
                            <div class="col-md-12">
                            <div class="form-group">
                                <h5>Add Slider Image: <code>*</code>( W-1920 x H-900 Pixel )</h5>
                                <div class="controls">
                                    <input type="file" name="slider_img" id="img" class="form-control form-control-lg mb-1" required>
                                </div>
                            </div>
                        </div> 
                    </div> 
                    <div class="row">
                        <div class="col-md-6">
                             <div class="form-group">
                                <label for="">Slider Line 1: <code>*</code></label>
                                <input type="text" id="" class="form-control form-control-lg" placeholder="Slider Line 1" name="heading" required="" data-validation-required-message="This field is required" max="25" aria-invalid="true">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                            <h5>Slider Line 2: <code>*</code></h5>
                            <div class="controls">
                                <textarea name="details" id="details" class="form-control mb-1" required placeholder="Slider Line 2"></textarea>
                            </div>
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

            <!-- ====================== Model Added End========================= --> 
           
        </div>
    </div>
    <!-- END: Content-->

   