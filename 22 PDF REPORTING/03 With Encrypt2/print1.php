<?php

	require 'FPDF/fpdf.php';

	$pdf = new FPDF();

	$pdf->AddPage();
	$pdf->SetFont('Arial', 'B', 20);
	$pdf->Cell(100, 10, "ENJOY THE PROCESS");
	// $pdf->WriteHTML('<h1>ENJOY THE PROCESS</h1>'); // ERROR

	$pdf->Output();

?>