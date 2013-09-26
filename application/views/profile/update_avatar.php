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
            <div class="panel-body">
              <a href="<?php echo site_url('profile/send_request') ?>">Đăng ký làm gia sư</a>
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
          <h3>Ảnh đại diện</h3>
<?php if (isset($user_info['avatar']) && !empty($user_info['avatar'])) : ?>
          <img src="<?php echo site_url('uploads/avatar/'.$user_info['avatar']) ?>" alt="" class="img-thumbnail">
<?php endif; ?>
          <h3>Upload Ảnh đại diện</h3>
          <div id="avatar-uploader"></div>
        </div>
      </div>
    </div>