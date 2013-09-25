<h3>Edit an article</h3>
<?php if (isset($validation_errors) && !empty($validation_errors)) : ?>
	<div class="alert alert-danger"><?php echo $validation_errors ?></div>
<?php endif; ?>

<?php echo form_open(admin_url('news/edit/'.$id)) ?>
<div class="form-group">
	<label>Title*</label>
	<?php echo form_input('title', '', 'class="form-control"') ?>
</div>

<div class="form-group">
	<label>Content*</label>
	<?php echo form_textarea('content', '', 'class="form-control rich"') ?>
</div>

<button type="submit" class="btn btn-primary">Save</button>
<?php echo form_close() ?>