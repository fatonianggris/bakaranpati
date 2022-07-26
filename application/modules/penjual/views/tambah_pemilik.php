<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Halaman Penjual/Pemilik</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Pemilik/Penjual</a></li>
                <li class="breadcrumb-item active">Tambah Pemilik/Penjual</li>
            </ol>            
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-12">
        <!-- Column -->
        <div class="col-lg-12 col-md-12">
            <?php echo $this->session->flashdata('flash_message'); ?>
        </div>
        <!-- Column -->
        <div class="card">
            <div class="card card-body">
                <h4 class="card-title">Formulir Tambah Pemilik/Penjual</h4>
                <h6 class="card-subtitle"> Silahkan mengisi daftar tambah pemilik/penjual yang sesuai </h6>
                <form class="form-horizontal m-t-20 row" action="<?php echo site_url('penjual/kirim_penjual'); ?>" enctype="multipart/form-data" method="post">          
                    <div class="form-group col-md-6 m-t-10" >
                        <label>Nama Lengkap Penjual/Pemilik</label>
                        <input type="text" name="nama_pemilik" class="form-control" placeholder="Isikan nama lengkap penjual/pemilik">
                    </div>
                    <div class="form-group col-md-6 m-t-10">
                        <label>Nomor KTP</label>
                        <div class="input-group">                            
                            <input type="number" name="nomor_ktp" class="form-control" placeholder="Isikan nomor ktp penjual/pemilik" required data-validation-required-message="This field is required">
                            <div class="input-group-append">
                                <span class="input-group-text">Angka</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-6 m-t-10">
                        <label>Email Penjual/Pemilik</label>
                        <input type="text" name="email" class="form-control" placeholder="Isikan email penjual">
                    </div>
                    <div class="form-group col-md-12 m-t-10">
                        <label>Alamat Penjual/Pemilik</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Isikan alamat penjual/pemilik anda">
                    </div>            
                    <div class="form-group col-md-12 m-t-10">
                        <label>Foto Pemilik</label>
                        <input type="file" name="img" class="form-control" required="" aria-invalid="false">
                    </div> 
                    <div class="form-group col-md-12 m-t-10">
                        <label>Scan KTP</label>
                        <input type="file" name="img_ktp" class="form-control" required="" aria-invalid="false">
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
<!-- .row -->
<!-- Plugin JavaScript -->
