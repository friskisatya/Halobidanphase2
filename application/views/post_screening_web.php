<?php 
$join = $this->db->query("SELECT * FROM t_maaping_screening WHERE skor <= '$total_skor' and skor_akhir >= '$total_skor'")->result();
?>
<div class="card-wrapper bg-white text-dark">
    <div class="row m-4">
      <br>
      <br>
      <br>
    <br>
    <br>
    </div>
    <div class="card-img-overlay mt-5 p-0" style="height : 35%">
        <div class="row m-4">
            <div class="col-8">
                <h4 class="card-title">Hasil Screening Mandiri</h4>
                <p class="card-text">Hai, Terima Kasih Anda Telah Melakukan Screening Mandiri Anda, Berikut Adalah Hasil
                    Analisa Menurut Sistem.</p>
            </div>
            <div class="col-4">
                <h6 class="float-right btn-sm btn-info ml-1 bg-info"
                    onclick="window.location='<?=base_url('C_index/index_web')?>'"><i class="fas fa-arrow-left"></i>&nbsp Back
                </h6>
            </div>
        </div>
    </div>
</div>
<div class="card-wrapper">
    <div class="card-body">
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
        <p class="blockquote blockquote-primary text-justify text-dark m-4">Anda Berada dalam kelompok resiko
            <?=strtolower($join[0]->kel_resiko)?> disarankan menjalani perawatan oleh
            <?=strtolower($join[0]->perawatan)?> dan <?=$join[0]->perawatan=="TIDAK"?"Tidak Perlu":"Perlu"?> melakukan
            rujukan, berdasarkan dari kelompok resiko kehamilan anda tempat persalianan yang kami sarankan adalah di
            <?=strtolower($join[0]->tempat)?> dan disarankan ditangani oleh <?=strtolower($join[0]->penolong)?>, untuk
            menangani pencegahan komplikasi dalam kehamilan anda disarankan untuk mempersiapkan
            <?=strtolower($join[0]->pencegahan)?>
        </p>
    </div>
</div>
</div>