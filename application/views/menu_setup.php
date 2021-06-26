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
        <div class="btn col m-1 bg-light text-dark" onclick="window.location='<?=base_url('C_setup_klinik')?>'">
            <div class="card-wrapper ">
            <img class="card-img-top rounded mx-auto d-block mt-1" src="<?= base_url()?>/assets/img/clinic.png" alt="Card image cap" style ="width : 3rem ; height : 3rem;">
                <div class="card-body p-1 ">
                    <h6 class="card-title">Setup Klinik</h6>
                </div>
            </div>
        </div>
        <div class="btn col m-1 bg-light text-dark" onclick="window.location='<?=base_url('C_setup_fasilitas')?>'">
            <div class="card-wrapper">
            <img class="card-img-top rounded mx-auto d-block mt-1" src="<?= base_url()?>/assets/img/clinic.png" alt="Card image cap" style ="width : 3rem ; height : 3rem;">
                <div class="card-body p-1">
                    <h6 class="card-title">Setup Fasilitas klinik</h6>
                </div>
            </div>
        </div>
        <div class="btn col m-1 bg-light text-dark" onclick="window.location='<?=base_url('C_setup_bidan')?>'">
            <div class="card-wrapper">
            <img class="card-img-top rounded mx-auto d-block mt-1" src="<?= base_url()?>/assets/img/dashboard_2.png" alt="Card image cap" style ="width : 3rem ; height : 3rem;">
                <div class="card-body p-1">
                    <h6 class="card-title">Setup Tenaga Kesehatan (Bidan)</h6>
                </div>
            </div>
        </div>
    </div>
    <div class="row justify-content">
    <div class="btn col m-1 bg-light text-dark" onclick="window.location='<?=base_url('C_setup_artikel')?>'">
            <div class="card-wrapper">
            <img class="card-img-top rounded mx-auto d-block mt-1" src="<?= base_url()?>/assets/img/chat.png" alt="Card image cap" style ="width : 3rem ; height : 3rem;">
                <div class="card-body p-1">
                    <h6 class="card-title">Setup Artikel</h6>
                </div>
            </div>
        </div>
        <!-- <div class="btn col m-1 bg-light text-dark" onclick="window.location='<?=base_url('C_setup_faq')?>'">
            <div class="card-wrapper">
            <img class="card-img-top rounded mx-auto d-block mt-1" src="<?= base_url()?>/assets/img/faq.png" alt="Card image cap" style ="width : 3rem ; height : 3rem;">
                <div class="card-body p-1">
                    <h6 class="card-title">Setup FAQ</h6>
                </div>
            </div>
        </div> -->
        <!-- <div class="btn col m-1 bg-light text-dark" onclick="window.location='<?=base_url('C_setup_tentang')?>'">
            <div class="card-wrapper">
            <img class="card-img-top rounded mx-auto d-block mt-1" src="<?= base_url()?>/assets/img/calc.png" alt="Card image cap" style ="width : 3rem ; height : 3rem;">
                <div class="card-body p-1">
                    <h6 class="card-title">Ubah Tentang Aplikasi</h6>
                </div>
            </div>
        </div> -->
    </div>
</div>