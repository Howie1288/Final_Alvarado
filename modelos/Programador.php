<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once 'Conexion.php';

class Programador extends Conexion{
    public $pro_id;
    public $pro_grado;
    public $pro_nombre;
    public $pro_apellido;
    public $pro_situacion;

    public function __construct($args = [] )
    {
        $this->pro_id = $args['pro_id'] ?? null;
        $this->pro_grado = $args['pro_grado'] ?? '';
        $this->pro_nombre = $args['pro_nombre'] ?? '';
        $this->pro_apellido = $args['pro_apellido'] ?? '';
        $this->pro_situacion = $args['programador_situacion'] ?? '';
    }

    public function guardar(){
        $sql = "INSERT INTO programadores (pro_grado, pro_nombre, pro_apellido) VALUES ('$this->pro_grado', '$this->pro_nombre', '$this->pro_apellido')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function buscar(){
        $sql = "SELECT * FROM programadores WHERE pro_situacion = 1";

        if($this->pro_grado != ''){
            $sql .= " AND pro_grado LIKE '%$this->pro_grado%'";
        }

        if($this->pro_nombre != ''){
            $sql .= " AND pro_nombre LIKE '%$this->pro_nombre%'";
        }

        if($this->pro_apellido != ''){
            $sql .= " AND pro_apellido LIKE '%$this->pro_apellido%'";
        }

        if($this->pro_id != null){
            $sql .= " AND pro_id = $this->pro_id";
        }

        $resultado = self::servir($sql);
        return $resultado;
    }

    public function modificar(){
        $sql = "UPDATE programadores SET pro_grado = '$this->pro_grado', pro_nombre = '$this->pro_nombre', pro_apellido = '$this->pro_apellido' WHERE pro_id = $this->pro_id";
        
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function eliminar(){
        $sql = "UPDATE programadores SET pro_situacion = 0 WHERE pro_id = $this->pro_id";
        
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}
?>
