<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Halaman Toko/Badan Usaha</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Toko/Badan Usaha</a></li>
                <li class="breadcrumb-item active">Tambah Toko/Badan Usaha</li>
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
                <h4 class="card-title">Formulir Tambah Toko/Badan Usaha</h4>
                <h6 class="card-subtitle"> Silahkan mengisi daftar tambah toko/badan usaha yang sesuai </h6>
                <form class="form-horizontal m-t-20 row" action="<?php echo site_url('penjual/kirim_toko'); ?>" enctype="multipart/form-data" method="post">          
                    <div class="form-group col-md-6 m-t-10">
                        <label>Nama Toko/Badan Usaha</label>
                        <input type="text" name="nama_toko" class="form-control" required placeholder="Isikan nama toko/badan usaha">
                    </div>                    
                    <div class="form-group col-md-6 m-t-10">
                        <label>Nomor Telepon Toko</label>
                        <div class="input-group">                            
                            <input type="number" name="no_telp" class="form-control" placeholder="Isikan nomor telepon toko/badan usaha" required data-validation-required-message="This field is required">
                            <div class="input-group-append">
                                <span class="input-group-text">Angka</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-6 m-t-10">
                        <label>Nomor Toko/Badan Usaha</label>
                        <input type="text" name="nomor_toko" class="form-control" placeholder="Isikan nomor toko/badan usaha anda">
                    </div>
                    <div class="form-group col-md-6 m-t-10">
                        <label>Kategori Toko/Badan Usaha</label>
                        <select class="form-control" name="kat_usaha"  >
                            <option>Pilih kategori badan usaha</option>
                            <option value="1">Milik Sendiri</option>
                            <option value="2">Frenchise</option>
                            <option value="3">Sewa</option>                                            
                        </select>
                    </div>
                    <div class="form-group col-md-12 m-t-10">
                        <label>Pemilik/Penjual Toko</label>
                        <select class="select2 form-control select2-multiple" name="pemilik[]" style="width: 100%" multiple="multiple" data-placeholder="Silahkan pilih pemilik" required>                          
                            <?php
                            if (!empty($pemilik)) {
                                foreach ($pemilik as $key => $value) {
                                    ?>
                                    <option value="<?php echo $value->id; ?>"><?php echo $value->nama_lengkap; ?></option>                                   
                                    <?php
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group col-md-6 m-t-10">
                        <label>Nama Merek/Brand</label>
                        <input type="text" name="label" class="form-control" placeholder="Isikan nama merek/brand usaha anda">
                    </div>
                    <div class="form-group col-md-6 m-t-10">
                        <label>Logo Brand/Merek</label>
                        <input type="file" name="img_label" class="form-control" required aria-invalid="false">
                    </div>
                    <div class="form-group col-md-12 m-t-10">
                        <label>Alamat Toko</label>
                        <input type="text" name="alamat" class="form-control" placeholder="Isikan alamat toko/badan usaha">
                    </div>                  

                    <div class="form-group col-md-12 m-t-10">
                        <label>Foto Toko</label>
                        <input type="file" name="img" class="form-control" required aria-invalid="false">
                    </div>
                    <div class="form-group col-md-12 m-t-10">
                        <label>Deskripsi Toko</label>
                        <textarea class="form-control" name="desc_toko" placeholder="Isikan deskripsi toko/badan usaha"  rows="5"></textarea>
                    </div>   
                    <div class="form-group col m-t-10">
                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                        <button type="reset" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="peringatan_toko" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-danger" id="myModalLabel"><b>Perhatian !</b></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">                  
                    <div class="card text-center">
                        <div class="card-body">
                            <h4 class="card-title text-danger">SUDAH MEMILIKI PENJUAL?</h4>
                            <p class="card-text">Untuk membuat <b>TOKO</b>, Anda diwajibkan untuk memiliki akun penjual.</p>
                            <p class="card-text"><b> Terima kasih </b></p>
                            <a href="" class="btn btn-info" data-dismiss="modal">SUDAH PUNYA</a>
                            <a href="<?php echo site_url('penjual/tambah_pemilik'); ?>" class="btn btn-danger" >BUAT AKUN PENJUAL</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>
<!-- .row -->
<!-- Plugin JavaScript -->
