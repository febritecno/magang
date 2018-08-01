<div class="content-wrapper">
    <section class="content-header">
    <h1><i class="fa fa-archive"></i> Order Form</h1>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title"><small>Fill Your Project Information</small></h3>
                    </div>
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="send_order" action="<?php base_url()?>send_order" method="post" role="form" enctype="multipart/form-data">
                         <div class="box-body">
                             <div class="row">
                                <div class="col-md-8">                                
                                    <div class="form-group">
                                        <label for="title">Project Title</label>
                                        <input type="text" class="form-control required" id="title" name="title" maxlength="128" required>
                                        <input type="hidden" value="<?php echo $this->session->userdata('userId');?>" name="userId" id="userId" required/>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">                                
                                    <div class="form-group">
                                        <label for="type">Project Type</label>
                                        <select class="form-control" name="type" required>
                                            <option>Select Type Service</option>
                                            <option value="Websites">Websites</option>
                                            <option value="Desktop Apps">Desktop Apps</option>
                                            <option value="Mobile Apps">Mobile Apps</option>
                                        </select>
                                         
                                    
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">                                
                                    <div class="form-group">
                                        <label for="upload">Upload Detail Project</label><br/>
                                        <input type="file" name="file" required><br/>
                                        <small>*Tolong upload detail project berbentuk proposal/makalah</small><br/>
                                        <small><i><b>*format rar/zip/docx</b></i></small>
                                    
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">                                

                                    <div class="form-group">
                                        <label for="deadline">Estimated End Project</label>

                                        <div class="input-group">
                                          <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                          </div>
                                          <input type="text" class="form-control pull-right" name="deadline" id="date" required>
                                        </div>
                                        
                                      </div>
                                    
                                </div>
                            </div>
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                        </div>
                         </div>
                    </form>
                </div>
            </div>
            <div class="col-md-4">
                <?php
                    $this->load->helper('form');
                    $error = $this->session->flashdata('error');
                    if($error)
                    {
                ?>
                <div class="alert alert-danger alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('error'); ?>                    
                </div>
                <?php } ?>
                <?php  
                    $success = $this->session->flashdata('success');
                    if($success)
                    {
                ?>
                <div class="alert alert-success alert-dismissable">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <?php echo $this->session->flashdata('success'); ?>
                </div>
                <?php } ?>
                
                <div class="row">
                    <div class="col-md-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>    
</div>