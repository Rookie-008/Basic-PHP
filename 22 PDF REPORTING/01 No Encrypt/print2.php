<?php  
	
	// Connect To FPDF
	require 'FPDF/fpdf.php';

	$pdf = new FPDF();
	$pdf->AddPage();
	$pdf->SetFont('Arial','B',10);

	// Connect To Function
	require 'functions.php';

	// $connection = mysqli_connect("localhost", "newuser", "12345678", "dataFruits");

	$query = "SELECT * FROM fruits";
	$result = mysqli_query($connection, $query);

	// Background Color
	// $pdf->SetFillColor(190,215,255);

	// Table Header
	$pdf->Cell(30,10,'No.',1);
	// $pdf->Cell(30,10,'Image',1);
	$pdf->Cell(30,10,'Id Product',1);
	$pdf->Cell(30,10,'Name Product',1);
	$pdf->Cell(30,10,'Cost',1);
	$pdf->Ln();

	$pdf->SetFont('Arial','',10);
	// Table Data Rows
	while ($fruit = mysqli_fetch_assoc($result)) {
		$pdf->Cell(30,10, $fruit["id"], 1);
		// $pdf->Cell(30,10, $fruit["image"], 1);
		$pdf->Cell(30,10, $fruit["idProduct"], 1);
		$pdf->Cell(30,10, $fruit["nameProduct"], 1);
		$pdf->Cell(30,10, $fruit["cost"], 1);
		$pdf->Ln();
	}

	// Header Ends;
	$pdf->Output();

?>