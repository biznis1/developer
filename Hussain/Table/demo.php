<?php

//for single file include
/* require('fpdflib/fpdf181/fpdf.php'); */

//for all files include with extention .php
foreach (glob("fpdflib/fpdf181/*.php") as $filename)
{
	
	require $filename;
}

$pdf = new FPDF();
$pdf->AddPage("L", "A4",270);
$pdf->SetFont('Arial','B',9);
//header
$pdf->SetXY(120,38);
$pdf->Cell(70,5,'Date',1,1,'L');
$pdf->SetXY(120,38);
$date = '2017-06-02';
$pdf->Cell(70,5,$date,1,1,'R');


$pdf->Output();

?>
