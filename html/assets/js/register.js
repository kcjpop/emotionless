$(document).ready(function(){
	function code(){
		$('.validation-area').html(Math.random().toString(36).slice(3,12));
	}
	code();
	$('.validation-reset').on('click', code());
});