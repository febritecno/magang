<?php

$id = '';
$name = '';
$desc = '';
$img='';
$catagory = '';

if(!empty($userInfo))
{
    foreach ($userInfo as $uf)
    {
        $id = $uf->id;
        $name = $uf->name;
        $desc = $uf->desc;
        $img = $uf->img;
        $catagory = $uf->catagory;
    }
}


?>





<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        <i class="fa fa-archive"></i> Product Management
        <small>Add / Edit User</small>
      </h1>
    </section>
    
    <section class="content">
    
        <div class="row">
            <!-- left column -->
            <div class="col-md-8">
              <!-- general form elements -->
                
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Enter Product Details</h3>
                    </div><!-- /.box-header -->
                    <!-- form start -->
                    <?php $this->load->helper("form"); ?>
                    <form role="form" id="addProduct" action="<?php echo base_url() ?>Product/editProductSave" method="post" role="form" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-8">                                
                                    <div class="form-group">
                                        <label for="name">Product Name</label>
                                        <input type="text" class="form-control required" value="<?php echo $name ?>" id="name" name="name" maxlength="128">
                                        <input type="hidden" value="<?php echo $id?>" name="id" id="id" />
                                    </div>
                                    
                                </div>
                            </div>
                              <div class="row">
                                <div class="col-md-8">                                
                                    <div class="form-group">
                                        <label for="desc">Describe Product</label>
                                        <textarea type="textarea" rows="5" class="form-control required" value="<?php echo $catagory ?>" id="desc" name="desc" maxlength="500"><?php echo $desc?></textarea>
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">                                
                                    <div class="form-group">
                                    <label for="img">Upload Image</label>
                                     <input type="file" class="form-control required" name="img"/>  
                                    </div>
                                    
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-8">
                                    <div class="form-group">
                                        <label for="catagory">Catagory</label>
                                        <select class="form-control required" id="catagory" name="catagory" value="<?php echo $catagory ?>">
                                            <option value="<?php echo $catagory ?>">--- default value ---</option>
                                                    <option value="Websites">Websites</option>
                                                    <option value="Desktop App">Desktop App</option>
                                                     <option value="Mobile App">Mobile App</option>
                                        </select>
                                    </div>
                                </div>    
                            </div>
                        </div><!-- /.box-body -->
    
                        <div class="box-footer">
                            <input type="submit" class="btn btn-primary" value="Submit" />
                            <input type="reset" class="btn btn-default" value="Reset" />
                        </div>
                    </form>
                  </div>
            </div>
            
        </div>    
    </section>
    
</div>

<script src="<?php echo base_url(); ?>assets/js/addProduct.js" type="text/javascript"></script>