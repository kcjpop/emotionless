$(document).ready(function(){
	$('.validation-reset').on('click', function(e) {
		$('.validation-area').html(Math.random().toString(36).slice(3,12));
	});
	
	$('.validation-reset').click();

});