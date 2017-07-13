<?php

//for single file include
/* require('fpdflib/fpdf181/fpdf.php'); */

//for all files include with extention .php
foreach (glob("fpdflib/fpdf181/*.php") as $filename)
{
	
	require $filename;
}


$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',9);
//header
$pdf->SetXY(120,38);
$pdf->Cell(70,5,'Date',1,1,'L');
$pdf->SetXY(120,38);
$date = '2017-06-02';
$pdf->Cell(70,5,$date,1,1,'R');

$pdf->SetXY(120,43);
$pdf->Cell(70,5,'Bill Number',1,1,'L');
$bill = '2017060055';
$pdf->SetXY(120,43);
$pdf->Cell(70,5,$bill,1,1,'R');

$pdf->SetXY(120,50);
$pdf->Cell(70,5,'Service Charge',1,1,'L');
$service = '32,500.00';
$pdf->SetXY(120,50);
$pdf->Cell(70,5,$service,1,1,'R');

$pdf->SetXY(120,55);
$pdf->Cell(70,5,'Service Tax',1,1,'L');
$tax = '4,875.00';
$pdf->SetXY(120,55);
$pdf->Cell(70,5,$tax,1,1,'R');

$pdf->SetXY(120,60);
$pdf->Cell(70,5,'Amount Payable',1,1,'L');
$amount = '37,375.00';
$pdf->SetXY(120,60);
$pdf->Cell(70,5,$amount,1,1,'R');

$pdf->SetFont('Arial','',12);
$pdf->SetXY(20,35);
$address = '
	Office of Honrable Chairman Rajya Sabha
	6, Maulana Azad
	New Delhi';
$pdf->MultiCell(60,5,$address,0,'L');
$pdf->Ln(1);

//container part
$pdf->SetFont('Arial','B',9);
$pdf->SetXY(20,70);
$pdf->Cell(10,5,'No.',1,1,'C');

$pdf->SetXY(30,70);
$pdf->Cell(105,5,'Narration',1,1,'C');

$pdf->SetXY(135,70);
$pdf->Cell(20,5,'Rate',1,1,'C');

$pdf->SetXY(155,70);
$pdf->Cell(15,5,'Units',1,1,'C');

$pdf->SetXY(170,70);
$pdf->Cell(20,5,'Amount',1,1,'C');

$pdf->SetXY(20,75);
$pdf->Cell(10,120,'',1,1,'C');

$pdf->SetXY(20,80);
$pdf->Cell(10,5,'1.',0,1,'C');
$pdf->SetXY(30,80);
$n1='Press monitor Service - Vice President of India 1st June 2017 - 30th june 2017 [Rs. 32500.00*1.0 months]';
$pdf->MultiCell(105,5,$n1,0,'L');

$pdf->SetXY(20,90);
$pdf->Cell(10,5,'2.',0,1,'C');
$pdf->SetXY(30,90);
$n2='';
$pdf->MultiCell(105,5,$n2,0,'L');

$pdf->SetXY(20,100);
$pdf->Cell(10,5,'3.',0,1,'C');
$pdf->SetXY(30,100);
$n3='';
$pdf->MultiCell(105,5,$n3,0,'L');

$pdf->SetXY(20,110);
$pdf->Cell(10,5,'4.',0,1,'C');
$pdf->SetXY(30,110);
$n4='';
$pdf->MultiCell(105,5,$n4,0,'L');

$pdf->SetXY(20,120);
$pdf->Cell(10,5,'5.',0,1,'C');
$pdf->SetXY(30,120);
$n5='';
$pdf->MultiCell(105,5,$n5,0,'L');

$pdf->SetXY(20,130);
$pdf->Cell(10,5,'6.',0,1,'C');
$pdf->SetXY(30,130);
$n6='';
$pdf->MultiCell(105,5,$n6,0,'L');

$pdf->SetXY(20,140);
$pdf->Cell(10,5,'7.',0,1,'C');
$pdf->SetXY(30,140);
$n7='';
$pdf->MultiCell(105,5,$n7,0,'L');

$pdf->SetXY(135,170);
$stax='4550.00';
$pdf->Cell(55,5,$stax,0,1,'R');
$pdf->SetXY(30,170);
$n8='Service tax @ 14%';
$pdf->MultiCell(105,5,$n8,0,'L');

$pdf->SetXY(135,175);
$val2='162.50';
$pdf->Cell(55,5,$val2,0,1,'R');
$pdf->SetXY(30,175);
$n9='Swachh Bharat Cess @ 0.5%';
$pdf->MultiCell(105,5,$n9,0,'L');

$pdf->SetXY(135,180);
$val3='162.50';
$pdf->Cell(55,5,$val3,0,1,'R');
$pdf->SetXY(30,180);
$n10='Krishi Kalyan Cess @ 0.5%';
$pdf->MultiCell(105,5,$n10,0,'L');



$pdf->SetXY(135,75);
$pdf->Cell(20,120,'',1,1,'C');

$pdf->SetXY(155,75);
$pdf->Cell(15,120,'',1,1,'C');

$pdf->SetXY(170,75);
$pdf->Cell(20,120,'',1,1,'C');

$pdf->SetXY(20,195);
$pdf->Cell(115,5,'Total (INR)',1,1,'C');

$pdf->SetXY(135,195);
$total='37,375.00';
$pdf->Cell(55,5,$total,1,1,'R');

//footer
$pdf->SetFont('Arial','',9);
$pdf->SetXY(20,205);
$text = 'Rupees  Thirty Seven Thousand Three Hundred And Seventy Five only';
$pdf->Cell(100,5,$text,0,1,'L');

$pdf->SetFont('Arial','','8');
$pdf->SetXY(20,215);
$text2='Please make cheque in the name of Business News and Information Service Pvt Ltd.
	For bank transfer, please remit to HDFC Bank
	Current Account Number:00032000001943, IFSC:HDFC0000003
	Account Name:Business News and Information Services Pvt Ltd
	Service Tax Number:AAACB5323JST001 (Catagory: Online Information and Data)
	CIN: U74899DL1994PTC063154';
$pdf->MultiCell(150,3,$text2,0,'L');


$pdf->GetPageWidth();
$pdf->SetFont('Arial','B','8');
$pdf->SetXY(145,233);
$pdf->Cell(20,5,'Authorised Signatory',0,1,'L');




$pdf->Output();

?>
