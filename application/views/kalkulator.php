<!-- banner application -->
<div class="card-wrapper bg-white text-dark">
<div class="row m-4">
<div class="col-6"></div>
<div class="col-6">
<img class="card-img m-0 p-0" src="<?= base_url()?>/assets/img/calc.png" alt="Card image">    
            </div>
        </div>
    <div class="card-img-overlay mt-5 p-0" style="height : 35%">
        <div class="row m-4">
            <div class="col-8">
                <h4 class="card-title">&nbsp Kalkulator Kehamilan</h4>
                <p class="card-text"><p class="card-text">Kalkulator yang membantu memperkirakan hari perkiraan lahir si buah hati.</p></p>
            </div>
            <div class="col-4">
            <h6 class="float-right btn-sm btn-info ml-1 bg-info" onclick="window.location='<?=base_url('C_index')?>'"><i class="fas fa-arrow-left"></i>&nbsp Back</h6>  
            </div>
        </div>
    </div>
</div>
        <div class="col">
        <form action="<?=base_url('C_index/kalkulator_kehamilan')?>" method="POST">
            <div class="form-group">
            <label for="tanggal_haid">Tanggal Hari Pertama Haid Terakhir (HPHT)</label>
            <input required type="date" name="tanggal_haid" id="tanggal_haid" class="form-control">
            </div>
            <div class="form-group">
            <!-- <label for="siklus_haid">Siklus Haid</label>
            <input required type="number" name="siklus_haid"  id="siklus_haid" class="form-control" max="35" min="21"> -->
            <div class="form-group">
            </div>

            <button type="submit" class="btn btn-sm btn-success">Hitung perkiraan</button>
        </form>
        </div>
       
        <hr>
        <?php if(($tgl_input??"")!=""){?>
        <p class="description">Hasil Perkiraan</p>
        Berdasarkan HPHT anda yaitu <?= $tgl_input??"{tanggal input}"?> maka dapat di perkirakan sebagai berikut :<br>
        <!-- Perkiraan Pembuahan : <?=$hp==""?"{tanggal pembuahan}":date_format($hp,"Y-m-d")?><br> -->
        <!-- Perkiraan Usia Janin : <?=$uj_minggu??"0"?> Minggu, <?=$uj_hari??"0"?> Hari   <br> -->
        Perkiraan lahir : <?=$hpt==""?"{tanggal perkiraan lahir}":date_format($hpt,"Y-m-d")?><br>
        Asumsi ini mengakibatkan metode ini mempunyai tingkat kesalahan plus minus 2 minggu.
        <?php } ?>
    </div>
</div>
<!-- end of article -->