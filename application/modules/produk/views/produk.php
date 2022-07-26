<!-- Bread crumb and right sidebar toggle -->
<!-- ============================================================== -->
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Daftar Produk</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Produk</a></li>
                <li class="breadcrumb-item active">Daftar Produk</li>
            </ol>
            <a href="<?php echo site_url('produk/tambah_produk'); ?>"> <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Buat Produk Baru</button></a>
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
            <div class="d-flex flex-row">
                <div class="p-10 bg-info">
                    <h3 class="text-white box m-b-0"><i class="ti-bag"></i></h3></div>
                <div class="align-self-center m-l-20">
                    <h3 class="m-b-0 text-info"><?php echo $count[0]->produk; ?></h3>
                    <h5 class="text-muted m-b-0">Jumlah Produk</h5></div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="d-flex flex-row">
                <div class="p-10 bg-success">
                    <h3 class="text-white box m-b-0"><i class="ti-dashboard"></i></h3></div>
                <div class="align-self-center m-l-20">
                    <h3 class="m-b-0 text-success"><?php echo $count[0]->rekomen; ?></h3>
                    <h5 class="text-muted m-b-0">Produk Rekomendasi</h5></div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="d-flex flex-row">
                <div class="p-10 bg-inverse">
                    <h3 class="text-white box m-b-0"><i class="ti-brush"></i></h3></div>
                <div class="align-self-center m-l-20">
                    <h3 class="m-b-0"><?php echo $count[0]->baru; ?></h3>
                    <h5 class="text-muted m-b-0">Jumlah Produk Baru</h5></div>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-3 col-md-6">
        <div class="card">
            <div class="d-flex flex-row">
                <div class="p-10 bg-primary">
                    <h3 class="text-white box m-b-0"><i class="ti-paint-bucket"></i></h3></div>
                <div class="align-self-center m-l-20">
                    <h3 class="m-b-0 text-primary"><?php echo $count[0]->bekas; ?></h3>
                    <h5 class="text-muted m-b-0">Jumlah Produk Bekas</h5></div>
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
                <h4 class="card-title">Daftar Produk</h4>
                <h6 class="card-subtitle">Daftar produk barang terkait stok, harga, nama dll</h6>
                <div class="table-responsive m-t-40">
                    <table id="tabel_produk" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
                        <thead>
                            <tr>
                                <th>Nama Produk</th>
                                <th>Kategori</th>
                                <th>Kondisi</th>
                                <th>Label/Merek</th>
                                <th>Stok</th>
                                <th>Harga</th>
                                <th>Rekomendasi</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Nama Produk</th>
                                <th>Kategori</th>
                                <th>Kondisi</th>
                                <th>Label/Merek</th>
                                <th>Stok</th>
                                <th>Harga</th>
                                <th>Rekomendasi</th>
                                <th>Aksi</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php
                            if (!empty($produk)) {
                                $i = 1;
                                foreach ($produk as $key => $value) {
                                    ?> 
                                    <tr>
                                        <td><?php echo $value->nama_produk; ?></td>
                                        <td><?php echo $value->nama_kat; ?></td>
                                        <td><?php
                                            if ($value->kondisi_barang == 1) {
                                                echo 'Baru';
                                            } else if ($value->kondisi_barang == 2) {
                                                echo 'Bekas';
                                            }
                                            ?></td>
                                        <td><?php echo $value->nama_merek; ?></td>
                                        <td><?php echo $value->stok; ?></td>
                                        <td>Rp.<?php echo $value->harga_barang; ?></td>
                                        <td><?php
                                            if ($value->rekomendasi == 0) {
                                                echo 'Tidak';
                                            } else if ($value->rekomendasi == 1) {
                                                echo 'Ya';
                                            }
                                            ?></td>
                                        <td>
                                            <a onclick="act_del_produk(<?php echo $value->id; ?>)" ><button type="button" class="btn btn-danger btn-sm btn-icon btn-pure btn-outline delete-row-btn " data-toggle="tooltip" data-original-title="Hapus"><i class="ti-close" aria-hidden="true"></i></button></a>
                                            <a href="<?php echo site_url('produk/get_produk/' . $value->id); ?>"><button type="button" class="btn btn-info btn-sm btn-icon btn-pure btn-outline delete-row-btn " data-toggle="tooltip" data-original-title="Edit"><i class="ti-pencil" aria-hidden="true"></i></button></a>
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
    function act_del_produk(object) {
        alertify.confirm("Apa anda yakin ingin menghapus data ini ?", function (e) {
            if (e) {
                $.ajax({
                    type: "post",
                    url: "<?php echo base_url(); ?>produk/delete_produk",
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