<h3>All users</h3>
<table class="table table-bordered table-striped table-hover">
	<thead>
		<tr>
			<th>Username</th>
			<th>Email</th>
			<th>Join</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($users as $user) : ?>
		<tr>
			<td><?php echo $user['username'] ?></td>
			<td><?php echo $user['email'] ?></td>
			<td></td>
			<td>
				<a href="<?php echo admin_url('user/remove/'.$user['id']) ?>" class="btn btn-danger btn-sm"><i class="icon-remove"></i> Delete</a>
			</td>
		</tr>
<?php endforeach; ?>
	</tbody>
</table>