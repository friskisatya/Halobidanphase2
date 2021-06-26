<!-- banner application -->
<div class="card-wrapper bg-white text-dark">
    <img class="card-img m-0 p-0" src="<?= base_url()?>/assets/img/dashboard_2.png" alt="Card image">
    <div class="card-img-overlay mt-5 p-0" style="height : 35%">
        <div class="row m-4">
            <div class="col-3">
            </div>
            <div class="col-9">
            <h6 class="float-right btn-sm btn-info ml-1 bg-info" onclick="window.location='<?=base_url('C_index')?>'"><i class="fas fa-arrow-left"></i>&nbsp Back</h6>  
                <h4 class="title"><i class="fas fa-user-nurse"></i>&nbsp Chat Dengan Bidan </h4>
                <p>Nikmati Kemudahan berkonsultasi dengan bidan yang berpengalaman</p>
            </div>
        </div>
    </div>
</div>
<!-- table of bidan -->
<div class="table-responsive">
    <table class="table table-shopping">
        <?php
            foreach($rs_klinik as $klinik){
            ?>
        <thead>
            <tr>
                <th class="title bg-light text-left" style="text-transform: uppercase;" colspan="3">Klink/Rumah Sakit : <?=$klinik->nama_klinik?></th>
            </tr>
        </thead>
        <tbody>
            <?php
                $query_anggota = $this->db->query("
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

                foreach($query_anggota as $bidan){
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
                    <button onclick="f_telp_bidan('<?=$bidan->telp_bidan?>','<?=$bidan->nama_bidan?>')"
                        class="btn btn-primary btn-outline-info btn-round">Chat</button>
                </td>
            </tr>
            <?php } ?>
        </tbody>
        <?php } ?>
    </table>
</div>

<script>
function f_telp_bidan(telp, nama_dokter) {
    $.ajax({
        type: "POST",
        url: "<?=base_url()?>" + "C_index/post_riwayat_checkup_wa",
        data: {},
        dataType: "text",
        success: function(data) {
            window.open("https://wa.me/" + telp + "?text=Halo+dokter+" + nama_dokter +"%2C+saya+<?= $this->session->userdata('nama') ?>+mau+konsultasi+terkait+kehamilan+saya"
                );
        }
    });
}
</script>
<!-- end of article -->