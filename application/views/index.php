<!-- banner application -->
<div class="card-wrapper bg-white text-dark">
    <img class="card-img m-0 p-0" src="<?= base_url()?>/assets/img/dashboard.png" alt="Card image">
    <div class="card-img-overlay mt-5 p-0" style="height : 35%">
        <div class="row m-4">
            <div class="col-9">
                <h4 class="card-title">Solusi cerdas untuk Ibu Hamil</h4>
                <p class="card-text">Aplikasi yang membantu ibu yang sedang hamil untuk memantau perkembangan si calon
                    buah hati.</p>
            </div>
        </div>
    </div>
</div>

<div class="card-wrapper bg-white text-dark">
    <!-- tabs feautre -->
    <h4 class="card-title text-center">Layanan Ibu Hamil</h4>
    <div class="row">
        <div class="col-6" onclick="window.location='<?=base_url('C_index/chat_bidan')?>'">
            <div class="card bg-primary text-light" style="width: 15rem; border-radius: 5%">
                <img class="card-img-top" src="<?= base_url()?>/assets/img/chat.png" alt="Card image cap"
                    style="height: 50%; weight :50px">
                <div class="card-body m-auto p-2">
                    <h5 class="card-title text-center">Chat Dengan Bidan <br><br></h5>
                </div>
            </div>
        </div>

        <div class="col-6" onclick="window.location='<?=base_url('C_index/konsultasi_klinik')?>'">
            <div class="card bg-primary text-light" style="width: 15rem; border-radius: 5%">
                <img class="card-img-top" src="<?= base_url()?>/assets/img/clinic.png" alt="Card image cap"
                    style="height: 50%; weight :50px">
                <div class="card-body m-auto p-2">
                    <h5 class="card-title text-center">Konsultasi Dengan Klinik</h5>
                </div>
            </div>
        </div>

        <div class="col-6" onclick="window.location='<?=base_url('C_index/konsultasi_klinik')?>'">
            <div class="card bg-primary text-light" style="width: 15rem; border-radius: 5%">
                <img class="card-img-top" src="<?= base_url()?>/assets/img/calc.png" alt="Card image cap"
                    style="height: 50%; weight :50px">
                <div class="card-body m-auto p-2">
                    <h5 class="card-title text-center">Konsultasi Dengan Klinik</h5>
                </div>
            </div>
        </div>

        <div class="col-6" onclick="window.location='<?=base_url('C_index/konsultasi_klinik')?>'">
            <div class="card bg-primary text-light" style="width: 15rem; border-radius: 5%">
                <img class="card-img-top" src="<?= base_url()?>/assets/img/screening.png" alt="Card image cap"
                    style="height: 50%; weight :50px">
                <div class="card-body m-auto p-2">
                    <h5 class="card-title text-center">Screening Mandiri</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- tabs article -->
    <h4 class="card-title text-center">Baca Artikel </h4>
    <div class="row text-center flex-nowrap" style="overflow: auto;">

        <div class="card-wrapper col-10 p-2 m-1 bg-light" style="width: 20rem;">
            <img class="card-img-top"  src="<?= base_url()?>/assets/img/screening.png" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
       
        <div class="card-wrapper col-10 p-2 m-1 bg-light" style="width: 20rem;">
            <img class="card-img-top"  src="<?= base_url()?>/assets/img/header.jpg" alt="Card image cap">
            <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                    card's content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>

    </div>
</div>