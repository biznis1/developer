
<?php

//for single file include
 require('fpdflib/fpdf181/fpdf.php'); 
$pdf = new FPDF(); 
$pdf->AddPage();
$pdf->SetXY(50,35);
$pdf->Image('Image/logo.png',50,30,'www.plus2net.com');
$pdf->Output();
?>