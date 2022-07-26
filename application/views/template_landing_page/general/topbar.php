<?php $user = $this->session->userdata('signapps'); ?>
<div class="container">
    <nav>
        <ul id="menu-top-bar-left" class="nav nav-inline pull-left animate-dropdown flip">
            <li class="menu-item animate-dropdown"><a title="Welcome to Worldwide Electronics Store" href="#"><?php echo $home[0]->ucapan; ?></a></li>
        </ul>
    </nav>

    <nav>
        <ul id="menu-top-bar-right" class="nav nav-inline pull-right animate-dropdown flip">
            <li class="menu-item animate-dropdown"><a title="Store Locator" href="#"><i class="ec ec-map-pointer"></i>Pusat Lokasi Pengerajin</a></li>
            <li class="menu-item animate-dropdown"><a title="My Account" href=""><i class="ec ec-user"></i>Buat Akun</a></li>
        </ul>
    </nav>
</div>