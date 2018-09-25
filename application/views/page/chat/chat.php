<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-bookmark-o"></i> CHAT LISTING
      </h1>
    </section>
    
    <section class="content">
    
        <div class="box box-warning">
            <div class="box-header with-border">
              <h3 class="box-title">Contacts Person</h3>
            </div>
            <!-- /.box-header -->
            <?php if($role == ROLE_SYSTEM || $role == ROLE_ADMIN){?>
            <div class="box-body">
              <ul class="products-list product-list-in-box" style="max-height: 350px;overflow-y: auto">
                <?php foreach ($records as $record): ?>
                <li class="item">
                  <div class="product-img">
                    <img src="<?php base_url()?>assets/dist/img/avatar.png" class="img-circle" alt="Photos">
                  </div>
                  <div class="product-info">
                    <a href="#" onclick="javascript:chatWith('<?php echo $record->userId?>','<?php echo $record->name?>' )" class="product-title"><?php echo $record->name?>
                     <?php 
                          switch ($record->roleId) {
                              case '1':
                                echo '<span class="label label-danger pull-right">Admin System</span>';
                                  break;
                              case '2':
                                echo '<span class="label label-info pull-right">Admin</span>';
                                  break;
                              case '3':
                                echo '<span class="label label-success pull-right">Client</span>';
                                  break;
                              default:
                                echo '<span class="label label-danger pull-right">Error</span>';
                                  break;
                          }
                          ?>
                     </a>
                    <span class="product-description">
                          <span class="label label-info"><?php echo $record->email?></span> <span class="label label-warning"><?php echo $record->mobile?></span>
                        </span>
                  </div>
                </li>
                <?php endforeach ?>
                <!-- /.item -->
              </ul>
            </div>
        <?php }
            if($role == ROLE_CLIENT){
            ?>
            <div class="box-body">
              <ul class="products-list product-list-in-box" style="max-height: 350px;overflow-y: auto">
                <?php foreach ($client_records as $record): ?>
                <li class="item">
                  <div class="product-img">
                    <img src="<?php base_url()?>assets/dist/img/avatar.png" class="img-circle" alt="Photos">
                  </div>
                  <div class="product-info">
                    <a href="#" onclick="javascript:chatWith('<?php echo $record->userId?>','<?php echo $record->name?>' )" class="product-title"><?php echo $record->name?>
                     <?php 
                          switch ($record->roleId) {
                              case '1':
                                echo '<span class="label label-danger pull-right">Admin System</span>';
                                  break;
                              case '2':
                                echo '<span class="label label-info pull-right">Admin</span>';
                                  break;
                              case '3':
                                echo '<span class="label label-success pull-right">Client</span>';
                                  break;
                              default:
                                echo '<span class="label label-danger pull-right">Error</span>';
                                  break;
                          }
                          ?>
                     </a>
                    <span class="product-description">
                          <span class="label label-info"><?php echo $record->email?></span> <span class="label label-warning"><?php echo $record->mobile?></span>
                        </span>
                  </div>
                </li>
                <?php endforeach ?>
                <!-- /.item -->
              </ul>
            </div>
        <?php }?>
            <!-- /.box-body -->
            <!-- /.box-footer -->
          </div>   
    </section>
</div>