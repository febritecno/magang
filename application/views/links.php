<?php

$id= '';
$facebook = '';
$twitter = '';
$instagram = '';

if(!empty($links))
{
    foreach ($links as $uf)
    {   
        $id= $uf->id;
        $facebook = $uf->facebook;
        $twitter = $uf->twitter;
        $instagram = $uf->instagram;
    }
}


?>



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-archive"></i> Social Links Management
        
    </h1>
</section>

<section class="content">
    
    <div class="row">
        <!-- left column -->
        <div class="col-md-8">
          <!-- general form elements -->
          
          <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title">Enter Social Links</h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <?php $this->load->helper("form"); ?>
            <form role="form" id="save" action="<?php echo base_url() ?>Link/save" method="post" role="form">
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-8">                                
                            <div class="form-group">
                                <label for="fb">Facebook</label>
                                <input type="text" class="form-control required" value="<?php echo $facebook?>" id="fb" name="fb" maxlength="128">
                                <input type="hidden" value="<?php echo $id?>" name="id" id="id" />
                            </div>
                            
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">                                
                            <div class="form-group">
                                <label for="tw">Twitter</label>
                                <input type="text" class="form-control required" value="<?php echo $twitter?>" id="tw" name="tw" maxlength="128">
                                
                            </div>
                            
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-8">                                
                            <div class="form-group">
                                <label for="ig">Instagram</label>
                                <input type="text" class="form-control required" value="<?php echo $instagram?>" id="ig" name="ig" maxlength="128">
                                
                            </div>
                            
                        </div>
                    </div>
                    
                </div><!-- /.box-body -->
                
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
