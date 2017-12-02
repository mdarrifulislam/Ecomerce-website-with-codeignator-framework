 

 
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
            <form class="form-horizontal" action="<?php echo base_url();?>products/update_category" method="post">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Category Name</label>
                        <div class="controls">
                            <input type="text" value="<?php echo $category_data->category_name;?>" class="span6 typeahead"name="category_name" id="typeahead"  data-provide="typeahead" data-items="4" required>
                            <input type="hidden" value="<?php echo $category_data->category_id;?>" name="category_id">
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Category Short Description</label>
                        <div class="controls">
                            <input type="text" value="<?php echo  $category_data->category_short_description;?>" class="span6 typeahead" name="category_short_description" id="typeahead"  data-provide="typeahead" data-items="4" required>
                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea">Category Long Description</label>
                        <div class="controls">
                            <textarea class="cleditor" id="text-area" rows="3" name="category_long_description">
                                <?php echo  $category_data->category_long_description;?>
                            </textarea>
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



