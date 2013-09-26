<h3>All portfolios</h3>
<table class="table table-bordered table-striped table-hover table-head">
	<thead>
		<tr>
			<th>Fullname</th>
			<th>Class</th>
			<th>Status</th>
			<th class="table-width-4">Actions</th>
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
				<?php if ($item['is_top']==0){ ?>	
					<i class="icon-minus"></i>
				<?php 
					}
					else
					{
				?>		
					<i class="icon-arrow-up"></i>
				<?php } ?>
			</td>
			<td>
				<?php if ($item['is_accepted']==0){ ?>	
					<button class="btn btn-primary">
						<a style="color: #fff" href="<?php echo admin_url('portfolio/accept/'.$item['id']) ?>"><i class="icon-thumbs-up"></i> Set</a>
					</button>
				<?php 
					}
					else
					{
				?>		
					<button class="btn btn-danger"> 
					<a style="color: #fff" href="<?php echo admin_url('portfolio/unaccept/'.$item['id']) ?>"><i class="icon-thumbs-down"></i> Unset</a>
					</button>
				<?php } ?>
				<?php if ($item['is_top']==0){ ?>	
					<button class="btn btn-primary">
						<a style="color: #fff" href="<?php echo admin_url('portfolio/set_top/'.$item['id']) ?>"> <i class="icon-circle-arrow-up"></i>  Top</a>
					</button>
				<?php 
					}
					else
					{
				?>		
					<button class="btn btn-danger"> 
					<a style="color: #fff" href="<?php echo admin_url('portfolio/unset_top/'.$item['id']) ?>"> <i class="icon-remove"></i>  Top</a>
					</button>
				<?php } ?>
					<button class="btn btn-danger"> 
					<a style="color: #fff" href="<?php echo admin_url('portfolio/delete/'.$item['id']) ?>"> <i class="icon-remove"></i>  Delete</a>
					</button>
			</td>
		</tr>
<?php endforeach; ?>
	</tbody>
</table>