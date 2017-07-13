<?php

//for single file include
/* require('wordwraplib/wordwrap/*.php'); */

//for all files include with extention .php
foreach (glob("fpdflib/fpdf181/*.php") as $filename)
{
	
	require $filename;
}
//for print hello world on the screen

$pdf = new FPDF();
$pdf->AddPage();
$pdf->Image('Image/logo.png',10,10);
$pdf->SetFont('Arial','B',12);
//SetTextColor(int r [, int g, int b])
$pdf->SetTextColor('300',200,200);
$pdf->SetXY(50,35);
/* $pdf->drawTextBox('This sentence is centered in the middle of the box.', 50, 50); */
$pdf->MultiCell(50,5,'This sentence is centered in the middle of the box.',1,'L');
$address = '
	Address Line 1
	Address Line 2
	City
	Email ___________
	Postcode';
$pdf->MultiCell(60,5, $address,0,'R,L');
$pdf->Ln(1);
$version = '
    Version 
    1.0
    06/05/2011';
$pdf->MultiCell(60,5,$version,'0','L');
$pdf->Output();



/* class PDF extends FPDF
{
function WordWrap(&$text, $maxwidth)
{
    $text = trim($text);
    if ($text==='')
        return 0;
    $space = $this->GetStringWidth(' ');
    $lines = explode("\n", $text);
    $text = '';
    $count = 0;

    foreach ($lines as $line)
    {
        $words = preg_split('/ +/', $line);
        $width = 0;

        foreach ($words as $word)
        {
            $wordwidth = $this->GetStringWidth($word);
            if ($wordwidth > $maxwidth)
            {
                // Word is too long, we cut it
                for($i=0; $i<strlen($word); $i++)
                {
                    $wordwidth = $this->GetStringWidth(substr($word, $i, 1));
                    if($width + $wordwidth <= $maxwidth)
                    {
                        $width += $wordwidth;
                        $text .= substr($word, $i, 1);
                    }
                    else
                    {
                        $width = $wordwidth;
                        $text = rtrim($text)."\n".substr($word, $i, 1);
                        $count++;
                    }
                }
            }
            elseif($width + $wordwidth <= $maxwidth)
            {
                $width += $wordwidth + $space;
                $text .= $word.' ';
            }
            else
            {
                $width = $wordwidth + $space;
                $text = rtrim($text)."\n".$word.' ';
                $count++;
            }
        }
        $text = rtrim($text)."\n";
        $count++;
    }
    $text = rtrim($text);
    return $count;
}
}
 */



?>