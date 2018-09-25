<?php

$id='';
$status='';
$progress='';
$type='';
$title='';

foreach ($records as $record) {
    $id=$record->id;
    $status=$record->status;
    $type=$record->type;
    $progress=$record->progress;
    $title=$record->title;
}

?>

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-edit"></i> SET PROPERTY
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title"><small><b><?php echo $title?></b></small></h3><br/>
                        <h3 class="box-title"><small><?php echo $type?></small></h3>
                    </div><!-- /.box-header <-->
                    <!-- form start -->
                    
                    <hr>

                    <?php $this->load->helper("form"); ?>
                    <form role="form" action="<?php echo base_url()?>send_update_status" method="post" role="form">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">                                
                                    <div class="input-group">
                                    <span class="input-group-addon" style="background-color: #eeeeee82;border-color: #d6d6d6;border-bottom-left-radius: 15px;border-top-left-radius: 15px;border-top-style: dashed;"><b>STATUS</b></span>
                                            <select class="form-control" name="status" id="status" value="<?php echo $status?>">
                                                    <option value="<?php echo $status?>">DEFAULT - <?php echo $status?></option>
                                                    <option value="UNPAID">UNPAID</option>
                                                    <option value="NON CASH">NON CASH</option>
                                                    <option value="PAID">PAID</option>
                                            </select>
                                            <input type="hidden" value="<?php echo $id?>" name="id" id="id" />
                                    </div>
                                    
                                </div>
                                <div class="col-md-6">
                                    <div class="input-group">
                                    <span class="input-group-addon" style="background-color: #eeeeee82;border-color: #d6d6d6;border-bottom-left-radius: 15px;border-top-left-radius: 15px;border-top-style: dashed;"><b>PROGRESS</b></span>
                                            <select class="form-control" name="progress" id="progress" value="<?php echo $progress?>">
                                                    <option value="<?php echo $progress?>">DEFAULT - <?php echo $progress?></option>
                                                    <option value="START">START</option>
                                                    <option value="IN PROGRESS">IN PROGRESS</option>
                                                    <option value="FINISH">FINISH</option>
                                            </select>
                                    </div>
                                </div>
                            </div>
                        </div><!-- /.box-body -->
                        <br/>
                        <div class="box-footer">
                            <div class="col-md-12 text-center">
                            <input type="submit" class="btn btn-primary" title="update status" value="CHANGE ORDER" />
                            <a href="<?php base_url()?>/order" class="btn btn-warning" title="back to order"><span class="fa fa-arrow-left"></span></a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>    
    </section>
</div>