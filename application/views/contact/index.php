  <!--content-->
  <div id="content" class="container">
    <div class="row">
        <div class="col-md-8 post">
          <h4 class="post-heading">Bài viết có cái tiêu đề dài trời ơi đất hỡi, ờ thực sự cũng không dài lắm</h4>
          <span class='poster'>Ngừời viết: Mr.X</span>
          <span class="post-timer">Được đăng vào lúc: timer</span>
          <hr>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deleniti, enim cum illum molestiae iusto et odit sapiente assumenda minus velit quia sed exercitationem veniam optio dolorum dolor quam qui. Ut consequatur quam optio accusantium. Magni velit voluptatibus reprehenderit neque autem ipsam veritatis. Tempore, recusandae, inventore, cum fuga nihil eum obcaecati sint dignissimos nesciunt earum non corporis beatae temporibus nobis delectus tempora doloribus ipsam. Rerum, ab, officiis, sapiente minus quos natus velit id tenetur repellat accusamus dicta cupiditate impedit dolor odit commodi earum ipsum consectetur dolorem corporis voluptas reiciendis nostrum illum iure eaque culpa tempora facere quae autem molestias necessitatibus ea!
          </p>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eos, eum, harum quod nesciunt minus autem placeat ad culpa ut officiis dolorem veniam eligendi molestiae aliquid ullam id adipisci nostrum voluptatum beatae labore perspiciatis sit omnis doloribus voluptatem quibusdam at quam fugiat. Aliquid, voluptatem, alias, fuga nobis suscipit sint quasi quam quibusdam numquam delectus corporis maxime repudiandae nostrum optio dolore ducimus a ex iure cum eos nesciunt hic explicabo quidem recusandae eum aspernatur tempora iste repellat accusamus ipsum culpa natus ratione sapiente vitae ad et odit? Fugiat, est, voluptate, impedit obcaecati illum eos labore iste aliquid autem veniam dolorum magni inventore!
          </p>
          
        </div>
        <div class="col-md-4">
          <div class="panel panel-primary">
            <div class="panel-heading">
              <a href="<?php echo site_url('post') ?>"><h3 class="panel-title">Danh sách lớp - gia sư</h3></a>
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