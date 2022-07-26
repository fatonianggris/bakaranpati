<nav class="woocommerce-breadcrumb">
    <a href="<?php echo site_url('/home'); ?>">Home</a>
    <span class="delimiter"><i class="fa fa-angle-right"></i>
    </span>
    <a href=""><?php echo ucwords($produk[0]->nama_kat); ?></a>
    <span class="delimiter"><i class="fa fa-angle-right"></i>    
    </span><?php echo ucwords($produk[0]->nama_produk); ?>
</nav>

<div id="" class="content-area single-product full-width extended">
    <main id="main" class="site-main">
        <div class="product">
            <div class="single-product-wrapper">
                <div class="product-images-wrapper">
                    <span class="onsale">Sale!</span>
                    <div class="images electro-gallery">
                        <div class="thumbnails-single owl-carousel">
                            <a href="" class="zoom" title="" data-rel="prettyPhoto[product-gallery]"><img width="470px" height="470px" src="<?php echo base_url(); ?>main_assets/landing_page_asset/assets/images/blank.gif" data-echo="<?php echo base_url(); ?>/<?php echo $produk[0]->gambar; ?>" class="wp-post-image" alt=""></a>
                            <a href="" class="zoom" title="" data-rel="prettyPhoto[product-gallery]"><img width="470px" height="470px" src="<?php echo base_url(); ?>main_assets/landing_page_asset/assets/images/blank.gif" data-echo="<?php echo base_url(); ?>/<?php echo $produk[0]->gambar_2; ?>" class="wp-post-image" alt=""></a>
                            <a href="" class="zoom" title="" data-rel="prettyPhoto[product-gallery]"><img width="470px" height="470px" src="<?php echo base_url(); ?>main_assets/landing_page_asset/assets/images/blank.gif" data-echo="<?php echo base_url(); ?>/<?php echo $produk[0]->gambar_3; ?>" class="wp-post-image" alt=""></a>
                        </div><!-- .thumbnails-single -->
                        <div class="thumbnails-all columns-5 owl-carousel">
                            <a href="" class="first" title=""><img width="86px" height="86px" src="<?php echo base_url(); ?>main_assets/landing_page_asset/assets/images/blank.gif" data-echo="<?php echo base_url(); ?>/<?php echo $produk[0]->gambar_thumb; ?>" class="wp-post-image" alt=""></a>
                            <a href="" class="" title=""><img width="86px" height="86px" src="<?php echo base_url(); ?>main_assets/landing_page_asset/assets/images/blank.gif" data-echo="<?php echo base_url(); ?>/<?php echo $produk[0]->gambar_2_thumb; ?>" class="wp-post-image" alt=""></a>
                            <a href="" class="" title=""><img width="86px" height="86px" src="<?php echo base_url(); ?>main_assets/landing_page_asset/assets/images/blank.gif" data-echo="<?php echo base_url(); ?>/<?php echo $produk[0]->gambar_3_thumb; ?>" class="wp-post-image" alt=""></a>
                        </div><!-- .thumbnails-all -->
                    </div><!-- .electro-gallery -->
                </div><!-- /.product-images-wrapper -->

                <div class="summary entry-summary">
                    <span class="loop-product-categories">
                        <a href="" rel="tag"><?php echo ucwords($produk[0]->nama_kat); ?></a>
                    </span><!-- .loop-product-categories -->
                    <h1 itemprop="name" class="product_title entry-title"><?php echo ucwords($produk[0]->nama_produk); ?></h1>
                    <div class="woocommerce-product-rating" itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                        <div class="star-rating" title="Rated 4.33 out of 5">
                            <span style="width:86.6%"><strong itemprop="ratingValue" class="rating">4.33</strong> out of<span itemprop="bestRating">5</span>based on<span itemprop="ratingCount" class="rating"></span></span>
                        </div>                       
                    </div><!-- .woocommerce-product-rating -->

                    <div class="brand">
                        <a href=""><img width="200" height="40" class="img-responsive" src="<?php echo base_url(); ?>/<?php echo $produk[0]->gambar_merek; ?>" alt="" /></a>
                    </div><!-- .brand -->

                    <div itemprop="description">
                        <?php echo $produk[0]->desc_barang; ?>
                        <p><strong>Status</strong>: <?php
                            if ($produk[0]->kondisi_barang == 1) {
                                echo 'Barang Baru';
                            } else {
                                echo 'Barang Bekas';
                            }
                            ?>
                            <br>
                            <strong>Min. Pembelian</strong>: <?php echo $produk[0]->minimal_pembelian; ?> item
                        </p>
                    </div><!-- /description -->

                </div><!-- .summary -->
                <div class="product-actions-wrapper">
                    <div class="product-actions">
                        <div class="availability in-stock">Stok Barang: <span><?php echo $produk[0]->stok; ?> item</span></div><!-- /.availability -->
                        <div itemprop="offers">
                            <p class="price">
                                <span class="electro-price"><ins><span class="amount">Rp. <?php echo number_format($produk[0]->harga_barang, 0, ',', '.'); ?></span></ins></span>
                            </p>
                        </div>

                        <form class="variations_form cart" method="post">
                            <div class="single_variation_wrap">
                                <div class="woocommerce-variation single_variation"></div>
                                <div class="woocommerce-variation-add-to-cart variations_button">
                                    <div class="quantity">
                                        <label>Jumlah Item:</label>
                                        <input type="number" name="quantity" value="1" title="Qty" class="input-text qty text"/>
                                    </div>
                                    <button type="submit" class="single_add_to_cart_button button alt">Chat WhatsApp</button>
                                    <input type="hidden" name="add-to-cart" value="2439" />
                                    <input type="hidden" name="product_id" value="2439" />
                                    <input type="hidden" name="variation_id" class="variation_id" value="0" />
                                </div>
                            </div>
                        </form><!-- /.variations_form -->

                        <div class="action-buttons">
                            <a href="#" rel="nofollow" class="bold"><i class="fa fa-whatsapp"></i> Pesan Lewat Whats App</a>  
                        </div><!-- /.action-buttons -->
                    </div><!-- /.product-actions -->
                </div><!-- /.product-actions-wrapper -->
            </div><!-- /.single-product-wrapper -->
        </div><!-- /.product-actions -->
    </main>
</div><!-- /.product-actions-wrapper -->