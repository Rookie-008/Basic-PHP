<?php

// Variabel Scope
$data = 20;

function showData() {
	global $data;
	echo $data;
}

showData();

?>