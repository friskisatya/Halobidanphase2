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
                  </div>

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
                              data-target=".bd-example-modal-lg1">Setup Klinik</button>
                      </div>
                  </div>


                  <div class="row container">
                      <div class="col-md-2"></div>
                      <div class="col col-md-6 pull-right">
                          <h5 class="title text-right">Setup Bidan</h5>
                          <p class="card-description text-right text-dark text-capitalize">Setup Bidan adalah setup
                              Mendaftarkan Informasi terkait bidan ke dalam aplikasi.</p>
                          <button type="button" class="btn btn-outline-info btn-round pull-right" data-toggle="modal"
                              data-target=".bd-example-modal-lg">Setup Bidan</button>
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
                          <h5 class="title">Setup Fasilitas Klinik</h5>
                          <p class="card-description text-dark text-capitalize">Setup Fasilitas Klinik Adalah Setup
                              Untuk Menambahkan Fasilitas Yang Tersedia Di Klinik.</p>
                          <!-- <a href="" class="btn btn-outline-info btn-round">Hitung</a> -->
                          <button type="button" class="btn btn-outline-info btn-round" data-toggle="modal"
                              data-target=".bd-example-modal-lg4">Setup Fasilitas</button>
                      </div>
                  </div>
              </div>

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
                      <h5 class="title">Setup Klinik</h5>
                      <p class="card-description text-dark text-capitalize">Setup Klinik Adalah Setup Untuk Menambahkan
                          Klinik.</p>
                      <!-- <button type="button" class="btn btn-outline-info btn-round" data-toggle="modal"
                              data-target=".bd-example-modal-lg1"> Tambah Klinik</button> -->
                  </div>
              </div>
              <?= $this->session->userdata("notif_insert");$this->session->unset_userdata("notif_insert")?>
              <?= $this->session->userdata("notif_delete");$this->session->unset_userdata("notif_delete")?>
              <div class="table-responsive">
                  <table class="table table-shopping">
                      <thead>
                          <th>Nama Klinik</th>
                          <th>Alamat</th>
                          <th class="text_right h6 align-middle bg-info text-white" type="button"
                              class="btn btn-outline-info btn-round" data-toggle="modal"
                              data-target=".bd-example-modal-lg2"><i class="fas fa-plus"></i>&nbsp Tambah Data</th>
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
                                  <button
                                      onclick="window.location='<?=base_url('C_setup_klinik/delete/').$klinik->id_klinik?>'"
                                      class="btn btn-danger btn-sm m-1"><i class="fas fa-trash"></i>&nbsp Hapus</button>
                                  <button
                                      onclick="window.location='<?=base_url('C_setup_klinik/edit/').$klinik->id_klinik?>'"
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

  <div class="modal fade bd-example-modal-lg2" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
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
                      <p class="card-description text-dark text-capitalize">Setup Klinik Adalah Setup Untuk
                          Menambahkan Klinik.</p>
                      <!-- <button type="button" class="btn btn-outline-info btn-round" data-toggle="modal"
                              data-target=".bd-example-modal-lg1"> Tambah Klinik</button> -->
                  </div>
              </div>
              <div class="container">
                  <h4 class="title"><i class="fas fa-columns"></i>&nbsp Tambah Data Klinik</h4>
                  <?= $this->session->userdata("notif_insert");$this->session->unset_userdata("notif_insert")?>
                  <form action="<?=base_url('C_setup_klinik/post_create')?>" method="POST"
                      enctype="multipart/form-data">
                      <div class="card-body">
                          <div class="form-group">
                              <label for="nama_klinik">Nama Klinik</label>
                              <input required type="text" name="nama_klinik" id="nama_klinik" class="form-control"
                                  placeholder="Nama Klinik">
                          </div>
                          <div class="form-group">
                              <label for="alamat_klinik">Alamat Klinik</label>
                              <Textarea required name="alamat_klinik" id="alamat_klinik" class="form-control" cols="50"
                                  rows="20"></textarea>
                          </div>
                          <div class="form-group">
                              <label for="inputPhone">Telepon</label>
                              <div class="input-group">
                                  <input required type="number" name="telp_klinik" class="form-control" id="inputPhone">
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="alamat_klinik">Tentang</label>
                              <Textarea required name="tentang" id="tentang" class="form-control" cols="50"
                                  rows="20"></textarea>
                          </div>
                          <div class="form-group">
                              <label for="status">Status (Visible)</label>
                              <select required name="status" id="status" class="form-control"
                                  style=" background: rgba(0, 0, 0, 0.2);">
                                  <option value="">Pilih Status</option>
                                  <option value="0">Aktif</option>
                                  <option value="1">Tidak Aktif</option>
                              </select>
                          </div>
                          <div class="form-group">
                              <label for="inputPhone">Location</label>
                              <div class="input-group">
                                  <input type="text" name="latitude" class="form-control" placeholder="latitude">
                                  <input type="text" name="longitude" class="form-control" placeholder="longitude">
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="status">Fasilitas</label>
                              <button type="button" class="btn btn-info float-right btn-sm"
                                  onclick="$('#modalfasilitas').modal('toggle');">Tambah Fasilitas</button>
                              <table class="table table-shopping">
                                  <thead>
                                      <tr>
                                          <td>No</td>
                                          <td>Fasilitas</td>
                                      </tr>
                                  </thead>
                                  <tbody id="detail">
                                  </tbody>
                              </table>
                          </div>
                          <div class="form-group">
                              <span class="btn btn-raised btn-round btn-info btn-file">
                                  <span class="fileinput-new">Pilih Gambar</span>
                                  <input type="file" name="image" onchange="previewFile(this);" />
                              </span>
                              <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                  <div class="fileinput-new thumbnail">
                                      <img id="previewImg"
                                          src="https://epicattorneymarketing.com/wp-content/uploads/2016/07/Headshot-Placeholder-1.png"
                                          alt="pic">
                                  </div>
                                  <div class="fileinput-preview fileinput-exists thumbnail"></div>
                              </div>
                          </div>
                          <!-- <div class="form-group">
        <span class="btn btn-raised btn-round btn-primary btn-file">
          <span class="fileinput-new">Pilih Gambar Peta</span>
          <input type="file" name="pic" />
        </span>
        <div class="fileinput fileinput-new text-center" data-provides="fileinput">
        <div class="fileinput-new thumbnail">
          <img src="https://epicattorneymarketing.com/wp-content/uploads/2016/07/Headshot-Placeholder-1.png" alt="pic">
        </div>
        <div class="fileinput-preview fileinput-exists thumbnail"></div>
      </div> -->
                      </div>
                      <div class="container text-center">
                          <button type="submit" class="btn btn-success">Submit</button>
                      </div>
                  </form>
              </div>


              <div class="modal fade" id="modalfasilitas" tabindex="-1" role="dialog"
                  aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                      <div class="card modal-content">
                          <div class="modal-header">
                              <h5 class="modal-title" id="exampleModalLabel">Tambah fasilitas</h5>
                              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                              </button>
                          </div>
                          <div class="card-body">
                              <table class="table table-shopping" style="font-color:black">
                                  <tr>
                                      <td>Aksi</td>
                                      <td>Fasilitas</td>
                                  </tr>
                                  <?php $i=0; foreach($rs_fasilitas as $fasilitas){ $i++;?>
                                  <tr
                                      onclick="f_row_click('<?= $fasilitas->id_fasilitas?>','<?= $fasilitas->nama_fasilitas?>')">
                                      <td><?=$i?></td>
                                      <td><?=$fasilitas->nama_fasilitas?></td>
                                  </tr>
                                  <?php } ?>
                              </table>
                          </div>
                      </div>
                  </div>
              </div>


              <script>
              function previewFile(input) {
                  var file = $("input[type=file]").get(0).files[0];

                  if (file) {
                      var reader = new FileReader();

                      reader.onload = function() {
                          $("#previewImg").attr("src", reader.result);
                      }

                      reader.readAsDataURL(file);
                  }
              }

              function f_row_click(id_fasilitas, nama_fasilitas) {
                  console.log($("#" + id_fasilitas).html())
                  if ($("#input" + id_fasilitas).val() == id_fasilitas) {
                      alert("Data Duplikat");
                  } else {
                      var ls_append = "";
                      ls_append += "<tr id='" + id_fasilitas + "'>" +
                          "<td><button id='del" + id_fasilitas + "' onclick='f_row_del(" + id_fasilitas +
                          ")' class='btn btn-danger btn-sm'><i class='fas fa-trash'></i>&nbsp Hapus</button></td>" +
                          "<td><input type='hidden' id='input" + id_fasilitas + "' value='" + id_fasilitas +
                          "' name='fasilitas[]'>" + nama_fasilitas + "</td>"
                      "</tr>";
                      $('#detail').append(ls_append);
                  }
                  $('#modalfasilitas').modal('toggle');
              }

              function f_row_del(id_fasilitas) {
                  $("#" + id_fasilitas).remove();
              }
              </script>
          </div>
      </div>
  </div>

  <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
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
                          <th class="h4">Nama</th>
                          <!-- <th class="h4">Klinik</th> -->
                          <th class="h4">Pengalaman</th>
                          <th class="text_right h6 align-middle bg-info text-white" type="button"
                              class="btn btn-outline-info btn-round" data-toggle="modal"
                              data-target=".bd-example-modal-lg3"><i class="fas fa-plus"></i>&nbsp Tambah Data</th>
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
                                  <button class="btn btn-danger btn-sm m-1" data-toggle="modal" data-target="#delete"
                                      type="button"><i class="fas fa-trash"></i>&nbsp
                                      Hapus</button>
                                  <button
                                      onclick="window.location='<?=base_url('C_setup_bidan/edit/').$bid->id_bidan?>'"
                                      class="btn btn-info btn-sm m-1"><i class="fas fa-edit"></i>&nbsp
                                      Ubah</button>
                              </td>
                          </tr>
                          <?php } ?>
                      </tbody>
                  </table>
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
                          <button type="button" class="btn btn-primary"
                              onclick="window.location='<?=base_url('C_setup_bidan/delete/').$bid->id_bidan?>'">Hapus</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="modal fade bd-example-modal-lg3" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
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
                  <div class="container">
                      <h4 class="title"><i class="fas fa-columns"></i>&nbsp Tambah Data Bidan</h4>
                      <form action="<?=base_url('C_setup_bidan/post_create')?>" method="POST"
                          enctype="multipart/form-data">
                          <div class="card-body">
                              <div class="form-group">
                                  <label for="nama_bidan">Nama Bidan</label>
                                  <input type="text" name="nama_bidan" id="nama_bidan" class="form-control"
                                      placeholder="Nama Bidan" required>
                              </div>
                              <div class="form-group">
                                  <label for="mulai_bekerja">Mulai Bekerja</label>
                                  <input type="date" name="mulai_bekerja" id="mulai_bekerja" class="form-control"
                                      required>
                              </div>
                              <div class="form-group">
                                  <label for="alamat_bidan">Alamat Bidan</label>
                                  <Textarea required name="alamat_bidan" id="alamat_bidan" class="form-control"
                                      cols="50" rows="20"></textarea>
                              </div>
                              <div class="form-group">
                                  <label for="telp_bidan">Telepon Bidan</label>
                                  <div class="input-group">
                                      <input required type="number" name="telp_bidan" class="form-control"
                                          id="telp_bidan" required>
                                  </div>
                              </div>
                              <div class="form-group">
                                  <label for="Gelar">Gelar</label>
                                  <select name="gelar" id="gelar" class="form-control"
                                      style=" background: rgba(0, 0, 0, 0.2);">
                                      <option value="">Pilih Gelar</option>
                                      <option value="Amd.Keb">Amd.Keb</option>
                                      <option value="S.Tr.Keb.">S.Tr.Keb.</option>
                                  </select>
                              </div>
                              <div class="form-group">
                                  <label for="status">Klinik</label>
                                  <button type="button" class="btn btn-info float-right btn-sm"
                                      onclick="$('#modalklinik').modal('toggle');">Tambah Klinik</button>
                                  <table class="table table-shopping">
                                      <thead>
                                          <tr>
                                              <td>No</td>
                                              <td>Nama Klinik</td>
                                          </tr>
                                      </thead>
                                      <tbody id="detail">
                                      </tbody>
                                  </table>
                              </div>
                              <!-- <div class="form-group">
                <label for="status">Status (Visible)</label>
                <select name="status" id="status" class="form-control" style=" background: rgba(0, 0, 0, 0.2);" required>
                    <option value="">Pilih Status</option>
                    <option value="1">Aktif</option>
                    <option value="0">Tidak Aktif</option>
                </select>
            </div> -->
                              <div class="form-group">
                                  <span class="btn btn-raised btn-round btn-info btn-file">
                                      <span class="fileinput-new">Pilih Gambar</span>
                                      <input type="file" name="image" onchange="previewFile(this);" />
                                  </span>
                                  <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                      <div class="fileinput-new thumbnail">
                                          <img id="previewImg"
                                              src="https://epicattorneymarketing.com/wp-content/uploads/2016/07/Headshot-Placeholder-1.png"
                                              alt="pic">
                                      </div>
                                      <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                  </div>
                              </div>
                              <div class="container text-center">
                                  <button type="submit" class="btn btn-success">Submit</button>
                              </div>
                      </form>


                      <div class="modal fade" id="modalklinik" tabindex="-1" role="dialog"
                          aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog" role="document">
                              <div class="card modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="exampleModalLabel">Tambah Klinik</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>
                                  <div class="card-body">
                                      <table class="table table-shopping" style="font-color:black">
                                          <tr>
                                              <td>Aksi</td>
                                              <td>Nama Klinik</td>
                                          </tr>
                                          <?php $i=0; foreach($rs_klinik as $klinik){ $i++;?>
                                          <tr
                                              onclick="f_row_click('<?= $klinik->id_klinik?>','<?= $klinik->nama_klinik?>')">
                                              <td><?=$i?></td>
                                              <td><?=$klinik->nama_klinik?></td>
                                          </tr>
                                          <?php } ?>
                                      </table>
                                  </div>
                              </div>
                          </div>
                      </div>


                      <script>
                      function previewFile(input) {
                          var file = $("input[type=file]").get(0).files[0];

                          if (file) {
                              var reader = new FileReader();

                              reader.onload = function() {
                                  $("#previewImg").attr("src", reader.result);
                              }

                              reader.readAsDataURL(file);
                          }
                      }

                      function f_row_click(id_klinik, nama_klinik) {
                          console.log($("#" + id_klinik).html())
                          if ($("#input" + id_klinik).val() == id_klinik) {
                              alert("Data Duplikat");
                          } else {
                              var ls_append = "";
                              ls_append += "<tr id='" + id_klinik + "'>" +
                                  "<td><button id='del" + id_klinik + "' onclick='f_row_del(" + id_klinik +
                                  ")' class='btn btn-danger btn-sm'><i class='fas fa-trash'></i>&nbsp Hapus</button></td>" +
                                  "<td><input type='hidden' id='input" + id_klinik + "' value='" + id_klinik +
                                  "' name='klinik[]'>" + nama_klinik + "</td>"
                              "</tr>";
                              $('#detail').append(ls_append);
                          }
                          $('#modalklinik').modal('toggle');
                      }

                      function f_row_del(id_klinik) {
                          $("#" + id_klinik).remove();
                      }
                      </script>
                  </div>
              </div>
          </div>
      </div>
  </div>
  </div>

  <div class="modal fade bd-example-modal-lg4" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
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
                              <th class="h4">Nama Fasilitas</th>
                              <th class="h4">Status</th>
                              <th class="text_right h6 align-middle bg-info text-white" type="button"
                                  class="btn btn-outline-info btn-round" data-toggle="modal"
                                  data-target=".bd-example-modal-lg5"><i class="fas fa-plus"></i>&nbsp Tambah Data</th>
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
                                          data-target="#delete" type="button"><i class="fas fa-trash"></i>&nbsp
                                          Hapus</button>
                                      <button
                                          onclick="window.location='<?=base_url('C_setup_fasilitas/edit/').$fas->id_fasilitas?>'"
                                          class="btn btn-info btn-sm m-1"><i class="fas fa-edit"></i>&nbsp Ubah</button>
                                  </td>
                              </tr>
                              <?php } ?>
                          </tbody>
                      </table>
                  </div>
              </div>
              <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="delete"
                  aria-hidden="true">
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
                              <button type="button" class="btn btn-primary"
                                  onclick="window.location='<?=base_url('C_setup_fasilitas/delete/').$fas->id_fasilitas?>'">Hapus</button>
                          </div>
                      </div>
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
                  <div class="container">
                      <h4 class="title"><i class="fas fa-columns"></i>&nbsp Tambah Artikel</h4>
                      <form action="<?=base_url('C_setup_artikel/post_create')?>" method="POST"
                          enctype="multipart/form-data">
                          <form action="">
                              <div class="card-body">
                                  <div class="form-group">
                                      <label for="judul_artikel">Judul Artikel</label>
                                      <input type="text" name="judul_artikel" id="judul_artikel" class="form-control"
                                          placeholder="Judul Artikel">
                                  </div>
                                  <div class="form-group">
                                      <label for="artikel">Isi Artikel</label>
                                      <textarea name="isi_artikel" id="isi_artikel" cols="50" rows="20"
                                          class="form-control" wordwrap="true"></textarea>
                                  </div>
                                  <div class="form-group">
                                      <label for="status_artikel">Status (Visible)</label>
                                      <select name="status_artikel" id="status_artikel" class="form-control"
                                          style=" background: rgba(0, 0, 0, 0.2);">
                                          <option value="">Pilih Status</option>
                                          <option value="1">Aktif</option>
                                          <option value="0">Tidak Aktif</option>
                                      </select>
                                  </div>
                                  <div class="form-group">
                                      <span class="btn btn-raised btn-round btn-primary btn-file">
                                          <span class="fileinput-new">Pilih Gambar</span>
                                          <input type="file" name="image" onchange="previewFile(this);" />
                                      </span>
                                      <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                          <div class="fileinput-new thumbnail">
                                              <img id="previewImg"
                                                  src="https://epicattorneymarketing.com/wp-content/uploads/2016/07/Headshot-Placeholder-1.png"
                                                  alt="pic">
                                          </div>
                                          <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                      </div>
                                  </div>
                                  <div class="container text-center">
                                      <button type="submit" class="btn btn-primary">Submit</button>
                                  </div>
                          </form>
                          <script>
                          function previewFile(input) {
                              var file = $("input[type=file]").get(0).files[0];

                              if (file) {
                                  var reader = new FileReader();

                                  reader.onload = function() {
                                      $("#previewImg").attr("src", reader.result);
                                  }

                                  reader.readAsDataURL(file);
                              }
                          }
                          </script>
                  </div>
              </div>
          </div>
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
                      <h5 class="title text-right">Setup Artikel</h5>
                      <p class="card-description text-right text-dark text-capitalize">SSetup Artikel adalah setup untuk
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
                                  <th class="h4">Judul Artikel</th>
                                  <th class="h4">Status</th>
                                  <th class="text_right bg-info text-white h5" type="button"
                                      class="btn btn-outline-info btn-round pull-right" data-toggle="modal"
                                      data-target=".bd-example-modal-lg7"><i class="fas fa-plus"></i>&nbsp Tambah Data
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
                                      <button class="btn btn-danger m-1" data-toggle="modal" data-target="#delete"
                                          type="button"><i class="fas fa-trash"></i>&nbsp Hapus</button>
                                      <button
                                          onclick="window.location='<?=base_url('C_setup_artikel/edit/').$artikel->id_artikel?>'"
                                          class="btn btn-info m-1 "><i class="fas fa-edit"></i>&nbsp Ubah</button>
                                  </td>
                              </tr>
                              <?php } ?>
                          </tbody>
                      </table>
                  </div>
              </div>
              <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="delete"
                  aria-hidden="true">
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
                              <button type="button" class="btn btn-primary"
                                  onclick="window.location='<?=base_url('C_setup_artikel/delete/').$artikel->id_artikel?>'">Hapus</button>
                          </div>
                      </div>
                  </div>

              </div>
          </div>
      </div>
  </div>

  <div class="modal fade bd-example-modal-lg7" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
      aria-hidden="true">
      <div class="modal-dialog modal-lg">
          <div class="modal-content">
              <div class="row container">
                  <div class="col-md-2"></div>
                  <div class="col col-md-6 pull-right">
                      <h5 class="title text-right">Setup Artikel</h5>
                      <p class="card-description text-right text-dark text-capitalize">SSetup Artikel adalah setup untuk
                          menampilkan artikel pada halaman user.</p>
                      <!-- <button type="button" class="btn btn-outline-info btn-round pull-right" data-toggle="modal"
                          data-target=".bd-example-modal-lg4">Setup Artikel</button> -->
                  </div>
                  <div class="col col-md-4 ">
                      <img class="card-img m-0 p-0 float-right" src="<?= base_url()?>assets/img/task.png"
                          alt="Card image">
                  </div>
                  <div class="container">
                      <h4 class="title"><i class="fas fa-columns"></i>&nbsp Tambah Artikel</h4>
                      <form action="<?=base_url('C_setup_artikel/post_create')?>" method="POST"
                          enctype="multipart/form-data">
                          <form action="">
                              <div class="card-body">
                                  <div class="form-group">
                                      <label for="judul_artikel">Judul Artikel</label>
                                      <input type="text" name="judul_artikel" id="judul_artikel" class="form-control"
                                          placeholder="Judul Artikel">
                                  </div>
                                  <div class="form-group">
                                      <label for="artikel">Isi Artikel</label>
                                      <textarea name="isi_artikel" id="isi_artikel" cols="50" rows="20"
                                          class="form-control" wordwrap="true"></textarea>
                                  </div>
                                  <div class="form-group">
                                      <label for="status_artikel">Status (Visible)</label>
                                      <select name="status_artikel" id="status_artikel" class="form-control"
                                          style=" background: rgba(0, 0, 0, 0.2);">
                                          <option value="">Pilih Status</option>
                                          <option value="1">Aktif</option>
                                          <option value="0">Tidak Aktif</option>
                                      </select>
                                  </div>
                                  <div class="form-group">
                                      <span class="btn btn-raised btn-round btn-primary btn-file">
                                          <span class="fileinput-new">Pilih Gambar</span>
                                          <input type="file" name="image" onchange="previewFile(this);" />
                                      </span>
                                      <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                          <div class="fileinput-new thumbnail">
                                              <img id="previewImg"
                                                  src="https://epicattorneymarketing.com/wp-content/uploads/2016/07/Headshot-Placeholder-1.png"
                                                  alt="pic">
                                          </div>
                                          <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                      </div>
                                  </div>
                                  <div class="container text-center">
                                      <button type="submit" class="btn btn-primary">Submit</button>
                                  </div>
                          </form>
                          <script>
                          function previewFile(input) {
                              var file = $("input[type=file]").get(0).files[0];

                              if (file) {
                                  var reader = new FileReader();

                                  reader.onload = function() {
                                      $("#previewImg").attr("src", reader.result);
                                  }

                                  reader.readAsDataURL(file);
                              }
                          }
                          </script>
                  </div>
              </div>
          </div>
      </div>
  </div>
  </div>