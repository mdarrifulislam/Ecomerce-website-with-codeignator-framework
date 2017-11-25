<?php 
$message = $this->session->message;

if(isset($message)){
    echo $message;
    $this->session->unset_userdata('message');
}

?>



<div style="color:green;">
    <?php
    ?>


</div>


<div class="row-fluid sortable">
    <div class="box span12">
        <div class="box-header" data-original-title>
            <h2><i class="halflings-icon edit"></i><span class="break"></span>Form Elements</h2>
            <div class="box-icon">
                <a href="#" class="btn-setting"><i class="halflings-icon wrench"></i></a>
                <a href="#" class="btn-minimize"><i class="halflings-icon chevron-up"></i></a>
                <a href="#" class="btn-close"><i class="halflings-icon remove"></i></a>
            </div>
        </div>
        <div class="box-content">
            <form class="form-horizontal" action="<?php echo base_url(); ?>products/save_product" method="post" enctype="multipart/form-data">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Product Name</label>
                        <div class="controls">
                            <input type="text" value="" class="span6 typeahead"name="product_name" id="typeahead"  data-provide="typeahead" data-items="4" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Product Short Description</label>
                        <div class="controls">
                            <input type="text" value="" class="span6 typeahead" name="product_short_description" id="typeahead"  data-provide="typeahead" data-items="4" required>
                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea">Product Long Description</label>
                        <div class="controls">
                            <textarea class="cleditor" id="text-area" rows="3" name="product_long_description"></textarea>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Product Quantity</label>
                        <div class="controls">
                            <input type="text" value="" class="span6 typeahead" name="product_quantity" id="typeahead"  data-provide="typeahead" data-items="4" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="selectError3">Product Category</label>
                        <div class="controls">
                            <select id="selectError3" name="product_category">
                                <option>Select Category</option>
                                <?php 
                                foreach ($category_info AS $category){  ?>
                                <option value="<?php echo $category->category_id?>"><?php echo $category->category_name;?></option>
                                <?php  } ?>
                                
                                
                            </select>
                        </div>
                    </div>
                    
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Product Image</label>
                        <div class="controls">
                            <input type="file" value="" class="span6 typeahead"name="product_image" id="typeahead"  data-provide="typeahead" data-items="4" required>
                        </div>
                    </div>
                    
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary"  >Save changes</button>
                        <button type="reset" class="btn">Cancel</button>
                    </div>
                </fieldset>
            </form>   
        </div>
    </div><!--/span-->
</div>



