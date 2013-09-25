  <!--content-->
  <div id="content" class="container">
    <div class="row">
        <div class="col-md-8 pull-top post">
          <h3>Danh sách lớp hiện có</h3>
          <div class="container">
            <?php foreach ($all_post as $all_post) : ?>
              <div><a href="<?php echo site_url('post/view/'.$all_post['id']) ?>"><?php echo $all_post['title'] ?></a></div>
            <?php endforeach ?>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <a href="<?php echo site_url('post') ?>"><h3 class="panel-title">Danh sách lớp - gia sư</h3></a>
            </div>
            <?php for($i=0;$i<5;$i++){ ?>
            <div class="panel-body">
              <a href="#"><?php echo $recent_post[$i]['title'] ?></a>
            </div>
          <?php } ?>
          </div>
          
        </div>
    </div>
  </div>
  <!--/content-->