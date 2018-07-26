<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="<?php if ($role == ROLE_CLIENT){echo 'fa fa-code-fork';}else{echo 'fa fa-dashboard';}?>" aria-hidden="true"></i> <?php if ($role == ROLE_CLIENT){echo 'Timeline Project';}else{echo 'Dashboard';}?>
        <small>Control panel</small>
      </h1>
    </section>
    <br/>
    <section class="content">
        <div class="row">
            <?php
            if($role == ROLE_CLIENT)
            { 
            ?>
            <div class="col-lg-12 col-xs-12">
              <ul class="timeline">
                  <!-- timeline time label -->
                  <li class="time-label">
                      <span class="bg-yellow">
                          Status : [InProgress]
                      </span>
                  </li>
                  <!-- /.timeline-label -->

                  <!-- timeline item -->
                  <li>
                      <!-- timeline icon -->
                      <i class="fa fa-envelope bg-blue"></i>
                      <div class="timeline-item">
                          <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                          <h3 class="timeline-header"><a href="#">Support Team</a> ...</h3>

                          <div class="timeline-body">
                              ...
                              Content goes here
                          </div>

                          <!-- <div class="timeline-footer">
                              <a class="btn btn-primary btn-xs">...</a>
                          </div> -->
                      </div>
                  </li>

                   <li>
                      <!-- timeline icon -->
                      <i class="fa fa-envelope bg-blue"></i>
                      <div class="timeline-item">
                          <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                          <h3 class="timeline-header"><a href="#">Support Team</a> ...</h3>

                          <div class="timeline-body">
                              ...
                              Content goes here
                          </div>

                          <!-- <div class="timeline-footer">
                              <a class="btn btn-primary btn-xs">...</a>
                          </div> -->
                      </div>
                  </li>


                  <li>
                      <!-- timeline icon -->
                      <i class="fa fa-envelope bg-blue"></i>
                      <div class="timeline-item">
                          <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                          <h3 class="timeline-header"><a href="#">Support Team</a> ...</h3>

                          <div class="timeline-body">
                              ...
                              Content goes here
                          </div>

                          <!-- <div class="timeline-footer">
                              <a class="btn btn-primary btn-xs">...</a>
                          </div> -->
                      </div>
                  </li>


                  <li>
                      <!-- timeline icon -->
                      <i class="fa fa-envelope bg-blue"></i>
                      <div class="timeline-item">
                          <span class="time"><i class="fa fa-clock-o"></i> 12:05</span>

                          <h3 class="timeline-header"><a href="#">Support Team</a> ...</h3>

                          <div class="timeline-body">
                              ...
                              Content goes here
                          </div>

                          <!-- <div class="timeline-footer">
                              <a class="btn btn-primary btn-xs">...</a>
                          </div> -->
                      </div>
                  </li>

                  <li><i class="fa fa-clock-o bg-gray"></i></li>
              </ul>
            </div>

            <?php
            }elseif($role == ROLE_SYSTEM || $role == ROLE_ADMIN)
            {
            ?>
           

            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $all; ?></h3>
                  <p>Total Products</p>
                </div>
                <div class="icon">
                  <i class="ion ion-cube"></i>
                </div>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $web; ?></h3>
                  <p>Websites</p>
                </div>
                <div class="icon">
                  <i class="ion ion-earth"></i>
                </div>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php echo $desktop; ?></h3>
                  <p>Desktop App</p>
                </div>
                <div class="icon">
                  <i class="ion ion-android-desktop"></i>
                </div>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo $mobile; ?></h3>
                  <p>Mobile App</p>
                </div>
                <div class="icon">
                  <i class="ion ion-android-phone-portrait"></i>
                </div>
              </div>
            </div><!-- ./col -->

             <?php }?>
          </div>
    </section>
</div>