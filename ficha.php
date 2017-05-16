<?php
require_once '../controlador/controlador.php';
require_once '../clases/BD.php';
require_once '../clases/usuario.php';


class fichas {

    private $id_usuario;
    private $lugar;
    private $anotaciones;
    private $nombre;

    function __construct($id_usuario, $lugar, $anotaciones, $nombre) {
        $this->id_usuario = $id_usuario;
        $this->lugar = $lugar;
        $this->anotaciones = $anotaciones;
        $this->nombre = $nombre;
    }

    public function get_id_usuario() {
        return $this->id_usuario;
    }
    public function get_lugar() {
        return $this->lugar;
    }
    public function get_anotaciones() {
        return $this->anotaciones;
    }
    public function get_nombre() {
        return $this->nombre;
    }
    public function set_id_usuario($id_usuario) {
        $this->id_usuario = $id_usuario;
    }
    public function set_lugar($lugar) {
        $this->lugar = $lugar;
    }
    public function set_anotaciones($anotaciones) {
        $this->anotaciones = $anotaciones;
    }
    public function set_nombre($nombre) {
        $this->nombre = $nombre;
    }


    public function insertar_bd() {
        $bd = new BD('linea');
        $bd->set_consulta("INSERT INTO fichas (`id_usuario`, `lugar`, `anotaciones`) " . "VALUES (?, ?, ?)");
        $parametros = array($this->id_usuario, $this->lugar, $this->anotaciones);
        $bd->ejecutar($parametros);
        if ($bd->filas_modificadas() > 0) {
            return "Tu nota se agregó correctamente en la ficha"; } 
            else { return "Tenemos un error"; } 
        }  


    public static function listar() {
        $bd = new BD('linea');
        $bd->set_consulta("select u.id_usuario, f.lugar, f.anotaciones, u.nombre" . " from fichas as f inner join usuarios as u on u.id_usuario = f.id_usuario" . " where u.id_usuario = ?");
        $parametros = array($_SESSION["usuarios"]->get_id_usuario());
        $bd->ejecutar($parametros);

        $array_fichas = array();
        while ($fila = $bd->resultado()) {
            $fichas = new fichas(
                $fila["id_usuario"], 
                $fila["lugar"], 
                $fila["anotaciones"], 
                $fila["nombre"]);
            array_push($array_fichas, $fichas);
        }
        return $array_fichas;
    }

}


?>