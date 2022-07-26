
<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Konten Blog</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Konten</a></li>
                <li class="breadcrumb-item active">Tambah Konten</li>
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
                <h4 class="card-title">Formulir Tambah Konten</h4>
                <h6 class="card-subtitle"> Silahkan mengisi formulir tambah konten yang sesuai </h6>
                <form class="form-horizontal m-t-20 row" action="<?php echo site_url('blog/kirim_blog'); ?>" enctype="multipart/form-data" method="post">          
                    <div class="form-group col-md-6 m-t-10">
                        <label>Judul Konten</label>
                        <input type="text" name="judul" class="form-control" placeholder="Isikan judul konten anda">
                    </div>   
                    <div class="form-group col-md-6 m-t-10">
                        <label>Tag Konten</label>
                        <input type="text" name="tag" class="form-control" placeholder="Isikan Tag konten anda">
                    </div>
                    <div class="form-group col-md-12 m-t-10">
                        <label>Highlight</label>
                        <input type="text" name="highlight" class="form-control" placeholder="Isikan highlight konten anda">
                    </div>
                    <div class="form-group col-md-12 m-t-10">
                        <label>Isi Blog</label>
                        <textarea class="form-control" id="blog" name="isi_blog" placeholder="Isikan deskripsi produk anda" rows="5"></textarea>
                    </div>             
                    <div class="form-group col-md-12 m-t-10">
                        <label>Gambar Konten Utama</label>
                        <input type="file" name="img" class="form-control" required="" aria-invalid="false">
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
