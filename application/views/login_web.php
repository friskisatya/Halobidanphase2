  <div class="wrapper" id="index">
    <div class="page-header clear-filter" filter-color="orange">
      <div class="page-header-image" style="background-image:url(../assets/img/bg.jpg)"></div>
      <div class="content">
        <div class="container">
          <div class="col-md-4 ml-auto mr-auto">
            <div class="card card-login card-plain">
              <form class="form" method="post" action="<?=base_url('C_login/auth_web')?>">
                <div class="card-header text-center">
                  <div class="logo-container">
                    <img src="<?=base_url()?>/assets/img/doctor.png" alt="">
                  </div>
                </div>
                <div class="card-body">
                <?= $this->session->userdata("notif_login");$this->session->unset_userdata("notif_login")?>
                  <div class="input-group no-border input-lg">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="now-ui-icons users_circle-08"></i>
                      </span>
                    </div>
                    <input type="Email" class="form-control" placeholder="Email..." require name="email">
                  </div>
                  <div class="input-group no-border input-lg">
                    <div class="input-group-prepend">
                      <span class="input-group-text">
                        <i class="now-ui-icons text_caps-small"></i>
                      </span>
                    </div>
                    <input type="password" placeholder="Password..." class="form-control" name="password" require>
                  </div>
                </div>
                <div class="card-footer text-center">
                <button type="submit" class="btn btn-info btn-round btn-lg btn-block">Login</button>
                  <div class="pull-left">
                    <h6>
                      <a href="<?=base_url()?>C_login/signup_web" class="link">Create Account</a>
                    </h6>
                  </div>
              </form>
              </div>
            </div>
          </div>
        </div>
      </div>