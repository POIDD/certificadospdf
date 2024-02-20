<?php

    require('../fpdf/fpdf.php');


    class PDF extends FPDF
    {
    // Cabecera de página
    function Header()
    {
        // Logo
        $this->Image('../img/logo-consejo-danes.jpg',152,8,33);
        $this->Image('../img/mapaDRC.jpg',68,8,78);

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
        $this->Ln(18);

        
    }

    // Pie de página
    
    }



    $pdf = new PDF();
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',9);
    $pdf->SetTextColor(170, 25, 31); // Establece el color del texto a rojo
    $pdf->SetX(73);
    $pdf->Cell(40,10,utf8_decode('ACTA DE ENTREGA DE DOTACIÓN'));
    $pdf->Ln(8);
    $pdf->SetTextColor(0);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(40,10,utf8_decode('Señor(a)'));
    $pdf->SetFont('Arial','B',10);
    $pdf->Ln(5);
    $pdf->Cell(40,10,utf8_decode('Verónica Tejada')); 
    $pdf->Ln(5);
    $pdf->Cell(40,10,utf8_decode('Ref.: Entrega de Visibilidad')); 
    $pdf->SetFont('Arial','',10);
    $pdf->Ln(6);
    $pdf->Cell(40,10,utf8_decode('El trabajador (a) manifiesta que recibió dotación por parte del empleador; esta es idónea para ejecutar las labores'));
    $pdf->Ln(5);
    $pdf->Cell(40,10,utf8_decode('contratadas conforme a lo indicado en el artículo 230 y siguientes del Código Sustantivo del Trabajo (CST), '));
    $pdf->Ln(5);
    $pdf->Cell(40,10,utf8_decode('correspondiente al año 2024 así:'));
    $pdf->SetFont('Arial','B',10);
    $pdf->Ln(10);
    $pdf->SetX(45);
    $pdf->Cell(20,10,utf8_decode('CODIGO'),1,0,'C',0);
    $pdf->Cell(55,10,utf8_decode('ARTICULO'),1,0,'C',0);
    $pdf->Cell(18,10,utf8_decode('TALLA'),1,0,'C',0);
    $pdf->Cell(23,5,utf8_decode('PERIODO'),1,0,'C',0);
    $pdf->Ln(5);
    $pdf->SetX(138);
    $pdf->Cell(23,5,utf8_decode('abr - 27'),1,0,'C',0);

    $pdf->SetFont('Arial','',10);
    $pdf->Ln(5);
    $pdf->SetX(45);
    $pdf->Cell(20,10,utf8_decode('P009'),1,0,'C',0);
    $pdf->Cell(55,10,utf8_decode('Pantalon tipo senderismo hombre '),1,0,'C',0);
    $pdf->Cell(18,10,utf8_decode('M'),1,0,'C',0);
    $pdf->Cell(23,10,utf8_decode('1'),1,0,'C',0);
    $pdf->Ln(5);

    //////////////////////////////////////////////////////////////////////////

    $pdf->SetFont('Arial','',10);
    $pdf->Ln(5);
    $pdf->SetX(45);
    $pdf->Cell(20,10,utf8_decode('P009'),1,0,'C',0);
    $pdf->Cell(55,10,utf8_decode('Pantalon tipo senderismo hombre '),1,0,'C',0);
    $pdf->Cell(18,10,utf8_decode('M'),1,0,'C',0);
    $pdf->Cell(23,10,utf8_decode('1'),1,0,'C',0);
    $pdf->Ln(5);

    $pdf->SetFont('Arial','',10);
    $pdf->Ln(5);
    $pdf->SetX(45);
    $pdf->Cell(20,10,utf8_decode('P009'),1,0,'C',0);
    $pdf->Cell(55,10,utf8_decode('Pantalon tipo senderismo hombre '),1,0,'C',0);
    $pdf->Cell(18,10,utf8_decode('M'),1,0,'C',0);
    $pdf->Cell(23,10,utf8_decode('1'),1,0,'C',0);
    $pdf->Ln(5);

    $pdf->SetFont('Arial','',10);
    $pdf->Ln(5);
    $pdf->SetX(45);
    $pdf->Cell(20,10,utf8_decode('P009'),1,0,'C',0);
    $pdf->Cell(55,10,utf8_decode('Pantalon tipo senderismo hombre '),1,0,'C',0);
    $pdf->Cell(18,10,utf8_decode('M'),1,0,'C',0);
    $pdf->Cell(23,10,utf8_decode('1'),1,0,'C',0);
    $pdf->Ln(5);

    $pdf->SetFont('Arial','',10);
    $pdf->Ln(5);
    $pdf->SetX(45);
    $pdf->Cell(20,10,utf8_decode('P009'),1,0,'C',0);
    $pdf->Cell(55,10,utf8_decode('Pantalon tipo senderismo hombre '),1,0,'C',0);
    $pdf->Cell(18,10,utf8_decode('M'),1,0,'C',0);
    $pdf->Cell(23,10,utf8_decode('1'),1,0,'C',0);
    $pdf->Ln(5);

    $pdf->SetFont('Arial','',10);
    $pdf->Ln(5);
    $pdf->SetX(45);
    $pdf->Cell(20,10,utf8_decode('P009'),1,0,'C',0);
    $pdf->Cell(55,10,utf8_decode('Pantalon tipo senderismo hombre '),1,0,'C',0);
    $pdf->Cell(18,10,utf8_decode('M'),1,0,'C',0);
    $pdf->Cell(23,10,utf8_decode('1'),1,0,'C',0);
    $pdf->Ln(5);

    $pdf->SetFont('Arial','',10);
    $pdf->Ln(5);
    $pdf->SetX(45);
    $pdf->Cell(20,10,utf8_decode('P009'),1,0,'C',0);
    $pdf->Cell(55,10,utf8_decode('Pantalon tipo senderismo hombre '),1,0,'C',0);
    $pdf->Cell(18,10,utf8_decode('M'),1,0,'C',0);
    $pdf->Cell(23,10,utf8_decode('1'),1,0,'C',0);
    $pdf->Ln(5);

    $pdf->SetFont('Arial','',10);
    $pdf->Ln(5);
    $pdf->SetX(45);
    $pdf->Cell(20,10,utf8_decode('P009'),1,0,'C',0);
    $pdf->Cell(55,10,utf8_decode('Pantalon tipo senderismo hombre '),1,0,'C',0);
    $pdf->Cell(18,10,utf8_decode('M'),1,0,'C',0);
    $pdf->Cell(23,10,utf8_decode('1'),1,0,'C',0);
    $pdf->Ln(5);

    ///////////////////////////////////////////////////

    $pdf->SetFont('Arial','B',10);
    $pdf->Ln(10);
    $pdf->Cell(20,10,utf8_decode('NOTA: No se hace entrega de dinero.'),0,0,'L',0); 
    $pdf->Ln(6);
    $pdf->SetFont('Arial','',10);
    $pdf->Cell(20,10,utf8_decode('El trabajador entiende y acepta, que las prendas entregadas que posean visibilidad (logos y distintivos) de la '),0,0,'L',0); 
    $pdf->Ln(5);
    $pdf->Cell(20,10,utf8_decode('Organización, deberán ser devueltos a esta en el momento en que el trabajador se retire, o se decida que deba ser'),0,0,'L',0); 
    $pdf->Ln(5);
    $pdf->Cell(20,10,utf8_decode('devuelta, sin que esto se considere vulneración de la prestación social.'),0,0,'L',0); 
    $pdf->Ln(8);
    $pdf->Cell(20,10,utf8_decode('De la misma forma, entiende y acepta que las prendas que posean visibilidad fueron entregadas para el desarrollo de sus '),0,0,'L',0); 
    $pdf->Ln(5);
    $pdf->Cell(20,10,utf8_decode('funciones, y con esto la organización cumple con la exigencia legal del artículo señalado. '),0,0,'L',0); 
    $pdf->Ln(8);
    $pdf->Cell(20,10,utf8_decode('En señal de aceptación y manifestación de recibir de conformidad, conforme a los parámetros legales establecidos, el'),0,0,'L',0); 
    $pdf->Ln(5);
    $pdf->Cell(20,10,utf8_decode('trabajador(a) firma el presente comprobante de entrega de dotación.'),0,0,'L',0); 
    $pdf->Ln(12);

    $pdf->SetY(252);
    $pdf->Cell(20,10,utf8_decode('FIRMA DE LA TRABAJADORA:'),0,0,'L',0); 
    $pdf->SetX(110);
    $pdf->Cell(20,10,utf8_decode('FIRMA DEL EMPLEADOR:'),0,0,'L',0); 
    $pdf->Ln(5);
    $pdf->Cell(20,10,utf8_decode('TIPO Y DOCUMENTO No. :'),0,0,'L',0); 
    $pdf->SetX(110);
    $pdf->Cell(20,10,utf8_decode('TIPO Y DOCUMENTO No. :'),0,0,'L',0); 
    $pdf->Ln(5);
    $pdf->Cell(20,10,utf8_decode('CARGO:'),0,0,'L',0); 
    $pdf->SetX(110);
    $pdf->Cell(20,10,utf8_decode('CARGO:'),0,0,'L',0); 

    $pdf->Ln(5);
    $pdf->SetX(130);
    $pdf->Ln(5);
    $pdf->SetX(130);

    $pdf->Output();


?>