<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//ES" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">
<head>
<link href='http://fonts.googleapis.com/css?family=Nunito' rel='stylesheet' type='text/css'>
<link type="text/css" rel="stylesheet" href="estilos/css.css"/>
<title>Registro</title>
<script type="text/javascript" src="js/jquery-2.1.1.js"></script>
<script type="text/javascript" src="js/validador.js"></script>
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
<div id="cabecera"><p>---------------------------------</p></div>   
<?php $fecha = date("<p>d-m-Y</p>");?>
<h2>#esmiguelalfonso<?php echo "<p> $fecha </p>"; ?></h2> 
<hr/>
<h1>Guarda anotaciones en agenda</h1>
<div id="div1">
<p>Registro</p>
<form action="pagina2.php" method="post" enctype="multipart/form-data" value="BD" class="alta_usuario">
    <p>Nombre</p><p><input type ="text" name ="nombre" placeholder="Tu nombre" class="usuarios"/></p>
    <p>Email</p><p><input type ="text" name ="email" placeholder="Tu email" class="usuarios"/></p>
    <p>Direccion</p><p><input type ="text" name ="direccion" placeholder="Tu direccion" class="usuarios"/></p>
    <p>Fecha de nacimiento</p><p><input type ="text" name ="edad" placeholder="DD MM AAAA" class="usuarios"/></p>
    <p>Contraseña</p><p><input type ="password" name ="contraseña" placeholder="Tu contraseña" class="clave"/></p>
    <p>Foto</p><p><input type="file" name="imagen" size="" class="usuarios"/></p>
    <p>Envio</p><p><input type="submit" value="Envio" class="nuevo_usuario"/></p>
</form> 
</div>
<div id="div7">
<div id="div2">
    <p>Login</p>
    <form action="pagina2.php" method="POST" enctype="multipart/form-data" value="login" class="login">
        <input type="hidden" name="action" class="usuarios"/>
        <p>Usuario</p>
        <input type = "text" name="email" placeholder="Tu email" class="usuarios"/>
        <p>Contraseña</p>
        <input type="password" name="contraseña" placeholder="Tu contraseña" class="usuarios"/>
        <p>Entrar</p>
        <input type="submit" name="action" class="login"/>
    </form>
</div>
</div>

<? if (isset($_SESSION["aviso"])) { ?>

<h2><?= $_SESSION["aviso"] ?></h2>

<? $_SESSION["aviso"] = null; } ?>

<br><a href="http://www.w3schools.com/default.asp" target="nueva">
<img src="fondos_imgen/120px-W3C_HTML5_certified.png" alt="Guia" title="Guia"/></a></br>
<? if (isset($_POST["nombre"]) && isset($_POST["email"]) && isset($_POST["direccion"]) 
    && isset($_POST["edad"]) && isset($_POST["contraseña"])) { 
    $alta_usuario = new usuarios(null, $_POST["nombre"], 
        $_POST["email"], $_POST["direccion"], 
        $_POST["edad"], $_POST["contraseña"]); 
        $resultado = $nuevo_usuario->insertar_bd('u970653491_linea'); 
        }?>
<p><a href="http://linear.esy.es/" target="_self" alt="linear" title="linear">Vuelva a Linear</a></p>
<div id="capapie">
</br>
<p>#MyAgenda #es &copy;</p>
</br>
</div>
</body>
</html>