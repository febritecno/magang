<?php

$id = '';
$headline = '';
$address = '';
$phone='';
$mail = '';
$lat = '';
$long = '';

if(!empty($kontak))
{
    foreach ($kontak as $uf)
    {
        $id = $uf->id;
        $headline = $uf->headline;
        $address = $uf->address;
        $phone = $uf->phone;
        $mail = $uf->mail;
        $lat = $uf->lat;
        $long = $uf->long;
    }
}


?>


<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-phone"></i> Contact Management
       
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title"><small>Enter Contacts Information</small></h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="save" action="<?php echo base_url() ?>kontak/save" method="post" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-8">                                
                                    <div class="form-group">
                                        <label for="headline">Headline</label>
                                        <input type="text" class="form-control required" value="<?php echo $headline?>" id="headline" name="headline" maxlength="128">
                                        <input type="hidden" value="<?php echo $id;?>" name="id" id="id" />
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">                                
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <textarea type="text" class="form-control required" rows="4" value="<?php echo $address?>" id="address" name="address" maxlength="128"><?php echo $address?></textarea> 
                                    
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">                                
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="number" class="form-control required" value="<?php echo $phone?>" id="phone" name="phone" maxlength="128">
                                    
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">                                
                                    <div class="form-group">
                                        <label for="mail">Mail</label>
                                        <input type="email" class="form-control required" value="<?php echo $mail?>" id="mail" name="mail" maxlength="128">
                                       
                                    </div>
                                    
                                </div>
                            </div>
                            <br/>
                            <br/>

                    <div class="box-header">
                        <h3 class="box-title">Enter Maps Location</h3>

                    </div>
                     <br/>
                    <div class="row">
                                <div class="col-md-4">                                
                                    <div class="form-group">
                                        <label for="lat">Latitude</label>
                                        <input type="text" class="form-control required" value="<?php echo $lat?>" id="lat" name="lat" maxlength="128">
                                    </div>
                                    
                                    
                                </div>
                            <div class="col-md-4">                                  
                                     <div class="form-group">
                                        <label for="long">Longitude</label>
                                        <input type="text" class="form-control required" value="<?php echo $long?>" id="long" name="long" maxlength="128">
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
