<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-exchange"></i> My Project
        <small>Panel</small>
      </h1>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12 text-right">
                <div class="form-group">
                  <a class="btn btn-success" href="<?php echo base_url()?>new_order"><i class="fa fa-edit"></i> Order Project</a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                    <h3 class="box-title">Project List</h3>
                    <div class="box-tools">
                        <form action="<?php echo base_url() ?>client/" method="POST" id="searchList">
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
                      <th>Status</th>
                      <th>Deadline</th>
                      <th class="text-center">Actions</th>
                    </tr>
                      <?php
                    if(!empty($clientRecords))
                    {
                        foreach($clientRecords as $record)
                        {
                    ?>
                    <tr>
                      <td><?php echo wordwrap($record->title,15,"<br>\n",TRUE);?></td>
                      <td><?php echo wordwrap($record->type,15,"<br>\n",TRUE);?></td>
                      
                      <td><a href="<?php echo base_url().'storage/document/'.$record->file ;?>"><span class="fa fa-download"> Download</span></a></td>
                    
                      <td><?php
                          switch ($s=$record->status) {
                            case "UNPAID":
                              echo "<span class='badge label-danger'>".$s."</span>";
                              break;

                            case "NON CASH":
                              echo "<span class='label label-warning'>".$s."</span>";
                              break;

                            case "PAID":
                              echo "<span class='badge label-success'>".$s."</span>";
                              break;

                            default:
                               echo "<span class='badge label-default'>Error !!</span>";
                              break;
                          }
                        ?>
                      </td>
                      <td><?php echo $record->deadline ;?></td>

                      <td class="text-center"> 
                          <a class="btn btn-sm bg-aqua" href="<?php echo base_url().'progress/'.$record->id;?>" title="View Progress Detail"><i class="fa fa-eye"></i></a>

                          <a class="btn btn-sm btn-danger" href="<?php echo base_url().'delete/'.$record->id?>" title="Delete Order"><i class="fa fa-trash"></i></a>

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
            jQuery("#searchList").attr("action", baseURL + "client/index/" + value);
            jQuery("#searchList").submit();
        });
    });
</script>
