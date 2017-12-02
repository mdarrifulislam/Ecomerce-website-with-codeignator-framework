<div class="features_items"><!--features_items-->
    <h2 class="title text-center">Features Items</h2>
    <?php
    foreach ($all_manufacturer_product as $active_product){?>
    <div class="col-sm-4">
        <div class="product-image-wrapper">
            <div class="single-products">
                <div class="productinfo text-center">
                    <img src="<?php echo base_url().$active_product->product_image ?>" alt="" height="180px" width="180px"/>
                    <h2><?php echo $active_product->product_price;?></h2>
                    <p><?php echo $active_product->product_name?></p>
                    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                </div>
                <div class="product-overlay">
                    <div class="overlay-content">
                        <h2><?php echo $active_product->product_price;?></h2>
                        <p><?php echo $active_product->product_name?></p>
                        <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                    </div>
                </div>
            </div>
            <div class="choose">
                <ul class="nav nav-pills nav-justified">
                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
                    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
                </ul>
            </div>
        </div>
    </div>
    <?php } ?>
</div>