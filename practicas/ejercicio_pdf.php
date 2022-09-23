<?php
    $nombre="";
    $empresa="";
    $representante="";
    $fecha="";
    ob_end_clean();
    require('fpdf184/fpdf.php');
    
    // Instantiate and use the FPDF class 
    $pdf = new FPDF();
    
    //Add a new page
    $pdf->AddPage();
    
    // Set the font for the text
    $pdf->SetFont('Arial', 'B', 18);
    
    // Prints a cell with given text 
    

    if (isset($_GET['caca'])) {
        $nombre='Anabel';
        $pdf->Cell(60,20, $nombre . $empresa . $representante . $fecha);
        $pdf->Output();
    }
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8s">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carta de recomendación</title>
</head>
<body>
    <h1>Genera tu carta de recomendación</h1>
    <form action="ejercicio_pdf.php">
        <p>Nombre: <input type="text" name="caca" value="<?=$nombre?>"></p>
        <p>Empresa: <input type="text" value="<?=$empresa?>"></p>
        <p>Representante: <input type="text" value="<?=$representante?>"></p>
        <p>Fecha: <input type="date" value="<?=$fecha?>"></p>
        <input type="submit" value="Generar PDF!">
    </form>
</body>
</html>