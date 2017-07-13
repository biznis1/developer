
<?php

//for single file include
 require('fpdflib/fpdf181/fpdf.php'); 
$pdf = new FPDF(); 
$pdf->AddPage();
//Image
$pdf->Image('Image/bnistechlogo.png',10,15,-400,'www.bnistech.com');
//headline
$pdf->SetFont('Arial','B',14);
$pdf->SetXY(0,9);
$pdf->Cell(210,5,'Business News And Information Service Private Limited',0,1,'C');
//header
$pdf->SetFont('Arial','B',8);
$pdf->SetXY(40,15);
$pdf->Cell(50,5,'GSTIN',0,1,'L');
$pdf->SetXY(55,15);
$gstno='07AAACBN1455W';
$pdf->Cell(150,5,$gstno,0,1,'L');

$pdf->SetXY(40,20);
$pdf->Cell(50,5,'State',0,1,'L');
$pdf->SetXY(55,20);
$state='Delhi';
$pdf->Cell(150,5,$state,0,1,'L');
$pdf->SetXY(60,20);
$scode='(07)';
$pdf->Cell(12,5,$scode,0,1,'C');

$pdf->SetXY(40,25);
$pdf->Cell(50,5,'PAN',0,1,'L');
$pdf->SetXY(55,25);
$pan='AAACB5323D';
$pdf->Cell(150,5,$pan,0,1,'L');

$pdf->SetXY(165,30);
$pdf->Cell(50,5,'Total',0,1,'L');
$pdf->SetXY(172,30);
$currency='$';
$pdf->Cell(150,5,$currency,0,1,'L');
$pdf->SetXY(174,30);
$total='171,100.00';
$pdf->Cell(20,5,$total,0,1,'L');

$pdf->SetXY(125,35);
$pdf->Cell(50,5,'Invoice Date',0,1,'L');
$pdf->SetXY(170,35);
$invcdate='12/07/2017';
$pdf->Cell(20,5,$invcdate,0,1,'R');

$pdf->SetXY(125,40);
$pdf->Cell(50,5,'Invoice No.',0,1,'L');
$pdf->SetXY(170,40);
$invcno='200145217002';
$pdf->Cell(20,5,$invcno,0,1,'R');

$pdf->SetXY(125,45);
$pdf->Cell(50,5,'Reference No.',0,1,'L');
$pdf->SetXY(170,45);
$refno='IT/SD/7002/Mob/App/2011';
$pdf->Cell(20,5,$refno,0,1,'R');

//$pdf->SetXY(120,30);
$pdf->Line(10,55,75,55,'R');

$pdf->Line(115,55,190,55);














$pdf->Output();
?>
