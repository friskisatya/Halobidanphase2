<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
        Hai Bidan
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no'
        name='viewport' />
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

<body class="">
    <?php 
      $segment = $this->uri->segment(1);
      $status_admin = $this->session->userdata('status_admin');
    ?>
    <nav>
        <div class="row fixed-top bg-info">
            <!-- header for location -->
            <div class="col-6">
                <!-- <button class="btn btn-neutral btn-outline-info btn-round m-2 h6">Location</button> -->
            </div>
            <!-- header for status sign up or login -->
            <div class="col-6">
                <?php if($this->session->userdata('nama')==""){?>
                <button class="btn btn-neutral btn-outline-primary text-light float-right btn-round m-2 h6 overlay"><i
                        class="fas fa-user mr-3"></i><a class="text-light" href="<?= base_url('C_login')?>">Daftar/Masuk</a></button>
                <h5></h5>
                <?php } else {?>
                <button class="btn btn-neutral btn-outline-primary text-light float-right btn-round m-2 h6 overlay"
                    data-toggle="modal" data-target="#logout"><i
                        class="fas fa-user mr-3"></i><?= $this->session->userdata("nama")?></button>
                <!-- Modal for logout-->
                
                <?php }?>
            </div>
        </div>
    </nav>
    <!-- main content / partial view -->
    <div style="padding-top:70px;padding-bottom:100px;">
        <div class="container">
            <?= $contents?>
        </div>
    </div>
    <!-- navigation bar  -->
    <ul class="nav justify-content-center navbar fixed-bottom bg-info m-0">
    <li class="nav-item">
      <center><a class="nav-link active" href="<?=base_url("C_index")?>"><i class="fas fa-home"></i><br>Home</a></center>
    </li>
    <?php
        if($status_admin == "1"){
        ?>
    <li class="nav-item">
      <center><a class="nav-link active" href="<?=base_url("C_administrasi_aplikasi")?>"><i class="fas fa-cogs"></i><br>Setup</a></center>
    </li>
    <?php
        }else{
        ?>
    <li class="nav-item">
      <center><a class="nav-link active" href="<?=base_url("C_profile_kehamilan")?>"><i class="fas fa-users"></i><br>Profile</a></center>
    </li>
    <?php } ?>
    <li class="nav-item">
      <center><a class="nav-link active" href="<?=base_url("C_tentang")?>"><i class="fas fa-info"></i><br>Tentang</a></center>
    </li>
  </ul>



  <div class="modal fade pt-5 mt-5" id="logout" tabindex="9999" role="dialog" aria-labelledby="logoutLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content rounded">
            <div class="modal-header">
                <h5 class="modal-title" id="logoutLabel">Information</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah anda akan melakukan Logout ?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                <a href="<?= base_url('C_login/logout')?>" class="btn btn-info">Konfirmasi</a>
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