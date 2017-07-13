<?php

//for single file include
/* require('fpdflib/fpdf181/fpdf.php'); */

//for all files include with extention .php
foreach (glob("fpdflib/fpdf181/*.php") as $filename)
{
	
	require $filename;
}

$pdf = new FPDF(); 
//Page size Letter
$pdf->AddPage("P", "Letter");
//Image file
$pdf->Image('Image/logo-ministry.jpg',10,10,-450,'www.plus2net.com');
//Headline
$pdf->SetFont('Arial','B',9);
$pdf->SetXY(40,10);
$text1='Indian Express, Delhi';
$pdf->Cell(40,5,$text1,0,1,'L');

$pdf->SetFont('Arial','B',8);
$pdf->SetXY(40,14);
$date='Wed, 12 Jul 2017, Page 14';
$pdf->Cell(40,5,$date,0,1,'L');

$pdf->SetFont('Arial','B',6);
$pdf->SetXY(40,18);
$textsize='Width:33.70 cms, Height:44.43 cms, a3, Ref:22.2017-02-16.106';
$pdf->Cell(40,5,$textsize,0,1,'L');

$pdf->SetFont('Arial','B',25);
$pdf->SetXY(35,30);
$headline='MALABAR SIGNALS';
$pdf->Cell(60,5,$headline,0,1,'L');

$pdf->SetFont('Arial','B',11);
$pdf->SetXY(35,42);
$subheadline='Ministry of Foreign Affairs and International Cooperation issues guideline on use of UAE foreign aid logo';
$pdf->MultiCell(150,5,$subheadline,0,'L');

$pdf->SetFont('Arial','B',9);
$pdf->SetXY(20,60);
$text2='The Ministry of Foreign Affairs and International Cooperation, has issued the guidelines on the use of visible identity of the UAE foreign aid logo, including the UAE flag and the phrase, "UAE AID," in both Arabic and English.This will be the brand for the UAE foreign aid that should be presented through UAE donors and humanitarian associations.The "Dubai Font" was used as the official font of the UAE foreign aid logo, in both Arabic and English, in all its applications, whether related to printing or e-publishing.Reem bint Ibrahim Al Hashemi, Minister of State for International Cooperation, said, "Issuing the guide on the use of the UAE foreign aid logo aims to provide clear guidelines about the use and promotion of the logo and the identity of UAE foreign aid."She also spoke about the meaning of the logo and its promotional phrases while highlighting that the logo, which was designed under the supervision of the ministry "represents many values that the UAE is keen to promote, such as heritage, culture, generosity, transparency and love for the nation."The UAE minister added that the design of the UAE aid logo also represents the development and creativity of the UAE in all areas of work, including humanitarian action. This requires a clear identity to express the values of the UAE derived from Arab and Islamic values, to confirm that UAE aid carries the values of compassion and humanity established by the late Sheikh Zayed bin Sultan Al Nahyan, she added.';
$pdf->MultiCell(180,5,$text2,0,'L');

$pdf->Output();

?>
