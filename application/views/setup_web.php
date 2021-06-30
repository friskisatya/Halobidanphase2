  <style>
    .modal { overflow: auto !important; }
  </style>
  <!-- banner application -->
  <div class="wrapper" id="index">
      <div class="page-header clear-filter" filter-color="orange">
          <div class="page-header-image" data-parallax="true"
              style="background-image:url('<?= base_url()?>/assets/img/coding.jpg');">
          </div>
          <div class="container">
              <div class="content-center brand">
                  <img class="n-logo" src="<?= base_url()?>/assets/img/doctor.png" alt="">
                  <h1 class="h1-seo title">Hai Bidan.</h1>
                  <h3>Selamat Datang Admin.</h3>
              </div>
          </div>
      </div>
      <div class="card-wrapper content-center">
          <div class="card ml-5 mr-4 p-3 bg-light" style="width: 94%;top: -50px;">
              <div class="row">
                  <div class="col-md-8 ml-auto mr-auto text-center">
                      <h3 class="title" id="layanan">Menu Setup Aplikasi</h3>
                      <?= $this->session->userdata("notif_insert");$this->session->unset_userdata("notif_insert")?>
              <?= $this->session->userdata("notif_delete");$this->session->unset_userdata("notif_delete")?>
                  </div>
                  <!-- row setup klinik -->
                  <div class="row container">
                      <div class="col-md-1"></div>
                      <div class="col col-md-4">
                          <img class="card-img m-0 p-0" src="<?= base_url()?>assets/img/dokter2.png" alt="Card image">
                      </div>
                      <div class="col col-md-6">
                          <h5 class="title">Setup Klinik</h5>
                          <p class="card-description text-dark text-capitalize">Setup Klinik Adalah Setup Untuk
                              Menambahkan Klinik.</p>
                          <button type="button" class="btn btn-outline-info btn-round" data-toggle="modal"
                              data-target=".bd-example-modal-lg-klinik">Setup Klinik</button>
                      </div>
                  </div>
                  <!-- end row setup klinik -->
                  <!-- row setup bidan -->
                  <div class="row container">
                      <div class="col-md-2"></div>
                      <div class="col col-md-6 pull-right">
                          <h5 class="title text-right">Setup Bidan</h5>
                          <p class="card-description text-right text-dark text-capitalize">Setup Bidan adalah setup
                              Mendaftarkan Informasi terkait bidan ke dalam aplikasi.</p>
                          <button type="button" class="btn btn-outline-info btn-round pull-right" data-toggle="modal"
                              data-target=".bd-example-modal-lg-bidan">Setup Bidan</button>
                          <!-- <a href="" class="btn btn-outline-info btn-round pull-right">Chat Bidan</a>   -->
                      </div>
                      <div class="col col-md-4 ">
                          <img class="card-img m-0 p-0 float-right" src="<?= base_url()?>assets/img/dokter.png"
                              alt="Card image">
                      </div>
                  </div>
                  <!-- end row setup bidan -->
                  <!-- row setup fasilitas klinik -->
                  <div class="row container">
                      <div class="col-md-1"></div>
                      <div class="col col-md-4">
                          <img class="card-img m-0 p-0" src="<?= base_url()?>assets/img/calculator.png"
                              alt="Card image">
                      </div>
                      <div class="col col-md-6">
                          <h5 class="title">Setup Fasilitas Klinik</h5>
                          <p class="card-description text-dark text-capitalize">Setup Fasilitas Klinik Adalah Setup
                              Untuk Menambahkan Fasilitas Yang Tersedia Di Klinik.</p>
                          <!-- <a href="" class="btn btn-outline-info btn-round">Hitung</a> -->
                          <button type="button" class="btn btn-outline-info btn-round" data-toggle="modal"
                              data-target=".bd-example-modal-lg-fas-klinik">Setup Fasilitas</button>
                      </div>
                  </div>
              </div>
              <!-- end row setup fasilitas klinik -->
              <!-- row setup article  -->
              <div class="row container">
                  <div class="col-md-2"></div>
                  <div class="col col-md-6 pull-right">
                      <h5 class="title text-right">Setup Artikel</h5>
                      <p class="card-description text-right text-dark text-capitalize">SSetup Artikel adalah setup untuk
                          menampilkan artikel pada halaman user.</p>
                      <button type="button" class="btn btn-outline-info btn-round pull-right" data-toggle="modal"
                          data-target=".bd-example-modal-lg6">Setup Artikel</button>
                  </div>
                  <div class="col col-md-4 ">
                      <img class="card-img m-0 p-0 float-right" src="<?= base_url()?>assets/img/task.png"
                          alt="Card image">
                  </div>
              </div>
              <!-- end row setup article -->
          </div>
      </div>
  </div>

    <!-- modal for klinik -->
  <div class="modal fade bd-example-modal-lg-klinik" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="row container">
                  <div class="col-md-1"></div>
                  <div class="col col-md-4">
                      <img class="card-img m-0 p-0" src="<?= base_url()?>assets/img/dokter2.png" alt="Card image">
                  </div>
                  <div class="col col-md-6">
                      <h5 class="title">Setup Klinik</h5>
                      <p class="card-description text-dark text-capitalize">Setup Klinik Adalah Setup Untuk Menambahkan
                          Klinik.</p>
                      <!-- <button type="button" class="btn btn-outline-info btn-round" data-toggle="modal"
                              data-target=".bd-example-modal-lg1"> Tambah Klinik</button> -->
                  </div>
              </div>
              
              <div class="table-responsive">
                  <table class="table table-shopping">
                      <thead>
                          <th>Nama Klinik</th>
                          <th>Alamat</th>
                          <th class="text_right h6 align-middle bg-info text-white" type="button"
                              class="btn btn-outline-info btn-round" onclick="window.location='<?=base_url('C_setup_klinik/create_web')?>'"><i class="fas fa-plus"></i>&nbsp Tambah Data</th>
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
                              <button class="btn btn-danger btn-sm m-1" data-toggle="modal"
                                          data-target="#deleteklinik" type="button"><i class="fas fa-trash"></i>&nbsp
                                          Hapus</button>
                                  <button
                                      onclick="window.location='<?=base_url('C_setup_klinik/edit_web/').$klinik->id_klinik?>'"
                                      class="btn btn-info btn-sm m-1"><i class="fas fa-edit"></i>&nbsp Ubah</button>
                              </td>
                          </tr>
                          <?php } ?>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
  <!-- end of modal for klinik  -->
  <!-- modal for delete klinik -->
  <div class="modal fade" id="deleteklinik" tabindex="-1" role="dialog" aria-labelledby="deleteklinik" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                          <h5 class="modal-title" id="deleteklinik">Konfirmasi</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                              <i class="tim-icons icon-simple-remove"></i>
                          </button>
                </div>
                <div class="modal-body">
                          Apakah Yakin untuk menghapus data berikut ?
                </div>
                <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                          <button type="button" class="btn btn-primary"
                              onclick="window.location='<?=base_url('C_setup_klinik/delete_web/').$klinik->id_klinik?>'">Hapus</button>
                </div>
            </div>
        </div>
    </div>
          <!-- end of modal for delete klinik -->
    <!-- modal for bidan -->
  <div class="modal fade bd-example-modal-lg-bidan" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="row container">
                  <div class="col-md-2"></div>
                  <div class="col col-md-6 pull-right">
                      <h5 class="title text-right">Setup Bidan</h5>
                      <p class="card-description text-right text-dark text-capitalize">Setup Bidan
                          adalah setup Mendaftarkan Informasi terkait bidan ke dalam aplikasi.</p>
                      <!-- <button type="button" class="btn btn-outline-info btn-round pull-right" data-toggle="modal"
                          data-target=".bd-example-modal-lg">Setup Bidan</button> -->
                      <!-- <a href="" class="btn btn-outline-info btn-round pull-right">Chat Bidan</a>   -->
                  </div>
                  <div class="col col-md-4 ">
                      <img class="card-img m-0 p-0 float-right" src="<?= base_url()?>assets/img/dokter.png"
                          alt="Card image">
                  </div>
              </div>
              <?= $this->session->userdata("notif_insert");$this->session->unset_userdata("notif_insert")?>
              <?= $this->session->userdata("notif_delete");$this->session->unset_userdata("notif_delete")?>
              <div class="table-responsive">
                  <table class="table table-shopping">
                      <thead>
                          <th class="h6">Nama</th>
                          <!-- <th class="h4">Klinik</th> -->
                          <th class="h6">Pengalaman</th>
                          <th class="text_right h6 align-middle bg-info text-white" type="button"
                              class="btn btn-outline-info btn-round" onclick="window.location='<?=base_url('C_setup_bidan/create_web')?>'"<i class="fas fa-plus"></i>&nbsp Tambah Data</th>
                      </thead>
                      <tbody class="bg-light">
                          <?php
                foreach($rs_bidan as $bid)
                {
                ?>
                          <tr>
                              <td>
                                  <p class="text-center text-capitalize">
                                      <?= $bid->nama_bidan?> <?= $bid->gelar?>
                                  </p>
                              </td>
                              <!-- <td>
                        <p class="text-center text-capitalize">
                        nama klinik
                            </p>
                        </td> -->
                              <td>
                                  <p class="text-center text-capitalize">
                                      <?= $bid->mulai_bekerja?>
                                  </p>
                              </td>
                              <td>
                                  <button class="btn btn-danger btn-sm m-1" data-toggle="modal" data-target="#deletebidan"
                                      type="button"><i class="fas fa-trash"></i>&nbsp
                                      Hapus</button>
                                  <button
                                      onclick="window.location='<?=base_url('C_setup_bidan/edit_web/').$bid->id_bidan?>'"
                                      class="btn btn-info btn-sm m-1"><i class="fas fa-edit"></i>&nbsp
                                      Ubah</button>
                              </td>
                          </tr>
                          <?php } ?>
                      </tbody>
                  </table>
              </div>
          </div>
      </div>
  </div>
 <!-- end of modal for bidan -->
 <!-- modal for delete bidan -->
 <div class="modal fade" id="deletebidan" tabindex="-1" role="dialog" aria-labelledby="deletebidan" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                          <h5 class="modal-title" id="deletebidan">Konfirmasi</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                              <i class="tim-icons icon-simple-remove"></i>
                          </button>
                </div>
                <div class="modal-body">
                          Apakah Yakin untuk menghapus data berikut ?
                </div>
                <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                          <button type="button" class="btn btn-primary"
                              onclick="window.location='<?=base_url('C_setup_bidan/delete_web/').$bid->id_bidan?>'">Hapus</button>
                </div>
            </div>
        </div>
    </div>
          <!-- end of modal for delete bidan -->
 <!-- modal for fasilitas klinik -->
  <div class="modal fade bd-example-modal-lg-fas-klinik" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="row container">
                  <div class="col-md-1"></div>
                  <div class="col col-md-4">
                      <img class="card-img m-0 p-0" src="<?= base_url()?>assets/img/calculator.png" alt="Card image">
                  </div>
                  <div class="col col-md-6">
                      <h5 class="title">Setup Fasilitas Klinik</h5>
                      <p class="card-description text-dark text-capitalize">Setup Fasilitas Klinik Adalah Setup
                          Untuk Menambahkan Fasilitas Yang Tersedia Di Klinik.</p>
                      <!-- <a href="" class="btn btn-outline-info btn-round">Hitung</a> -->
                      <!-- <button type="button" class="btn btn-outline-info btn-round" data-toggle="modal"
                          data-target=".bd-example-modal-lg3">Setup Fasilitas</button> -->
                  </div>
                  <?= $this->session->userdata("notif_insert");$this->session->unset_userdata("notif_insert")?>
                  <?= $this->session->userdata("notif_delete");$this->session->unset_userdata("notif_delete")?>
                  <div class="table-responsive">
                      <table class="table table-shopping">
                          <thead>
                              <th class="h6">Nama Fasilitas</th>
                              <th class="h6">Status</th>
                              <th class="text_right h6 align-middle bg-info text-white" type="button"
                                  class="btn btn-outline-info btn-round" onclick="window.location='<?=base_url('C_setup_fasilitas/create_web')?>'"><i class="fas fa-plus"></i>&nbsp Tambah Data</th>
                          </thead>
                          <tbody>
                              <?php
                foreach($rs_fasilitas as $fas)
                {
                ?>
                              <tr>
                                  <td>
                                      <p class="text-center text-capitalize">
                                          <?= $fas->nama_fasilitas?>
                                      </p>
                                  </td>
                                  <td>
                                      <p class="text-center text-capitalize">
                                          <?= $fas->status=="0"?"Aktif":"Tidak Aktif"?>
                                      </p>
                                  </td>
                                  <td>
                                      <button class="btn btn-danger btn-sm m-1" data-toggle="modal"
                                          data-target="#deletefasilitas" type="button"><i class="fas fa-trash"></i>&nbsp
                                          Hapus</button>
                                      <button
                                          onclick="window.location='<?=base_url('C_setup_fasilitas/edit_web/').$fas->id_fasilitas?>'"
                                          class="btn btn-info btn-sm m-1"><i class="fas fa-edit"></i>&nbsp Ubah</button>
                                  </td>
                              </tr>
                              <?php } ?>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
    <!-- end of modal for fasilitas klinik -->
    <!-- modal for delete fasilitas klinik -->
 <div class="modal fade" id="deletefasilitas" tabindex="-1" role="dialog" aria-labelledby="deletefasilitas" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                          <h5 class="modal-title" id="deletefasilitas">Konfirmasi</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                              <i class="tim-icons icon-simple-remove"></i>
                          </button>
                </div>
                <div class="modal-body">
                          Apakah Yakin untuk menghapus data berikut ?
                </div>
                <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                          <button type="button" class="btn btn-primary"
                              onclick="window.location='<?=base_url('C_setup_fasilitas/delete_web/').$fas->id_fasilitas?>'">Hapus</button>
                </div>
            </div>
        </div>
    </div>
          <!-- end of modal for delete fasilitas klinik -->
    <!-- modal for article -->
  <div class="modal fade bd-example-modal-lg6" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="row container">
                  <div class="col-md-2"></div>
                  <div class="col col-md-6 pull-right">
                      <h5 class="title text-right">Setup Artikel</h5>
                      <p class="card-description text-right text-dark text-capitalize">Setup Artikel adalah setup untuk
                          menampilkan artikel pada halaman user.</p>
                      <!-- <button type="button" class="btn btn-outline-info btn-round pull-right" data-toggle="modal"
                          data-target=".bd-example-modal-lg4">Setup Artikel</button> -->
                  </div>
                  <div class="col col-md-4 ">
                      <img class="card-img m-0 p-0 float-right" src="<?= base_url()?>assets/img/task.png"
                          alt="Card image">
                  </div>
                  <?= $this->session->userdata("notif_insert");$this->session->unset_userdata("notif_insert")?>
                  <?= $this->session->userdata("notif_delete");$this->session->unset_userdata("notif_delete")?>
                  <div class="table-responsive">
                      <table class="table table-shopping">
                          <thead>
                              <thead>
                                  <th class="h6">Judul Artikel</th>
                                  <th class="h6">Status</th>
                                  <th class="text_right bg-info text-white h6" type="button"
                                      class="btn btn-outline-info btn-round pull-right" onclick="window.location='<?=base_url('C_setup_artikel/create_web')?>'"><i class="fas fa-plus"></i>&nbsp Tambah Data
                                  </th>
                              </thead>
                          <tbody class="bg-light">
                              <?php
                foreach($rs_artikel as $artikel)
                {
                ?>
                              <tr>
                                  <td>
                                      <p class="text-center text-capitalize">
                                          <?= $artikel->judul_artikel?>
                                      </p>
                                  </td>
                                  <td>
                                      <p class="text-center text-capitalize">
                                          <?= $artikel->status_artikel=="0"?"Aktif":"Tidak Aktif"?>
                                      </p>
                                  </td>
                                  <td>
                                      <button class="btn btn-danger m-1" data-toggle="modal" data-target="#deletearticle"
                                          type="button"><i class="fas fa-trash"></i>&nbsp Hapus</button>
                                      <button
                                      onclick="window.location='<?=base_url('C_setup_artikel/edit_web/').$artikel->id_artikel?>'"
                                          class="btn btn-info m-1 "><i class="fas fa-edit"></i>&nbsp Ubah</button>
                                  </td>
                              </tr>
                              <?php } ?>
                          </tbody>
                      </table>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- end of modal for article -->
  <!-- modal for delete article -->
 <div class="modal fade" id="deletearticle" tabindex="-1" role="dialog" aria-labelledby="deletearticle" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                          <h5 class="modal-title" id="deletearticle">Konfirmasi</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                              <i class="tim-icons icon-simple-remove"></i>
                          </button>
                </div>
                <div class="modal-body">
                          Apakah Yakin untuk menghapus data berikut ?
                </div>
                <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                          <button type="button" class="btn btn-primary"
                          onclick="window.location='<?=base_url('C_setup_artikel/delete_web/').$artikel->id_artikel?>'">Hapus</button>
                </div>
            </div>
        </div>
    </div>
          <!-- end of modal for delete article -->