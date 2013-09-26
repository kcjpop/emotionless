<a href="<?php echo admin_url('article/form') ?>" class="btn btn-primary">Create an article</a>
<h3>All articles</h3>
<table class="table table-striped table-hover table-head table-bordered">
	<thead>
		<tr>
			<th class="table-width-2">Title</th>
			<th>Content</th>
			<th class="table-width-1">Created</th>
			<th class="table-width-1">Modifed</th>
			<th class="table-width-4">Actions</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($items as $item) :  ?>
		<tr>
			<td><?php echo $item['title'] ?></td>
			<td><div class="content"><?php echo $item['content'] ?></div></td>
			<td><?php echo $item['created'] ?></td>
			<td><?php echo $item['modified'] ?></td>
			<td>
				<button class="btn btn-primary">
					<a style="color: fff" href="<?php echo admin_url('article/go_top/'.$item['id']) ?>"><i class="icon-arrow-up"></i> Top</a>	
				</button>			
				<button class="btn btn-success">
					<a style="color: fff" href="<?php echo admin_url('article/edit/'.$item['id']) ?>"><i class="icon-edit"></i> Edit</a>			
				</button>
				<button class="btn btn-danger">
					<a style="color: fff" href="<?php echo admin_url('article/delete/'.$item['id']) ?>"><i class="icon-trash"></i> Delete</a>
				</button>
			</td>
		</tr>
<?php endforeach; ?>
	</tbody>
</table>