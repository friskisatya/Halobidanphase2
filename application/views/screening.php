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
                <h4 class="card-title">Screening Mandiri</h4>
                <p class="card-text">Screening Mandiri Adalah layanan Mandiri Untuk Mendeteksi Dini Resiko Kehamilan.</p>
            </div>
            <div class="col-4">
            <h6 class="float-right btn-sm btn-info ml-1 bg-info" onclick="window.location='<?=base_url('C_index')?>'"><i class="fas fa-arrow-left"></i>&nbsp Back</h6>  
            </div>
        </div>
    </div>
</div>
<!-- <?= $this->session->userdata("notif_insert");$this->session->unset_userdata("notif_insert")?> -->
<!-- <?= $this->session->userdata("notif_delete");$this->session->unset_userdata("notif_delete")?> -->
<div class="table-responsive">
        <table class="table table-shopping">
            <thead>
                <th>Tanggal Screening</th>
                <th>Tingkat Resiko</th>
                <th class="text_right bg-info text-white h5"onclick="window.location='<?=base_url('C_screening/create')?>'"><i class="fas fa-plus"></i>&nbsp Screening</th>
            </thead>
            <tbody>
              <?php foreach($rs_data as $data) {
                $total_skor = $data->total_score;
                $join = $this->db->query("SELECT * FROM t_maaping_screening WHERE skor <= '$total_skor' and skor_akhir >= '$total_skor'")->result();
                
              ?>

              <tr>
                <td class="align-middle"><?= $data->tanggal_screening?></td>
                <td class="align-middle"><?= $join[0]->kel_resiko?></td>
                <td><button class="btn btn-info h6" onclick="window.location='<?=base_url('C_screening/edit/'.$data->id_screening_history)?>'"><i class="fas fa-edit"></i> Detail</button></td>
              </tr>
              <?php } ?>
            </tbody>
        </table>
    </div>
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
        <button type="button" class="btn btn-primary" onclick="window.location='<?=base_url('C_setup_bidan/delete/').$bid->id_bidan?>'">Hapus</button>
      </div>
    </div>
  </div>
</div>