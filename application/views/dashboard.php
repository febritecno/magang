<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-tachometer" aria-hidden="true"></i> Dashboard
        <small>Control panel</small>
      </h1>
    </section>
    
    <section class="content">
        <div class="row">
            <?php
            if($role == ROLE_CLIENT)
            { 
            ?>
             <!-- code here client -->

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