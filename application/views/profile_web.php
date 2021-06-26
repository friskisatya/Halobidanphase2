  <div class="wrapper" id="index">
      <div class="page-header clear-filter" filter-color="orange">
          <div class="page-header-image" style="background-image:url(../assets/img/bg.jpg)"></div>
          <div class="content">
              <div class="container">
                      <div class="card card-login card-plain">
                              <img src="<?=base_url()?>/assets/img/doctor.png" alt="">
                          <h3 class="title m-1 text-center"><?=$this->session->userdata('nama')?></h3>  
                          <h4 class="text-center m-1">Usia <?= $usia?> Tahun</h4>  
                          <h4 class="text-center m-1">Usia Kandungan <?=$usia?> Bulan</h4>                      
                      </div>
                      <div class="row">
                      <div class="col-md-2"></div>
                      <div class="col-md-4">
                      <button type="button" class="btn btn-info btn-round btn-lg btn-block" data-toggle="modal"
                              data-target=".bd-example-modal-lg">Riwayat Check Up</button>
                      </div>
                      <div class="col-md-4">
                      <button type="button" class="btn btn-info btn-round btn-lg btn-block" data-toggle="modal"
                              data-target=".bd-example-modal-lg1">Tambah Riwayat Check Up</button>
                      </div>
                      <div class="col-md-2"></div>

                      <div class="col-md-2"></div>
                      <div class="col-md-4">
                      <button type="button" class="btn btn-info btn-round btn-lg btn-block" data-toggle="modal"
                              data-target=".bd-example-modal-lg2">Ambil Survei kehamilan</button>
                      </div>
                      <div class="col-md-4">
                      <button type="button" class="btn btn-info btn-round btn-lg btn-block" data-toggle="modal"
                              data-target=".bd-example-modal-lg3">Lengkapi Profile Ibu Hamil</button>
                      </div>
                      <div class="col-md-2"></div>

                      </div>
              </div>
          </div>
      </div>
  </div>  

  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="row container">
                  <div class="col-md-2"></div>
                  <div class="col col-md-6 pull-right">
                      <h5 class="title text-right">Riwayat Check Up</h5>
                      <p class="card-description text-right text-dark text-capitalize">Riwayat Check Up Mu dalam 4 kali Check Up Terakhir.</p>
                  </div>
                  <div class="col col-md-4 ">
                      <img class="card-img m-0 p-0 float-right" src="<?= base_url()?>assets/img/task.png"
                          alt="Card image">
                  </div>
              </div>
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
  </div>
</div>

<div class="modal fade bd-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
                  <div class="row container mt-5 content-center">
                      <div class="col-md-1"></div>
                      <div class="col col-md-6 pull-right">
                          <h5 class="title text-right">Tambah Riwayat Check Up</h5>
                          <p class="card-description text-right text-dark text-capitalize">Update Riwayat Check Up Mu Agar Selalu Update dan Terpantau</p>
                          <!-- <a href="" class="btn btn-outline-info btn-round pull-right">Chat Bidan</a>   -->
                      </div>
                      <div class="col col-md-4">
                          <img class="card-img m-0 p-0 float-right" src="<?= base_url()?>assets/img/dokter.png"
                              alt="Card image">
                      </div>
                  </div>
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
</div>

<div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="row container">
                  <div class="col-md-2"></div>
                  <div class="col col-md-6 pull-right">
                      <h5 class="title text-right">Survei Kehamilan</h5>
                      <p class="card-description text-right text-dark text-capitalize">Jawab Pertanyaan Berikut Secara Jujur dan Sadar Agar Dapat Terdeteksi Tingkat Resiko Kehamilan Anda.</p>
                      <button type="button" class="btn btn-outline-info btn-round pull-right" data-toggle="modal"
                              data-target=".bd-example-modal-lg4">Ambil Survei</button>
                  </div>
                  <div class="col col-md-4 ">
                      <img class="card-img m-0 p-0 float-right" src="<?= base_url()?>assets/img/task.png"
                          alt="Card image">
                  </div>
              </div>
              
<?= $this->session->userdata("notif_insert");$this->session->unset_userdata("notif_insert")?>
<?= $this->session->userdata("notif_delete");$this->session->unset_userdata("notif_delete")?>
<div class="table-responsive">
        <table class="table table-shopping">
            <thead>
                <th>Tanggal Survei</th>
                <th class="text_right">Aksi</th>
            </thead>
            <tbody>
          
            </tbody>
        </table>
    </div>
