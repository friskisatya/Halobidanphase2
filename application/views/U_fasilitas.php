<h6 class="float-right btn-sm btn-info ml-1 bg-info" onclick="window.location='<?=base_url('C_setup_fasilitas')?>'"><i class="fas fa-arrow-left"></i>&nbsp Back</h6>  
    <h4 class="title"><i class="fas fa-columns"></i>&nbsp Update Data Fasilitas Klinik</h4>
    <?= $this->session->userdata("notif_edit");$this->session->unset_userdata("notif_edit")?>
        <form action="<?=base_url('C_setup_fasilitas/post_edit/').$id ?>" method="POST">
        <div class="card-body">
            <div class="form-group">
                <label for="nama_fasilitas">Nama Fasilitas</label>
                <input type="text" name="nama_fasilitas" id="nama_fasilitas" class="form-control" placeholder="Nama Fasilitas" value="<?=$rs_fasilitas[0]->nama_fasilitas?>">
            </div>
            <div class="form-group">
                <label for="status">Status Visible</label>
                <select name="status" id="status" class="form-control" style=" background: rgba(0, 0, 0, 0.2);">
                <option <?=$rs_fasilitas[0]->status==""?"selected":"" ?> value="">Pilih Status</option>
                        <option <?=$rs_fasilitas[0]->status=="1"?"selected":"" ?> value="1">Aktif</option>
                        <option <?=$rs_fasilitas[0]->status=="0"?"selected":"" ?> value="0">Tidak Aktif</option>
                </select>
            </div>
        </div>
        <div class="container text-center">
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
</form>
</div>