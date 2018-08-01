<?php 
$progress='';
$t_order='';
$type='';
$deadline='';

foreach ($pro as $p) {
  $progress=$p->progress;
  $t_order=$p->t_order;
  $type=$p->type;
  $deadline=$p->deadline;
}
?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <h1>
      <i class="fa fa-code-fork"></i> Timeline Progress
      <small>Panel</small>
    </h1>
  </section>
  <div class="row">
    
  <section class="content">
    <div class="col-lg-12 well">
      <h4><span class="fa fa-archive"> PROJECT NAME :</span> <?php echo $t_order ?>
      </h4>
       <ul>
        <small>
        <li>Type Project : <b><?php echo $type ?></b></li>
        <li>Estimate End Of Project : <b><?php echo $deadline?></b></li>
        </small>
      </ul>
    </div>
   <div class="col-lg-12 text-right"><a href="" class="btn btn-primary fa fa-refresh"></a></div> 
   <div class="col-lg-12">
    <ul class="timeline">
      <!-- timeline time label -->
      <li class="time-label">
        <?php
        switch ($progress) {
          case 'START':
            echo '<span class="bg-red"><i>PROGRESS</i> : [ <u>'.$progress.'</u> ]</span>';
            break;
          case 'IN PROGRESS':
            echo '<span class="bg-yellow"><i>PROGRESS</i> : [ <u>'.$progress.'</u> ]</span>';
            break;
          case 'FINISH':
            echo '<span class="bg-green"><i>PROGRESS</i> : [ <u>'.$progress.'</u> ]</span>';
            break;
          
          default:
            echo '<span class="bg-black">DATA NOT FOUND, PLEASE SELECT OTHER DATA</span>';
            break;
        }

        ?>
      </li>
      <!-- /.timeline-label -->

      <!-- timeline item -->
      <?php 
      foreach ($pro as $p) 
      {
      ?>
      <li>
        <!-- timeline icon -->
        <i class="<?php echo $p->badge?>"></i>
        <div class="timeline-item">
          <span class="time"><i class="fa fa-clock-o"></i> <?php echo $p->timestamp?></span>

          <h3 class="timeline-header"><a href="#" title=" <?php echo $p->email?>" data-container="body" data-toggle="popover" data-placement="bottom" data-content="Phone : <?php echo $p->mobile?>"><?php echo $p->name?></a> <?php echo $p->t_title ?></h3>

          <div class="timeline-body">
            <?php echo $p->text?>
          </div>
        </div>
      </li>
    <?php }?>
      <li><i class="fa fa-clock-o bg-gray"></i></li>
    </ul>
    </div>
  </section>
   <div class="col-lg-12" style="margin-bottom: 10%"></div>
  </div>
</div>


<script>
  $(function () 
      { $("[data-toggle='popover']").popover();
      });
</script>