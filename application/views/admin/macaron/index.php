<a href="<?php echo admin_url('macaron/form') ?>" class="btn btn-primary">Insert new product</a>

<h2>All macarons</h2>
<table class="table table-hoverred table-stripped">
	<thead>
		<tr>
			<th>Name</th>
			<th>Description</th>
			<th>Hot?</th>
			<th>Image</th>
			<th></th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($items as $item) : ?>
		<tr>
			<td><?php echo $item['name'] ?></td>
			<td><?php echo mb_substr(strip_tags($item['description']), 0, 300) ?>...</td>
			<td><?php if ($item['is_hot'] == 1) : ?>
				<p class="text-success"><i class="icon-ok"></i></p>
				<?php else : ?>
				<p class="text-danger"><i class="icon-remove"></i></p>
				<?php endif; ?>
			</td>
			<td>
				<?php /* if (!empty($item['image'])) : ?>
				<img src="<?php echo site_url('uploads/'.$item['image']); ?>" width="200" alt="">
				<?php endif; */ ?>
			</td>
			<td>
				<a href="<?php echo admin_url('macaron/form/'.$item['id']) ?>" class="btn btn-sm btn-info"><i class="icon-edit"></i> Edit</a>
				<a href="<?php echo admin_url('macaron/delete/'.$item['id']) ?>" class="btn btn-sm btn-danger btn-confirm"><i class="icon-trash"></i> Delete</a>
			</td>
		</tr>
<?php endforeach; ?>
	</tbody>
</table>