<h3>All portfolios</h3>
<table class="table table-bordered table-striped table-hover">
	<thead>
		<tr>
			<th>Username</th>
			<th>Class</th>
			<th>Accepted</th>
			<th>Actions</th>
		</tr>
	</thead>
	<tbody>
<?php foreach ($items as $item) : ?>
		<tr>
			<td><?php echo $item['fullname'] ?></td>
			<td><?php echo $item['class'] ?></td>
			<td>
				<?php if ($item['is_accepted']==0){ ?>	
					<i class="icon-remove"></i>
				<?php 
					}
					else
					{
				?>		
					<i class="icon-ok"></i>
				<?php } ?>
			</td>
			<td>
				<?php if ($item['is_accepted']==0){ ?>	
					<button class="btn btn-primary">
						<a style="color: #fff" href="<?php echo admin_url('portfolio/accept/'.$item['id']) ?>"> Set</a>
					</button>
				<?php 
					}
					else
					{
				?>		
					<button class="btn btn-danger"> 
					<a style="color: #fff" href="<?php echo admin_url('portfolio/unaccept/'.$item['id']) ?>"> Unset</a>
					</button>
				<?php } ?>
			</td>
		</tr>
<?php endforeach; ?>
	</tbody>
</table>