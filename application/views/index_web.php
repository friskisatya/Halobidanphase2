  <div class="wrapper" id="index">
      <div class="page-header clear-filter" filter-color="orange">
          <div class="page-header-image" data-parallax="true"
              style="background-image:url('<?= base_url()?>/assets/img/beautiful-pregnant-belly.jpg');">
          </div>
          <div class="container">
              <div class="content-center brand">
                  <img class="n-logo" src="<?= base_url()?>/assets/img/doctor.png" alt="">
                  <h1 class="h1-seo title">Hai Bidan.</h1>
                  <h3>Solusi Cerdas Untuk Ibu Hamil.</h3>
              </div>
          </div>
      </div>
      <div class="card-wrapper content-center">
          <div class="card ml-5 mr-4 p-3 bg-light" style="width: 94%;top: -50px;">
              <div class="row">
                  <div class="col-md-8 ml-auto mr-auto text-center">
                      <h3 class="title" id="layanan">Layanan Dari Kami Untuk Kamu <i
                              class="now-ui-icons emoticons_satisfied"></i>
                      </h3>
                  </div>

                  <div class="row container">
                      <div class="col-md-1"></div>
                      <div class="col col-md-4">
                          <img class="card-img m-0 p-0" src="<?= base_url()?>assets/img/dokter2.png" alt="Card image">
                      </div>
                      <div class="col col-md-6">
                          <h5 class="title">Berkonsultasi Dengan Klinik</h5>
                          <p class="card-description text-dark text-capitalize">Jangkau dan Dapatkan informasi Seputar
                              Kehamilan
                              dari klinik di dekat anda</p>
						<?php if(($this->session->userdata("email")??"")!=""){?>
                          <button type="button" class="btn btn-outline-info btn-round" data-toggle="modal"
                              data-target=".bd-example-modal-lg1">Konsultasi </button>
							
						<?php } ?>
                      </div>
                  </div>


                  <div class="row container">
                      <div class="col-md-2"></div>
                      <div class="col col-md-6 pull-right">
                          <h5 class="title text-right">Chat Dengan Bidan Berpengalaman</h5>
                          <p class="card-description text-right text-dark text-capitalize">Nikmati Kemudahan
                              berkonsultasi dengan
                              bidan yang berpengalaman</p>
							  <?php if(($this->session->userdata("email")??"")!=""){?>
                          <button type="button" class="btn btn-outline-info btn-round pull-right" data-toggle="modal"
                              data-target=".bd-example-modal-lg">Chat Bidan</button>
							  <?php } ?>
                          <!-- <a href="" class="btn btn-outline-info btn-round pull-right">Chat Bidan</a>   -->
                      </div>
                      <div class="col col-md-4 ">
                          <img class="card-img m-0 p-0 float-right" src="<?= base_url()?>assets/img/dokter.png"
                              alt="Card image">
                      </div>
                  </div>

                  <div class="row container">
                      <div class="col-md-1"></div>
                      <div class="col col-md-4">
                          <img class="card-img m-0 p-0" src="<?= base_url()?>assets/img/calculator.png"
                              alt="Card image">
                      </div>
                      <div class="col col-md-6">
                          <h5 class="title">Kalkulator Kehamilan</h5>
                          <p class="card-description text-dark text-capitalize">Kalkulator yang membantu memperkirakan
                              hari perkiraan lahir si buah hati.</p>
                          <!-- <a href="" class="btn btn-outline-info btn-round">Hitung</a> -->
						  <?php if(($this->session->userdata("email")??"")!=""){?>
                          <button type="button" class="btn btn-outline-info btn-round" data-toggle="modal"
                              data-target=".bd-example-modal-lg3">Hitung</button>
							<?php } ?>
                      </div>
                  </div>
              </div>

              <div class="row container">
                  <div class="col-md-2"></div>
                  <div class="col col-md-6 pull-right">
                      <h5 class="title text-right">Screening Mandiri</h5>
                      <p class="card-description text-right text-dark text-capitalize">Screening Mandiri Adalah layanan
                          Mandiri
                          Untuk Mendeteksi Dini Resiko Kehamilan.</p>
						  <?php if(($this->session->userdata("email")??"")!=""){?>
                      <button type="button" class="btn btn-outline-info btn-round pull-right" data-toggle="modal"
                          data-target=".bd-example-modal-lg4">Lakukan Screening</button>
						<?php } ?>
                  </div>
                  <div class="col col-md-4 ">
                      <img class="card-img m-0 p-0 float-right" src="<?= base_url()?>assets/img/task.png"
                          alt="Card image">
                  </div>
              </div>
              <hr>
              <div class="col-md-12 ml-auto mr-auto">
                  <div class="col-md-12 ml-auto mr-auto text-left">
                      <h3 class="title" id="layanan">Artikel Seputar Kehamilan</h3>
                      <div class="col-md-6 text-left">
                          <p class="card-description text-dark text-capitalize">Artikel menarik seputar kehamilan
                              membantumu untuk
                              menambah wawasan tentang kehamilan.</p>
                      </div>
                  </div>
                  <div class="row">
                      <div class="col-md-4">
                          <img class="card-img m-0 p-0 float-right" src="<?= base_url()?>assets/img/article.png"
                              alt="Card image">
                      </div>
                      <div class="col-md-8">
                          <div class="row text-center flex-nowrap" style="overflow: auto;">
                          <?php foreach($rs_artikel as $artikel){?>
                              <div class="col-5" onclick="window.location='<?=base_url('C_index/artikel_web/'.$artikel->id_artikel)?>'">
                                  <div class="card" style="width: 20rem;">
                                      <img class="card-img-top" src="<?= base_url('uploads/').$artikel->img_artikel?>"
                                          alt="Card image cap">
                                      <div class="card-body">
                                          <p class="card-text"><?= $artikel->judul_artikel?></p>
                                          <a href="#" class="btn btn-primary">Baca Selengkapnya</a>
                                      </div>
                                  </div>
                              </div>
                            <?php } ?>

                              
                          </div>
                      </div>

                      <div class="row container mt-5" id="tentang">
                          <div class="col col-md-6 pull-right">
                              <h3 class="title text-right">Tentang Aplikasi</h3>
                              <p class="card-description text-right text-dark text-capitalize">Tujuan aplikasi ini
                                  dibangun adalah untuk memenuhi tugas skripsi perkuliahan dan untuk masyarakat luas
                                  dalam ruang lingkup dikhususkan untuk ibu yang sedang mengandung agar dapat mengetahui
                                  informasi terkait fasilitas kesehatan yang terdekat</p>
                          </div>
                          <div class="col col-md-6 ">
                              <img class="card-img m-0 p-0 float-right" src="<?= base_url()?>assets/img/about.png"
                                  alt="Card image">
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-lg">
              <div class="modal-content">
                  <div class="row container mt-5 content-center">
                      <div class="col-md-1"></div>
                      <div class="col col-md-6 pull-right">
                          <h5 class="title text-right">Chat Dengan Bidan Berpengalaman</h5>
                          <p class="card-description text-right text-dark text-capitalize">Nikmati Kemudahan
                              berkonsultasi dengan
                              bidan yang berpengalaman</p>
                          <!-- <a href="" class="btn btn-outline-info btn-round pull-right">Chat Bidan</a>   -->
                      </div>
                      <div class="col col-md-4">
                          <img class="card-img m-0 p-0 float-right" src="<?= base_url()?>assets/img/dokter.png"
                              alt="Card image">
                      </div>
                  </div>
                  <div class="table">
                      <table class="table table-shopping">
                          <?php
            foreach($rs_klinik as $klinik){
            ?>
                          <thead>
                              <tr>
                                  <th class="title bg-light text-left" style="text-transform: uppercase;" colspan="3">
                                      Klink/Rumah Sakit : <?=$klinik->nama_klinik?></th>
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
                        tb.telp_bidan,
                        tb.gelar
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
                                          <div class="card bg-dark text-white" style="width: 10rem;">
                                              <img class="rounded-circle img-raised"
                                                  src="<?= base_url()?>uploads/<?=$bidan->img_profile?>" alt="bidan"
                                                  style="width: 10rem;">
                                              <div
                                                  class="card-img-overlay d-flex h-10 flex-column justify-content-end p-0">
                                                  <h5 class="card-title text-center btn-warning"><?= $diff->y?> Tahun
                                                  </h5>
                                              </div>
                                          </div>
                                      </div>
                                  </td>
                                  <td>
                                      <p class="text-left title h6">Bidan <?=$bidan->nama_bidan?> <?=$bidan->gelar?></p>
                                  </td>
                                  <td>
                                      <button
                                          onclick="f_telp_bidan('<?=$bidan->telp_bidan?>','<?=$bidan->nama_bidan?>')"
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
                              window.open("https://wa.me/" + telp + "?text=Halo+dokter+" + nama_dokter +
                                  "%2C+saya+<?= $this->session->userdata('nama') ?>+mau+konsultasi+terkait+kehamilan+saya"
                              );
                          }
                      });
                  }
                  </script>
              </div>
          </div>
      </div>
      <div class="modal fade bd-example-modal-lg1" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-lg">
              <div class="modal-content">
                  <div class="row container">
                      <div class="col-md-1"></div>
                      <div class="col col-md-4">
                          <img class="card-img m-0 p-0" src="<?= base_url()?>assets/img/dokter2.png" alt="Card image">
                      </div>
                      <div class="col col-md-6">
                          <h5 class="title">Berkonsultasi Dengan Klinik</h5>
                          <p class="card-description text-dark text-capitalize">Jangkau dan Dapatkan informasi Seputar
                              Kehamilan
                              dari klinik di dekat anda</p>
                      </div>
                  </div>
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
                                      <a href="<?=base_url("C_index/detail_klinik_web/").$klinik->id_klinik?>"><button
                                              class="btn btn-primary btn-outline-info btn-round">Detail
                                              Klinik</button></a>
                                              <!-- <button class="btn btn-info h6"
                              data-toggle="modal" data-target=".bd-example-modal-lg7"><i
                                          class="fas fa-edit"></i> Detail</button> -->
                                  </td>
                              </tr>
                              <?php } ?>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>

      <div class="modal fade bd-example-modal-lg3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
          aria-hidden="true">
          <div class="modal-dialog modal-lg">
              <div class="modal-content">
                  <div class="row container">
                      <div class="col-md-1"></div>
                      <div class="col col-md-4">
                          <img class="card-img m-0 p-0" src="<?= base_url()?>assets/img/calculator.png"
                              alt="Card image">
                      </div>
                      <div class="col col-md-6">
                          <h5 class="title">Kalkulator Kehamilan</h5>
                          <p class="card-description text-dark text-capitalize">Kalkulator yang membantu memperkirakan
                              hari perkiraan lahir si buah hati.</p>
                          <!-- <a href="" class="btn btn-outline-info btn-round">Hitung</a> -->
                      </div>
                  </div>
                  <div class="col mt-5">
                      <form action="<?=base_url('C_index/kalkulator_kehamilan_web')?>" method="POST">
                          <div class="form-group row">
                              <div class="col-md-6 mt-2">Tanggal Hari Pertama Haid Terakhir (HPHT)</div>
                              <div class="col-md-6">
                                  <input required type="date" name="tanggal_haid" id="tanggal_haid"
                                      class="form-control">
                              </div>
                          </div>
                          <div class="form-group">
                              <!-- <label for="siklus_haid">Siklus Haid</label>
            <input required type="number" name="siklus_haid"  id="siklus_haid" class="form-control" max="35" min="21"> -->
                              <div class="form-group">
                              </div>

                              <button type="submit" class="btn btn-sm btn-success">Hitung perkiraan</button>
                      </form>
                  </div>

                  <hr>
                  

              </div>
          </div>
      </div>
  </div>

  <div class="modal fade bd-example-modal-lg4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="row container">
                  <div class="col-md-2"></div>
                  <div class="col col-md-6 pull-right">
                      <h5 class="title text-right">Screening Mandiri</h5>
                      <p class="card-description text-right text-dark text-capitalize">Screening Mandiri Adalah layanan
                          Mandiri
                          Untuk Mendeteksi Dini Resiko Kehamilan.</p>
                  </div>
                  <div class="col col-md-4 ">
                      <img class="card-img m-0 p-0 float-right" src="<?= base_url()?>assets/img/task.png"
                          alt="Card image">
                  </div>
              </div>
              <?= $this->session->userdata("notif_insert");$this->session->unset_userdata("notif_insert")?>
              <?= $this->session->userdata("notif_delete");$this->session->unset_userdata("notif_delete")?>

              <div class="table-responsive">
                  <div class="container">
                      <h5 class="title text-left h6 text-capitalize">Riwayat Screening Anda Terlampir di Tabel Berikut
                      </h5>
                  </div>

                  <table class="table table-shopping">
                      <thead>
                          <th>Tanggal Screening</th>
                          <th>Tingkat Resiko</th>
