<?php
    $nb_rrhh=$_GET['nb_rrhh'];
    $empresa=$_GET['empresa'];
    $cargo=$_GET['cargo'];
    $fecha=$_GET['fecha'];

    $usuario_nb=$_GET['usuario_nb'];
    $usuario_email=$_GET['usuario_email'];
    $usuario_tfno=$_GET['usuario_tfno'];


    $error=false;
    $enviar=false;

    if (isset($_GET['nb_rrhh']) || isset($_GET['empresa']) || isset($_GET['cargo']) || isset($_GET['fecha']) || isset($_GET['usuario_nb']) || isset($_GET['usuario_email']) || isset($_GET['usuario_tfno'])) {
        if ($nb_rrhh == "" || $empresa == "" || $cargo == "" || $fecha == "" || $usuario_nb == "" || $usuario_email == "" || $usuario_tfno == "") {
            $error=true;
        } else {
        $enviar=true;
        }
    }

    ob_end_clean();
    require('fpdf184/fpdf.php');

    class PDF extends FPDF {
    function Header ()
        {
            global $usuario_nb;    
            global $usuario_email;
            global $usuario_tfno;
            global $nb_rrhh;
            global $cargo;
            global $empresa;
            global $fecha;

            //Añadimos las tipografias tras crearlas por comandos
            $this->AddFont('LiberationSerif', '', 'LiberationSerif-Regular.php');
            $this->AddFont('LiberationSerif-Bold', '', 'LiberationSerif-Bold.php');
            
            //Establecemos el nombre del usuario como titulo
            $this->SetFont('LiberationSerif-Bold','', 22);
            $ancho=$this->GetStringWidth($usuario_nb);
            $this->SetX((210-$ancho)/2);
            $this->Cell($ancho, 10, utf8_decode($usuario_nb), 'B', 'C');
            
            //Establecemos los datos del usuario
            $this->SetFont('LiberationSerif','',12);
            $ancho=$this->GetStringWidth($usuario_email ." - ". $usuario_tfno);
            $this->SetX((210-$ancho)/2);
            $this->Cell($ancho, 10, utf8_decode("$usuario_email - $usuario_tfno"), 0, 1, 'C');

            //Establecemos la cabecera de datos sobre el personal de RRHH
            $this->MultiCell(180,5, utf8_decode("$fecha"),0,'R');
            $this->SetX(20);
            $this->MultiCell(0,5, utf8_decode("$nb_rrhh"."\n$empresa"."\n$cargo\n\nEstimado/a $nb_rrhh,"),0,'L');
            
            $this->Ln(2);
        }

    function Footer()
        {
            $this->SetY(-15);
            $this->SetFont('LiberationSerif','', 9);
            $this->SetTextColor(128);
            $this->Cell(0,10, utf8_decode('Página '.$this->PageNo()),0,0,'C');
        }

    function ChapterBody($file)
        {
            global $usuario_nb;
            $txt = file_get_contents($file);
            $this->SetFont('LiberationSerif','',12);
            $this->SetX(20);
            $this->MultiCell(0,5,utf8_decode($txt));
            $this->Ln();
            $this->MultiCell(0,5, utf8_decode("Atentatemente, \n$usuario_nb."),0,'L');
        }

    function PrintChapter($file) {
        $this->ChapterBody($file);
    }

    }

    // Intanciamos el objeto pdf y establecemos los margenes
    $pdf = new PDF();

    $pdf->AddPage();    
    $pdf->SetMargins(20, 20, 20, 20);

    if ($enviar) {
        $pdf->PrintChapter('archivo.txt');
        $pdf->Output();
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8s">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilos_pdf.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Secular+One&family=Source+Sans+Pro:wght@400;700&family=Yeseva+One&display=swap" rel="stylesheet"> 
    <title>Carta de recomendación</title>
</head>
<body>
    <div class="contenedor">
        <h1>GENERA TU CARTA<br>DE RECOMENDACIÓN</h1>
        <form action="ejercicio_pdf.php">
            <h3>Datos del empleado</h3>
            <p>Nombre:<input type="text" name="usuario_nb" value="<?=$usuario_nb?>"></p>
            <p>Email:<input type="text" name="usuario_email" value="<?=$usuario_email?>"></p>
            <p>Teléfono:<input type="text" name="usuario_tfno" value="<?=$usuario_tfno?>"></p>

            <h3>Datos del empleador</h3>
            <p>Nombre:<input type="text" name="nb_rrhh" value="<?=$nb_rrhh?>"></p>
            <p>Empresa:<input type="text" name="empresa" value="<?=$empresa?>"></p>
            <p>Cargo:<input type="text" name="cargo" value="<?=$cargo?>"></p>
            <p>Fecha:<input type="date" name="fecha" value="<?=$fecha?>"></p>
            <input type="submit" value="Generar PDF!">
        </form>

        <?php if ($error) { ?>
            <h2>Rellena los campos</h2>
        <?php } ?>
    </div>
</body>
</html>