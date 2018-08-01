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
                                <label for="text">Badge Progress</label>
                                 <select class="form-control" id="badge" name="badge">
                                    <option value="">----- -- select -- -----</option>
                                    <option value="fa fa-commenting bg-blue">Information</option>
                                    <option value="fa fa-calendar bg-blue">Planing</option>
                                    <option value="fa fa-ban bg-red">Bug / Error</option>
                                    <option value="fa fa-calendar-times-o bg-red">Unpaid</option>
                                    <option value="fa fa-code bg-black">Fix Bug Module</option>
                                    <option value="fa fa-check-square-o bg-aqua">Module Has Clear</option>
                                    <option value="fa fa-flag-checkered bg-green">Project Finish</option>
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

    </div>    
</section>

</div>