<!-- 
                          <th class="text_right bg-info text-dark h6" type="button" class=" btn btn-info h6 text-dark"
                              data-toggle="modal" data-target=".bd-example-modal-lg5"><i class="fas fa-plus"></i>&nbsp
                              lakukan Screening</th> -->
							<th class="text_right bg-info text-dark h6" type="button" class=" btn btn-info h6 text-dark"
							onclick="window.location='<?=base_url('C_screening/create_web')?>'"><i class="fas fa-plus"></i>&nbsp
                              lakukan Screening</th>
                      </thead>
                      <tbody>
                          <?php foreach($rs_data as $data) {
                $total_skor = $data->total_score;
                $join = $this->db->query("SELECT * FROM t_maaping_screening WHERE skor <= '$total_skor' and skor_akhir >= '$total_skor'")->result();
                
              ?>

                          <tr>
                              <td class="align-middle"><?= $data->tanggal_screening?></td>
                              <td class="align-middle"><?= $join[0]->kel_resiko?></td>
                              <td><button class="btn btn-info h6"
                              onclick="window.location='<?=base_url('C_screening/edit_web/'.$data->id_screening_history)?>'"><i
                                          class="fas fa-edit"></i> Detail</button></td>
                          </tr>
                          <?php } ?>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
  </div>

  <div class="modal fade bd-example-modal-lg5" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="row container">
                  <div class="col-md-2"></div>
                  <div class="col col-md-6 pull-right">
                      <h5 class="title text-right">Screening Mandiri</h5>
                      <p class="card-description text-right text-dark text-capitalize">Screening Mandiri Adalah layanan
                          Mandiri
                          Untuk Mendeteksi Dini Resiko Kehamilan.</p>
                  </div>
                  <div class="col col-md-4 ">
                      <img class="card-img m-0 p-0 float-right" src="<?= base_url()?>assets/img/task.png"
                          alt="Card image">
                  </div>
              </div>
              <?= $this->session->userdata("notif_insert");$this->session->unset_userdata("notif_insert")?>
              <form action="<?=base_url('C_screening/post_create')?>" method="POST">
          <table class="content-center table-striped m-auto">
        <tbody>
            <tr><td colspan="2"><h3 class="mb-0 text-dark">A.Keadaan Ibu Hamil</h3></td></tr>
            <?php $index = 1; foreach($rs_screening as $screening){?>

                <?php if($index == 11){?>
                    <tr><td colspan="2"><h3 class="mb-0 text-dark">B.Kondisi Ibu Hamil</h3></td></tr>
                <?php } ?>
                <tr>
                    <td><p class="description h5 text-dark text-capitalize"><?= $screening->pertanyaan_screening?></p></td>
                    <td width="30%">
                    <input type="hidden" name="pertanyaan[]" value="<?= $screening->id?>">
                    <select name="jawaban[]" class="form-control badge badge-info" required>
                        <option value="">Jawaban</option>
                        <option value="Y">YA</option>
                        <option value="N">TIDAK</option>
                    </select>
                    </td>
                </tr>
                
            <?php $index++; } ?>
        </tbody>
            <!-- <tbody>
          <tr>
          <td>
          <p class="description"> Hamil pertama terlalu muda/tua(<17 th. ≥ 35 th)</p>
          </td>
          <td>
          <select name="status" id="status" class="form-control" style=" background: rgba(0, 0, 0, 0.2);" required>
                    <option value="">Jawaban</option>
                    <option value="4">YA</option>
                    <option value="0">TIDAK</option>
                </select>
          </td>
          </tr>
          <tr>
          <td>
          <p class="description">Pernah melahirkan dengan tindakan( vacum, forcep)</p>
          </td>
          <td>
          <select name="status" id="status" class="form-control" style=" background: rgba(0, 0, 0, 0.2);" required>
                    <option value="">Jawaban</option>
                    <option value="4">YA</option>
                    <option value="0">TIDAK</option>
                </select>
          </td>
          </tr>
            </tbody> -->
        </table>
        <div class="container text-center">
            <button type="submit" class="btn btn-success">Proses</button>
        </div>
