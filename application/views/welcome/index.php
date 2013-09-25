	<div id="portfolio" class="container">
      <!-- Three columns of text below the carousel -->
      <div class="row">
        <div class="col-lg-4 text-center">
          <a href="<?php echo site_url('portfolio') ?>"><img class="img-thumbnail img-circle tutor-img" src="<?php echo site_url('assets/img/img.jpg') ?>" alt="Generic placeholder image"></a>
          <h2 class="tutor-name">Tên Một Ai Đó</h2>
          <span class="tutor-major">Môn dạy: Toán 12</span>
          <p>Đôi dòng giới thiệu bản thân Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, totam, itaque, repellat inventore esse blanditiis optio ipsa eveniet unde repudiandae voluptate magnam fugit officia provident sint vero necessitatibus impedit perferendis!</p>
          <a class="btn btn-primary pull-right" href="<?php echo site_url('portfolio') ?>">Xem chi tiết &raquo;</a>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 text-center">
          <a href="<?php echo site_url('portfolio') ?>"><img class="img-thumbnail img-circle tutor-img" src="<?php echo site_url('assets/img/img.jpg') ?>" alt="Generic placeholder image"></a>
          <h2 class="tutor-name">Tên Một Ai Đó</h2>
          <span class="tutor-major">Môn dạy: Toán 12</span>
          <p>Đôi dòng giới thiệu bản thân Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, totam, itaque, repellat inventore esse blanditiis optio ipsa eveniet unde repudiandae voluptate magnam fugit officia provident sint vero necessitatibus impedit perferendis!</p>
          <a class="btn btn-primary pull-right" href="<?php echo site_url('portfolio') ?>">Xem chi tiết &raquo;</a>
        </div><!-- /.col-lg-4 -->
        <div class="col-lg-4 text-center">
          <a href="<?php echo site_url('portfolio') ?>"><img class="img-thumbnail img-circle tutor-img" src="<?php echo site_url('assets/img/img.jpg') ?>" alt="Generic placeholder image"></a>
          <h2 class="tutor-name">Tên Một Ai Đó</h2>
          <span class="tutor-major">Môn dạy: Toán 12</span>
          <p>Đôi dòng giới thiệu bản thân Lorem ipsum dolor sit amet, consectetur adipisicing elit. In, totam, itaque, repellat inventore esse blanditiis optio ipsa eveniet unde repudiandae voluptate magnam fugit officia provident sint vero necessitatibus impedit perferendis!</p>
          <a class="btn btn-primary pull-right" href="<?php echo site_url('portfolio') ?>">Xem chi tiết &raquo;</a>
        </div><!-- /.col-lg-4 -->
	  </div>
	</div>
	<!--/portfolio-->
  <!--content-->
  <div id="content" class="container">
    <div class="row">
        <div class="col-md-8 post">
          <h4 class="post-heading"><?php echo $title ?></h4>
          <span class='poster'>Ngừời viết: admin</span>
          <span class="post-timer">Được đăng vào lúc: <?php echo $created->format('H:i:s d-m-Y') ?></span>
          <span class="post-timer">Sửa lần cuối lúc: <?php echo $modified->format('H:i:s d-m-Y') ?>r</span>
          <hr>
          <div class="content">
            <?php echo $content ?>
          </div>
          <div id="comments">
            <div id="disqus_thread"></div>
              <script type="text/javascript">
                var disqus_shortname = 'azerozbyethostblog'; 
                (function(){
                    var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                    dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                    (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                 })();
              </script>
            </div>
        </div>
        <div class="col-md-4">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <h3 class="panel-title">Tìm gia sư theo môn</h3>
            </div>
            <div class="panel-body">
              <a href="#">Toán</a>
            </div>
            <div class="panel-body">
              <a href="#">Hóa</a>
            </div>
            <div class="panel-body">
              <a href="#">Anh</a>
            </div>
            <div class="panel-body">
              <a href="#">Toán</a>
            </div>
            <div class="panel-body panel-last">
              <a href="#">Lý</a>
            </div>
          </div>
          <div class="panel panel-primary">
           <div class="panel-heading">
              <h3 class="panel-title">Tìm gia sư theo lớp</h3>
            </div>
            <div class="panel-body">
              <a href="#">Luyện thi THPT</a>
            </div>
            <div class="panel-body panel-last">
              <a href="#">Luyện thi Đại học - Cao đẳng</a>
            </div>
          </div>
        </div>
    </div>
  </div>
  <!--/content-->