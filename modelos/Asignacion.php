<?php
require_once 'Conexion.php';
class Asignacion extends Conexion
{
    public $asignacion_id;
    public $asignacion_id_aplicacion;
    public $asignacion_id_programador;

    public function __construct($args = [])
    {
        $this->asignacion_id= $args['asignacion_id'] ?? null;
        $this->asignacion_id_aplicacion = $args['asignacion_id_aplicacion'] ?? '';
        $this->asignacion_id_programador = $args['$asignacion_id_programador'] ?? '';
    }

    public function guardar()
    {
        $sql = "INSERT INTO asignacion_programadores (asignacion_id_aplicacion, asignacion_id_programador ) values('$this->asignacion_id_aplicacion','$this->asignacion_id_programador' )";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function buscar()
    {
        $sql = "SELECT * from asignacion_programadores where  asignacion_id = 0 ";

        if ($this->asignacion_id_aplicacion != '') {
            $sql .= " and asignacion_id_aplicacion like '%$this->asignacion_id_aplicacion%' ";
        }

        if ($this->asignacion_id_programador != '') {
            $sql .= " and asignacion_id_programador = $this->asignacion_id_programador ";
        }

        if ($this->asignacion_id != null) {
            $sql .= " and asignacion_id= $this->asignacion_id";
        }

        $resultado = self::servir($sql);
        return $resultado;
    }

    public function modificar()
    {
        $sql = "UPDATE asignacion_programadores SET asignacion_id_aplicacion = '$this->asignacion_id_aplicacion', asignacion_id_programador = $this->asignacion_id_programador where asignacion_id= $this->asignacion_id";

        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function eliminar()
    {
        $sql = "UPDATE asignacion_programadores SET asignacion_id = 0 where  asignacion_id = $this-> asignacion_id ";

        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}