</div>
</div>
       
</form>
          </div>
      </div>
  </div>

  <div class="modal fade bd-example-modal-lg6" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="row container">
                  <div class="col-md-2"></div>
                  <div class="col col-md-6 pull-right">
                      <h5 class="title text-right">Screening Mandiri</h5>
                      <p class="card-description text-right text-dark text-capitalize">Screening Mandiri Adalah layanan
                          Mandiri
                          Untuk Mendeteksi Dini Resiko Kehamilan.</p>
                  </div>
                  <div class="col col-md-4 ">
                      <img class="card-img m-0 p-0 float-right" src="<?= base_url()?>assets/img/task.png"
                          alt="Card image">
                  </div>
              </div>
              <?= $this->session->userdata("notif_insert");$this->session->unset_userdata("notif_insert")?>
              <form action="<?=base_url('C_screening/post_create')?>" method="POST">
          <table class="content-center table-striped m-auto">
        <tbody>
            <tr><td colspan="2"><h3 class="mb-0 text-dark">A.Keadaan Ibu Hamil</h3></td></tr>
            <?php $index = 1; foreach($rs_screening as $screening){?>

                <?php if($index == 11){?>
                    <tr><td colspan="2"><h3 class="mb-0 text-dark">B.Kondisi Ibu Hamil</h3></td></tr>
                <?php } ?>
                <tr>
                    <td><p class="description h5 text-dark text-capitalize"><?= $screening->pertanyaan_screening?></p></td>
                    <td width="30%">
                    <input type="hidden" name="pertanyaan[]" value="<?= $screening->id?>">
                    <select name="jawaban[]" class="form-control badge badge-info" required>
                        <option value="">Jawaban</option>
                        <option value="Y">YA</option>
                        <option value="N">TIDAK</option>
                    </select>
                    </td>
                </tr>
                
            <?php $index++; } ?>
        </tbody>
            <!-- <tbody>
          <tr>
          <td>
          <p class="description"> Hamil pertama terlalu muda/tua(<17 th. ≥ 35 th)</p>
          </td>
          <td>
          <select name="status" id="status" class="form-control" style=" background: rgba(0, 0, 0, 0.2);" required>
                    <option value="">Jawaban</option>
                    <option value="4">YA</option>
                    <option value="0">TIDAK</option>
                </select>
          </td>
          </tr>
          <tr>
          <td>
          <p class="description">Pernah melahirkan dengan tindakan( vacum, forcep)</p>
          </td>
          <td>
          <select name="status" id="status" class="form-control" style=" background: rgba(0, 0, 0, 0.2);" required>
                    <option value="">Jawaban</option>
                    <option value="4">YA</option>
                    <option value="0">TIDAK</option>
                </select>
          </td>
          </tr>
            </tbody> -->
        </table>
        <div class="container text-center">
            <button type="submit" class="btn btn-success">Proses</button>
        </div>
