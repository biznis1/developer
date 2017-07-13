<?php

//for single file include
/* require('fpdflib/fpdf181/fpdf.php'); */

//for all files include with extention .php
foreach (glob("fpdflib/fpdf181/*.php") as $filename)
{
	
	require $filename;
}

$pdf = new FPDF();
//First page
$pdf->AddPage();
//container
$pdf->SetFont('Arial','B',14);
$pdf->SetXY(75,50);
$text1 = 'Monady, 10th July 2017';
$pdf->MultiCell(70,5,$text1,0,'L');

$pdf->SetFont('Arial','B',16);
$pdf->SetXY(75,65);
$text2 = 'PRESS MONITOR SERVICE';
$pdf->MultiCell(100,5,$text2,0,'L');

$pdf->SetFont('Arial','B',22);
$pdf->SetXY(75,75);
$text3 = 'Hospitality';
$pdf->MultiCell(100,5,$text3,0,'L');

$pdf->SetFont('Arial','B',12);
$pdf->SetXY(75,85);
$pdf->Cell(75,95,'Aggregated For',0,1,'L');

$pdf->SetFont('Arial','',12);
$pdf->SetXY(75,160);
$address = 'Blue Coast Hotels Limited
	415-417,Antriksh Bhawan
	4th Floor, 22, Kasturba Gandhi Magre
	New Delhi 110001';
$pdf->MultiCell(100,5,$address,0,'L');

$pdf->SetFont('Arial','B',9);
$pdf->SetXY(75,180);
$pdf->Cell(30,95,'Subject:',0,1,'L');
$pdf->SetXY(88,225);
$textcode = 'Z401';
$pdf->MultiCell(30,5,$textcode,0,'L');

//Second Page
$pdf->AddPage();
//container
$pdf->SetFont('Arial','B',14);
$pdf->SetXY(75,50);
$text1 = 'Monady, 10th July 2017';
$pdf->MultiCell(70,5,$text1,0,'L');

$pdf->SetFont('Arial','B',16);
$pdf->SetXY(75,65);
$text2 = 'PRESS MONITOR SERVICE';
$pdf->MultiCell(100,5,$text2,0,'L');

$pdf->SetFont('Arial','B',22);
$pdf->SetXY(75,75);
$text3 = 'Trade Fair';
$pdf->MultiCell(100,5,$text3,0,'L');

$pdf->SetFont('Arial','B',12);
$pdf->SetXY(75,85);
$pdf->Cell(75,95,'Aggregated For',0,1,'L');

$pdf->SetFont('Arial','',12);
$pdf->SetXY(75,160);
$address = 'Mr. Surjeet Singh
	Sr Manager-Sales
	R E Rogers India Pvt Ltd
	1, Local Shopping Centre,
	Pocket H & U, Sarita Vihar
	New Delhi-110044';
$pdf->MultiCell(100,5,$address,0,'L');

$pdf->SetFont('Arial','B',9);
$pdf->SetXY(75,180);
$pdf->Cell(30,95,'Subject:',0,1,'L');
$pdf->SetXY(88,225);
$textcode = 'Z3051';
$pdf->MultiCell(30,5,$textcode,0,'L');

//Third Page
$pdf->AddPage();
//container
$pdf->SetFont('Arial','B',14);
$pdf->SetXY(75,50);
$text1 = 'Monady, 10th July 2017';
$pdf->MultiCell(70,5,$text1,0,'L');

$pdf->SetFont('Arial','B',16);
$pdf->SetXY(75,65);
$text2 = 'PRESS MONITOR SERVICE';
$pdf->MultiCell(100,5,$text2,0,'L');

$pdf->SetFont('Arial','B',22);
$pdf->SetXY(75,75);
$text3 = 'Telecommunication';
$pdf->MultiCell(100,5,$text3,0,'L');

$pdf->SetFont('Arial','B',12);
$pdf->SetXY(75,85);
$pdf->Cell(75,95,'Aggregated For',0,1,'L');

$pdf->SetFont('Arial','',12);
$pdf->SetXY(75,160);
$address = 'Mr. Mehendra Nahata
	HFCL - Wireless Division
	8, Masjid Moth
	Greater Kailash, Part II
	New Delhi';
$pdf->MultiCell(100,5,$address,0,'L');

