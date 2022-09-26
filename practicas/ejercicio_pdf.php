<?php
    $nombre="";
    $empresa="";
    $representante="";
    $fecha="";
    $error=false;
    ob_end_clean();
    require('fpdf184/fpdf.php');


    class PDF extends FPDF
    {
    // Page header
    function Header()
        {
            $this->AddFont('LiberationSerif', '', 'LiberationSerif-Regular.php');
            $this->AddFont('LiberationSerif-Bold', '', 'LiberationSerif-Bold.php');
            $this->SetFont('LiberationSerif-Bold','', 22);
            $this->Cell(190,10,'Carta de Recomendacion', 0, 0, 'C');
            $this->Ln(10);
        }

    function Footer()
        {
            $this->SetY(-15);
            $this->SetFont('LiberationSerif','', 9);
            $this->SetTextColor(128);
            $this->Cell(0,10,'Pagina '.$this->PageNo(),0,0,'C');
        }

    function ChapterBody($file)
        {
            // Read text file
            $txt = file_get_contents($file);
            // Times 12
            $this->SetFont('LiberationSerif','',12);
            // Output justified text
            $this->MultiCell(0,5,$txt);
            // Line break
            $this->Ln();
        }

    function PrintChapter($file) {
        $this->ChapterBody($file);
    }

    }

    

    // Instantiate and use the FPDF class
    $pdf = new PDF();
    

    $pdf->AddPage();    
    $pdf->SetFont('LiberationSerif', '', 18);
    $pdf->Ln();
    $pdf->PrintChapter('archivo.txt');
    

    if (isset($_GET['nb']) ) {
        $nombre=$_GET['nb'];
        $empresa=$_GET['emp'];
        $presentate=$_GET['presentate'];
        $fecha=$_GET['fecha'];
        $pdf->Multicell(100,10, "Estimado/a $nombre," ."\n$empresa" . "\n$presentate". $fecha);
        
    } else {
        $error=true;
    }
    
    if ($nombre!="") {$pdf->Output();}
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
        <p>Nombre: <input type="text" name="nb" value="<?=$nombre?>"></p>
        <p>Empresa: <input type="text" name="emp" value="<?=$empresa?>"></p>
        <p>Presentate: <input type="text" name="presentate" value="<?=$presentate?>"></p>
        <p>Fecha: <input type="date" name="fecha" value="<?=$fecha?>"></p>
        <input type="submit" value="Generar PDF!">

    </form>
</body>
</html>