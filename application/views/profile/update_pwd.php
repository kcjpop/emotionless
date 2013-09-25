   <div id="profile" class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <a href="<?php echo site_url('profile') ?>"><h3 class="panel-title">Hồ sơ</h3></a>
            </div>
            <div class="panel-body">
              <a href="<?php echo site_url('profile/update_pwd') ?>">Đổi mật khẩu</a>
            </div>
            <div class="panel-body">
              <a href="<?php echo site_url('profile/update_avatar') ?>">Hình đại diện</a>
            </div>
            <div class="panel-body">
              <a href="<?php echo site_url('profile/update_info') ?>">Thông tin cá nhân</a>
            </div>
            <div class="panel-heading panel-border-fix">
              <a href="<?php echo site_url('profile') ?>"><h3 class="panel-title">Tủy chỉnh</h3></a>
            </div>
            <div class="panel-body">
              <a href="#">Tài khoản</a>
            </div>
            <div class="panel-body panel-last">
              <a href="#">Bảo mật</a>
            </div>
          </div>
        </div>
        <div class="col-md-8 pull-top">
          <h3>Đổi mật khẩu</h3>
          <form action="<?php echo site_url('auth/update_pwd') ?>" method="POST" class="form-signup form-fix">
              <input type="password" name="password-old" placeholder="Mật khẩu hiện tại" class="form-control top-input">
              <input type="password" name="password-new" placeholder="Mật khẩu mới" class="form-control">
              <input type="password" name="password-new-retype" placeholder="Xác nhận mật khẩu" class="form-control bottom-input">
              <button class="btn btn-primary form-submit" type="submit" name="submit">Xác nhận</button>
          </form>
        </div>
      </div>
    </div>