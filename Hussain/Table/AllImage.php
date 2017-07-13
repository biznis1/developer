
<?php

//for single file include
require('fpdflib/fpdf181/fpdf.php'); 
$pdf = new FPDF();
$a=scandir('AllImage/',1); 
//print_r(count($a));
for($i=1;$i<=(count($a)-2);$i++)
{
$pdf->AddPage();
$pdf->Image('AllImage/'.$i.'.jpg',5,10,-200,'www.plus2net.com');
}
$pdf->Output();

?>
