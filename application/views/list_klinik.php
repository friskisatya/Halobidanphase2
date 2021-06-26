<!-- banner application -->
<div class="card-wrapper bg-white text-dark">
    <img class="card-img m-0 p-0" src="<?= base_url()?>/assets/img/clinic.png" alt="Card image">
    <div class="card-img-overlay mt-5 p-0" style="height : 35%">
        <div class="row m-4 mb-0">            
            <div class="col-12">
            <h6 class="float-right btn-sm btn-info ml-1 bg-info" onclick="window.location='<?=base_url('C_index')?>'"><i class="fas fa-arrow-left"></i>&nbsp Back</h6>  
                    <h4 class="title"><i class="fas fa-hospital-alt"></i>&nbsp Konsultasi Dengan Klinik</h4>
                    <p>Jangkau dan Dapatkan informasi klinik di dekat anda</p>
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