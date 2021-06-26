<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url()?>/assets/img/apple-icon.png">
  <link rel="icon" type="image/png" href="<?= base_url()?>/assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    Hai Bidan
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
    name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css"
    integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
  <!-- CSS Files -->
  <link href="<?= base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?= base_url()?>/assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?= base_url()?>/assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="index-page sidebar-collapse">
<?php 
      $segment = $this->uri->segment(1);
      $status_admin = $this->session->userdata('status_admin');
    ?>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg bg-info fixed-top navbar-transparent " color-on-scroll="400">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="<?=base_url("C_index")?>/index_web#index" rel="tooltip" title="Hai Bidan Siap Membantumu" data-placement="bottom"
          target="_blank">
          Hai Bidan
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation"
          aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar top-bar"></span>
          <span class="navbar-toggler-bar middle-bar"></span>
          <span class="navbar-toggler-bar bottom-bar"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation"
        data-nav-image="<?= base_url()?>/assets/img/blurred-image-1.jpg">
        <ul class="navbar-nav">
        <?php
        if($status_admin == "1"){
        ?>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url("C_index")?>/setup_web">
              <i class="now-ui-icons ui-1_settings-gear-63"></i>
              <p>Setup</p>
            </a>
          </li> 
          <?php
        }else{
        ?>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url("C_index")?>/profile_web">
              <i class="now-ui-icons business_badge"></i>
              <p>Profile</p>
            </a>
          </li>
          <?php } ?>
          <li class="nav-item">
            <a class="nav-link" href="<?=base_url("C_index")?>/index_web#layanan">
              <i class="now-ui-icons files_paper"></i>
              <p>Layanan</p>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="<?=base_url("C_index")?>/index_web#tentang">
              <i class="now-ui-icons travel_info"></i>
              <p>Tentang</p>
            </a>
          </li>
          <?php if($this->session->userdata('nama')==""){?>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('C_login')?>/index_web">
              <i class="now-ui-icons users_single-02"></i></i>
              <p>Login</p>
            </a>
          </li>
            <?php } else {?>
          <li class="nav-item">
            <a class="nav-link" data-toggle="modal" data-target="#myModal1">
              <i class="now-ui-icons users_single-02"></i></i>
              <p><?= $this->session->userdata("nama")?></p></a>
          </li>
          <?php }?>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
        <?= $contents?>
        </div>
        <footer class="footer" data-background-color="black">
          <div class=" container ">
            <div class="copyright" id="copyright">
              &copy;
              <script>
                document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
              </script>, Hai Bidan
            </div>
          </div>
        </footer>
    </div>
</div>
<!-- Mini Modal -->
<div class="modal fade modal-mini modal-info" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header justify-content-center">
            <div class="modal-profile">
              <i class="now-ui-icons users_circle-08"></i>
            </div>
          </div>
          <div class="modal-body">
            <p>Apakah Anda Yakin Akan Logout ?</p>
          </div>
          <div class="modal-footer">
            <a href="<?= base_url('C_login/logout_web')?>" class="btn btn-danger">Konfirmasi</a>
            <button type="button" class="btn btn-success text-white" data-dismiss="modal">Tutup</button>
          </div>
        </div>
      </div>
    </div>
    <!--  End Modal -->
    <!-- end navbar for mobile -->
 <!--   Core JS Files   -->
      <script src="<?= base_url()?>/assets/js/core/jquery.min.js" type="text/javascript"></script>
      <script src="<?= base_url()?>/assets/js/core/popper.min.js" type="text/javascript"></script>
      <script src="<?= base_url()?>/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
      <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
      <script src="<?= base_url()?>/assets/js/plugins/bootstrap-switch.js"></script>
      <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
      <script src="<?= base_url()?>/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
      <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
      <script src="<?= base_url()?>/assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
      <!--  Google Maps Plugin    -->
      <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
      <!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
      <script src="<?= base_url()?>/assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>
    <!--   Core JS Files   -->
</body>

</html>