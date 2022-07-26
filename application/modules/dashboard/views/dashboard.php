<!-- chartist CSS -->
<link href="<?php echo base_url(); ?>main_assets/admin_asset/assets/node_modules/chartist-js/dist/chartist.min.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>main_assets/admin_asset/assets/node_modules/chartist-js/dist/chartist-init.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>main_assets/admin_asset/assets/node_modules/chartist-plugin-tooltip-master/dist/chartist-plugin-tooltip.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>main_assets/admin_asset/assets/node_modules/css-chart/css-chart.css" rel="stylesheet">
<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Dashboard</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
            </ol>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- Row -->
<div class="row">
    <!-- Column -->
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="row p-t-10 p-b-10">
                    <!-- Column -->
                    <div class="col p-r-0">
                        <h1 class="font-light"><?php echo $count[0]->pemilik; ?></h1>
                        <h6 class="text-muted">Pemilik/Penjual</h6></div>
                    <!-- Column -->
                    <div class="col text-right align-self-center">
                        <div data-label="20%" class="css-bar m-b-0 css-bar-primary css-bar-20"><i class="mdi mdi-account-circle"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="row p-t-10 p-b-10">
                    <!-- Column -->
                    <div class="col p-r-0">
                        <h1 class="font-light"><?php echo $count[0]->toko; ?></h1>
                        <h6 class="text-muted">Toko/Badan Usaha</h6></div>
                    <!-- Column -->
                    <div class="col text-right align-self-center">
                        <div data-label="30%" class="css-bar m-b-0 css-bar-danger css-bar-20"><i class="mdi mdi-briefcase-check"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="row p-t-10 p-b-10">
                    <!-- Column -->
                    <div class="col p-r-0">
                        <h1 class="font-light"><?php echo $count[0]->produk; ?></h1>
                        <h6 class="text-muted">Produk/Barang</h6></div>
                    <!-- Column -->
                    <div class="col text-right align-self-center">
                        <div data-label="40%" class="css-bar m-b-0 css-bar-warning css-bar-40"><i class="mdi mdi-star-circle"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="row p-t-10 p-b-10">
                    <!-- Column -->
                    <div class="col p-r-0">
                        <h1 class="font-light"><?php echo $count[0]->user; ?></h1>
                        <h6 class="text-muted">User Admin</h6></div>
                    <!-- Column -->
                    <div class="col text-right align-self-center">
                        <div data-label="60%" class="css-bar m-b-0 css-bar-info css-bar-60"><i class="mdi mdi-account-circle"></i></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
<!-- Row -->
<!-- Row -->
<div class="row">
    <div class="col-lg-12">
        <!-- Column -->
        <div class="col-lg-12 col-md-12">
            <?php echo $this->session->flashdata('flash_message'); ?>
        </div>
        <!-- Column -->
        <div class="card">
            <div class="card card-body">
                <h4 class="card-title">Edit Tampilan Web</h4>
                <h6 class="card-subtitle"> Silahkan tampilan web yang sesuai </h6>
                <form class="form-horizontal m-t-20 row" action="<?php echo site_url('dashboard/edit_home/1'); ?>" enctype="multipart/form-data" method="post">          
                    <div class="form-group col-md-6 m-t-10">
                        <label>Ucapan Selamat Header</label>
                        <input type="text" name="ucapan" value="<?php echo $home[0]->ucapan; ?>"  class="form-control" placeholder="Isikan ucapan header web"required>
                    </div>
                    <div class="form-group col-md-6 m-t-10">
                        <label>Nomor Customer Service</label>
                        <div class="input-group">                            
                            <input type="number" name="no_cs" value="<?php echo $home[0]->no_cs; ?>" class="form-control" placeholder="Isikan nomor CS" required data-validation-required-message="This field is required">
                            <div class="input-group-append">
                                <span class="input-group-text">Angka</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-6 m-t-10">
                        <label>Email Customer Service</label>
                        <input type="text" name="email" value="<?php echo $home[0]->email; ?>" class="form-control" placeholder="Isikan email CS"required>
                    </div>
                    <div class="form-group col-md-6 m-t-10">
                        <label>Pusat Lokasi Pengerajin</label>
                        <input type="text" name="pusat_lokasi" value="<?php echo $home[0]->pusat_lokasi; ?>" class="form-control" placeholder="Isikan lokasi pengerajin"required>
                    </div>
                    <div class="form-group col-md-6 m-t-10">
                        <label>Nama Label Search</label>
                        <input type="text" name="label_src" value="<?php echo $home[0]->label_src; ?>" class="form-control" placeholder="Isikan label search"required>
                    </div>             
                    <div class="form-group col-md-6 m-t-10">
                        <label>Nama Promo Label Bawah</label>
                        <input type="text" name="nama_promo" value="<?php echo $home[0]->nama_promo; ?>" class="form-control" placeholder="Isikan nama promo"required>
                    </div>   
                    <div class="form-group col-md-6 m-t-10">
                        <label>Isi Konten Promo Label Bawah</label>
                        <input type="text" name="isi_label_promo" value="<?php echo $home[0]->isi_label_promo; ?>" class="form-control" placeholder="Isikan isi promo"required>
                    </div>   
                    <div class="form-group col-md-6 m-t-10">
                        <label>Alamat Toko Web</label>
                        <input type="text" name="alamat_web" value="<?php echo $home[0]->alamat_web; ?>" class="form-control" placeholder="Isikan alamat toko"required>
                    </div> 
                    <div class="form-group col-md-8 m-t-10">
                        <label>Logo WEB</label>
                        <input type="text" name="image" value="<?php echo $home[0]->logo_web; ?>" style="display:none" />
                        <input type="text" name="image_thumb" value="<?php echo $home[0]->logo_web_thumb; ?>" style="display:none" />
                        <input type="file" name="img" class="form-control" aria-invalid="false">
                    </div>
                    <?php if ($home[0]->logo_web == true) {
                        ?>
                        <img width="300px" height="100px" src="<?php echo base_url() . $home[0]->logo_web_thumb; ?>">
                    <?php } ?>
                    <div class="form-group col-md-12 m-t-10">
                        <label>Link Facebook</label>
                        <input type="text" name="facebook" value="<?php echo $home[0]->facebook; ?>" class="form-control" placeholder="Isikan link facebook" >
                    </div>    
                    <div class="form-group col-md-12 m-t-10">
                        <label>Link Twitter</label>
                        <input type="text" name="twitter" value="<?php echo $home[0]->twitter; ?>" class="form-control" placeholder="Isikan link twitter">
                    </div>   
                    <div class="form-group col-md-12 m-t-10">
                        <label>Link Instagram</label>
                        <input type="text" name="instagram" value="<?php echo $home[0]->instagram; ?>" class="form-control" placeholder="Isikan link instagram">
                    </div>   
                    <div class="form-group col-md-12 m-t-10">
                        <label>Link Youtube</label>
                        <input type="text" name="youtube" value="<?php echo $home[0]->youtube; ?>" class="form-control" placeholder="Isikan link youtube">
                    </div>   
                    <div class="form-group col m-t-10">
                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                        <button type="reset" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                    </div>
                </form>             
            </div>
        </div>
    </div>
</div>
<!-- Row -->