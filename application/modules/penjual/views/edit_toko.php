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
                <li class="breadcrumb-item active">Edit Toko/Badan Usaha</li>
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
                <h4 class="card-title">Formulir Edit Toko/Badan Usaha</h4>
                <h6 class="card-subtitle"> Silahkan mengisi daftar edit toko/badan usaha yang sesuai </h6>
                <form class="form-horizontal m-t-20 row" action="<?php echo site_url('penjual/edit_toko/' . $toko[0]->id); ?>"enctype="multipart/form-data" method="post">          
                    <div class="form-group col-md-6 m-t-10">
                        <label>Nama Toko/Badan Usaha</label>
                        <input type="text" name="nama_toko" value="<?php echo $toko[0]->nama_toko; ?>" class="form-control" placeholder="Isikan nama toko/badan usaha">
                    </div>                    
                    <div class="form-group col-md-6 m-t-10">
                        <label>Nomor Telepon Toko</label>
                        <div class="input-group">                            
                            <input type="number" name="no_telp" value="<?php echo $toko[0]->nomor_telepon; ?>" class="form-control" placeholder="Isikan nomor telepon toko/badan usaha" required data-validation-required-message="This field is required">
                            <div class="input-group-append">
                                <span class="input-group-text">Angka</span>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-6 m-t-10">
                        <label>Nomor Toko/Badan Usaha</label>
                        <input type="text" name="nomor_toko" value="<?php echo $toko[0]->nomor_toko; ?>" class="form-control" placeholder="Isikan nomor toko/badan usaha anda">
                    </div>
                    <div class="form-group col-md-6 m-t-10">
                        <label>Kategori Toko/Badan Usaha</label>
                        <select class="form-control" name="kat_usaha">
                            <option value="<?php echo $toko[0]->kat_toko; ?>" selected>
                                <?php
                                if ($toko[0]->kat_toko == 1) {
                                    echo 'Milik Sendiri';
                                } else if ($toko[0]->kat_toko == 2) {
                                    echo 'Frenchise';
                                } else if ($toko[0]->kat_toko == 3) {
                                    echo 'Sewa';
                                }
                                ?>
                            </option>   
                            <option value="1">Milik Sendiri</option>
                            <option value="2">Frenchise</option>
                            <option value="3">Sewa</option>                                            
                        </select>
                    </div>
                    <div class="form-group col-md-12 m-t-10">
                        <label>Pemilik/Penjual Toko</label>
                        <select class="select2 form-control select2-multiple" name="pemilik[]" style="width: 100%" multiple="multiple" data-placeholder="Silahkan pilih pemilik">
                            <?php
                            $id = $toko[0]->id_pemilik_toko;
                            $id_array = explode(',', $id);
                            if (!empty($pemilik)) {
                                foreach ($pemilik as $key => $value) {
                                    if (in_array($value->id, $id_array)) {
                                        ?>
                                        <option value="<?php echo $value->id; ?>" selected><?php echo $value->nama_lengkap; ?></option> 
                                        <?php
                                    } else {
                                        ?>
                                        <option value = "<?php echo $value->id; ?>"><?php echo $value->nama_lengkap; ?></option>  
                                        <?php
                                    }
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group col-md-5 m-t-10">
                        <label>Nama Merek/Brand</label>
                        <input type="text" name="label" value="<?php echo $toko[0]->nama_merek; ?>" class="form-control" placeholder="Isikan nama merek/brand usaha anda">
                    </div>
                    <div class="form-group col-md-5 m-t-10">
                        <label>Logo Brand/Merek</label>
                        <input type="text" name="image_logo" value="<?php echo $toko[0]->gambar_merek; ?>" style="display:none" />
                        <input type="text" name="image_logo_thumb" value="<?php echo $toko[0]->gambar_merek_thumb; ?>" style="display:none" />
                        <input type="file" name="img_label" class="form-control"  aria-invalid="false">
                    </div>
                    <?php if ($toko[0]->gambar_merek == true) {
                        ?>
                        <img width="100px" height="100px" src="<?php echo base_url() . $toko[0]->gambar_merek_thumb; ?>">

                    <?php } ?>
                    <div class="form-group col-md-12 m-t-10">
                        <label>Alamat Toko</label>
                        <input type="text" name="alamat" value="<?php echo $toko[0]->alamat_toko; ?>" class="form-control" placeholder="Isikan alamat toko/badan usaha">
                    </div>                  
                    <div class="form-group col-md-10 m-t-10">
                        <label>Foto Toko</label>
                        <input type="text" name="image" value="<?php echo $toko[0]->foto_toko; ?>" style="display:none" />
                        <input type="text" name="image_thumb" value="<?php echo $toko[0]->foto_toko_thumb; ?>" style="display:none" />
                        <input type="file" name="img" class="form-control"  aria-invalid="false">
                    </div>
                    <?php if ($toko[0]->foto_toko == true) {
                        ?>
                        <img width="100px" height="100px" src="<?php echo base_url() . $toko[0]->foto_toko_thumb; ?>">
                    <?php } ?>
                    <div class="form-group col-md-12 m-t-10">
                        <label>Deskripsi Toko</label>
                        <textarea class="form-control" name="desc_toko" placeholder="Isikan deskripsi toko/badan usaha"  rows="5"><?php echo $toko[0]->desc_toko; ?></textarea>
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