</div>
</div>
       
</form>
          </div>
      </div>
  </div>

  <div class="modal fade bd-example-modal-lg7" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
          <div class="row container">
                      <div class="col-md-1"></div>
                      <div class="col col-md-4">
                          <img class="card-img m-0 p-0" src="<?= base_url()?>assets/img/dokter2.png" alt="Card image">
                      </div>
                      <div class="col col-md-6">
                          <h5 class="title">Berkonsultasi Dengan Klinik</h5>
                          <p class="card-description text-dark text-capitalize">Jangkau dan Dapatkan informasi Seputar
                              Kehamilan
                              dari klinik di dekat anda</p>
                      </div>
                  </div>
                  <?php
    foreach($rs_klinik as $klinik){
    ?>
<!-- banner application -->
<div class="card-wrapper bg-white text-dark">
        <div class="row m-4 mb-0">
<hr>
            <div class="col-12">
                <h4 class="title" style="text-transform: uppercase;"><i class="fas fa-hospital-alt"></i>&nbsp
                    <?=$klinik->nama_klinik?></h4>
                <p class="text-description h6"><?=$klinik->alamat_klinik?></p>
                <img class="card-img-top" src="<?= base_url('uploads/').$klinik->img_path?>" alt="Card image cap">
            
            <blockquote class="blockquote bg-light m-2" style="border-radius: 1%">
                <p class="text-description text-secondary h6 text-justify" style="text-transform: capitalize;">
                    <?=$klinik->tentang?></p>
            </blockquote>
            <h4 class="title" style="text-transform: uppercase;"><i class="fas fa-hospital-alt"></i>&nbsp
                    Fasilitas</h4>
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
                <a href="#" onclick="f_telp('<?=$klinik->telp_klinik?>')">
                    <h4 class="btn btn-md btn-info">Telepon</h4>
                </a>
                </div>
                <div class="col-1"></div>
                <div class="col-3">
                <a href="#" onclick="f_location('<?=$klinik->latitude?>','<?=$klinik->longitude?>')">
                    <h4 class="btn btn-md btn-info ">Petunjuk Arah<br></h4>
                </a>
                </div>
                <div class="col-1"></div>
                <div class="col-3 pull-right">
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
                                tb.telp_bidan,
                                tb.gelar
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
                                          <div class="card bg-dark text-white" style="width: 10rem;">
                                              <img class="rounded-circle img-raised"
                                                  src="<?= base_url()?>uploads/<?=$bidan->img_profile?>" alt="bidan"
                                                  style="width: 10rem;">
                                              <div
                                                  class="card-img-overlay d-flex h-10 flex-column justify-content-end p-0">
                                                  <h5 class="card-title text-center btn-warning"><?= $diff->y?> Tahun
                                                  </h5>
                                              </div>
                                          </div>
                                      </div>
                                    </td>
                                    <td>
                                    <p class="text-left title h6">Bidan <?=$bidan->nama_bidan?> <?=$bidan->gelar?></p>
                                    </td>
                                    <td>
                                        <?php 
                                if ($this->session->userdata('email')=="" OR empty($this->session->userdata('email'))) {
                                    $this->session->set_userdata("notif_login","<span class='login100-form-title-1'><font size='3px' color='#c80000'>Silahkan Login Terlebih Dahulu</font></span>");
                                    
                                }else{
                                ?>
                                        <button onclick="f_telp_bidan('<?=$bidan->telp_bidan?>')"
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
          </div>
      </div>
  </div>
