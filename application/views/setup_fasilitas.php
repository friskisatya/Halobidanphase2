<div class="card-wrapper bg-white text-dark">
<div class="row m-4">
<div class="col-6"></div>
<div class="col-6">
<img class="card-img m-0 p-0" src="<?= base_url()?>/assets/img/screening.png" alt="Card image">    
            </div>
        </div>
    <div class="card-img-overlay mt-5 p-0" style="height : 25%">
        <div class="row m-4">
            <div class="col-8">
                <h4 class="card-title">Setup Fasilitas Klinik</h4>
                <p class="card-text"><p class="card-text">Setup Fasilitas Klinik Adalah Setup Untuk Menambahkan Fasilitas Yang Tersedia Di Klinik.</p></p>
            </div>
            <div class="col-4">
            <h6 class="float-right btn-sm btn-primary ml-1 bg-info" onclick="window.location='<?=base_url('C_administrasi_aplikasi')?>'"><i class="fas fa-arrow-left"></i>&nbsp Back</h6>   
            </div>
        </div>
    </div>
</div>
<?= $this->session->userdata("notif_insert");$this->session->unset_userdata("notif_insert")?>
<?= $this->session->userdata("notif_delete");$this->session->unset_userdata("notif_delete")?>
<div class="table-responsive">
        <table class="table table-shopping">
            <thead>
                <th class="h4">Nama Fasilitas</th>
                <th class="h4">Status</th>
                <th class="text_right h6 align-middle bg-info text-white"onclick="window.location='<?=base_url('C_setup_fasilitas/create')?>'">Tambah Data</th>
            </thead>
            <tbody>
                    <?php
                foreach($rs_fasilitas as $fas)
                {
                ?>
                    <tr>
                        <td>
                            <p class="text-center text-capitalize">
                                <?= $fas->nama_fasilitas?>
                            </p>
                        </td>
                        <td>
                            <p class="text-center text-capitalize">
                                <?= $fas->status=="1"?"Aktif":"Tidak Aktif"?>
                            </p>
                        </td>
                        <td>
                        <button
                                class="btn btn-danger btn-sm m-1" data-toggle="modal" data-target="#delete<?=$fas->id_fasilitas?>" type="button"><i class="fas fa-trash"></i>&nbsp Hapus</button>
                            <button onclick="window.location='<?=base_url('C_setup_fasilitas/edit/').$fas->id_fasilitas?>'"
                            class="btn btn-info btn-sm m-1"><i class="fas fa-edit"></i>&nbsp Ubah</button>      
                        </td>
                    </tr>

                    <div class="modal fade mt-5" id="delete<?=$fas->id_fasilitas?>" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="delete">Konfirmasi</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                            <i class="tim-icons icon-simple-remove"></i>
                            </button>
                        </div>
                        <div class="modal-body">
                            Apakah Yakin untuk menghapus data berikut ?
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                            <button type="button" class="btn btn-primary" onclick="window.location='<?=base_url('C_setup_fasilitas/delete/').$fas->id_fasilitas?>'">Hapus</button>
                        </div>
                        </div>
                    </div>
                    </div>

                    <?php } ?>
                </tbody>
        </table>
    </div>
</div>
