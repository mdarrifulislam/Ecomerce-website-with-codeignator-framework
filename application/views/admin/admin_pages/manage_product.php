<?php
// echo '<pre>';
// print_r($all_category);
?>
<div class="row-fluid sortable">		
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon user"></i><span class="break"></span>Members</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <table class="table table-striped table-bordered bootstrap-datatable datatable">
                <thead>
                    <tr>
                        <th>Product Image </th>
                        <th>Product Name</th>
                        <th>Status</th>
                        <th>Action</th>

                    </tr>
                </thead>   
                <tbody>
                    <?php  foreach ($all_product as $product_info){ ?>
                        <tr>
                            <td> <img src="<?php echo $product_info->product_image;?>" height="100px" width="100px"></td>
                            <td class="center"><?php echo $product_info->product_name;?></td>
                            <td>
                                <?php
                                if($product_info->product_status==1){
                                    echo 'Active';
                                }elseif ($product_info->product_status==2) {
                                    echo 'Inactive';
                                    }elseif ($product_info->product_status==3) {
                                        echo 'Deleted';
                                    }
                                ?>
                            </td>

                             <td class="center">
                        <?php if($product_info->product_status==1 || $product_info->product_status==3){?>        
                                 <a class="btn btn-success" href="<?php echo base_url();?>product-inactive/<?php echo $product_info->product_id;?>">
                                        <i class="halflings-icon white thumbs-up"></i>                                            
                                    </a>
                                 <?php }elseif($product_info->product_status==2){ ?>
                                    <a class="btn btn-danger" href="<?php echo base_url();?>product-active/<?php echo $product_info->product_id;?>">
                                        <i class="halflings-icon white thumbs-down"></i>                                            
                                    </a>
                                 <?php }?>
                                 <a class="btn btn-info" href="<?php echo base_url();?>product-edit/<?php echo $product_info->product_id;?>">
                                    <i class="halflings-icon white edit"></i>                                            
                                </a>
                                <?php if($product_info->product_status!=3) {?>
                                    <a class="btn btn-danger" href="<?php echo base_url();?>product-delete/<?php echo $product_info->product_id;?>">
                                        <i class="halflings-icon white trash"></i> 
                                    </a>
                                <?php }?>
                            </td>
                        </tr>
                   <?php } ?>
                </tbody>
            </table>            
        </div>
    </div><!--/span-->

</div>



