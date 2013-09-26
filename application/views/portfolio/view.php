<div class="container">
	<div class="row">
		<div class="col-md-8 pull-top">
			<h3><?php echo $fullname ?></h3>
			<div class="container tutor-info">
				<table class="table table-bordered">
					<tbody>
						<tr>
							<td>Tên đầy đủ</td>
							<td><?php echo $fullname ?></td>
						</tr>
						<tr>
							<td>Nơi học tập - làm việc</td>
							<td><?php echo $workplace ?></td>
						</tr>
						<tr>
							<td>Địa chỉ</td>
							<td><?php echo $address ?></td>
						</tr>
						<tr>
							<td>Điện thoại</td>
							<td><?php echo $tel ?></td>
						</tr>
						<tr>
							<td>Ngày sinh</td>
							<td><?php echo substr($dob,8,2 ).'-'.substr($dob,5,3).substr($dob,0,4)?></td>
						</tr>
						<tr>
							<td>Giới tính</td>
							<td><?php echo $sex ?></td>
						</tr>
						<tr>
							<td>Môn dạy</td>
							<td><?php echo $class ?></td>
						</tr>
					</tbody>
				</table>
			</div>
			<a href="<?php echo site_url('portfolio') ?>" class="ico-fix pull-right"><i class="icon-arrow-left"></i> Back</a>
		</div>
		<div class="col-md-4">
			<div class="avatar">
				<img class="img-thumbnail" src="<?php echo site_url('uploads/avatar/'.$avatar) ?>" alt="Generic Image">
			</div>
		</div>
	</div>
</div>