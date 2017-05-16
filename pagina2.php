<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
<link type="text/css" rel="stylesheet" href="estilos/css.css"/>
<title>Ficha</title>
<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
<script type="text/javascript">
$(document).ready(function() {
    $("h1").click(function() {
        var h1 = $("h1");
        h1.animate({left: '500px'}, "slow");
        h1.animate({fontSize: '50px'}, "slow");
        h1.animate({fontSize: '20px'}, "slow");
    });
});
</script>
</head>
<body  style="background-color:green;">
    <div id="cabecera"><p></p></div>
<?php $fecha = date("<p>d-m-Y</p>");?>
<h2>#MyAgenda #es <?php echo "<p> $fecha </p>"; ?></h2> 
</br>
<div id="div5">
<form action="agenda.php" method="post" class="desconectar">
    <input type="hidden" name="action" value="desconectar" class="desconectar"/>
    <input type="submit" value="Cerrar sesion" class="desconectar"/>
</form>
</div>
<p>Datos.</p> 
<div id="div3">
<p>Ficha</p>
<form action="pagina2.php" method="post" enctype="multipart/form-data" class="insertar_bd">
    <p>Lugar</p>
    <p><input type="text" name="lugar" placeholder="El lugar"/></p>
    <p>Anotaciones</p>
    <p><textarea type="text" name="anotaciones" placeholder="Tus anotaciones"/>
    </textarea></p>
    <input type="submit" value="alta_ficha" name="alta_ficha" placeholder="Enter" class="listar" />
</form>
<p></p>
<form action="controlador/controlador.php" method="POST" enctype="multipart/form-data" class="modificar_usuario">
    </br></br>
    <p>Modificar datos usuario</p>
    <p></p>
    <p>Dirección</p>
    <p><input type="text" name="direccion" placeholder="Tu direccion" maxlength="80"/></p>
    <input type="submit" value="Cambia tu dirección"/>
    <p>Foto</p>
    <p><input name="imagen" type="file" size="35" /></p>
    <input type="hidden" name="action" value="modificar_usuario"/>
    <input type="submit" name="action" value="Sube tu foto"/>
</form> 
</div>
<div id="div4">
<div id="div6"><img src="../imagenes/<?= $_SESSION["usuarios"]->get_imagen()?>"/>
</div>
<p>Anotaciones:</p>
<? $alta_fichas = fichas::listar(); ?><h3>Tengo <?= count($listar_fichas) ?> Anotaciones</h3>
<table>
<? $fichas = new fichas(null, null, null, null, null);
    foreach ($listar_fichas as $fichas) { ?>
        <tr>
        <p><?= $fichas->get_nombre_usuario() ?>
            <?= $fichas->get_lugar() ?>
            <?= $fichas->get_anotaciones() ?></p>
        </tr> 
        <? } ?>
</table>

</div>
<a href="http://www.w3schools.com/default.asp" target="nueva">
<img src="fondos_imgen/120px-W3C_HTML5_certified.png" alt="Guia" title="Guia"/></a>
<div id="capapie">
</br>
<p>#MyAgenda #es &copy;</p>
</br>
</div>
</body>
</html>
