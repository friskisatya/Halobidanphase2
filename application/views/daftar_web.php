<div class="wrapper" id="index">
    <div class="page-header clear-filter" filter-color="orange">
        <div class="page-header-image" style="background-image:url(../assets/img/bg.jpg)"></div>
        <div class="content">
            <div class="container">
                <div class="col-md-4 ml-auto mr-auto">
                    <div class="card card-login card-plain">
                        <form method="post" action="<?=base_url('C_login/post_daftar')?>">
                            <div class="card-header text-center">
                                <div class="logo-container">
                                    <img src="<?= base_url()?>/assets/img/doctor.png" alt="">
                                </div>
                                <?= $this->session->userdata("notif_daftar");$this->session->unset_userdata("notif_daftar")?>
                            </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row ">
                        <div class="col-md-6">
                            <!-- input email -->
                            <div class="input-group no-border input-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="now-ui-icons users_circle-08"></i>
                                    </span>
                                </div>
                                <input required class="form-control h6 text-capitalize text-light" name="email" type="email"
                                    placeholder="Email">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <!-- input password -->
                            <div class="input-group no-border input-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="now-ui-icons text_caps-small"></i>
                                    </span>
                                </div>
                                <input required class="form-control h6 text-capitalize text-light" name="password" type="password"
                                    Placeholder="Password">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <!-- input retype password -->
                            <div class="input-group no-border input-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="now-ui-icons text_caps-small"></i>
                                    </span>
                                </div>
                                <input required class="form-control h6 text-capitalize text-light" name="password2" type="password"
                                    Placeholder="Retype Password">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <!-- input name user -->
                            <div class="input-group no-border input-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="now-ui-icons text_caps-small"></i>
                                    </span>
                                </div>
                                <input required class="form-control h6 text-capitalize text-light" name="nama" type="text"
                                    Placeholder="Nama">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <!-- input phone number  -->
                            <div class="input-group no-border input-lg">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <small class="text-white">+62 </small>
                                    </span>
                                </div>
                                <input required type="number" name="no_telp" class="form-control h6 text-capitalize text-light"
                                    id="inputPhone" placeholder="Telepon">
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" text-center">
                    <button type="submit" class="btn btn-info btn-round btn-lg btn-block">Daftar</button>
                    <div class="text-center text-light">
                        <h6>Sudah Memiliki Akun ?
                            <a href="<?=base_url('C_login/index_web')?>" class="h6 text-info">Login</a>
                        </h6>
                    </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
