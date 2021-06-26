<?php
    foreach($rs_klinik as $klinik){
    ?>
<!-- banner application -->
<div class="card-wrapper bg-white text-dark">
    <img class="card-img m-0 p-0" src="<?= base_url()?>/assets/img/dashboard_3.png" alt="Card image">
    <div class="card-img-overlay mt-5 p-0" style="height : 35%">
        <div class="row m-4 mb-0">
            <div class="col-2"></div>
            <div class="col-10">
                <h6 class="float-right btn-sm btn-primary ml-1 bg-info" onclick="window.history.back();"><i
                        class="fas fa-arrow-left"></i>&nbsp Back</h6>
                <h4 class="title" style="text-transform: uppercase;"><i class="fas fa-hospital-alt"></i>&nbsp
                    <?=$klinik->nama_klinik?></h4>
                <p class="text-description h6"><?=$klinik->alamat_klinik?></p>
                <img class="card-img-top" src="<?= base_url('uploads/').$klinik->img_path?>" alt="Card image cap">
            </div>
            <blockquote class="blockquote bg-light m-2" style="border-radius: 5%">
                <p class="text-description text-secondary h6 text-justify" style="text-transform: capitalize;">
                    <?=$klinik->tentang?></p>
            </blockquote>
            <h4 class="card-title text-center">Fasilitas</h4>
            <div class="row">
                <?php
                $rs_fasilitas = $this->db->query("
                SELECT 
                    tf.id_fasilitas,
                    tf.nama_fasilitas
                FROM 
                    t_klinik_fasilitas tkf,
                    t_fasilitas tf
                WHERE 
                    tkf.id_klinik = '$klinik->id_klinik'
                    AND tkf.id_fasilitas = tf.id_fasilitas
                ")->result();
                foreach($rs_fasilitas as $fasilitas){
                ?>
                <div class="col-4">
                    <p><?=$fasilitas->nama_fasilitas?></p>
                </div>
                <div class="col-2">
                    <i class="fas fa-check"></i>
                </div>
                <?php } ?>
            </div>
            <div class="row">
                
                <div class="col-3">
                <a href="#" onclick="f_telp('<?=$klinik->telp_klinik?>','<?=$klinik->nama_klinik?>')">
                    <h4 class="btn btn-md btn-info">Telepon <br><br></h4>
                </a>
                </div>
                <div class="col-1"></div>
                <div class="col-3">
                <a href="#" onclick="f_location('<?=$klinik->latitude?>','<?=$klinik->longitude?>')">
                    <h4 class="btn btn-md btn-info ">Petunjuk Arah<br></h4>
                </a>
                </div>
                <div class="col-1"></div>
                <div class="col-3 float-right">
                <button class="btn btn-md btn-info" type="button" data-toggle="collapse" data-target="#collapseExample"
                    aria-expanded="false" aria-controls="collapseExample">
                    Daftar Bidan
                </button>            
                </div>
            </div>
            <div class="collapse" id="collapseExample">
                    <div class="table-responsive">
                        <table class="table table-shopping">
                            <thead>
                            </thead>
                            <tbody>
                                <?php
                        $rs_bidan = $this->db->query("
                            SELECT 
                                tb.id_bidan,
                                tb.nama_bidan,
                                tb.mulai_bekerja,
                                tb.img_profile,
                                tb.telp_bidan
                            FROM 
                                t_klinik_anggota tka,
                                t_bidan tb 
                            WHERE 
                                tka.id_klinik = '$klinik->id_klinik'
                                AND tka.id_bidan = tb.id_bidan
                        ")->result();

                        foreach($rs_bidan as $bidan){
                            $awal  = date_create($bidan->mulai_bekerja);
                            $akhir = date_create(); // waktu sekarang
                            $diff  = date_diff( $awal, $akhir );
                        ?>
                                <tr>
                                    <td>
                                    <div class="img-container">
                        <div class="card bg-dark text-white">
                            <img class="card-img" src="<?= base_url()?>uploads/<?=$bidan->img_profile?>" alt="bidan"
                                style="width: 16rem;">
                            <div class="card-img-overlay d-flex h-10 flex-column justify-content-end p-0">
                                <h5 class="card-title text-center btn-warning"><?= $diff->y?> Tahun</h5>
                            </div>
                        </div>
                    </div>
                                    </td>
                                    <td>
                                    <p class="text-left title h6"><?=$bidan->nama_bidan?></p>
                                    </td>
                                    <td>
                                        <?php 
                                if ($this->session->userdata('email')=="" OR empty($this->session->userdata('email'))) {
                                    $this->session->set_userdata("notif_login","<span class='login100-form-title-1'><font size='3px' color='#c80000'>Silahkan Login Terlebih Dahulu</font></span>");
                                    
                                }else{
                                ?>
                                        <button onclick="f_telp_bidan('<?=$bidan->telp_bidan?>','<?=$bidan->nama_bidan?>')"
                                        class="btn btn-primary btn-outline-info btn-round">Chat</button>
                                        <?php } ?>
                                    </td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
        <br>
<br><br>
<br><br><br>
    </div>
</div>
<?php } ?>
<script>
function f_location(latitude, longitude) {
    // If it's an iPhone..
    if ((navigator.platform.indexOf("iPhone") != -1) ||
        (navigator.platform.indexOf("iPod") != -1) ||
        (navigator.platform.indexOf("iPad") != -1))
        window.open("maps://www.google.com/maps/dir/?api=1&travelmode=driving&layer=traffic&destination=" + latitude +
            "," + longitude);
    else
        window.open("https://www.google.com/maps/dir/?api=1&travelmode=driving&layer=traffic&destination=" + latitude +
            "," + longitude);
    //   window.open("https://wa.me/6282130327606?text=Saya%20ingin%20bertanya%20tentang%20rumah%20yang%20dijual");
}

function f_telp(telp, nama_klinik) {
    window.open("https://wa.me/" + telp + "?text=Halo+" + nama_klinik +"%2C+saya+<?= $this->session->userdata('nama') ?>+mau+konsultasi+terkait+kehamilan+saya");
}

function f_telp_bidan(telp, nama_dokter) {
    window.open("https://wa.me/" + telp + "?text=Halo+dokter+" + nama_dokter +"%2C+saya+<?= $this->session->userdata('nama') ?>+mau+konsultasi+terkait+kehamilan+saya");
}
</script>