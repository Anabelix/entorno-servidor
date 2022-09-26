<?php
    $nombre="";
    $empresa="";
    $cargo="";
    $fecha="";
    $error=false;
    ob_end_clean();
    require('fpdf184/fpdf.php');

    class PDF extends FPDF {
    // Page header
    function Header()
        {
            global $titulo;
            $titulo="Carta de Recomendación";
            $this->AddFont('LiberationSerif', '', 'LiberationSerif-Regular.php');
            $this->AddFont('LiberationSerif-Bold', '', 'LiberationSerif-Bold.php');
            $this->SetFont('LiberationSerif-Bold','', 22);
            $ancho=$this->GetStringWidth($titulo);
            $this->SetX((210-$ancho)/2);
            $this->Cell($ancho, 10, utf8_decode($titulo), 'B', 'C');
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
            $txt = file_get_contents($file);
            $this->SetFont('LiberationSerif','',12);
            $this->MultiCell(0,5,$txt);
            $this->Ln();
        }

    function PrintChapter($file) {
        $this->ChapterBody($file);
    }

    }

    // Instantiate and use the FPDF class
    $pdf = new PDF();

    $pdf->AddPage();    
    $pdf->SetFont('LiberationSerif', '', 12);
    $pdf->Ln();
    $pdf->SetMargins(20, 20, 20, 20);

    if (isset($_GET['nb']) ) {
        $nombre=$_GET['nb'];
        $empresa=$_GET['emp'];
        $cargo=$_GET['cg'];
        $fecha=$_GET['fecha'];
        $pdf->Multicell(180,5, "$fecha", 0 ,'R');
        $pdf->Multicell(100,5, "$nombre" ."\n$empresa" ."\n$cargo");
        $pdf->Multicell(100,15, "Estimado/a $nombre,");
        $pdf->PrintChapter('archivo.txt');
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
        <p>Cargo: <input type="text" name="cg" value="<?=$cargo?>"></p>
        <p>Fecha: <input type="date" name="fecha" value="<?=$fecha?>"></p>
        <input type="submit" value="Generar PDF!">

    </form>
</body>
</html>