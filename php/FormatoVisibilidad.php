<?php

    require('../fpdf/fpdf.php');


    class PDF extends FPDF
    {
    // Cabecera de página
    function Header()
    {
        // Logo
        $this->Image('../img/logo-consejo-danes.jpg',152,8,33);
        $this->Image('../img/mapaDRC.jpg',65,8,80);

        // Arial bold 15
        $this->SetFont('Arial','B',7);
        $this->Ln(9);
        // Movernos a la derecha
        $this->Cell(69);
        $this->Cell(60,6,utf8_decode('Consejo Dánes para Refugiados'),0,0,'L');
        $this->SetFont('Arial','B',9);
        $this->Ln(2);
        $this->Cell(69,6,'San Jose del Fragua, 17 enero. de 2024',0,0,'L');
        $this->SetFont('Arial','',7);
        $this->Cell(90,10,utf8_decode('Calle 70 A #7-95'),0,0,'L');
        $this->Ln(4);
        $this->Cell(69);
        $this->Cell(90,10,utf8_decode('110231, Bogotá'),0,0,'L');
        $this->Ln(4);
        $this->Cell(69);
        $this->Cell(90,10,utf8_decode('Colombia'),0,0,'L');
        $this->Ln(8);

        
    }

    // Pie de página
    function Footer()
    {
        // Posición: a 1,5 cm del final
        $this->SetY(-15);
        // Arial italic 8
        $this->SetFont('Arial','I',8);
        // Número de página
        $this->Cell(0,10,utf8_decode('Página').$this->PageNo().'/{nb}',0,0,'C');
    }
    }



    $pdf = new PDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',16);
    $pdf->Cell(40,10,utf8_decode('¡Hola, drc!'));
    $pdf->Output();


?>