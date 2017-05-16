<?php
require_once 'BD.php';
require_once 'ficha.php';
require_once 'usuario.php';
/* */ 
if (!isset($_REQUEST["action"])) {
    die("No hay accion");
}

switch ($_REQUEST["action"]) {
    
    case "alta_usuario":
        alta_usuario();
        break;

    case "modificar_usuario":
        modificar_usuario();
        break;

    case "alta_ficha":
        alta_ficha();
        break;

    case "login":
        login();
        break;

    case "desconectar":
        desconectar();
        break;
}


function alta_usuario() { 
    if (!empty($_POST['nombre']) && !empty($_POST['email']) && !empty($_POST['direccion']) && !empty($_POST['edad']) && !empty($_POST['contraseña'])) { 

        $clave = sha1("9357".$_POST['contraseña']);
        
        $nuevo_usuario = new usuarios(null, $_POST["nombre"], $_POST["email"], $_POST['direccion'], $edad, $clave, null);
        
        $tipo = $_FILES["imagen"]['jpg']; //tipo mime del archivo, por ejemplo image/gif
        
        $nombre = $_FILES["imagen"]['name']; //nombre original del archivo
        
        $temporal = $_FILES["imagen"]['tmp_name'];
        
        $prefijo = substr(md5(uniqid(rand())), 0, 6);

        if ($nombre != "") { $destino = "pagina2.php" . $prefijo . "_" . $nombre;
            if (copy($temporal, $destino)) {
                
                $status = "Archivo subido: <b>" . $nombre . "</b>";
                
                $nuevo_usuario->set_imagen($prefijo . "_" . $nombre); 
            } else {
                $status = "Error al subir el archivo";
            }
        }
    
    }



function modificar_usuario() {
    $usuario = new usuarios(null, null, null, null, null, null, null);
    $usuario = $_SESSION["usuarios"];
    if (!empty($_POST["direccion"])) {
        $usuario->set_direccion($_POST["direccion"]);
    }

    $nombre = $_FILES["foto"]['name']; //nombre original del archivo
    if ($nombre != "") {
        unlink("../imagenes/" . $usuario->get_imagen());
        $temporal = $_FILES['foto']['tmp_name'];
        $prefijo = substr(md5(uniqid(rand())), 0, 6);
        $destino = "../imagenes/" . $prefijo . "_" . $nombre;
        if (copy($temporal, $destino)) {
            $usuario->set_imagen($prefijo . "_" . $nombre);
        }
    }


    if ($usuario->modificar_bd() > 0) {
        $_SESSION["aviso"] = "La modificación es correcta";
    } else {
        $_SESSION["aviso"] = "Tenemos un error";
    }
    
    $_SESSION["usuarios"] = $usuario;
    header("Location: ../pagina2.php");
}

function alta_ficha() {
    if (!empty($_POST['lugar']) && !empty($_POST['anotaciones'])) {
        $usuario = $_SESSION["usuarios"];
        $fichas = new fichas($usuario->get_id_usuario(), null, $_POST['lugar'], $_POST['anotaciones'], null);
        $_SESSION['aviso'] = $fichas->insertar_bd();
    } else {
        $_SESSION['aviso'] = "Error";
    }
    header("Location: ../pagina2.php");
}

function login() {
    if (!empty($_POST['email']) && !empty($_POST['contraseña'])) {
        $clave = sha1("9357" . $_POST['contraseña']);
        $usuario = usuarios::login($_POST['email'], $clave);
        if (isset($usuarios)) {
            $_SESSION["usuarios"] = $usuario;
            header("Location: ../pagina2.php");
        } else {
            $_SESSION['aviso'] = "El usuario o la constraseña no son correctos";
            header("Location: ../agenda.php");
        }
    } else {
        $_SESSION['aviso'] = "El usuario o la constraseña están vacios";
        header("Location: ../agenda.php");
    }
}

function desconectar() { 
    session_destroy(); 
    header("Location:../Geometria/index.php"); 

}
}

?>
