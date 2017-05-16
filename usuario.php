<?php
require_once '../controlador/controlador.php';
require_once '../clases/BD.php';
require_once '../clases/ficha.php';

class usuarios {
    private $id_usuario;
    private $nombre;
    private $email;
    private $direccion;
    private $edad;
    private $contraseña;
    private $imagen;

function __construct($id_usuario, $nombre, $email, $direccion, $edad, $contraseña, $imagen) {
$this->id_usuario = $id_usuario;
$this->nombre = $nombre;
$this->email = $email;
$this->direccion = $direccion;
$this->edad = $edad; //es una fecha
$this->contraseña = $contraseña;
$this->imagen = $imagen;
}

public function get_id_usuario() {
    return $this->id_usuario;
}
public function get_nombre() {
    return $this->nombre;
}
public function get_email() {
    return $this->email;
}
public function get_direccion() {
    return $this->direccion;
}
public function get_edad() {
    return $this->edad;
}
public function get_contraseña() {
    return $this->contraseña;
}
public function get_imagen() {
    return $this->imagen;
}


public function set_id_usuario($id_usuario) {
    $this->id_usuario = $id_usuario;
}
public function set_nombre($nombre) {
    $this->nombre = $nombre;
}
public function set_email($email) {
    $this->email = $email;
}
public function set_direccion($direccion) {
    $this->direccion = $direccion;
}
public function set_edad($edad) {
    $this->edad = $edad;
}
public function set_contraseña($contraseña) {
    $this->contraseña = $contraseña;
}
public function set_imagen($imagen) {
    $this->imagen = $imagen;
}



public function insertar_bd() {
    $bd = new BD('linea');

    $bd->set_consulta("insert into usuarios ('id_usuario', 'nombre', 'email', 'direccion', 'edad', 'contraseña', 'imagen') 
        values (?, ?, ?, ?, ?, ?, ?)");

    $parametros = array($this->id_usuario, $this->nombre, $this->email, $this->direccion, 
        $this->edad, $this->contraseña, $this->imagen); 

    $bd->ejecutar($parametros);


    if ($bd->filas_modificadas() > 0) {
        return "El usuario se agregó correctamente";
    } else {
        return "Hay un error";
    }
}


public static function listar() {  
    $bd = new BD('linea');
    $bd->set_consulta("select id_usuario, nombre, direccion, edad, email, contraseña from usuarios"); 
    $bd->ejecutar();
    $array_usuario = array();
    
    while ($fila = $bd->resultado()) { 
        $usuario = new usuarios( 
            $fila["id_usuario"], 
            $fila["nombre"], 
            $fila["email"], 
            $fila["direccion"], 
            $fila["edad"], 
            $fila["contraseña"], 
            $fila["imagen"]);
        array_push($array_usuario, $usuario);
    }
    return $array_usuario;
}  

public static function login($email, $contraseña) {
    $bd = new BD('linea');
    $bd->set_consulta("select id_usuario, imagen, nombre, direccion, edad, email from usuarios where email = ? and contraseña = ?");

    $parametros = array($email, $contraseña);

    $bd->ejecutar($parametros);

    if ($fila = $bd->resultado()) {
        $usuario = new usuarios(
            $fila["id_usuario"], 
            $fila["nombre"], 
            $fila["email"], 
            $fila["direccion"], $fila["edad"], null, 
            $fila["imagen"]); return $usuario;
    }
    return null;
}

public function modificar_bd(){
    $bd = new BD('linea');
    $bd->set_consulta('update usuarios set direccion = ?, imagen = ? where id_usuario = ?');
    $parametros = array($this->direccion, $this->imagen, $this->id_usuario);
    $bd->ejecutar($parametros);   
    return $bd->filas_modificadas(); 
} 

}

?>
