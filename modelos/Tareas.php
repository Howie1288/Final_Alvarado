<?php
require_once 'Conexion.php';
class Tareas extends Conexion
{
    public $tarea_id;
    public $tarea_id_aplicacion;
    public $tarea_descripcion;
    public $tarea_estado;
    public $tarea_fecha;
    public $tarea_situacion;
    
    public function __construct($args = [])
    {
        $this->tarea_id= $args['tarea_id'] ?? null;
        $this->tarea_id_aplicacion = $args['tarea_id_aplicacion'] ?? '';
        $this->tarea_descripcion = $args['tarea_descripcion'] ?? '';
        $this->tarea_estado = $args['tarea_estado'] ?? '';
        $this->tarea_fecha = $args['tarea_fecha'] ?? '';
        $this->tarea_situacion = $args['tarea_situacion'] ?? '';

    }

    public function guardar()
    {
        $sql = "INSERT INTO tareas (tarea_id_aplicacion, tarea_descripcion, tarea_estado, tarea_fecha, tarea_situacion ) values('$this->tarea_id_aplicacion', '$this->tarea_descripcion','$this->tarea_estado','$this->tarea_fecha','$this->tarea_situacion')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function buscar()
    {
        $sql = "SELECT * from tareas where estado = 1 ";

        if ($this->tarea_id_aplicacion != '') {
            $sql .= " and tarea_id_aplicacion like '%$this->tarea_id_aplicacion%' ";
        }

        if ($this->tarea_descripcion != '') {
            $sql .= " and tarea_descripcion = $this->tarea_descripcion ";
        }

        if ($this->tarea_estado != '') {
            $sql .= " and tarea_estado = $this->tarea_estado ";
        }

        if ($this->tarea_fecha != '') {
            $sql .= " and tarea_fecha = $this->tarea_fecha ";
        }

        if ($this->tarea_situacion != '') {
            $sql .= " and tarea_situacion = $this->tarea_situacion ";
        }

        if ($this->tarea_id != null) {
            $sql .= " and tarea_id= $this->tarea_id";
        }

        $resultado = self::servir($sql);
        return $resultado;
    }

    public function modificar()
    {
        $sql = "UPDATE tareas SET tarea_id_aplicacion = '$this->tarea_id_aplicacion', tarea_descripcion = '$this->tarea_descripcion', tarea_estado = '$this->tarea_estado', tarea_fecha = '$this->tarea_fecha', tarea_situacion = '$this->tarea_situacion' where tarea_id= $this->tarea_id";

        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function eliminar()
    {
        $sql = "UPDATE tareas SET estado = 0 where tarea_id = $this->tarea_id";

        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}
