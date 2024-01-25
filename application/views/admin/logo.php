<div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
   
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
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
                                
                                        <?= form_open_multipart('admin/logo_edit','class=""'); ?>
                                            <div class="row justify-content-md-center">
                                                <div class="col-md-6">
                                                    <?php 
                                                        $ci_logos = $this->db->select('*')->from('ci_settings')->order_by('id', 'asc')->limit(1)->get();
                                                        foreach ($ci_logos->result() as $key => $logo)
                                                        { 
                                                    ?>
                                                         <img class="rounded mx-auto d-block" src="<?= base_url()?>assets/upload/logo/<?= $logo->logo?>" alt="" style="width: 250px"></a>
                                                    <?php } ?>
                                                </div>
                                                <div class="col-md-6 mt-2">
                                                    <?php $this->load->view('admin/msg')?>
                                                    <div class="form-body">
                                                        <div class="form-group">
                                                            <label for="logo">Add New logo (W = 300 x H = 150 pixel)</label>
                                                            <input type="file" id="logo" class="form-control form-control-lg" placeholder="" name="logo" required>
                                                        </div>
                                                            <button type="submit" class="btn btn-primary">
                                                                <i class="la la-check-square-o"></i> Save
                                                            </button>
                                                            <button type="button" class="btn btn-warning mr-1">
                                                                <i class="ft-x"></i> Cancel
                                                            </button>
                                                    </div>
                                                </div>
                                            </div>
                                        <?= form_close();?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>