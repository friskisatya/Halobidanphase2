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
                <h4 class="card-title">Screening Mandiri</h4>
                <p class="card-text">Hai, Terima Kasih Anda Telah Melakukan Screening Mandiri Anda, Berikut Adalah Hasil Analisa Menurut Sistem.</p>
            </div>
            <div class="col-4">
            <h6 class="float-right btn-sm btn-info ml-1 bg-info" onclick="window.location='<?=base_url('C_screening')?>'"><i class="fas fa-arrow-left"></i>&nbsp Back</h6>  
            </div>
        </div>
    </div>
</div>
<div class="card-wrapper">
    <div class="card-body">
        <?php
            $query = $this->db->query("select * From t_screening_history where id_screening_history='$id'")->result();
            $total_skor = $query[0]->total_score??"";
            $join = $this->db->query("SELECT * FROM t_maaping_screening WHERE skor <= '$total_skor' and skor_akhir >= '$total_skor'")->result();
        ?>
        <h4 class="text-center">Skor Anda : </h4>
        <div class="text-center text-dark h1 m-0"><?=$total_skor?></div>
        <h4 class="text-center">Anda Termasuk :</h4>
        <?php if($join[0]->kel_resiko == "RENDAH"){ ?>
        <h4 class="text-center btn-lg btn-success text-capitalize text-light">RESIKO <?=$join[0]->kel_resiko?></h4>
        <?php  } ?>
        <?php if($join[0]->kel_resiko == "TINGGI"){ ?>
        <h4 class="text-center btn-lg btn-primary text-capitalize text-light">RESIKO <?=$join[0]->kel_resiko?></h4>
        <?php  } ?>
        <?php if($join[0]->kel_resiko == "SANGAT TINGGI"){ ?>
        <h4 class="text-center btn-lg btn-danger text-capitalize text-light">RESIKO <?=$join[0]->kel_resiko?></h4>
        <?php  } ?>
    </div>
    <div class="card-description text-dark">
        <h4 class="text-center">Program Perencanaan Persalinan dan Pencegahan Komplikasi</h4>
        <hr>
        <p class="blockquote blockquote-primary text-justify text-dark">Anda Berada dalam kelompok resiko
            <?=strtolower($join[0]->kel_resiko)?> disarankan menjalani perawatan oleh
            <?=strtolower($join[0]->perawatan)?> dan <?=$join[0]->perawatan=="TIDAK"?"Tidak Perlu":"Perlu"?> melakukan
            rujukan, berdasarkan dari kelompok resiko kehamilan anda tempat persalianan yang kami sarankan adalah di
            <?=strtolower($join[0]->tempat)?> dan disarankan ditangani oleh <?=strtolower($join[0]->penolong)?>, untuk
            menangani pencegahan komplikasi dalam kehamilan anda disarankan untuk mempersiapkan
            <?=strtolower($join[0]->pencegahan)?>
        </p>
    </div>
</div>
    <form action="<?=base_url('C_screening/post_create')?>" method="POST">
    <div class="table-responsive">
    <table class="table-striped">
        <tbody>
            <tr><td colspan="2"><h3 class="mb-0 text-dark">A.Keadaan Ibu Hamil</h3></td></tr>
            <?php $index=1; foreach($rs_screening as $screening){
                $detail = $this->db->query("SELECT * FROM t_screening_history_detail where id_screening_history = '$id'")->result();
                foreach($detail as $d){
                    if($screening->id == $d->id_screening){
                ?>
                <?php if($index == 11){?>
                    <tr><td colspan="2"><h3 class="mb-0 text-dark">B.Kondisi Ibu Hamil</h3></td></tr>
                <?php } ?>
                <tr>
                    <td><p class="description h6 text-dark text-capitalize"><?= $screening->pertanyaan_screening?></p></td>
                    <td width="30%">
                    <input type="hidden" name="pertanyaan[]" value="<?= $screening->id?>">
                    <select name="jawaban[]" class="form-control badge badge-info">
                        <option value="" <?= $d->jawaban==""?"selected":"" ?>>Jawaban</option>
                        <option value="Y"  <?= $d->jawaban=="Y"?"selected":"" ?>>YA</option>
                        <option value="N"  <?= $d->jawaban=="N"?"selected":"" ?>>TIDAK</option>
                    </select>
                    </td>
                </tr>
            <?php } } $index++;} ?>
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
        <!-- <div class="container text-center">
            <button type="button" onclick="window.location='<?=base_url('C_screening/preview/').$bid->id_bidan?>' class="btn btn-primary">Preview</button>
        </div> -->
</form>
<br>
<br>
<br>
<br>
<br>
<br>
</div>