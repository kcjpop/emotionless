<!--content-->
  <div id="content" class="container">
    <div class="row">
        <div class="col-md-8 post">
          <h4 class="post-heading"><?php echo $post['title'] ?></h4>
          <span class='poster'>Ngừời viết: admin</span>
          <span class="post-timer">Được đăng vào lúc: <?php echo $post['created']->format('H:i:s d-m-Y') ?></span>
          <span class="post-timer">Sửa lần cuối lúc: <?php echo $post['modified']->format('H:i:s d-m-Y') ?></span>
          <hr>
          <div class="content">
            <?php echo $post['content'] ?>
            <a href="<?php echo site_url('post') ?>" class="ico-fix pull-right"><i class="icon-arrow-left"></i> Quay lại</a>
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
              <a href="<?php echo site_url('post') ?>"><h3 class="panel-title">Danh sách lớp hiện có</h3></a>
            </div>
            <?php for($i=0;$i<5;$i++){ ?>
            <div class="panel-body">
              <a href="<?php echo site_url('post/view/'.$recent_post[$i]['id']) ?>"><?php echo $recent_post[$i]['title'] ?></a>
            </div>
          <?php } ?>
          </div>
        </div>
    </div>
  </div>
  <!--/content-->