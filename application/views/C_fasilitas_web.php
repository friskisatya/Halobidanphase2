<div class="wrapper" id="index">
    <div class="page-header clear-filter" filter-color="orange">
        <div class="page-header-image" data-parallax="true"
            style="background-image:url('<?= base_url()?>/assets/img/coding.jpg');">
        </div>
        <div class="container">
            <div class="content-center brand">
                <img class="n-logo" src="<?= base_url()?>/assets/img/doctor.png" alt="">
                <h1 class="h1-seo title">Hai Bidan.</h1>
                <h3>Selamat Datang Admin.</h3>
            </div>
        </div>
    </div>
    <div class="card-wrapper content-center">
        <div class="card ml-5 mr-4 p-3 bg-light" style="width: 94%;top: -50px;">
            <div class="row">
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <h3 class="title" id="layanan">Menu Setup Fasilitas Klinik</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-md-2"></div>
                <div class="col-md-8 ml-auto mr-auto text-center">
                    <form action="<?=base_url('C_setup_fasilitas/post_create_web')?>" method="POST">
                        <div class="form-group">
                            <label for="nama_fasilitas">Nama Fasilitas</label>
                            <input type="text" name="nama_fasilitas" id="nama_fasilitas" class="form-control"
                                placeholder="Nama Fasilitas">
                        </div>
                        <div class="form-group">
                            <label for="status">Status Visible</label>
                            <select name="status" id="status" class="form-control"
                                style=" background: rgba(0, 0, 0, 0.2);" required>
                                <option value="">Pilih Status</option>
                                <option value="1">Aktif</option>
                                <option value="0">Tidak Aktif</option>
                            </select>
                        </div>
                        <div class="container text-center">
                    <button type="submit" class="btn btn-success">Submit</button>
                    </form>
                </div>
                </div>
                
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
</div>