$pdf->SetFont('Arial','B',9);
$pdf->SetXY(75,180);
$pdf->Cell(30,95,'Subject:',0,1,'L');
$pdf->SetXY(88,225);
$textcode = 'Z46';
$pdf->MultiCell(30,5,$textcode,0,'L');

//Fourth Page
$pdf->AddPage();
//container
$pdf->SetFont('Arial','B',14);
$pdf->SetXY(75,50);
$text1 = 'Monady, 10th July 2017';
$pdf->MultiCell(70,5,$text1,0,'L');

$pdf->SetFont('Arial','B',16);
$pdf->SetXY(75,65);
$text2 = 'PRESS MONITOR SERVICE';
$pdf->MultiCell(100,5,$text2,0,'L');

$pdf->SetFont('Arial','B',22);
$pdf->SetXY(75,75);
$text3 = 'Defence';
$pdf->MultiCell(100,5,$text3,0,'L');

$pdf->SetFont('Arial','B',12);
$pdf->SetXY(75,85);
$pdf->Cell(75,95,'Aggregated For',0,1,'L');

$pdf->SetFont('Arial','',12);
$pdf->SetXY(75,160);
$address = 'Mr. Surjeet Singh
	Sr Manger - Sales
	R E Rogers India Pvt Ltd
	1, Local Shopping Centre,
	Pocket H & J, Sarita Vihar
	New Delhi-110044';
$pdf->MultiCell(100,5,$address,0,'L');

$pdf->SetFont('Arial','B',9);
$pdf->SetXY(75,180);
$pdf->Cell(30,95,'Subject:',0,1,'L');
$pdf->SetXY(88,225);
$textcode = 'Z51';
$pdf->MultiCell(30,5,$textcode,0,'L');



//fifth Page
$pdf->AddPage();
//container
$pdf->SetFont('Arial','B',14);
$pdf->SetXY(75,50);
$text1 = 'Monady, 10th July 2017';
$pdf->MultiCell(70,5,$text1,0,'L');

$pdf->SetFont('Arial','B',16);
$pdf->SetXY(75,65);
$text2 = 'PRESS MONITOR SERVICE';
$pdf->MultiCell(100,5,$text2,0,'L');

$pdf->SetFont('Arial','B',22);
$pdf->SetXY(75,75);
$text3 = 'Oil & Natural Gas';
$pdf->MultiCell(100,5,$text3,0,'L');

$pdf->SetFont('Arial','B',12);
$pdf->SetXY(75,85);
$pdf->Cell(75,95,'Aggregated For',0,1,'L');

$pdf->SetFont('Arial','',12);
$pdf->SetXY(75,160);
$address = 'Mr. K. Rajeshwara Rao
	Petroleum and Natural Gas Regulatory Board
	1st Floor
	World Trade Centre, Babar Road
	New Delhi - 110001 (India)';
$pdf->MultiCell(100,5,$address,0,'L');

$pdf->SetFont('Arial','B',9);
$pdf->SetXY(75,180);
$pdf->Cell(30,95,'Subject:',0,1,'L');
$pdf->SetXY(88,225);
$textcode = 'Z34';
$pdf->MultiCell(30,5,$textcode,0,'L');

//Sixth Page
$pdf->AddPage();
//container
$pdf->SetFont('Arial','B',14);
$pdf->SetXY(75,50);
$text1 = 'Monady, 10th July 2017';
$pdf->MultiCell(70,5,$text1,0,'L');

$pdf->SetFont('Arial','B',16);
$pdf->SetXY(75,65);
$text2 = 'PRESS MONITOR SERVICE';
$pdf->MultiCell(100,5,$text2,0,'L');

$pdf->SetFont('Arial','B',22);
$pdf->SetXY(75,75);
$text3 = 'Hospitality';
$pdf->MultiCell(100,5,$text3,0,'L');

$pdf->SetFont('Arial','B',12);
$pdf->SetXY(75,85);
$pdf->Cell(75,95,'Aggregated For',0,1,'L');

$pdf->SetFont('Arial','',12);
$pdf->SetXY(75,160);
$address = 'Ms. Lakshmy
	2nd floor
	E - 5, Commercial Complex,
	Masjid Moth,
	Greater Kailash Part II
	New Delhi - 110048';
$pdf->MultiCell(100,5,$address,0,'L');

$pdf->SetFont('Arial','B',9);
$pdf->SetXY(75,180);
$pdf->Cell(30,95,'Subject:',0,1,'L');
$pdf->SetXY(88,225);
$textcode = 'Z401';
$pdf->MultiCell(30,5,$textcode,0,'L');

