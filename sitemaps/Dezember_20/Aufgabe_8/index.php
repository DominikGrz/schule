<?php 
    require('fpdf.php');

    $pdf = new FPDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial');
    $pdf->SetFontSize(17);
    $pdf->Cell(100, 50, 'Dominik Grzesik');
    $pdf->Output();
?>