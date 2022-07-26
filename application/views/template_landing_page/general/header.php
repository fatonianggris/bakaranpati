<div class="container">
    <div class="row">
        <!-- ============================================================= Header Logo ============================================================= -->
        <div class="header-logo">
            <a href="<?php echo site_url('/home'); ?>" class="header-logo-link">
                <img width="250px" height="80px" src="<?php echo base_url(); ?>main_assets/landing_page_asset/assets/images/blank.gif" data-echo="<?php echo base_url(); ?>/<?php echo $home[0]->logo_web; ?>" class="img-responsive" alt="">          
            </a>
        </div>
        <!-- ============================================================= Header Logo : End============================================================= -->
        <div class="primary-nav animate-dropdown">
            <div class="clearfix">
                <button class="navbar-toggler hidden-sm-up pull-right flip" type="button" data-toggle="collapse" data-target="#default-header">
                    &#9776;
                </button>
            </div>

            <div class="collapse navbar-toggleable-xs" id="default-header">
                <nav>
                    <ul id="menu-main-menu" class="nav nav-inline yamm">
                        <li class="menu-item animate-dropdown "><a title="Home" href="<?php echo site_url('/home'); ?>" aria-haspopup="true">Home</a></li>                      
                        <li class="menu-item menu-item-has-children animate-dropdown dropdown"><a title="Blog" href="" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Jenis Batik</a>
                            <ul role="menu" class=" dropdown-menu">
                                <li class="menu-item animate-dropdown"><a title="Blog v1" href="<?php echo site_url('/blog/konten/4'); ?>">Kain Prima</a></li>
                                <li class="menu-item animate-dropdown"><a title="Blog v2" href="<?php echo site_url('/blog/konten/5'); ?>">Kain Primis</a></li>                               
                            </ul>
                        </li>
                        <li class="yamm-fw menu-item menu-item-has-children animate-dropdown dropdown">
                            <a title="Pages" href="#" data-toggle="dropdown" class="dropdown-toggle" aria-haspopup="true">Toko Batik</a>
                            <ul role="menu" class=" dropdown-menu">
                                <li class="menu-item animate-dropdown">
                                    <div class="yamm-content" style="display:inline-block; width: 100%;">
                                        <div class="row">
                                            <div class="wpb_column vc_column_container col-sm-6">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="vc_wp_custommenu wpb_content_element">
                                                            <div class="widget widget_nav_menu">
                                                                <div class="menu-pages-menu-1-container">
                                                                    <ul id="menu-pages-menu-1" class="menu">
                                                                        <li class="nav-title menu-item"><a href="<?php echo site_url('/blog/konten/1'); ?>">Batik Pati - Cantingku</a></li>                                                                       
                                                                        <li class="menu-item"><a href="<?php echo site_url('/blog/konten/1'); ?>">About Cantingku</a></li>                                                                         
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> 
                                            </div>

                                            <div class="wpb_column vc_column_container col-sm-6">
                                                <div class="vc_column-inner ">
                                                    <div class="wpb_wrapper">
                                                        <div class="vc_wp_custommenu wpb_content_element">
                                                            <div class="widget widget_nav_menu">
                                                                <div class="menu-pages-menu-3-container">
                                                                    <ul id="menu-pages-menu-3" class="menu">
                                                                        <li class="nav-title menu-item"><a href="<?php echo site_url('/blog/konten/2'); ?>">Batik Pati - Anarghya</a></li>
                                                                        <li class="menu-item"><a href="<?php echo site_url('/blog/konten/2'); ?>">About Anarghya</a></li>  
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-item animate-dropdown"><a title="About Us" href="<?php echo site_url('/blog/konten/3'); ?>">Tentang Batik</a></li>
                        <li class="menu-item"><a title="Contact Us" href="#">Kontak</a></li>
                    </ul>
                </nav>   
            </div>
        </div>

        <div class="header-support-info">
            <div class="media">
                <span class="media-left support-icon media-middle"><i class="ec ec-support"></i></span>
                <div class="media-body">
                    <span class="support-number"><strong>CS</strong> (+62) <?php echo $home[0]->no_cs; ?></span><br/>
                    <span class="support-email"><?php echo $home[0]->email; ?></span>
                </div>
            </div>
        </div>

    </div><!-- /.row -->
</div>