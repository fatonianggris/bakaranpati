<br>
<div id="" class="content-area">
    <main id="main" class="site-main">
        <header class="page-header">    
            <p class="woocommerce-result-count">Tampilkan 1&ndash;15 dari 20 item</p>
        </header>

        <div class="shop-control-bar">
            <ul class="shop-view-switcher nav nav-tabs" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" title="Grid View" href="#grid"><i class="fa fa-th"></i></a></li>
                <li class="nav-item"><a class="nav-link " data-toggle="tab" title="Grid Extended View" href="#grid-extended"><i class="fa fa-align-justify"></i></a></li>
                <li class="nav-item"><a class="nav-link " data-toggle="tab" title="List View Small" href="#list-view-small"><i class="fa fa-th-list"></i></a></li>
            </ul>
            <!--            <form class="woocommerce-ordering" method="get">
                            <select name="orderby" class="orderby">
                                <option value="menu_order"  selected='selected'>Urutkan</option>
                                <option value="popularity" >Sort by popularity</option>
                                <option value="rating" >Sort by average rating</option>
                                <option value="date" >Sort by newness</option>
                                <option value="price" >Sort by price: low to high</option>
                                <option value="price-desc" >Sort by price: high to low</option>
                            </select>
                        </form>-->

            <form class="form-electro-wc-ppp"><select name="ppp" onchange="this.form.submit()" class="electro-wc-wppp-select c-select"><option value="15"  selected='selected'>Tampilkan 15</option><option value="-1" >Tampilkan Semua</option></select></form>
            <nav class="electro-advanced-pagination">
                <form method="post" class="form-adv-pagination"><input id="goto-page" size="2" min="1" max="2" step="1" type="number" class="form-control" value="1" /></form> dari 2<a class="next page-numbers" href="#">&rarr;</a>			<script>
                    jQuery(document).ready(function ($) {
                        $('.form-adv-pagination').on('submit', function () {
                            var link = '#',
                                    goto_page = $('#goto-page').val(),
                                    new_link = link.replace('%#%', goto_page);

                            window.location.href = new_link;
                            return false;
                        });
                    });
                </script>
            </nav>
        </div>

        <div class="tab-content">
            <div role="tabpanel" class="tab-pane active" id="grid" aria-expanded="true">
                <ul class="products columns-4">
                    <?php
                    if (!empty($pumum)) {
                        foreach ($pumum as $key => $value) {
                            ?>
                            <li class="product">
                                <div class="product-outer">
                                    <div class="product-inner">
                                        <span class="loop-product-categories"><a href="" rel="tag"><?php echo ucwords($value->nama_kat); ?></a></span>
                                        <a href="<?php echo site_url('produk/detail_produk/'.$value->id); ?>">
                                            <h3><?php echo ucwords($value->nama_produk); ?></h3>
                                            <div class="product-thumbnail">
                                                <img width="250px" height="232px" data-echo="<?php echo base_url(); ?>/<?php echo $value->gambar; ?>" src="<?php echo base_url(); ?>main_assets/landing_page_asset/assets/images/blank.gif" alt="">
                                            </div>
                                        </a>
                                        <div class="price-add-to-cart">
                                            <span class="price">
                                                <span class="electro-price">
                                                    <ins><span class="amount">Rp. <?php echo number_format($value->harga_barang, 0, ',', '.'); ?></span></ins>                                          
                                                </span>
                                            </span>
                                            <a rel="nofollow" href="" ><img width="36px" height="36px" data-echo="<?php echo base_url(); ?>main_assets/landing_page_asset/assets/images/wa.png" src="<?php echo base_url(); ?>main_assets/landing_page_asset/assets/images/blank.gif" alt=""></a>
                                        </div><!-- /.price-add-to-cart -->
                                        <div class="hover-area">
                                            <div class="action-buttons">
                                                <a href="#" rel="nofollow" class="bold"><i class="fa fa-whatsapp"></i> Pesan Lewat Whats App</a>                                       
                                            </div>
                                        </div>
                                    </div><!-- /.product-inner -->
                                </div><!-- /.product-outer -->
                            </li>
                            <?php
                        }
                    }
                    ?>                     
                </ul>
            </div>
            <div role="tabpanel" class="tab-pane" id="grid-extended" aria-expanded="true">
                <ul class="products columns-4">
                    <?php
                    if (!empty($pumum)) {
                        foreach ($pumum as $key => $value) {
                            ?>
                            <li class="product">
                                <div class="product-outer">
                                    <div class="product-inner">
                                        <span class="loop-product-categories"><a href="" rel="tag"><?php echo ucwords($value->nama_kat); ?></a></span>
                                        <a href="<?php echo site_url('produk/detail_produk/'.$value->id); ?>">
                                            <h3><?php echo ucwords($value->nama_produk); ?></h3>
                                            <div class="product-thumbnail">
                                                <img width="250px" height="232px" class="wp-post-image" data-echo="<?php echo base_url(); ?>/<?php echo $value->gambar; ?>" src="<?php echo base_url(); ?>main_assets/landing_page_asset/assets/images/blank.gif" alt="">
                                            </div>
                                            <div class="product-rating">
                                                <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div>
                                            </div>
                                            <div class="product-short-description">
                                                <?php echo substr($value->desc_barang, 0, 200); ?>
                                            </div>
                                            <div class="product-sku">Stok: <?php echo $value->stok; ?> item</div>
                                        </a>
                                        <div class="price-add-to-cart">
                                            <span class="price">
                                                <span class="electro-price">
                                                    <ins><span class="amount">Rp. <?php echo number_format($value->harga_barang, 0, ',', '.'); ?></span></ins>                                                   
                                                </span>
                                            </span>
                                            <a rel="nofollow" href="" ><img width="37px" height="37px" data-echo="<?php echo base_url(); ?>main_assets/landing_page_asset/assets/images/wa.png" src="<?php echo base_url(); ?>main_assets/landing_page_asset/assets/images/blank.gif" alt=""></a>                               
                                        </div><!-- /.price-add-to-cart -->
                                        <div class="hover-area">
                                            <div class="action-buttons">
                                                <a href="#" rel="nofollow" class="bold"><i class="fa fa-whatsapp"></i> Pesan Lewat Whats App</a>  
                                            </div>
                                        </div>
                                    </div><!-- /.product-inner -->
                                </div><!-- /.product-outer -->
                            </li>
                            <?php
                        }
                    }
                    ?>           
                </ul>
            </div>            
            <div role="tabpanel" class="tab-pane" id="list-view-small" aria-expanded="true">
                <ul class="products columns-3">
                    <?php
                    if (!empty($pumum)) {
                        foreach ($pumum as $key => $value) {
                            ?>
                            <li class="product list-view list-view-small">
                                <div class="media">
                                    <div class="media-left">
                                        <a href="<?php echo site_url('produk/detail_produk/'.$value->id); ?>">
                                            <img width="250px" height="232px" class="wp-post-image" data-echo="<?php echo base_url(); ?>/<?php echo $value->gambar; ?>" src="<?php echo base_url(); ?>main_assets/landing_page_asset/assets/images/blank.gif" alt="">
                                        </a>
                                    </div>
                                    <div class="media-body media-middle">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <span class="loop-product-categories"><a rel="tag" href="<?php echo site_url('produk/detail_produk/'.$value->id); ?>"><?php echo ucwords($value->nama_kat); ?></a></span><a href="<?php echo site_url('produk/detail_produk/'.$value->id); ?>"><h3><?php echo ucwords($value->nama_produk); ?></h3>
                                                    <div class="product-short-description">
                                                        <?php echo substr($value->desc_barang, 0, 200); ?>
                                                    </div>
                                                    <div class="product-rating">
                                                        <div title="Rated 4 out of 5" class="star-rating"><span style="width:80%"><strong class="rating">4</strong> out of 5</span></div>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="price-add-to-cart">
                                                    <span class="price"><span class="electro-price"><span class="amount">Rp. <?php echo number_format($value->harga_barang, 0, ',', '.'); ?></span></span></span>
                                                    <a rel="nofollow" href="" ><img width="36px" height="36px" data-echo="<?php echo base_url(); ?>main_assets/landing_page_asset/assets/images/wa.png" src="<?php echo base_url(); ?>main_assets/landing_page_asset/assets/images/blank.gif" alt=""></a>
                                                </div><!-- /.price-add-to-cart -->
                                                <div class="hover-area">
                                                    <div class="action-buttons">
                                                        <a href="#" rel="nofollow" class="bold"><i class="fa fa-whatsapp"></i> Pesan Lewat Whats App</a>  
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <?php
                        }
                    }
                    ?>          
                </ul>
            </div>
        </div>
        <div class="shop-control-bar-bottom">
            <form class="form-electro-wc-ppp">
                <select class="electro-wc-wppp-select c-select" onchange="this.form.submit()" name="ppp"><option selected="selected" value="15">Tampilkan 15</option><option value="-1">Tampilkan Semua</option></select>
            </form>
            <p class="woocommerce-result-count">Tampilkan 1&ndash;15 dari 20 item</p>
            <nav class="woocommerce-pagination">
                <ul class="page-numbers">
                    <li><span class="page-numbers current">1</span></li>
                    <li><a href="#" class="page-numbers">2</a></li>
                    <li><a href="#" class="next page-numbers">→</a></li>
                </ul>
            </nav>
        </div>
        <section class="section-product-cards-carousel" >
            <header>
                <h2 class="h1">Rekomendasi Produk</h2>
                <div class="owl-nav">
                    <a href="#products-carousel-prev" data-target="#recommended-product" class="slider-prev"><i class="fa fa-angle-left"></i></a>
                    <a href="#products-carousel-next" data-target="#recommended-product" class="slider-next"><i class="fa fa-angle-right"></i></a>
                </div>
            </header>

            <div id="recommended-product">
                <div class="woocommerce columns-4">
                    <div class="products owl-carousel products-carousel columns-4 owl-loaded owl-drag">
                        <?php
                        if (!empty($prekom)) {
                            foreach ($prekom as $key => $value) {
                                ?>
                                <div class="product">
                                    <div class="product-outer">
                                        <div class="product-inner">
                                            <span class="loop-product-categories"><a href="" rel="tag"><?php echo ucwords($value->nama_kat); ?></a></span>
                                            <a href="<?php echo site_url('produk/detail_produk/'.$value->id); ?>">
                                                <h3><?php echo ucwords($value->nama_produk); ?></h3>
                                                <div class="product-thumbnail">
                                                    <img width="250px" height="232px" src="<?php echo base_url(); ?>main_assets/landing_page_asset/assets/images/blank.gif" data-echo="<?php echo base_url(); ?>/<?php echo $value->gambar; ?>" class="img-responsive" alt="">
                                                </div>
                                            </a>

                                            <div class="price-add-to-cart">
                                                <span class="price">
                                                    <span class="electro-price">
                                                        <ins><span class="amount">Rp. <?php echo number_format($value->harga_barang, 0, ',', '.'); ?></span></ins>                                                     
                                                    </span>
                                                </span>
                                                <a rel="nofollow" href="single-product.html" ><img width="37px" height="37px" data-echo="<?php echo base_url(); ?>main_assets/landing_page_asset/assets/images/wa.png" src="<?php echo base_url(); ?>main_assets/landing_page_asset/assets/images/blank.gif" alt=""></a>
                                            </div><!-- /.price-add-to-cart -->

                                            <div class="hover-area">
                                                <div class="action-buttons">
                                                    <a href="#" rel="nofollow" class="bold"><i class="fa fa-whatsapp"></i> Pesan lewat Whats App</a>                                 
                                                </div>
                                            </div>
                                        </div><!-- /.product-inner -->
                                    </div><!-- /.product-outer -->
                                </div><!-- /.products -->
                                <?php
                            }
                        }
                        ?>          
                    </div>
                </div>
            </div>
        </section>
    </main><!-- #main -->
</div><!-- #primary -->
