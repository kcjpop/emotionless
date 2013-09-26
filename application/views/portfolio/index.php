<div id="portfolio" class="container">
      <!-- Three columns of text below the carousel -->
      
      <div class="row row-mg-bot">
        <?php foreach ($items as $item) : ?>
        <?php if ($item['is_accepted']==1){ ?>
        <div class="col-lg-4 text-center">
          <a href="<?php echo site_url('portfolio') ?>"><img class="img-thumbnail img-circle tutor-img" src="<?php echo site_url('assets/img/img.jpg') ?>" alt="Generic placeholder image"></a>
          <h2 class="tutor-name"><?php echo $item['fullname'] ?></h2>
          <span class="tutor-major"><?php echo $item['class'] ?></span>
        </div>
        <?php } endforeach ?>
      </div>


  </div>
  <!--/portfolio-->