<?php $top_product = $this->products_model->select_top_product() ?>


<div class="col-sm-12">
    <div id="slider-carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
            <li data-target="#slider-carousel" data-slide-to="1"></li>
            <li data-target="#slider-carousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <?php
            $i = 1;
            foreach ($top_product as $slider_product) {
                if ($i == 1) {
                    echo "<div class='item active'>";
                } else {
                    echo "<div class='item'>";
                }
                ?>

                <div class="col-sm-6">
                    <h1><span>E</span>-SHOPPER</h1>
                    <h2><?php echo $slider_product->product_name ?></h2>
                    <p><?php echo $slider_product->product_short_description ?></p>
                    <button type="button" class="btn btn-default get">Get it now</button>
                </div>
                <div class="col-sm-6">
                    <img src="<?php echo base_url() . $slider_product->product_image ?>" class="girl img-responsive" alt="" />
    <!--                <img src="<?php echo base_url() ?>assets/font_end_assets/images/home/girl1.jpg" class="girl img-responsive" alt="" />-->
                    <img src="<?php echo base_url() ?>assets/font_end_assets/images/home/pricing.png"  class="pricing" alt="" />
                </div>
            </div>
        <?php $i++; }  ?>


    </div>

    <a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
        <i class="fa fa-angle-left"></i>
    </a>
    <a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
        <i class="fa fa-angle-right"></i>
    </a>
</div>

</div>