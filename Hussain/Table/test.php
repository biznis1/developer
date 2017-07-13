<?php

//for single file include
require('fpdflib/fpdf181/fpdf.php');

//for all files include with extention .php
/*foreach (glob("fpdflib/fpdf181/*.php") as $filename)
{
	
	require $filename;
}
*/
$pdf = new FPDF();
$pdf->AddPage();
//$pdf->SetDisplayMode(real,'default');
$pdf->SetFillColor(0,0,0);
$pdf->SetFont('Arial','B',16);

$pdf->Image('Image/logo.png',20,10,50,33.3);

$pdf->SetDrawColor(188,188,188);
$pdf->Line(20,55,150,55);

$pdf->Output();

?>
