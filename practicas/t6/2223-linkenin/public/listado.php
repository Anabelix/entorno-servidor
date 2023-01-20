<?php
require("../src/init.php");

$pageHeader = 'Listado';
$pageId = 'listado';
$content = 'este ese el contenido';


$db->ejecuta('SELECT * FROM usuarios');
$consulta = $db->obtenDatos();

ob_start();
?>
<table>
    <tr>
        <td>Nombre</td>
        <td>Foto</td>
    </tr>
    <?php foreach ($consulta as $usuario) { ?>
        <tr>
            <td><?=$usuario['nombre']?></td>
            <td><img src="<?=$usuario['img']?>"></td>
        </tr>
    <?php } ?>
</table>

<?php
$content = ob_get_clean();
require('template.php');