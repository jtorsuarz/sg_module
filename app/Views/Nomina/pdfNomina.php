<?php

   require 'fpdf/fpdf/fpdf.php';

    ///////CREO EL PDF
    $pdf = new FPDF($orientation='P',$unit='mm');
    $pdf->AddPage();
    $pdf->SetFont('Arial','B',10);
    $textypos = 5;
    $pdf->setY(12);
    $pdf->setX(10); 

    //// DATOS DE LA EMPRESA (SERAN ESTATICOS)
    $pdf->SetFont('Arial','B',10);
    $pdf->setY(15);
    $pdf->setX(10);
    $pdf->Multicell(80,5,"IMF Smart Education\nC. de Bernardino Obregon, 25, 28012 Madrid\nTelefono: 913 64 51 57",1);
    $pdf ->Ln(5);

    $pathLogoIMF = 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fd/IMF_Smart_Education.png/800px-IMF_Smart_Education.png';

    $pdf->Image($pathLogoIMF,150,8,50);

    $pdf->SetFont('Arial','B',10);
    $pdf->setY(40);$pdf->setX(10);
    $pdf->Cell(40,$textypos,"TRABAJADOR: 000001",1);
    $pdf->setY(40);$pdf->setX(50);
    $pdf->Cell(28,$textypos,"Departamento",1);
    $pdf->setY(40);$pdf->setX(78);
    $pdf->Cell(38,$textypos,"Categoria Profesional",1);
    $pdf->setY(40);$pdf->setX(116);
    $pdf->Cell(33,$textypos,"Puesto de trabajo",1);
    $pdf->setY(40);$pdf->setX(149);
    $pdf->Cell(25,$textypos,"NUM.SS",1); 


    $pdf->SetFont('Arial','',8);
    $pdf->setY(45);$pdf->setX(10);
    $pdf->Cell(40,$textypos,"           Ruben Garcia",1);
    $pdf->setY(45);$pdf->setX(50);
    $pdf->Cell(28,$textypos,"RRHH",1);
    $pdf->setY(45);$pdf->setX(78);
    $pdf->Cell(38,$textypos,"Grupo 1",1);
    $pdf->setY(45);$pdf->setX(116);
    $pdf->Cell(33,$textypos,"Contrataciones",1);
    $pdf->setY(45);$pdf->setX(149);
    $pdf->Cell(25,$textypos,"01112730947",1); 

    $pdf->SetFont('Arial','B',10);
    $pdf->setY(50);$pdf->setX(10);
    $pdf->Cell(17,$textypos,"FEC ALT",1);
    $pdf->setY(50);$pdf->setX(27);
    $pdf->Cell(23,$textypos,"Antiguedad",1);
    $pdf->setY(50);$pdf->setX(50);
    $pdf->Cell(26,$textypos,"Grupo Cotizac",1);
    $pdf->setY(50);$pdf->setX(76);
    $pdf->Cell(15,$textypos,"%IRPF",1);
    $pdf->setY(50);$pdf->setX(91);
    $pdf->Cell(25,$textypos,"Ocupacion",1); 
    $pdf->setY(50);$pdf->setX(116);
    $pdf->Cell(15,$textypos,"Anyo",1); 
    $pdf->setY(50);$pdf->setX(131);
    $pdf->Cell(20,$textypos,"DNI",1);


    $pdf->SetFont('Arial','',8);
    $pdf->setY(55);$pdf->setX(10);
    $pdf->Cell(17,$textypos,"28/04/2022",1);
    $pdf->setY(55);$pdf->setX(27);
    $pdf->Cell(23,$textypos,"20/01/1999",1);
    $pdf->setY(55);$pdf->setX(50);
    $pdf->Cell(26,$textypos,"Grupo 1",1);
    $pdf->setY(55);$pdf->setX(76);
    $pdf->Cell(15,$textypos,"12,00",1);
    $pdf->setY(55);$pdf->setX(91);
    $pdf->Cell(25,$textypos,"A",1); 
    $pdf->setY(55);$pdf->setX(116);
    $pdf->Cell(15,$textypos,"202X",1); 
    $pdf->setY(55);$pdf->setX(131);
    $pdf->Cell(20,$textypos,"84654433E",1);


    $pdf->SetFont('Arial','',10);
    $pdf->setY(65);$pdf->setX(10);
    $pdf->Cell(17,$textypos,"CLAVE",1);
    $pdf->setY(65);$pdf->setX(27);
    $pdf->Cell(70,$textypos,"CONCEPTO",1);
    $pdf->setY(65);$pdf->setX(97);
    $pdf->Cell(26,$textypos,"CANTIDAD",1);
    $pdf->setY(65);$pdf->setX(123);
    $pdf->Cell(19,$textypos,"IMPORTE",1);
    $pdf->setY(65);$pdf->setX(142);
    $pdf->Cell(23,$textypos,"DEVENGOS",1); 
    $pdf->setY(65);$pdf->setX(165);
    $pdf->Cell(30,$textypos,"DEDUCCIONES",1); 


    $pdf->SetFont('Arial','',10);
    $pdf->setY(70);$pdf->setX(10);
    $pdf->Multicell(17,5,"1\n50001\n50002\n357777\n\n\n\n\n\n\n\n\n\n\n\n",1);
    $pdf ->Ln(5);

    $pdf->SetFont('Arial','',10);
    $pdf->setY(70);$pdf->setX(27);
    $pdf->Multicell(70,5,"Salario Base\nCuota Tarifada\nCuota Accidentes\nRetencion IRPF\n\n\n\n\n\n\n\n\n\n\n\n",1);
    $pdf ->Ln(5);

    $pdf->SetFont('Arial','',10);
    $pdf->setY(70);$pdf->setX(97);
    $pdf->Multicell(26,5,"30,00\n4,70%\n1,65%\n12%\n\n\n\n\n\n\n\n\n\n\n\n",1);
    $pdf ->Ln(5);

    $pdf->SetFont('Arial','',10);
    $pdf->setY(70);$pdf->setX(123);
    $pdf->Multicell(19,5,"50,00\n1750,00\n1750,00\n1500,00\n\n\n\n\n\n\n\n\n\n\n\n",1);
    $pdf ->Ln(5);

    $pdf->SetFont('Arial','',10);
    $pdf->setY(70);$pdf->setX(142);
    $pdf->Multicell(23,5,"1500,00\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n",1);
    $pdf ->Ln(5);

    $pdf->SetFont('Arial','',10);
    $pdf->setY(70);$pdf->setX(165);
    $pdf->Multicell(30,5,"\n82,25\n28,88\n180,00\n\n\n\n\n\n\n\n\n\n\n\n",1);
    $pdf ->Ln(5);

    $pdf->SetFont('Arial','',10);
    $pdf->setY(147);$pdf->setX(135);
    $pdf->Cell(17,$textypos,"Total");
    $pdf->setY(147);$pdf->setX(146);
    $pdf->Cell(20,$textypos,"1500,00",1);
    $pdf->setY(147);$pdf->setX(166);
    $pdf->Cell(20,$textypos,"191,13",1);



    $pdf->SetFont('Arial','B',10);
    $pdf->setY(170);$pdf->setX(75);
    $pdf->Cell(27,$textypos,"Remuneracion",1);
    $pdf->setY(170);$pdf->setX(102);
    $pdf->Cell(20,$textypos,"Prorrata",1);
    $pdf->setY(170);$pdf->setX(122);
    $pdf->Cell(17,$textypos,"IT",1);
    $pdf->setY(170);$pdf->setX(139);
    $pdf->Cell(17,$textypos,"Total",1);



    $pdf->SetFont('Arial','B',10);
    $pdf->setY(175);$pdf->setX(10);
    $pdf->Cell(65,$textypos,"Base Cotizacion Conti. Comunes",1);
    $pdf->setY(180);$pdf->setX(10);
    $pdf->Cell(65,$textypos,"Base Cotizacion Desempleo /FP/AT",1);

    $pdf->setY(175);$pdf->setX(75);
    $pdf->Cell(27,$textypos,"1500,00",1);
    $pdf->setY(175);$pdf->setX(102);
    $pdf->Cell(20,$textypos,"250,00",1);
    $pdf->setY(175);$pdf->setX(122);
    $pdf->Cell(17,$textypos,"0,00",1);
    $pdf->setY(175);$pdf->setX(139);
    $pdf->Cell(17,$textypos,"1750,50",1);


    $pdf->setY(180);$pdf->setX(75);
    $pdf->Cell(27,$textypos,"1500,00",1);
    $pdf->setY(180);$pdf->setX(102);
    $pdf->Cell(20,$textypos,"250,00",1);
    $pdf->setY(180);$pdf->setX(122);
    $pdf->Cell(17,$textypos,"0,00",1);
    $pdf->setY(180);$pdf->setX(139);
    $pdf->Cell(17,$textypos,"1750,50",1);


    $pdf->setY(170);$pdf->setX(160);
    $pdf->MultiCell(40,15,"Total a percibir\n1.208,87",1);


    $pdf ->Ln(20);



    $pdf->Ln(20);
        $pdf->SetFont('', 'IB', 10);
        $pdf->Cell(150 ,5,'Firma','B',0);
        $pdf->Ln('7');
  
   $pdf->output();
   exit;
?>