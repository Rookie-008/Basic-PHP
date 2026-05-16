// Get Element
var keyword	= document.getElementById('keyword');
var searchButton = document.getElementById('search-button');
var container = document.getElementById('container');

// Event Listener
// searchButton.addEventListener('click', function() {
// 	alert('Button Press!!');
// });

// searchButton.addEventListener('mouseover', function() {
// 	alert('Button Press!!');
// });

// Add Event when write keyword
keyword.addEventListener('keyup', function() {
	// alert('Press Any Key');
	// console.log(keyword.value);

	// Create Object Ajax
	var xhr = new XMLHttpRequest();

	// Check Ajax
	xhr.onreadystatechange = function() {
		if( xhr.readyState == 4 && xhr.status == 20 ) {
			// console.log('Data AJAX Ready To Pair');
			// console.log(xhr.responseText);
			container.innerHtml = xhr.responsetext;
		}
	}

	// Execution Ajax
	// xhr.open('GET', 'AJAX/data.php', true);
	xhr.open('GET', 'AJAX/fruits.php?keyword='+keyword.value, true);
	xhr.send();
});

