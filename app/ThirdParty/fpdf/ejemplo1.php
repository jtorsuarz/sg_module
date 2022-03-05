<?php
require('fpdf/fpdf.php');
require('bbdd.php');

class PDF extends FPDF
{
// Page header
    function Header()
    {

        // Arial bold 15
        $this->SetFont('Arial', 'B', 15);
        // Move to the right
        $this->Cell(60);
        // Title
        $this->Cell(70,10,utf8_decode('MIS ALUMNOS'),1,0,'C');
        // Line break
        $this->Ln(20);
    }


}

// Instanciation of inherited class
$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();
$pdf->SetFont('Times','',12);

$consulta = "SELECT * FROM alumnos";
$resultado = $mysqli->query($consulta);

while ($row = $resultado -> fetch_assoc()){

    $pdf -> Cell(10,10,$row['idalumno'], 1, 0 , 'C', 0);
    $pdf -> Cell(50,10,$row['nombre'], 1, 0 , 'C', 0);
    $pdf -> Cell(50,10,$row['apellidos'], 1, 1 , 'C', 0);

}

$pdf->Output();
?>