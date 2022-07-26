<h2 class="sr-only">Brands Carousel</h2>
<div class="container">
    <div id="owl-brands" class="owl-brands owl-carousel unicase-owl-carousel owl-outer-nav">
        <?php
        if (!empty($merek)) {
            foreach ($merek as $key => $value) {
                ?>
                <div class="item">
                    <a href="#">
                        <figure>
                            <figcaption class="text-overlay">
                                <div class="info">
                                    <h4>Acer</h4>
                                </div><!-- /.info -->
                            </figcaption>
                            <img width="166px" height="50px" src="<?php echo base_url(); ?>main_assets/landing_page_asset/assets/images/blank.gif" data-echo="<?php echo base_url(); ?>/<?php echo $value->gambar_merek; ?>" class="img-responsive" alt="">
                        </figure>
                    </a>
                </div><!-- /.item -->
                <?php
            }
        }
        ?>      
        <div class="item">
            <a href="#">
                <figure>
                    <figcaption class="text-overlay">
                        <div class="info">
                            <h4>Gionee</h4>
                        </div><!-- /.info -->
                    </figcaption>
                    <img src="<?php echo base_url(); ?>main_assets/landing_page_asset/assets/images/blank.gif" data-echo="<?php echo base_url(); ?>main_assets/landing_page_asset/assets/images/brands/5.png" class="img-responsive" alt="">
                </figure>
            </a>
        </div><!-- /.item -->     
        <div class="item">
            <a href="#">
                <figure>
                    <figcaption class="text-overlay">
                        <div class="info">
                            <h4>Gionee</h4>
                        </div><!-- /.info -->
                    </figcaption>
                    <img src="<?php echo base_url(); ?>main_assets/landing_page_asset/assets/images/blank.gif" data-echo="<?php echo base_url(); ?>main_assets/landing_page_asset/assets/images/brands/5.png" class="img-responsive" alt="">
                </figure>
            </a>
        </div><!-- /.item -->     
        <div class="item">
            <a href="#">
                <figure>
                    <figcaption class="text-overlay">
                        <div class="info">
                            <h4>Gionee</h4>
                        </div><!-- /.info -->
                    </figcaption>
                    <img src="<?php echo base_url(); ?>main_assets/landing_page_asset/assets/images/blank.gif" data-echo="<?php echo base_url(); ?>main_assets/landing_page_asset/assets/images/brands/5.png" class="img-responsive" alt="">
                </figure>
            </a>
        </div><!-- /.item -->     
    </div><!-- /.owl-carousel -->
</div>