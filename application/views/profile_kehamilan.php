<div class="card-wrapper bg-white text-dark">
    <!-- <div class="row m-4">
<div class="col-6"></div>
<div class="col-6">
<img class="card-img m-0 p-0" src="<?= base_url()?>/assets/img/screening.png" alt="Card image">    
            </div>
        </div>
    <div class="card-img-overlay mt-5 p-0" style="height : 35%">
        <div class="row m-4">
            <div class="col-8">
                <h4 class="card-title"><i class="fas fa-user"></i>&nbsp Profile Ibu Hamil</h4>
                <p class="card-text"><p class="card-text">Informasi pribadi Mengenai Ibu Hamil.</p></p>
            </div>
            <div class="col-4">
            <h6 class="float-right btn-sm btn-primary ml-1 bg-info" onclick="window.history.back();"><i class="fas fa-arrow-left"></i>&nbsp Back</h6>   
            </div>
        </div>
    </div>
</div> -->
    <div class="card-wrapper">
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <img class="rounded-circle" src="<?= base_url()?>/assets/img/default-avatar.png" alt="profile">
                <h6 class="text-dark text-center text-capitalize m-2 p-2 h5"><?=$this->session->userdata('nama')?></h6>
            </div>
            <div class="col-4"></div>
        </div>
        <div class="row">
            <div class="col-2"></div>
            <div class="col-8">
                <h6 class="text-dark text-center text-capitalize m-2 h5">Usia <?= $usia?> Tahun</h6>
                <h6 class="text-dark text-center text-capitalize m-2 p-2 h5">Usia Kandungan <?=$rs_data[0]->bln_kehamilan?> Bulan</h6>
            </div>
            <div class="col-2"></div>
        </div>

        <div class="row">
            <div class="col-6">
                <button class="btn btn-info btn-lg h6" type="button" data-toggle="collapse"
                    data-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample">
                    Riwayat Check up <br><br>
                </button>
            </div>
            <div class="col-6">
                <a href="<?=base_url('C_screening/create_survei')?>" class="btn btn-info btn-lg h6">
                    Ambil Survei Kehamilan
                </a>
            </div>
            <div class="col-6">
                <button class="btn btn-info btn-lg h6" type="button" data-toggle="collapse"
                    data-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample">
                    Tambah riwayat checkup <br><br>
                </button>
            </div>
            <div class="col-6">
                <a href="<?=base_url('C_form_profile_hamil')?>" class="btn btn-info btn-lg h6">
                    Lengkapi Profile Ibu Hamil
                </a>
            </div>
        </div>
        <div class="collapse" id="collapseExample1">
            <div class="card-wrapper card-body bg-light text-center">
                <h6 class="text-center">Riwayat Check Up</h6>
                <hr>
                <div class="row">
                    <div class="col-6 h6 text-left">
                        <p class="description text-dark text-center text-capitalize">
                            Petama : <?= $rs_riwayat[0]->tgl_checkup??""?>
                        </p>
                    </div>
                    <div class="col-6 h6 text-left">
                        <p class="description text-dark text-center text-capitalize">
                            Kedua : <?= $rs_riwayat[1]->tgl_checkup??""?>
                        </p>
                    </div>
                    <div class="col-6 h6 text-right">
                        <p class="description text-dark text-center text-capitalize">
                            Ketiga : <?= $rs_riwayat[2]->tgl_checkup??""?>
                        </p>
                    </div>
                    <div class="col-6 h6 text-right">
                        <p class="description text-dark text-center text-capitalize">
                            Keempat : <?= $rs_riwayat[3]->tgl_checkup??""?>
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="collapse" id="collapseExample2">
            <div class="card-wrapper card-body bg-light text-center">
                <h6 class="text-center">Tambah Riwayat Check Up</h6>
                <hr>
                <form action="<?=base_url('C_index/post_riwayat_checkup')?>" method="POST">
                <div class="row">
                   
                        <div class="col-8 h6 text-left">
                            <input required type="date"
                                min="<?= $rs_riwayat[3]->tgl_checkup??$rs_riwayat[2]->tgl_checkup??$rs_riwayat[1]->tgl_checkup??$rs_riwayat[0]->tgl_checkup??""?>"
                                name="tgl_checkup" class="form-control" id="">
                        </div>
                        <div class="col-2">
                            <button class="btn btn-info m-0 btn-sm">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- end of article -->