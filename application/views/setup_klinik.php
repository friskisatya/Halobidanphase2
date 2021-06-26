<div class="card-wrapper bg-white text-dark">
<div class="row m-4">
<div class="col-6"></div>
<div class="col-6">
<img class="card-img m-0 p-0" src="<?= base_url()?>/assets/img/screening.png" alt="Card image">    
            </div>
        </div>
    <div class="card-img-overlay mt-5 p-0" style="height : 35%">
        <div class="row m-4">
            <div class="col-8">
                <h4 class="card-title">Setup Klinik</h4>
                <p class="card-text"><p class="card-text">Setup Klinik Adalah Setup Untuk Menambahkan Klinik.</p></p>
            </div>
            <div class="col-4">
            <h6 class="float-right btn-sm btn-primary ml-1 bg-info" onclick="window.history.back();"><i class="fas fa-arrow-left"></i>&nbsp Back</h6>   
            </div>
        </div>
    </div>
</div>
<?= $this->session->userdata("notif_insert");$this->session->unset_userdata("notif_insert")?>
<?= $this->session->userdata("notif_delete");$this->session->unset_userdata("notif_delete")?>
<div class="table-responsive">
        <table class="table table-shopping">
            <thead>
                <th>Nama Klinik</th>
                <th>Alamat</th>
                <th class="text_right h6 align-middle bg-info text-white"onclick="window.location='<?=base_url('C_setup_klinik/create')?>'"><i class="fas fa-plus"></i>&nbsp Tambah Data</th>
            </thead>
            <tbody>
                <?php
                foreach($rs_klinik as $klinik)
                {
                ?>
                <tr>
                    <td>
                        <p class="text-center text-capitalize"><?= $klinik->nama_klinik?></p>
                    </td>
                    <td>
                        <p class="text-center text-capitalize"><?= $klinik->alamat_klinik?></p>
                    </td>
                    <td>
                    <button onclick="window.location='<?=base_url('C_setup_klinik/delete/').$klinik->id_klinik?>'" class="btn btn-danger btn-sm m-1"><i class="fas fa-trash"></i>&nbsp Hapus</button>
                    <button onclick="window.location='<?=base_url('C_setup_klinik/edit/').$klinik->id_klinik?>'" class="btn btn-info btn-sm m-1"><i class="fas fa-edit"></i>&nbsp Ubah</button>  
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>