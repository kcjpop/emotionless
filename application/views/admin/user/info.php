<h3>User Info</h3>
<table class="table table-bordered table-striped table-hover">
	<thead>
		<tr>
			<th>Username</th>
			<th>Fullname</th>
			<th>Workplace</th>
			<th>Address</th>
			<th>Tel</th>
			<th>DoB</th>
			<th>Sex</th>
			<th>Major</th>
			<th>Note</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><?php echo $user['username'] ?></td>
			<td><?php echo $user_info['fullname'] ?></td>
			<td><?php echo $user_info['workplace'] ?></td>
			<td><?php echo $user_info['address'] ?></td>
			<td><?php echo $user_info['tel'] ?></td>
			<td><?php echo $user_info['dob'] ?></td>
			<td><?php echo $user_info['sex'] ?></td>
			<td><?php echo $user_info['major'] ?></td>
			<td><?php echo $user_info['note'] ?></td>
		</tr>
	</tbody>
</table>
<a class="pull-right" href="<?php echo admin_url('user') ?>" class="btn btn-sm"><i class="icon-arrow-left"></i> Back</a>