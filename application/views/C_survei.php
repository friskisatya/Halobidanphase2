<div class="card-wrapper bg-white text-dark">

<img class="card-img m-0 p-0" src="<?= base_url()?>/assets/img/dashboard_2.png" alt="Card image">    
    <div class="card-img-overlay mt-5 p-0" style="height : 35%">
        <div class="row m-4">
        <div class="col-3"></div>
            <div class="col-9">
            <h6 class="float-right btn-sm btn-info ml-1 bg-info" onclick="window.history.back();"><i class="fas fa-arrow-left"></i>&nbsp Back</h6>  
                <h4 class="card-title">Survei Persiapan Kehamilan</h4>
                <p class="card-text text-capitalize">Survei ini bertujuan agar dapat mengetahui seberapa siap ibu hamil menghadapi persalian dan masa kehamilannya.</p>
            </div>
            
        </div>
    </div>
</div>
  <form action="<?=base_url('C_screening/post_create_survei')?>" method="POST">
    <div class="card-body">

        <?php foreach($rs_data as $a){?>
        <div class="row">
            <div class="col-8">
    
            <h5 class=" text-dark font-weight-bold text-capitalize"><?= $a->head?></h5>    
            <p class="text-description text-capitalize text-dark">
                <?= $a->body?>
            </p>
            </div>
            <div class="col-4 m-auto">
            <input type="hidden" name="pertanyaan[]" value="<?= $a->id_survei ?>">
            <select required name="jawaban[]" id="" class="btn btn-info">
              <option value="" <?= $a->jawaban==""?"selected":""?> >Pilih Jawaban</option>
              <option value="Y" <?= $a->jawaban=="Y"?"selected":""?>>Ya</option>
              <option value="N" <?= $a->jawaban=="N"?"selected":""?>>Tidak</option>
            </select>
            </div>

        
        </div>
        <hr>
        <?php } ?>
      
    </div>
</div>
<div class="row">
<div class="container text-center col-6">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
<div class="container text-center col-6">
<button type="button" onclick="window.location='<?=base_url('C_screening/download')?>'" class="btn btn-primary">Download</button>
</div>

</div>

</form>
</div>