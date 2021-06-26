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
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <script src="https://kit.fontawesome.com/29747a5742.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Baskerville&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/29747a5742.js" crossorigin="anonymous"></script>
  <!-- CSS Files -->
  <link href="<?= base_url()?>/assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="<?= base_url()?>/assets/css/now-ui-kit.css?v=1.3.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="<?= base_url()?>/assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="login-page sidebar-collapse">
  <div class="page-header clear-filter" filter-color="blue">
    <div class="page-header-image" style="background-image:url(<?= base_url()?>/assets/img/test.jpg)"></div>
    <div class="content">
      <div class="container">
        <div class="col-md-4 ml-auto mr-auto">
          <div class="card card-login card-plain">
          <form method="post" action="<?=base_url('C_login/auth')?>">
              <div class="card-header text-center">
                <div class="logo-container">
                  <img src="<?= base_url()?>/assets/img/doctor.png" alt="">
                </div>
                <?= $this->session->userdata("notif_login");$this->session->unset_userdata("notif_login")?>
              </div>
              <div class="card-body">
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons users_circle-08"></i>
                    </span>
                  </div>
                  <input class="form-control h6" name="email" type="text" placeholder="Email">
                </div>
                <div class="input-group no-border input-lg">
                  <div class="input-group-prepend">
                    <span class="input-group-text">
                      <i class="now-ui-icons text_caps-small"></i>
                    </span>
                  </div>
                  <input class="form-control h6" name="password" type="password" Placeholder="Password">
                </div>
              </div>
              <div class="card-footer text-center">
              <button type="submit" class="btn btn-info btn-round btn-lg btn-block">Login</button>
                <div class="text-center text-light">
                  <h6>Belum Memiliki Akun ? 
                    <a href="<?=base_url('C_login/daftar')?>" class="h6 text-info">Buat Akun</a>
                  </h6>
                </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
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
</body>

</html>