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
          <h3>Thông tin cá nhân</h3>
          <form action="<?php echo site_url('auth/update_info') ?>" method="post" class="form-signup form-fix">
                <input name="fullname" type="text" class="form-control top-input" placeholder="Họ và tên"  value="<?php echo $user_info['fullname'] ?>">
                <input name="workplace" type="text" class="form-control" placeholder="Nơi học tập - công tác" value="<?php echo $user_info['workplace'] ?>">
                <input name="address" type="text" class="form-control" placeholder="Địa chỉ" value="<?php echo $user_info['address'] ?>">
                <input name="tel" type="text" class="form-control" placeholder="Số điện thoại" value="<?php echo $user_info['tel'] ?>">
                <div class="form-control">
                  <select name="dob_day"class="form-control dob dob-left" value="<?php echo substr($user_info['dob'],8,2) ?>">
                    <option>01</option>
                    <option>02</option>
                    <option>03</option>
                    <option>04</option>
                    <option>05</option>
                    <option>06</option>
                    <option>07</option>
                    <option>08</option>
                    <option>09</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                    <option>13</option>
                    <option>14</option>
                    <option>15</option>
                    <option>16</option>
                    <option>17</option>
                    <option>18</option>
                    <option>19</option>
                    <option>20</option>
                    <option>21</option>
                    <option>22</option>
                    <option>23</option>
                    <option>24</option>
                    <option>25</option>
                    <option>26</option>
                    <option>27</option>
                    <option>28</option>
                    <option>29</option>
                    <option>30</option>
                    <option>31</option>
                  </select>
                  <select name="dob_month" class="form-control dob" value="<?php echo substr($user_info['dob'],5,3) ?>">
                    <option>01</option>
                    <option>02</option>
                    <option>03</option>
                    <option>04</option>
                    <option>05</option>
                    <option>06</option>
                    <option>07</option>
                    <option>08</option>
                    <option>09</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                  </select>
                  <select name="dob_year" class="form-control dob" value="<?php echo substr($user_info['dob'],0,4) ?>">
                    <option>1961</option>
                    <option>1962</option>
                    <option>1963</option>
                    <option>1964</option>
                    <option>1965</option>
                    <option>1966</option>
                    <option>1967</option>
                    <option>1968</option>
                    <option>1969</option>
                    <option>1970</option>
                    <option>1971</option>
                    <option>1972</option>
                    <option>1973</option>
                    <option>1974</option>
                    <option>1975</option>
                    <option>1976</option>
                    <option>1977</option>
                    <option>1978</option>
                    <option>1979</option>
                    <option>1980</option>
                    <option>1981</option>
                    <option>1982</option>
                    <option>1983</option>
                    <option>1984</option>
                    <option>1985</option>
                    <option>1986</option>
                    <option>1987</option>
                    <option>1988</option>
                    <option>1989</option>
                    <option>1990</option>
                    <option>1991</option>
                    <option>1992</option>
                    <option>1993</option>
                    <option>1994</option>
                    <option>1995</option>
                    <option>1996</option>
                    <option>1997</option>
                    <option>1998</option>
                    <option>1999</option>
                    <option>2000</option>
                  </select>
                  <select name="sex" class="form-control sex" value="<?php echo $user_info['sex'] ?>">
                    <option>Nam</option>
                    <option>Nữ</option>
                    <option>Khác</option>
                  </select>
                </div>
                <textarea name="class" class="form-control" placeholder="Môn dạy - ngăn cách bởi dấu phẩy, nối tiếp lớp bởi dấu gạch. Ví dụ: Toán 10-11, Lý 12" value="<?php echo $user_info['class'] ?>"cols="30" rows="5"></textarea>
                <textarea name="note" class="form-control bottom-input" placeholder="Lời chào - không quá 150 kí tự. Lời chào sẽ được thêm vào hồ sơ của bạn khi hiển thị" value="<?php echo $user_info['note'] ?>" cols="30" rows="5"></textarea>
                <button type="submit" class="btn btn-primary form-submit">Xác nhận</button>
          </form>
        </div>
      </div>
    </div>