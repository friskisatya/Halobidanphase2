<!-- banner application -->
<div class="card-wrapper bg-white text-dark">
<div class="row m-4">
<div class="col-6"></div>
<div class="col-6">
<img class="card-img m-0 p-0" src="<?= base_url()?>/assets/img/clinic.png" alt="Card image">
            </div>
        </div>
    <div class="card-img-overlay mt-5 p-0" style="height : 25%">
        <div class="row m-4">
            <div class="col-8">
                <h4 class="card-title">&nbsp Konsultasi Dengan Klinik</h4>
                <p class="card-text"><p class="card-text">Jangkau dan Dapatkan informasi klinik di dekat anda.</p></p>
            </div>
            <div class="col-4">
            <h6 class="float-right btn-sm btn-primary ml-1 bg-info" onclick="window.location='<?=base_url('C_index')?>'"><i class="fas fa-arrow-left"></i>&nbsp Back</h6>   
            </div>
        </div>
    </div>
</div>
<!-- table of clinic  -->
    <div class="table-responsive">
        <table class="table table-shopping">
            <thead>
            </thead>
            <tbody>
                <?php
                foreach($rs_klinik as $klinik){
                ?>
                <tr>
                    <td>
                        <p class="text-center text-capitalize"><?=$klinik->nama_klinik?></p>
                    </td>
                    <td>
                        <p class="text-center text-capitalize"><?=$klinik->alamat_klinik?></p>
                    </td>
                    <td>
                        <a href="<?=base_url("C_index/detail_klinik/").$klinik->id_klinik?>"><button class="btn btn-primary btn-outline-info btn-round">Detail Klinik</button></a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

<!-- end of article -->