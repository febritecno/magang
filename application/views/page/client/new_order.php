<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-archive"></i> Order Form
       
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title"><small>Fill Your Project Information</small></h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="save" action="" method="post" role="form" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-8">                                
                                    <div class="form-group">
                                        <label for="title">Project Title</label>
                                        <input type="text" class="form-control required" value="" id="headline" name="title" maxlength="128">
                                        <input type="hidden" value="" name="id" id="id" />
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">                                
                                    <div class="form-group">
                                        <label for="type">Project Type</label>
                                        <select class="form-control" name="type" value="">
                                            <option>Select Service Type</option>
                                            <option>Websites</option>
                                            <option>Desktop Apps</option>
                                            <option>Mobile Apps</option>
                                        </select>
                                         
                                    
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">                                
                                    <div class="form-group">
                                        <label for="upload">Upload Detail Project</label><br/>
                                        <small>rar/zip/docx file</small>
                                        <input type="file" name="upload">
                                    
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
                                          <input type="text" class="form-control pull-right" id="deadline">
                                        </div>
                                        
                                      </div>
                                    
                                </div>
                            </div>
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
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
