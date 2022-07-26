<?php $user = $this->session->userdata('signapps'); ?>
<div class="container">
    <ul class="nav navbar-nav departments-menu animate-dropdown">
        <li class="nav-item ">
            <a class="nav-link" ><?php echo $home[0]->label_src; ?></a>
        </li>
    </ul>

    <form class="navbar-search" method="get" action="<?php echo site_url('home/cari'); ?>">
        <label class="sr-only screen-reader-text" for="search">Cari Batik:</label>
        <div class="input-group">
            <input type="text" id="search" class="form-control search-field" value="<?php echo @$_GET['nama']; ?>" dir="ltr" name="nama" placeholder="Cari Batik..." />
            <div class="input-group-addon search-categories">
                <select name='produk_kat' id='product_cat' class='postform resizeselect' >
                    <option value="0" >Pilih Kategori</option>
                    <?php
                    if (!empty($kat)) {
                        foreach ($kat as $key => $value) {
                            if ($value->id == @$_GET['produk_kat']) {
                                ?>
                                <option class="level-0 " value="<?php echo $value->id; ?>" selected=""><?php echo $value->nama_kat; ?> </option>
                            <?php } else { ?>
                                <option class="level-0" value="<?php echo $value->id; ?>"><?php echo $value->nama_kat; ?></option>
                                <?php
                            }
                        }
                    }
                    ?>      
                </select>
            </div>
            <div class="input-group-btn">
                <button type="submit" class="btn btn-secondary"><i class="ec ec-search"></i></button>
            </div>
        </div>
    </form>

</div>