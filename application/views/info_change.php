    <div id="profile" class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Thông tin cá nhân</h3>
            </div>
            <div class="panel-body">
              <a href="<?php echo site_url('profile/pwd_change') ?>">Đổi mật khẩu</a>
            </div>
            <div class="panel-body">
              <a href="<?php echo site_url('profile/avatar_change') ?>">Hình đại diện</a>
            </div>
            <div class="panel-body">
              <a href="<?php echo site_url('profile/info_change') ?>">Thông tin cá nhân</a>
            </div>
            <div class="panel-heading panel-border-fix">
              <h3 class="panel-title">Tùy chỉnh</h3>
            </div>
            <div class="panel-body">
              <a href="#">Tài khoản</a>
            </div>
            <div class="panel-body panel-last">
              <a href="#">Bảo mật</a>
            </div>
          </div>
        </div>
        <div class="col-md-8">
          <form action="<?php echo site_url('auth/update_info') ?>" method="post" class="form-signup pull-top">
            <h4 class="form-panel-heading form-right">Phần thông tin cá nhân</h4>
                <input name="fullname" type="text" class="form-control top-input" placeholder="Họ và tên">
                <input name="workplace" type="text" class="form-control" placeholder="Nơi học tập - công tác">
                <input name="address" type="text" class="form-control" placeholder="Địa chỉ">
                <input name="tel" type="text" class="form-control" placeholder="Số điện thoại">
                <div class="form-control">
                  <select name="dob_day"class="form-control dob">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
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
                  <select name="dob_month" class="form-control dob">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                    <option>6</option>
                    <option>7</option>
                    <option>8</option>
                    <option>9</option>
                    <option>10</option>
                    <option>11</option>
                    <option>12</option>
                  </select>
                  <select name="dob_year" class="form-control dob">
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
                  <select name="sex" class="form-control sex">
                    <option>Nam</option>
                    <option>Nữ</option>
                  </select>
                  <div class="tutor-info">
                    <div class="tutor-majors">
                      <label class="label-head">Môn dạy</label>
                      <input type="checkbox">
                      <label>Toán</label>
                      <input type="checkbox">
                      <label>Lý</label>
                      <input type="checkbox">
                      <label>Hóa</label>
                      <input type="checkbox">
                      <label>Văn</label>
                      <input type="checkbox">
                      <label>Anh</label>
                      <input type="checkbox">
                      <label>Sinh</label>
                    </div>
                    <div class="tutor-classes">
                      <label>Lớp dạy</label>
                      <select class="form-control" size="4" multiple>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                        <option>6</option>
                        <option>7</option>
                        <option>8</option>
                        <option>9</option>
                        <option>10</option>
                        <option>11</option>
                        <option>12</option>
                      </select>
                      </div>
                    </div>
                </div>
                <textarea class="form-control bottom-input" placeholder="Ghi chú thêm" cols="30" rows="5"></textarea>
                <button type="submit" class="btn btn-primary form-submit">Xác nhận</button>
          </form>
        </div>
      </div>
    </div>