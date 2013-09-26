<h3>User Info</h3>
<table class="table table-bordered table-head table-hover">
	<thead>
		<tr>
			<th class="table-width-2">Fullname</th>
			<th>Workplace</th>
			<th>Address</th>
			<th>Tel</th>
			<th>DoB</th>
			<th>Sex</th>
			<th class="table-width-2">Class</th>
			<th>Note</th>
			<th>Avatar</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td><?php echo $user_info['fullname'] ?></td>
			<td><?php echo $user_info['workplace'] ?></td>
			<td><?php echo $user_info['address'] ?></td>
			<td><?php echo $user_info['tel'] ?></td>
			<td><?php echo substr($user_info['dob'],8,2 ).'-'.substr($user_info['dob'],5,3).substr($user_info['dob'],0,4)?></td>
			<td><?php echo $user_info['sex'] ?></td>
			<td><?php echo $user_info['class'] ?></td>
			<td><?php echo $user_info['note'] ?></td>
			<td><img src="<?php echo site_url('uploads/avatar/'.$user_info['avatar']) ?>"></td>
		</tr>
	</tbody>
</table>
<a class="pull-right" href="<?php echo admin_url('user') ?>" class="btn btn-sm"><i class="icon-arrow-left"></i> Back</a>