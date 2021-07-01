<!-- banner application -->
<div class="card-wrapper bg-white text-dark">
<div class="row m-4">
<div class="col-6"></div>
<div class="col-6">
<img class="card-img m-0 p-0" src="<?= base_url()?>/assets/img/screening.png" alt="Card image">    
            </div>
        </div>
    
    <div class="card-img-overlay mt-5 p-0" style="height : 35%">
        <div class="row m-4">
            <div class="col-9">
                <h4 class="card-title">Selamat Datang Admin</h4>
                <p class="card-text">Lakukan Setup Aplikasi Agar Aplikasi Dapat Berjalan Sesuai Data yang telah di setup.</p>
            </div>
        </div>
    </div>
</div>
    <div class="row justify-content">
    <div class="row">
        <div class="col-6" onclick="window.location='<?=base_url('C_setup_klinik')?>'">
            <div class="card bg-light text-dark" style="width: 15rem; border-radius: 5%">
                <img class="card-img-top" src="<?= base_url()?>/assets/img/clinic.png" alt="Card image cap"
                    style="height: 50%; weight :50px">
                <div class="card-body m-auto p-2">
                    <h5 class="card-title text-center">Setup Klinik</h5>
                </div>
            </div>
        </div>

        <div class="col-6" onclick="window.location='<?=base_url('C_setup_fasilitas')?>'">
            <div class="card bg-light text-dark" style="width: 15rem; border-radius: 5%">
                <img class="card-img-top" src="<?= base_url()?>assets/img/clinic.png" alt="Card image cap"
                    style="height: 50%; weight :50px">
                <div class="card-body m-auto p-2">
                    <h5 class="card-title text-center">Setup Fasilitas klinik</h5>
                </div>
            </div>
        </div>

        <div class="col-6" onclick="window.location='<?=base_url('C_setup_artikel')?>'">
            <div class="card bg-light text-dark" style="width: 15rem; border-radius: 5%">
                <img class="card-img-top" src="<?= base_url()?>assets/img/task.png" alt="Card image cap"
                    style="height: 50%; weight :50px">
                <div class="card-body m-auto p-2">
                    <h5 class="card-title text-center">Setup Article <br><br></h5>
                </div>
            </div>
        </div>

        <div class="col-6" onclick="window.location='<?=base_url('C_setup_bidan')?>'">
            <div class="card bg-light text-dark" style="width: 15rem; border-radius: 5%">
                <img class="card-img-top" src="<?= base_url()?>assets/img/dokter2.png" alt="Card image cap"
                    style="height: 50%; weight :50px">
                <div class="card-body m-auto p-2">
                    <h5 class="card-title text-center"><br> Setup Tenaga Kesehatan (Bidan)</h5>
                </div>
            </div>
        </div>
    </div>
    
</div>