//Seventh Page
$pdf->AddPage();
//container
$pdf->SetFont('Arial','B',14);
$pdf->SetXY(75,50);
$text1 = 'Monady, 10th July 2017';
$pdf->MultiCell(70,5,$text1,0,'L');

$pdf->SetFont('Arial','B',16);
$pdf->SetXY(75,65);
$text2 = 'PRESS MONITOR SERVICE';
$pdf->MultiCell(100,5,$text2,0,'L');

$pdf->SetFont('Arial','B',22);
$pdf->SetXY(75,75);
$text3 = 'Alcoholic Beverages';
$pdf->MultiCell(100,5,$text3,0,'L');

$pdf->SetFont('Arial','B',12);
$pdf->SetXY(75,85);
$pdf->Cell(75,95,'Aggregated For',0,1,'L');

$pdf->SetFont('Arial','',12);
$pdf->SetXY(75,160);
$address = 'CIABC
	Flat No - 88 (Letter box)
	Gulmohar Enclave, DDA Flats
	New Delhi - 9818816415';
$pdf->MultiCell(100,5,$address,0,'L');

$pdf->SetFont('Arial','B',9);
$pdf->SetXY(75,180);
$pdf->Cell(30,95,'Subject:',0,1,'L');
$pdf->SetXY(88,225);
$textcode = 'Z64';
$pdf->MultiCell(30,5,$textcode,0,'L');

//Eighth Page
$pdf->AddPage();
//container
$pdf->SetFont('Arial','B',14);
$pdf->SetXY(75,50);
$text1 = 'Monady, 10th July 2017';
$pdf->MultiCell(70,5,$text1,0,'L');

$pdf->SetFont('Arial','B',16);
$pdf->SetXY(75,65);
$text2 = 'PRESS MONITOR SERVICE';
$pdf->MultiCell(100,5,$text2,0,'L');

$pdf->SetFont('Arial','B',22);
$pdf->SetXY(75,75);
$text3 = 'Telecommunication';
$pdf->MultiCell(100,5,$text3,0,'L');

$pdf->SetFont('Arial','B',12);
$pdf->SetXY(75,85);
$pdf->Cell(75,95,'Aggregated For',0,1,'L');

$pdf->SetFont('Arial','',12);
$pdf->SetXY(75,160);
$address = 'Mr. P.K. Purwar (CMD)
	Mahanagar Telephone Nigam Ltd
	Cbin No 5209, 5th Floor,
	Mahanagar Doorsanchar Sadan,
	9, CGO Complex, Lodhi Road.
	New Delhi - 110003.';
$pdf->MultiCell(100,5,$address,0,'L');

$pdf->SetFont('Arial','B',9);
$pdf->SetXY(75,180);
$pdf->Cell(30,95,'Subject:',0,1,'L');
$pdf->SetXY(88,225);
$textcode = 'Z46';
$pdf->MultiCell(30,5,$textcode,0,'L');

//Ninth Page
$pdf->AddPage();
//container
$pdf->SetFont('Arial','B',14);
$pdf->SetXY(75,50);
$text1 = 'Monady, 10th July 2017';
$pdf->MultiCell(70,5,$text1,0,'L');

$pdf->SetFont('Arial','B',16);
$pdf->SetXY(75,65);
$text2 = 'PRESS MONITOR SERVICE';
$pdf->MultiCell(100,5,$text2,0,'L');

$pdf->SetFont('Arial','B',22);
$pdf->SetXY(75,75);
$text3 = 'Oil and Natural Gas';
$pdf->MultiCell(100,5,$text3,0,'L');

$pdf->SetFont('Arial','B',12);
$pdf->SetXY(75,85);
$pdf->Cell(75,95,'Aggregated For',0,1,'L');

$pdf->SetFont('Arial','',12);
$pdf->SetXY(75,160);
$address = 'Sh Prabhat Singh,
	22, Surya Niketan,
	Opposite Anand Vihar Main Gate,
	New Delhi 110092';
$pdf->MultiCell(100,5,$address,0,'L');

$pdf->SetFont('Arial','B',9);
$pdf->SetXY(75,180);
$pdf->Cell(30,95,'Subject:',0,1,'L');
$pdf->SetXY(88,225);
$textcode = 'Z34';
$pdf->MultiCell(30,5,$textcode,0,'L');

$pdf->Output();

?>
