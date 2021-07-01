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
                <p class="card-text">Jawab Pertanyaan Berikut Secara Jujur dan Sadar Agar Dapat Terdeteksi Tingkat Resiko Kehamilan Anda.</p>
            </div>
            <div class="col-4">
            <h6 class="float-right btn-sm btn-info ml-1 bg-info" onclick="window.location='<?=base_url('C_screening')?>'"><i class="fas fa-arrow-left"></i>&nbsp Back</h6>  
            </div>
        </div>
    </div>
</div>
  <?= $this->session->userdata("notif_insert");$this->session->unset_userdata("notif_insert")?>
    <form action="<?=base_url('C_screening/post_create')?>" method="POST">
    <div class="table-responsive">
        <table class="table-striped">
        <tbody>
            <tr><td colspan="2"><h3 class="mb-0 text-dark">A.Keadaan Ibu Hamil</h3></td></tr>
            <?php $index = 1; foreach($rs_screening as $screening){?>
                <?php if($index == 11){?>
                    <tr><td colspan="2"><h3 class="mb-0 text-dark">B.Kondisi Ibu Hamil</h3></td></tr>
                <?php } ?>
                <tr>
                    <td><p class="description h5 text-dark text-capitalize"><?= $screening->pertanyaan_screening?></p></td>
                    <td width="30%">
                    <input type="hidden" name="pertanyaan[]" value="<?= $screening->id?>">
                    <select name="jawaban[]" class="form-control badge badge-info" required>
                        <option value="">Jawaban</option>
                        <option value="Y">YA</option>
                        <option value="N">TIDAK</option>
                    </select>
                    </td>
                </tr>
            <?php $index++; } ?>
        </tbody>
            <!-- <tbody>
          <tr>
          <td>
          <p class="description"> Hamil pertama terlalu muda/tua(<17 th. ≥ 35 th)</p>
          </td>
          <td>
          <select name="status" id="status" class="form-control" style=" background: rgba(0, 0, 0, 0.2);" required>
                    <option value="">Jawaban</option>
                    <option value="4">YA</option>
                    <option value="0">TIDAK</option>
                </select>
          </td>
          </tr>
          <tr>
          <td>
          <p class="description">Pernah melahirkan dengan tindakan( vacum, forcep)</p>
          </td>
          <td>
          <select name="status" id="status" class="form-control" style=" background: rgba(0, 0, 0, 0.2);" required>
                    <option value="">Jawaban</option>
                    <option value="4">YA</option>
                    <option value="0">TIDAK</option>
                </select>
          </td>
          </tr>
            </tbody> -->
        </table>
    </div>
</div>
</div>
        <div class="container text-center">
            <button type="submit" class="btn btn-success">Proses</button>
        </div>
</form>
<br>
<br>
<br>
<br>
<br>
<br>
</div>