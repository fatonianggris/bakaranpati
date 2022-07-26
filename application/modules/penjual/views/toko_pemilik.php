<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Pemilik & Toko</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Pemilik/Toko</a></li>
                <li class="breadcrumb-item active">Daftar Pemilik/Toko</li>
            </ol>
            <a href="<?php echo site_url('penjual/tambah_pemilik'); ?>"> <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Buat Penjual/Pemilik Baru</button></a>
            <a href="<?php echo site_url('penjual/tambah_toko'); ?>"> <button type="button" class="btn btn-success d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Buat Akun Toko/Badan Usaha Baru</button></a>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<!-- Row -->
<div class="row">
    <!-- Column -->
    <div class="col-lg-4 col-md-6">
        <div class="card">
            <div class="d-flex flex-row">
                <div class="p-10 bg-info">
                    <h3 class="text-white box m-b-0"><i class="ti-user"></i></h3></div>
                <div class="align-self-center m-l-20">
                    <h3 class="m-b-0 text-info"><?php echo $count[0]->pemilik; ?></h3>
                    <h5 class="text-muted m-b-0">Jumlah Pemilik/Penjual</h5></div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-4 col-md-6">
        <div class="card">
            <div class="d-flex flex-row">
                <div class="p-10 bg-success">
                    <h3 class="text-white box m-b-0"><i class="ti-bag"></i></h3></div>
                <div class="align-self-center m-l-20">
                    <h3 class="m-b-0 text-success"><?php echo $count[0]->produk; ?></h3>
                    <h5 class="text-muted m-b-0">Jumlah Produk</h5></div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-4 col-md-6">
        <div class="card">
            <div class="d-flex flex-row">
                <div class="p-10 bg-primary">
                    <h3 class="text-white box m-b-0"><i class="ti-shopping-cart"></i></h3></div>
                <div class="align-self-center m-l-20">
                    <h3 class="m-b-0 text-primary"><?php echo $count[0]->toko; ?></h3>
                    <h5 class="text-muted m-b-0">Jumlah Toko</h5></div>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
<!-- Row -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Daftar Penjual/Pemilik</h4>
                <h6 class="card-subtitle">Daftar penjual/pemilik terkait nama, status, alamat dll</h6>
                <div class="table-responsive m-t-40">
                    <table id="tabel_penjual" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>No.</th>
                                <th>Nama Penjual</th>
                                <th>Email</th>
                                <th>No KTP</th>                                
                                <th>Alamat</th>                                
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>No.</th>
                                <th>Nama Penjual</th>
                                <th>Email</th>
                                <th>No KTP</th>                                
                                <th>Alamat</th>                                
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            if (!empty($pemilik)) {
                                $i = 1;
                                foreach ($pemilik as $key => $value) {
                                    ?> 
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $value->nama_lengkap; ?></td>
                                        <td><?php echo $value->email; ?></td>
                                        <td><?php echo $value->no_ktp; ?></td>
                                        <td><?php echo $value->alamat; ?></td>                               
                                        <td>
                                            <a onclick="act_del_pemilik(<?php echo $value->id; ?>)" ><button type="button" class="btn btn-danger btn-sm btn-icon btn-pure btn-outline delete-row-btn " data-toggle="tooltip" data-original-title="Hapus"><i class="ti-close" aria-hidden="true"></i></button></a>
                                            <a href="<?php echo site_url('penjual/get_penjual/' . $value->id); ?>" ><button type="button" data-toggle="tooltip" class="btn btn-info btn-sm btn-icon btn-pure btn-outline delete-row-btn " data-original-title="Edit"><i class="ti-pencil" aria-hidden="true"></i></button></a>
                                        </td>
                                    </tr>
                                    <?php
                                    $i++;
                                }  //ngatur nomor urut
                            }
                            ?>         
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Daftar Toko/Badan Usaha</h4>
                <h6 class="card-subtitle">Daftar toko/badan usaha terkait nama, nomor telepon, alamat dll</h6>
                <div class="table-responsive m-t-40">
                    <table id="tabel_toko" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Nama Toko</th>
                                <th>Kategori Toko</th>
                                <th>Nomor Usaha</th>
                                <th>Nomor Telepon</th>                                
                                <th>Alamat</th>                                
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nama Toko</th>
                                <th>Kategori Toko</th>
                                <th>Nomor Usaha</th>
                                <th>Nomor Telepon</th>                                
                                <th>Alamat</th>                                
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            if (!empty($toko)) {
                                $i = 1;
                                foreach ($toko as $key => $value) {
                                    ?> 
                                    <tr>
                                        <td><?php echo $value->nama_toko; ?></td>
                                        <td> <?php
                                            if ($value->kat_toko == 1) {
                                                echo 'Milik Sendiri';
                                            } else if ($value->kat_toko == 2) {
                                                echo 'Frenchise';
                                            } else if ($value->kat_toko == 3) {
                                                echo 'Sewa';
                                            }
                                            ?></td>
                                        <td><?php echo $value->nomor_toko; ?></td>
                                        <td><?php echo $value->nomor_telepon; ?></td>
                                        <td><?php echo $value->alamat_toko; ?></td>                               
                                        <td>
                                            <a onclick="act_del_toko(<?php echo $value->id; ?>)" ><button type="button" class="btn btn-danger btn-sm btn-icon btn-pure btn-outline delete-row-btn " data-toggle="tooltip" data-original-title="Hapus"><i class="ti-close" aria-hidden="true"></i></button></a>
                                            <a href="<?php echo site_url('penjual/get_toko/' . $value->id); ?>"><button type="button" class="btn btn-info btn-sm btn-icon btn-pure btn-outline delete-row-btn " data-toggle="tooltip" data-original-title="Edit"><i class="ti-pencil" aria-hidden="true"></i></button></a>
                                        </td>
                                    </tr>
                                    <?php
                                    $i++;
                                }  //ngatur nomor urut
                            }
                            ?>         
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function act_del_pemilik(object) {
        alertify.confirm("Apa anda yakin ingin menghapus data ini ?", function (e) {
            if (e) {
                $.ajax({
                    type: "post",
                    url: "<?php echo base_url(); ?>penjual/delete_pemilik",
                    data: {id: object},
                    success: function (msg)
                    {
                        data = msg.split('|');
                        $('#flash_message').html(data[1]);
                        setTimeout(function () {
                            location.reload();
                        }, 1000);
                    },
                    error: function (msg)
                    {
                        data = msg.split('|');
                        $('#flash_message').html(data[0]);
                        setTimeout(function () {
                            location.reload();
                        }, 1000);
                    }
                });
            }
        });
    }
    function act_del_toko(object) {
        alertify.confirm("Apa anda yakin ingin menghapus data ini ?", function (e) {
            if (e) {
                $.ajax({
                    type: "post",
                    url: "<?php echo base_url(); ?>penjual/delete_toko",
                    data: {id: object},
                    success: function (msg)
                    {
                        data = msg.split('|');
                        $('#flash_message').html(data[1]);
                        setTimeout(function () {
                            location.reload();
                        }, 1000);
                    },
                    error: function (msg)
                    {
                        data = msg.split('|');
                        $('#flash_message').html(data[0]);
                        setTimeout(function () {
                            location.reload();
                        }, 1000);
                    }
                });
            }
        });
    }
</script>