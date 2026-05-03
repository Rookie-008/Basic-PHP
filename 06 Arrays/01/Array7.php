<?php  

$penyedapRasa = array("Kare", "Kuah Bakso", "Semur", "Lodeh", "Gulai", "Pecel", "Krengsengan", "Tongseng", "Soto", "Rawon");

$totalArray = count($penyedapRasa);

for($i = 0; $i < $totalArray; $i++){
	echo $penyedapRasa[$i]."<br>";
}

?>
