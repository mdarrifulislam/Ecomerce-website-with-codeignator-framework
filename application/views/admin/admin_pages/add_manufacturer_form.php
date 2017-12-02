<?php 
$message = $this->session->message;

if(isset($message)){
    echo $message;
    $this->session->unset_userdata('message');
}
?>

 
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
            <form class="form-horizontal" action="<?php echo base_url();?>products/save_manufacturer" method="post">
                <fieldset>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Manufacturer Name</label>
                        <div class="controls">
                            <input type="text" value="" class="span6 typeahead"name="manufacturer_name" id="typeahead"  data-provide="typeahead" data-items="4" required>
                        </div>
                    </div>
                    <div class="control-group">
                        <label class="control-label" for="typeahead">Manufacturer Short Description</label>
                        <div class="controls">
                            <input type="text" value="" class="span6 typeahead" name="manufacturer_short_description" id="typeahead"  data-provide="typeahead" data-items="4" required>
                        </div>
                    </div>
                    <div class="control-group hidden-phone">
                        <label class="control-label" for="textarea">Manufacturer Long Description</label>
                        <div class="controls">
                            <textarea class="cleditor" id="text-area" rows="3" name="manufacturer_long_description"></textarea>
                        </div>
                    </div>
                    <div class="form-actions">
                        <button type="submit" class="btn btn-primary" name="btn">Save changes</button>
                    </div>
                </fieldset>
            </form>   
        </div>
    </div><!--/span-->
</div>



