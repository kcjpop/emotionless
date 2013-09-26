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
              <a href="<?php echo site_url('profile/send_request') ?>">Đăng ký làm gia sư - cập nhật mới</a>
            </div>
            <div class="panel-heading panel-border-fix">
              <a href="<?php echo site_url('profile') ?>"><h3 class="panel-title">Tủy chỉnh</h3></a>
            </div>
            <div class="panel-body">
              <a href="<?php echo site_url('profile/account') ?>">Tài khoản</a>
            </div>
            <div class="panel-body panel-last">
              <a href="<?php echo site_url('profile/security') ?>">Bảo mật</a>
            </div>
          </div>
        </div>
        <div class="col-md-8 pull-top">
          <h3>Gửi đăng ký - cập nhật</h3>
          <div class="description-area">
            <p>Lưu ý: chỉ có hồ sơ được điền đầy đủ tất cả các mục mới được xét duyệt để thông qua.</p>
            <p>Hồ sơ được duyệt thành công sẽ có tên trong danh sách gia sư của chúng tôi.</p>
            <p>Sau khi đã lên hồ sơ thành công, để cập nhật thông tin cho hệ thống bạn phải quay lại đây để thực hiện gửi thông tin mới.</p>
            <p>Cảm ơn bạn đã hợp tác với trung tâm.</p>
            <form action="<?php echo site_url('auth/send_request') ?>" method="post">
              <button type="submit" class="btn btn-lg btn-primary">Gửi</button>
            </form>
          </div>
        </div>
      </div>
    </div>