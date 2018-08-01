<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1><i class="fa fa-code-fork"></i> Add Progress</h1>
    </section>
<section class="content">

    <div class="row">
        <!-- left column -->
        <div class="col-md-8">
          <!-- general form elements -->

          <div class="box box-primary">
            <div class="box-header">
                <h3 class="box-title"><small>Fill Detail Progress In This Project</small></h3>
            </div><!-- /.box-header -->
            <!-- form start -->
            <?php $this->load->helper("form"); ?>
            <form role="form" id="save" action="<?php echo base_url() ?>send_progress" method="post" role="form">
                <div class="box-body">
                    <div class="row">
                        <div class="col-md-8">                                
                            <div class="form-group">
                                <label for="title">Progress Title</label>
                                <input type="text" class="form-control required" placeholder="title for description progress" id="title" name="title" maxlength="128">
                                <input type="hidden" name="orderid" value="<?php echo $orderid?>">
                                <input type="hidden" name="userid" value="<?php echo $userid?>">
                            </div>
                        </div>
                    </div>
                       
                    <div class="row">
                        <div class="col-md-8">                                
                            <div class="form-group">
                                <label for="text">Badge Symbol Progress</label>
                                 <select class="form-control" id="badge" name="badge">
                                    <option value="">----- -- select -- -----</option>
                                    <option value="fa fa-archive bg-blue">Information</option>
                                    <option value="fa fa-archive bg-red">Bug / Error / Unpaid</option>
                                    <option value="fa fa-archive bg-black">Fix Bug / Error</option>
                                    <option value="fa fa-archive bg-aqua">Module Has Clear</option>
                                    <option value="fa fa-archive bg-green">Project Finish</option>
                                </select>
                            </div>

                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-11">                                
                            <div class="form-group">
                                <label for="text">Description Progress</label>
                                <textarea type="textarea" class="form-control required" id="text" name="text"></textarea>
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

<script type="text/javascript">
            //ckeditor init
       
</script>