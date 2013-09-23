<?php if (!isset($item)) : ?>
	<h2>Insert new product</h2>
<?php else : ?>
	<h2>Edit product</h2>
<?php endif; ?>

<?php $error = validation_errors();
if (!empty($error)) :
?>
<div class="alert alert-danger"><?php echo $error ?></div>
<?php endif; ?>

<?php echo form_open(admin_url('macaron/form/'.$item['id'])) ?>
<div class="form-group">
	<label>Name*</label>
	<?php echo form_input('name', $item['name'], 'class="form-control"') ?>
</div>

<div class="form-group">
	<label>Description</label>
	<?php echo form_textarea('description', $item['description'], 'class="form-control rich"') ?>
</div>

<div class="checkbox">
	<label>
	<?php echo form_checkbox('is_hot', '1', (int) $item['is_hot'] === 1) ?> Hot
	</label>
	<span class="help-block">Select this option to mark this macaron as hot</span>
</div>

<div class="form-group">
	<label>Image</label>
	<?php echo form_input('display_image', $item['image'], 'class="form-control" disabled') ?>
	<?php echo form_hidden('image', $item['image']) ?>
	<div class="uploader" style="margin-top: 10px;"></div>
</div>

<button type="submit" class="btn btn-primary">Submit</button>

<?php echo form_close() ?>