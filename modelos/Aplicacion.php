<?php

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
require_once 'Conexion.php';
class Aplicacion extends Conexion
{
    public $aplicacion_id;
    public $aplicacion_nombre;
    public $aplicacion_fecha_inicio;
    public $aplicacion_situacion;
    
    public function __construct($args = [])
    {
        $this->aplicacion_id= $args['aplicacion_id'] ?? null;
        $this->aplicacion_nombre = $args['aplicacion_nombre'] ?? '';
        $this->aplicacion_fecha_inicio = $args['aplicacion_fecha_inicio'] ?? '';
        $this->aplicacion_situacion = $args['aplicacion_situacion'] ?? '';

    }

    public function guardar()
    {
        $sql = "INSERT INTO aplicaciones(aplicacion_nombre, aplicacion_fecha_inicio) values('$this->aplicacion_nombre','$this->aplicacion_fecha_inicio')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function buscar()
    {
        $sql = "SELECT * from aplicaciones where aplicacion_situacion = 1 ";

        if ($this->aplicacion_nombre != '') {
            $sql .= " and aplicacion_nombre like '%$this->aplicacion_nombre%' ";
        }

        if ($this->aplicacion_fecha_inicio != '') {
            $sql .= " and aplicacion_fecha_inicio = $this->aplicacion_fecha_inicio ";
        }

        if ($this->aplicacion_id!= null) {
            $sql .= " and aplicacion_id= $this->aplicacion_id";
        }

        $resultado = self::servir($sql);
        return $resultado;
    }

    public function modificar()
    {
        $sql = "UPDATE aplicaciones SET aplicacion_nombre = '$this->aplicacion_nombre', aplicacion_fecha_inicio = $this->aplicacion_fecha_inicio where aplicacion_id= $this->aplicacion_id";

        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function eliminar()
    {
        $sql = "UPDATE aplicaciones SET aplicacion_situacion = 0 where aplicacion_id= $this->aplicacion_id";

        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}
