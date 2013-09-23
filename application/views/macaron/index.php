<div class="row">
<?php foreach ($items as $item) : ?>
	<div class="cake">
		<div class="cake-img">
			<a href="<?php echo $item['url'] ?>">
				<img src="<?php echo $item['small_image'] ?>" alt="<?php echo $item['name'] ?>" width="105">
				<?php if ($item['is_hot']) : ?>
				<div class="hot">&nbsp;</div>
				<?php endif; ?>
			</a>
		</div>
		<a href="<?php echo $item['url'] ?>">
			<div class="cake-desc"><?php echo $item['name'] ?></div>
		</a>
	</div>
<?php endforeach; ?>
</div>
<div class="row">
	<p>(*) Macarons are gluten-free, contains eggs, nuts, and dairy.  Please note that these are just a few flavors we are offering.  If you have others flavors in mind or something specific, we can accommodate you.</p>
</div>