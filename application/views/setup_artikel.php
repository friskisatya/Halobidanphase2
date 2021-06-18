<div class="card-wrapper bg-white text-dark">
<div class="row m-4">
<div class="col-6"></div>
<div class="col-6">
<img class="card-img m-0 p-0" src="<?= base_url()?>/assets/img/screening.png" alt="Card image">    
            </div>
        </div>
    <div class="card-img-overlay mt-5 p-0" style="height : 35%">
        <div class="row m-4">
            <div class="col-8">
                <h4 class="card-title">Setup Artikel</h4>
                <p class="card-text">Setup Artikel adalah setup untuk menampilkan artikel pada halaman user.</p>
            </div>
            <div class="col-4">
            <h6 class="float-right btn-sm btn-primary ml-1 bg-info" onclick="window.history.back();"><i class="fas fa-arrow-left"></i>&nbsp Back</h6>   
            </div>
        </div>
    </div>
</div>
<?= $this->session->userdata("notif_insert");$this->session->unset_userdata("notif_insert")?>
<?= $this->session->userdata("notif_delete");$this->session->unset_userdata("notif_delete")?>
<div class="table-responsive">
        <table class="table table-shopping">
            <thead>
            <thead>
                <th class ="h4">Judul Artikel</th>
                <th class ="h4">Status</th>
                <th class="text_right bg-info text-white h5"onclick="window.location='<?=base_url('C_setup_artikel/create')?>'"><i class="fas fa-plus"></i>&nbsp Tambah Data</th>
            </thead>
            <tbody class="bg-light">
                    <?php
                foreach($rs_artikel as $artikel)
                {
                ?>
                    <tr>
                        <td>
                            <p class="text-center text-capitalize">
                                <?= $artikel->judul_artikel?>
                            </p>
                        </td>
                        <td>
                            <p class="text-center text-capitalize">
                            <?= $artikel->status_artikel=="0"?"Aktif":"Tidak Aktif"?>
                            </p>
                        </td>
                        <td>
                        <button
                                class="btn btn-danger m-1" data-toggle="modal" data-target="#delete" type="button"><i class="fas fa-trash"></i>&nbsp Hapus</button>
                            <button onclick="window.location='<?=base_url('C_setup_artikel/edit/').$artikel->id_artikel?>'"
                                class="btn btn-info m-1 "><i class="fas fa-edit"></i>&nbsp Ubah</button>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
        </table>
    </div>
</div>
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
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
        <button type="button" class="btn btn-primary" onclick="window.location='<?=base_url('C_setup_artikel/delete/').$artikel->id_artikel?>'">Hapus</button>
      </div>
    </div>
  </div>
