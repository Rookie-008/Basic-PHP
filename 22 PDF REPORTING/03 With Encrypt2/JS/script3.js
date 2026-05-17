$(document).ready(function() {

	// Hidden Search Button
	$('#search-button').hide();

	// Event Keyword Write
	$('#keyword').on('keyup', function() {
		// Show Loading Icon
		$('.loader').show();

		// Load Data Ajax - Use Load
		// $('#container').load('AJAX/fruits.php?keyword=' + $('#keyword').val());

		// Load Data Ajax - Use $.get()
		$.get('AJAX/fruits.php?keyword=' + $('#keyword').val(), function(data) {

			$('#container').html(data);
			$('.loader').hide();
		});
	});
});