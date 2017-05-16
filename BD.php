<?php
require_once 'controlador.php';
require_once 'ficha.php';
require_once 'usuario.php';


class BD {

private $instancia;
private $conexion;

public function __construct() {
    $this->conexion = new PDO('127.0.0.1','linea','linea','root');
}

$link =mysqli_connect("127.0.0.1","linea","root"); 
mysqli_select_db("linea" . $link); 
OR DIE ("Error: No es posible establecer la conexión");
 

public function set_consulta($sql) {
    $this->instancia = $this->conexion->prepare($sql);
}

public function ejecutar($parametros = null) {
              if(isset($parametros)){
      settype($parametros, "array");
      }         
    try {
        $this->instancia->execute($parametros);
        if (strpos($this->mensaje(), "00000") === false) {
            echo $this->mensaje();
        }
    } catch (PDOException $e) {
        echo "<h4>error</h4><h3>" . $e->getMessage() . "</h3>";
    }
}

public function filas_modificadas() {
    return $this->instancia->rowCount();
}

public function resultado() {
    try {
        if ($rs = $this->instancia->fetch(PDO::FETCH_ASSOC)) {
            return $rs;
        } else {
            return false;
        }
    } catch (Exception $e) {
        echo "<h4>error</h4><h3>" . $e->getMessage() . "</h3>";
    }
}

public function mensaje() {
    $cadena = "";
    foreach ($this->instancia->errorInfo() as $err) {
        $cadena.="$err -\t";
    }

    if (strpos($cadena, "HY093") === 0) {
        $cadena = "HY093 -\tEl número de parámetros no es correcto-\t";
    }
    $prueba = $this->instancia->errorInfo();
    if (empty($prueba[0])) {
        return "00000 -\t-\t";
    }

    return $cadena;
}

}

?>

