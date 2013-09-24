  <div id="content" class="container">
    <div class="row">
            <form action="<?php echo site_url('auth/register') ?>" method="POST" class="form-signup">
              <div class="col-md-6">
                <h2 class="form-signup-heading">Đăng ký</h2>
                <h4 class="form-panel-heading">Phần thông  tin bắt buộc</h4>
                <input type="text" class="form-control top-input" placeholder="Tên đăng nhập" autofocus name="username">
                <input type="password" class="form-control" placeholder="Mật khẩu" name="password">
                <input type="password" class="form-control" placeholder="Xác nhận mật khẩu" name="password-retype">
                <input type="email" class="form-control" placeholder="E-mail" name="email">
                <input type="text" class="form-control bottom-input" placeholder="Mã xác nhận">
                <div class="validation container">
                  <span class="validation-area btn" name="validation"></span>
                  <button class="validation-reset btn btn-primary" type="button">Reset</button>
                </div>
                <div class="submit-area">
                <button class="btn btn-success" type="submit" name="submit">Đăng ký</button>
                </div>
              </div>
              <div class="col-md-6">
                <div class="description-area description-area-fix">
                  <p>Nhập mã xác nhận đúng theo phần kí tự ở dưới.</p>
                  <p>Bạn có thể nhấn Reset để tạo mã xác nhận mới.</p>
                  <p>Sau khi tạo tài khoản thành công, bạn có thể vào trang hồ sơ để cập nhật thêm thông tin cho hồ sơ của mình.</p>
                </div>
              </div>
            </form>
    </div>
  </div>
  <!--/content-->