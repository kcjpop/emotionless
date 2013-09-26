<a href="<?php echo admin_url('article/form') ?>" class="btn btn-primary">Create an article</a>
<h3>All articles</h3>
<table class="table table-stripped table-hover">
	<thead>
		<tr>
			<th>Title</th>
			<th>Content</th>
			<th>Created</th>
			<th>Modifed</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($items as $item) :  ?>
		<tr>
			<td><?php echo $item['title'] ?></td>
			<td><?php echo $item['content'] ?></td>
			<td><?php echo $item['created'] ?></td>
			<td><?php echo $item['modified'] ?></td>
			<td>
				<a href="<?php echo admin_url('article/go_top/'.$item['id']) ?>" class="btn btn-sm"><i class="icon-arrow-up"></i> Top</a>				
				<a href="<?php echo admin_url('article/edit/'.$item['id']) ?>" class="btn btn-sm"><i class="icon-edit"></i> Edit</a>				
				<a href="<?php echo admin_url('article/delete/'.$item['id']) ?>" class="btn btn-sm"><i class="icon-trash"></i> Delete</a>
			</td>
		</tr>
<?php endforeach; ?>
	</tbody>
</table>