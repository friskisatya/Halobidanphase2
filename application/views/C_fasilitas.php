<h6 class="float-right btn-sm btn-info ml-1 bg-info" onclick="window.location='<?=base_url('C_setup_fasilitas')?>'"><i class="fas fa-arrow-left"></i>&nbsp Back</h6>  
    <h4 class="title"><i class="fas fa-columns"></i>&nbsp Tambah Data Fasilitas Klinik</h4>
    <form action="<?=base_url('C_setup_fasilitas/post_create')?>" method="POST">
        <div class="card-body">
            <!-- <div class="form-group">
                    <label for="kode_fasilitas">Kode Fasilitas</label>
                    <input type="text" name="kode_fasilitas" id="kode_fasilitas" class="form-control" placeholder="Kode Fasilitas">
            </div> -->
            <div class="form-group">
                <label for="nama_fasilitas">Nama Fasilitas</label>
                <input type="text" name="nama_fasilitas" id="nama_fasilitas" class="form-control" placeholder="Nama Fasilitas">
            </div>
            <div class="form-group">
                <label for="status">Status Visible</label>
                <select name="status" id="status" class="form-control" style=" background: rgba(0, 0, 0, 0.2);" required>
                    <option value="">Pilih Status</option>
                    <option value="1">Aktif</option>
                    <option value="0">Tidak Aktif</option>
                </select>
            </div>
        </div>
        <div class="container text-center">
        <button type="submit" class="btn btn-success">Submit</button>
        </div>
</form>
</div>