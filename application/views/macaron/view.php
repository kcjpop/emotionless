<div class="row">
	<div class="col-xs-4">
		<div class="cake">
			<div class="cake-img">
				<img src="<?php echo $item['big_image'] ?>" alt="<?php echo $item['name'] ?>" width="220">
				<?php if ($item['is_hot']) : ?>
				<div class="hot-lg">&nbsp;</div>
				<?php endif; ?>
			</div>
		</div>
	</div>
	<div class="col-xs-8 cake-detail">
		<h1><?php echo $item['name'] ?></h1>
		<div>
			<?php echo $item['description'] ?>
		</div>
		<div class="description">
			* Please note: A minimum of one dozen macarons is required for each order. We do deliver for an additional charge and a minimum of four dozen macarons.
		</div>
		<div>
			<a href="<?php echo site_url('macaron') ?>">
				<div class="btn-lg">ALL FAVOURS</div>
			</a>
		</div>
	</div>
</div>
<!-- carousel -->
<?php if (isset($others)) : ?>
<div class="row" style="margin-top: 50px;">
	<div class="col-xs-12">
		<hr class="dotted"/>
		<div class="flexslider">
			<ul class="slides">
<?php foreach ($others as $item) : ?>
				<li>
					<div class="cake">
						<div class="cake-img">
							<img src="<?php echo $item['small_image'] ?>" alt="<?php echo $item['name'] ?>" width="150">
							<?php if ($item['is_hot']) : ?>
							<div class="hot">&nbsp;</div>
							<?php endif; ?>
						</div>
						<a href="<?php echo $item['url'] ?>">
							<div class="cake-desc"><?php echo $item['name'] ?></div>
						</a>
					</div>
				</li>
<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>
<?php endif; ?>