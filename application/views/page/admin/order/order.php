<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-credit-card"></i> Orders
        <small>Management</small>
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                  <a class="btn btn-primary" href=""><i class="fa fa-refresh"></i></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Order List</h3>
                    <div class="box-tools">
                        <form action="<?php echo base_url() ?>order/" method="POST" id="searchList">
                            <div class="input-group">
                             <input type="text" name="searchText" value="<?php echo $searchText; ?>" class="form-control input-sm pull-right" style="width: 150px;" placeholder="Search"/>
                              <div class="input-group-btn">
                                <button class="btn btn-sm btn-default searchList"><i class="fa fa-search"></i></button>
                              </div>
                            </div>
                        </form>
                    </div>
                </div><!-- /.box-header -->
                <div class="box-body table-responsive no-padding">
                  <table class="table table-hover">
                    <tr>
                      <th>Project Title</th>
                      <th>Type</th>
                      <th>Document</th>
                      <th>Client</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>Deadline</th> 
                      <th>Status</th>
                      <th>Progress</th>
                      <th>Timeline</th>
                      <th class="text-center">Actions</th>
                    </tr>
                      <?php
                    if(!empty($orderRecords))
                    {
                        foreach($orderRecords as $record)
                        {
                    ?>
                    <tr>
                      <td><?php echo wordwrap($record->title,15,"<br>\n",TRUE);?></td>
                      <td><?php echo wordwrap($record->type,15,"<br>\n",TRUE);?></td>
                      <td><a href="<?php echo base_url().'storage/document/'.$record->file ;?>"><span class="fa fa-download"> Download</span></a></td>
                      <td><?php echo wordwrap($record->name,10,"<br>\n",TRUE)?></td>
                      <td><?php echo $record->mobile;?></td>
                      <td><?php echo $record->email ;?></td>
                      <td><?php echo $record->deadline ;?></td>
                       <td>  
                      <?php
                          switch ($s=$record->status) {
                            case "UNPAID":
                              echo "<a href='".base_url()."update_status/".$record->id."' class='badge label-danger'>".$s."</a>";
                              break;

                            case "NON CASH":
                              echo "<a href='".base_url()."update_status/".$record->id."' class='label label-warning'>".$s."</a>";
                              break;

                            case "PAID":
                              echo "<a href='".base_url()."update_status/".$record->id."' class='badge label-success'>".$s."</a>";
                              break;

                            default:
                               echo "<a href='".base_url()."update_status/".$record->id."' class='badge label-default'>Error !!</a>";
                              break;
                          }
                        ?>
                      </td>
                      <td><?php
                          switch ($s=$record->progress) {
                            case "START":
                              echo "<a href='".base_url()."update_status/".$record->id."' class='badge label-danger'>".$s."</a>";
                              break;
                            case "IN PROGRESS":
                              echo "<a href='".base_url()."update_status/".$record->id."' class='label label-warning'>".$s."</a>";
                              break;
                            case "FINISH":
                              echo "<a href='".base_url()."update_status/".$record->id."' class='badge label-success'>".$s."</a>";
                              break;

                            default:
                               echo "<a href='".base_url()."update_status/".$record->id."' class='badge label-default'>Error !!</a>";
                              break;
                          }
                        ?>
                      </td>
                       <!-- memasang payload by orderid dan user id yang telah login(pembuat progress) sebagai data untuk mengambil progreess di client-->
                      <td><a href="<?php echo base_url().'add_progress/'.$record->id.'/'.$this->session->userdata('userId');?>" title="Add Progress To This Project" class="badge label-info"><i class="fa fa-paper-plane-o"></i></a>
                          <a href="<?php echo base_url().'progress/'.$record->id;?>" title="View Progress Detail" class="badge label-success"><i class="fa fa-eye"></i></a>
                      </td>

                      <td class="text-center"> 
                          <a class="btn btn-sm btn-danger" href="<?php echo base_url().'admin_delete/'.$record->id;?>" title="Delete"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                  <?php 
                      }
                    }
                  ?>
                  </table>
                  
                    </div><!-- /.box-body -->
                <div class="box-footer clearfix">
                    <?php echo $this->pagination->create_links(); ?>
                </div>
              </div><!-- /.box -->


               <div class="col-xs-4" style="position:fixed!important;bottom:0px!important;z-index:10!important;">
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
                    <div class="col-xs-12">
                        <?php echo validation_errors('<div class="alert alert-danger alert-dismissable">', ' <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button></div>'); ?>
                    </div>
                </div>
            </div>

            </div>
        </div>
    </section>




</div>
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/common.js" charset="utf-8"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('ul.pagination li a').click(function (e) {
            e.preventDefault();            
            var link = jQuery(this).get(0).href;            
            var value = link.substring(link.lastIndexOf('/') + 1);
            jQuery("#searchList").attr("action", baseURL + "order/index/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>