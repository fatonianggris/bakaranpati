<ul id="sidebarnav">
    <li> <a class="waves-effect waves-dark" href="<?php echo site_url('dashboard'); ?>" aria-expanded="false"><i class="icon-speedometer"></i><span class="hide-menu">Dashboard</span></a>    
    </li>
    <li class="nav-small-cap"></li>
    <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-layout-grid2"></i><span class="hide-menu">Produk</span></a>
        <ul aria-expanded="false" class="collapse">
            <li><a href="<?php echo site_url('produk/'); ?>">Daftar Produk <i class="ti-calendar"></i></a></li>                               
            <li><a href="<?php echo site_url('produk/tambah_produk'); ?>">Tambah Produk <i class="ti-pencil-alt"></i></a></li>
        </ul>
    </li>
    <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-home"></i><span class="hide-menu">Pemilik & Toko</span></a>
        <ul aria-expanded="false" class="collapse"> 
            <li><a href="<?php echo site_url('penjual/'); ?>">Daftar Pemilik & Toko <i class="ti-calendar"></i></a></li> 
            <li><a href="<?php echo site_url('penjual/tambah_toko'); ?>">Tambah Toko <i class="ti-pencil-alt"></i></a></li>
            <li><a href="<?php echo site_url('penjual/tambah_pemilik'); ?>">Tambah Pemilik <i class="ti-user"></i></a></li>
        </ul>
    </li>
    <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i class="ti-panel"></i><span class="hide-menu">Blog</span></a>
        <ul aria-expanded="false" class="collapse">
            <li><a href="<?php echo site_url('blog/'); ?>">Daftar Blog <i class="ti-calendar"></i></a></li>                               
            <li><a href="<?php echo site_url('blog/tambah_blog'); ?>">Tambah Blog <i class="ti-pencil-alt"></i></a></li>
        </ul>
    </li>
    <li class="nav-small-cap"></li>
    <li> <a class="waves-effect waves-dark" href="<?php echo site_url('pengaturan/'); ?>" aria-expanded="false"><i class="ti-settings"></i><span class="hide-menu">Pengaturan</span></a></li>
    <li> <a class="waves-effect waves-dark" href="<?php echo site_url('auth/logout'); ?>" aria-expanded="false"><i class="ti-lock text-danger"></i><span class="hide-menu">Log Out</span></a></li>
</ul>