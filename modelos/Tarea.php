<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once 'Conexion.php';

class Tarea extends Conexion{
    public $tar_id;
    public $tar_apli_id ;
    public $tar_descripcion;
    public $tar_estado;
    public $tar_fecha;
    public $tar_situacion;

    public function __construct($args = [])
    {
        $this->tar_id = $args['tar_id'] ?? null;
        $this->tar_apli_id = $args['tar_apli_id'] ?? null;
        $this->tar_descripcion = $args['tar_descripcion'] ?? '';
        $this->tar_estado = $args['tar_estado'] ?? '';
        $this->tar_fecha = $args['tar_fecha'] ?? '';
        $this->tar_situacion = $args['tar_situacion'] ?? '1';
    }

    public function guardar(){
        $sql = "INSERT INTO tareas (tar_apli_id, tar_descripcion, tar_estado, tar_fecha) VALUES ('$this->tar_apli_id', '$this->tar_descripcion', '$this->tar_estado', '$this->tar_fecha' )";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function buscar()
    {
        $sql = "SELECT t.*, a.apli_nombre 
                FROM tareas t
                JOIN aplicaciones a ON t.tar_apli_id = a.apli_id
                WHERE t.tar_situacion = '1'";
    
        if ($this->tar_apli_id != null) {
            $sql .= " AND t.tar_apli_id = $this->tar_apli_id";
        }
    
        if ($this->tar_estado != '') {
            $sql .= " AND t.tar_estado = '$this->tar_estado'";
        }
    
        $resultado = self::servir($sql);
        return $resultado;
    }
    
    

    public function modificar(){
        $sql = "UPDATE tareas SET tar_apli_id = '$this->tar_apli_id', tar_descripcion = '$this->tar_descripcion', tar_estado = '$this->tar_estado', tar_fecha = '$this->tar_fecha' WHERE tar_id = $this->tar_id";
        
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function eliminar(){
       // echo "Valor de tarea_id: " . $this->tarea_id;
        
        $sql = "UPDATE tareas SET tar_situacion = '0' WHERE tar_id = $this->tar_id";
        
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
    
}