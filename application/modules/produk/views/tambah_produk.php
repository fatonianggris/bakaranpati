<!-- ============================================================== -->
<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Halaman Produk</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Produk</a></li>
                <li class="breadcrumb-item active">Tambah Produk</li>
            </ol>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-lg-12">
        <!-- Column -->
        <div class="col-lg-12 col-md-12">
            <?php echo $this->session->flashdata('flash_message'); ?>
        </div>
        <!-- Column -->
        <div class="card">
            <div class="card card-body">
                <h4 class="card-title">Formulir Tambah Produk</h4>
                <h6 class="card-subtitle"> Silahkan mengisi daftar tambah produk yang sesuai </h6>
                <form class="form-horizontal m-t-20 row" action="<?php echo site_url('produk/kirim_produk'); ?>" enctype="multipart/form-data" method="post">          
                    <div class="form-group col-md-12 m-t-10">
                        <label>Nama Produk</label>
                        <input type="text" name="nama_produk" class="form-control" placeholder="Isikan nama produk anda"required>
                    </div>
                    <div class="form-group col-md-6 m-t-10">
                        <label>Minimal Pembelian</label>
                        <div class="input-group">                            
                            <input type="number" name="min_pembelian" class="form-control" placeholder="Isikan minimal pembelian produk anda" required data-validation-required-message="This field is required">
                            <div class="input-group-append">
                                <span class="input-group-text">Angka</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-6 m-t-10">
                        <label>Kondisi Barang</label>
                        <select name="kondisi_barang"  class="form-control" required>
                            <option>Pilih kondisi barang</option>
                            <option value="1">Baru</option>
                            <option value="2">Bekas</option>                                            
                        </select>
                    </div>
                    <div class="form-group col-md-6 m-t-10">
                        <label>Berat Barang</label>
                        <div class="input-group">                            
                            <input type="number" name="berat" class="form-control" placeholder="Isikan berat produk anda (gr)" required data-validation-required-message="This field is required">
                            <div class="input-group-append">
                                <span class="input-group-text">Gram</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-6 m-t-10">
                        <label>Kategori Barang</label>
                        <select name="kat_barang" class="form-control" required>
                            <option>Pilih kategori barang</option>
                            <?php
                            if (!empty($kat)) {
                                foreach ($kat as $key => $value) {
                                    ?>
                                    <option value="<?php echo $value->id; ?>"><?php echo $value->nama_kat; ?></option> 
                                    <?php
                                }
                            }
                            ?>                                                
                        </select>
                    </div>
                    <div class="form-group col-md-6 m-t-10">
                        <label>Produk Dari Toko</label>
                        <select name="produk_toko" class="select2 form-control custom-select" style="width: 100%; height:36px;" required>
                            <option>Pilih toko</option>
                            <?php
                            if (!empty($toko)) {
                                foreach ($toko as $key => $value) {
                                    ?>
                                    <option value="<?php echo $value->id; ?>"><?php echo $value->nama_toko; ?></option>                                     
                                    <?php
                                }
                            }
                            ?>                       
                        </select>
                    </div>
                    <div class="form-group col-md-6 m-t-10">
                        <label>Harga Barang</label>
                        <div class="input-group">                            
                            <input type="number" name="harga" class="form-control" placeholder="Isikan harga produk anda (Rp)" required data-validation-required-message="This field is required">
                            <div class="input-group-append">
                                <span class="input-group-text">Rupiah</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-6 m-t-10">
                        <label>Stok Barang</label>
                        <div class="input-group">                            
                            <input type="number" name="stok_barang" class="form-control" placeholder="Isikan stok produk anda" required data-validation-required-message="This field is required">
                            <div class="input-group-append">
                                <span class="input-group-text">Satuan</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-6 m-t-5">
                        <label>Status Rekomendasi</label>
                        <div class="custom-control custom-radio m-t-10">
                            <input type="radio" id="customRadio1" value="1" name="rekomendasi" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio1">Ya</label>
                        </div>
                        <div class="custom-control custom-radio">
                            <input type="radio" id="customRadio2" value="0" name="rekomendasi" class="custom-control-input">
                            <label class="custom-control-label" for="customRadio2">Tidak</label>
                        </div>
                    </div>
                    <div class="form-group col-md-12 m-t-10">
                        <label>Deskripsi Barang</label>
                        <textarea name="desc_barang" id="desc" class="form-control" placeholder="Isikan deskripsi produk anda"  rows="5"></textarea>
                    </div>             
                    <div class="form-group col-md-12 m-t-10">
                        <label>Gambar Barang 1</label>
                        <input type="file" name="img1" class="form-control" required="" aria-invalid="false">
                    </div>
                    <div class="form-group col-md-12 m-t-10">
                        <label>Gambar Barang 2</label>
                        <input type="file" name="img2" class="form-control" required="" aria-invalid="false">
                    </div>
                    <div class="form-group col-md-12 m-t-10">
                        <label>Gambar Barang 3</label>
                        <input type="file" name="img3" class="form-control" required="" aria-invalid="false">
                    </div>
                    <div class="form-group col m-t-10">
                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                        <button type="reset" class="btn btn-inverse waves-effect waves-light">Cancel</button>
                    </div>
                </form>             
            </div>
        </div>
    </div>
    <div id="peringatan_produk" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" data-backdrop="static" data-keyboard="false">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-danger" id="myModalLabel"><b>Perhatian !</b></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">                  
                    <div class="card text-center">
                        <div class="card-body">
                            <h4 class="card-title text-danger">SUDAH MEMILIKI PENJUAL DAN TOKO?</h4>
                            <p class="card-text">Untuk membuat <b>PRODUK</b>, Anda diwajibkan untuk memiliki akun penjual. Jika anda sudah memiliki penjual tetapi belum memiliki toko, Silahkan membuat <b>TOKO</b> terlebih dahulu</p>
                            <p class="card-text"><b> Terima kasih </b></p>
                            <a href="" class="btn btn-info" data-dismiss="modal">SUDAH PUNYA</a>
                            <a href="<?php echo site_url('penjual/tambah_pemilik'); ?>" class="btn btn-danger">BUAT AKUN PENJUAL</a>
                            <a href="<?php echo site_url('penjual/tambah_toko'); ?>" class="btn btn-warning">BUAT TOKO</a>
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
