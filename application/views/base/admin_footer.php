</div>
<script src="<?php echo site_url('assets/js/jquery.js') ?>"></script>
<script src="//tinymce.cachefly.net/4.0/tinymce.min.js"></script>
<script>
$(function() {
	tinymce.PluginManager.load('moxiemanager', '//www.tinymce.com/js/moxiemanager/plugin.min.js');
	tinymce.init({
		selector:'textarea.rich',
		theme: "modern",
		plugins: [
			"advlist autolink lists link image charmap print preview hr anchor pagebreak",
			"searchreplace wordcount visualblocks visualchars code fullscreen",
			"insertdatetime media nonbreaking save table contextmenu directionality",
			"emoticons template paste textcolor moxiemanager"
		],
		toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
		toolbar2: "print preview media | forecolor backcolor emoticons",
		image_advtab: true,
		autosave_ask_before_unload: false
	});
});
</script>
</body>
</html>