</div>
</div>
    </div>
    
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="delete" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="delete">Konfirmasi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
          <i class="tim-icons icon-simple-remove"></i>
        </button>
      </div>
      <div class="modal-body">
        Apakah Yakin untuk menghapus data berikut ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
        <button type="button" class="btn btn-primary" onclick="window.location='<?=base_url('C_setup_bidan/delete/').$bid->id_bidan?>'">Hapus</button>
      </div>
    </div>
  </div>
</div>
  </div>
</div>

<div class="modal fade bd-example-modal-lg3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="row container">
                  <div class="col-md-2"></div>
                  <div class="col col-md-6 pull-right">
                      <h5 class="title text-right">Informasi Ibu Hamil</h5>
                      <p class="card-description text-right text-dark text-capitalize">Hai, Silahkan lengkapi Data Ibu Hamil Agar Petugas Kesehatan Lebih Mudah Mengidentifikasi Anda.</p>
                  </div>
                  <div class="col col-md-4 ">
                      <img class="card-img m-0 p-0 float-right" src="<?= base_url()?>assets/img/task.png"
                          alt="Card image">
                  </div>
                  <div class="container">
                  <?= $this->session->userdata("notif_edit");$this->session->unset_userdata("notif_edit")?>
    <?= $this->session->userdata("notif_login");$this->session->unset_userdata("notif_login")?>
    <form action="<?=base_url('C_form_profile_hamil/post_create')?>" method="POST">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="nama">Nama Ibu Hamil</label>
                <input required type="text" value="<?= $rs_data[0]->nama??""?>" name="nama" class="form-control" id="nama" placeholder="Nama">
            </div>
            <div class="form-group col-md-6">
                <label for="TTL">Tempat,Tanggal lahir</label>
                <div class="row">
                    <div class="col-6">
                        <input required type="text" value="<?= $rs_data[0]->tempat_lahir??""?>" name="tempat_lahir" class="form-control" id="TTL" placeholder="Tempat Lahir">
                    </div>
                    <div class="col-6">
                        <input required type="date" value="<?= $rs_data[0]->tgl_lahir??""?>" name="tgl_lahir" class="form-control" id="">
                    </div>
                </div>
            </div>
            <div class="col-4">
                <label for="bulan_lahir">Bulan Kehamilan</label>
                <select name="bln_kehamilan" id="bulan_lahir" class="form-control" style=" background: rgba(0, 0, 0, 0.2);">
                    <option value="" class="form-control">Pilih Bulan</option>
                    <?php
                    for ($x = 1; $x <= 9; $x++) {
                    if($rs_data[0]->bln_kehamilan??"" == $x){
                        $sel = "selected";
                    }else{
                        $sel = "";
                    }
                    echo "<option value='$x' $sel >$x</option>";
                    }
                    ?>
                </select>
            </div>
            <div class="col-8">
                <label for="agama">Agama</label>
                <select name="agama" id="agama" class="form-control" style=" background: rgba(0, 0, 0, 0.2);">
                    <option value="" <?= $rs_data[0]->agama??"" == ""?"selected":"" ?> class="form-control">Pilih Agama</option>
                    <option value="Islam" <?= $rs_data[0]->agama??"" == "Islam"?"selected":"" ?> class="form-control">Islam</option>
                    <option value="Protestan" <?= $rs_data[0]->agama??"" == "Protestan"?"selected":"" ?> class="form-control">Protestan</option>
                    <option value="Katolik" <?= $rs_data[0]->agama??"" == "Katolik"?"selected":"" ?> class="form-control">Katolik</option>
                    <option value="Hindu" <?= $rs_data[0]->agama??"" == "Hindu"?"selected":"" ?> class="form-control">Hindu</option>
                    <option value="Buddha" <?= $rs_data[0]->agama??"" == "Buddha"?"selected":"" ?> class="form-control">Buddha</option>
                    <option value="Khonghucu" <?= $rs_data[0]->agama??"" == "Khonghucu"?"selected":"" ?> class="form-control">Khonghucu</option>
                </select>
            </div>
            <div class="form-group col-7 mt-1">
                <label for="pendidikan">Pendidikan Terakhir</label>
                <select name="pendidikan_terakhir" id="pendidikan" class="form-control" style=" background: rgba(0, 0, 0, 0.2);">
                    <option value="" <?= $rs_data[0]->pendidikan_terakhir??"" == ""?"selected":"" ?> class="form-control">Pilih Pendidikan</option>
                    <option value="SD" <?= $rs_data[0]->pendidikan_terakhir??"" == "SD"?"selected":"" ?> class="form-control">SD</option>
                    <option value="SMP" <?= $rs_data[0]->pendidikan_terakhir??"" == "SMP"?"selected":"" ?> class="form-control">SMP</option>
                    <option value="SLTA/SMU/SMK" <?= $rs_data[0]->pendidikan_terakhir??"" == "SLTA/SMU/SMK"?"selected":"" ?> class="form-control">SLTA/SMU/SMK</option>
                    <option value="D3" <?= $rs_data[0]->pendidikan_terakhir??"" == "D3"?"selected":"" ?> class="form-control">D3</option>
                    <option value="S1/D4" <?= $rs_data[0]->pendidikan_terakhir??"" == "S1/D4"?"selected":"" ?> class="form-control">S1/D4</option>
                    <option value="S2" <?= $rs_data[0]->pendidikan_terakhir??"" == "S2"?"selected":"" ?> class="form-control">S2</option>
                    <option value="S3" <?= $rs_data[0]->pendidikan_terakhir??"" == "S3"?"selected":"" ?> class="form-control">S3</option>
                </select>
            </div>
            <div class="form-group col-5 mt-1">
                <label for="gol">Golongan Darah</label>
                <select name="gol_darah" id="gol" class="form-control" style=" background: rgba(0, 0, 0, 0.2);">
                    <option value="" <?= $rs_data[0]->gol_darah??"" == ""?"selected":"" ?> class="form-control">Pilih Golongan Darah</option>
                    <option value="A" <?= $rs_data[0]->gol_darah??"" == "A"?"selected":"" ?> class="form-control">A</option>
                    <option value="B" <?= $rs_data[0]->gol_darah??"" == "B"?"selected":"" ?> class="form-control">B</option>
                    <option value="AB" <?= $rs_data[0]->gol_darah??"" == "AB"?"selected":"" ?> class="form-control">AB</option>
                    <option value="O" <?= $rs_data[0]->gol_darah??"" == "O"?"selected":"" ?> class="form-control">O</option>
                </select>
            </div>
            <div class="form-group col-md-6">
                <label for="pekerjaan">Pekerjaan</label>
                <input required type="text" value="<?= $rs_data[0]->pekerjaan??"" ?>" name="pekerjaan" class="form-control" id="pekerjaan" placeholder="Pekerjaan">
            </div>
            <!-- <div class="form-group col-6">
                <label for="cek_1">Riwayat Check Up Ke 1</label>
                <input type="date" name="cek_1" id="cek_1" class="form-control">
            </div>
            <div class="form-group col-6">
                <label for="cek_2">Riwayat Check Up Ke 2</label>
                <input type="date" name="cek_2" id="cek_2" class="form-control">
            </div>
            <div class="form-group col-6">
                <label for="cek_3">Riwayat Check Up Ke 3</label>
                <input type="date" name="cek_3" id="cek_3" class="form-control">
            </div>
            <div class="form-group col-6">
                <label for="cek_4">Riwayat Check Up Ke 4</label>
                <input type="date" name="cek_4" id="cek_4" class="form-control">
            </div> -->
            
        </div>
        <div class="row">
        <div class="container text-center col-6">
            <button type="submit" class="btn btn-success h6">Lengkapi</button>
        </div>
        <div class="container text-center col-6">
            <button type="button" onclick="window.location='<?=base_url('C_form_profile_hamil/download')?>'" class="btn btn-info h6">Download</button>
        </div>
        </div>
        
</div>
</form>
                  </div>
              </div>
    </div>
  </div>
</div>

<div class="modal fade bd-example-modal-lg4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    <div class="row container">
                  <div class="col-md-2"></div>
                  <div class="col col-md-6 pull-right">
                  <h5 class="title text-right">Survei Kehamilan</h5>
                      <p class="card-description text-right text-dark text-capitalize">Jawab Pertanyaan Berikut Secara Jujur dan Sadar Agar Dapat Terdeteksi Tingkat Resiko Kehamilan Anda.</p>
                  </div>
                  <div class="col col-md-4 ">
                      <img class="card-img m-0 p-0 float-right" src="<?= base_url()?>assets/img/task.png"
                          alt="Card image">
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
        <div class="row">
<div class="container text-center col-6">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
<div class="container text-center col-6">
<button type="button" onclick="window.location='<?=base_url('C_screening/download')?>'" class="btn btn-primary">Download</button>
</div>
    </div>
</div>


</div>

</form>
    </div>
  </div>
</div>