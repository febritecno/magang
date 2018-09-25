<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-dashboard" aria-hidden="true"></i> Dashboard
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

          <div class="col-lg-4 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php echo $start; ?></h3>
                  <p>PROJECTS START</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-compose"></i>
                </div>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-4 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3><?php echo $inprogress; ?></h3>
                  <p>IN PROGRESS</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-timer"></i>
                </div>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-4 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3><?php echo $finish; ?></h3>
                  <p>PROJECTS FINISH</p>
                </div>
                <div class="icon">
                  <i class="ion ion-ribbon-b"></i>
                </div>
              </div>
            </div><!-- ./col -->
            
            <?php
            }elseif($role == ROLE_SYSTEM || $role == ROLE_ADMIN)
            {
            ?>
           <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-blue">
            <span class="info-box-icon"><i class="fa fa-suitcase"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">total order</span>
              <span class="info-box-number"><?php echo $total; ?></span>
              <div class="progress">
                <div class="progress-bar" style="width: 0%"></div>
              </div>
                  <span class="progress-description">
                    ALL PROJECT
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>


        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-red">
            <span class="info-box-icon"><i class="fa fa-remove"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">unpaid order</span>
              <span class="info-box-number"><?php echo $unpaid; ?></span>

              <div class="progress">
                <div class="progress-bar" style="width: 0%"></div>
              </div>
                  <span class="progress-description">
                    START
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>


        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-yellow">
            <span class="info-box-icon"><i class="fa fa-spinner"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">non cash order</span>
              <span class="info-box-number"><?php echo $noncash; ?></span>

              <div class="progress">
                <div class="progress-bar" style="width: 0%"></div>
              </div>
                  <span class="progress-description">
                    IN PROGRESS
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>


        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box bg-green">
            <span class="info-box-icon"><i class="fa fa-ticket"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">paid order</span>
              <span class="info-box-number"><?php echo $paid; ?></span>

              <div class="progress">
                <div class="progress-bar" style="width: 0%"></div>
              </div>
                  <span class="progress-description">
                    FINISH
                  </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>

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