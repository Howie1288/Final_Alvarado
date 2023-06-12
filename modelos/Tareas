<?php
require_once 'Conexion.php';
class Tarea extends Conexion
{
    public $tarea_id;
    public $nombre_tarea;
    public $id_aplicacion;
    public $descripcion_tarea;
    public $fecha_inicio;
    public $fecha_finalizacion;
    public $estado;
    
    public function __construct($args = [])
    {
        $this->tarea_id= $args['tarea_id'] ?? null;
        $this->nombre_tarea = $args['nombre_tarea'] ?? '';
        $this->id_aplicacion = $args['id_aplicacion'] ?? '';
        $this->descripcion_tarea = $args['descripcion_tarea'] ?? '';
        $this->fecha_inicio = $args['fecha_inicio'] ?? '';
        $this->fecha_finalizacion = $args['fecha_finalizacion'] ?? '';
        $this->estado = $args['estado'] ?? '';

    }

    public function guardar()
    {
        $sql = "INSERT INTO tareas (nombre_tarea, id_aplicacion, descripcion_tarea, fecha_inicio, fecha_finalizacion, estado ) values('$this->nombre_tarea','$this->id_aplicacion','$this->descripcion_tarea','$this->fecha_inicio','$this->fecha_finalizacion','$this->estado')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function buscar()
    {
        $sql = "SELECT * from tareas where estado = 1 ";

        if ($this->nombre_tarea != '') {
            $sql .= " and nombre_tarea like '%$this->nombre_tarea%' ";
        }

        if ($this->id_aplicacion != '') {
            $sql .= " and id_aplicacion = $this->id_aplicacion ";
        }

        if ($this->descripcion_tarea != '') {
            $sql .= " and descripcion_tarea = $this->descripcion_tarea ";
        }

        if ($this->fecha_inicio != '') {
            $sql .= " and fecha_inicio = $this->fecha_inicio ";
        }

        if ($this->fecha_finalizacion != '') {
            $sql .= " and fecha_finalizacion = $this->fecha_finalizacion ";
        }

        if ($this->estado != '') {
            $sql .= " and estado = $this->estado ";
        }

        if ($this->tarea_id!= null) {
            $sql .= " and tarea_id= $this->tarea_id";
        }

        $resultado = self::servir($sql);
        return $resultado;
    }

    public function modificar()
    {
        $sql = "UPDATE tareas SET nombre_tarea = '$this->nombre_tarea', id_aplicacion = '$this->id_aplicacion', descripcion_tarea = '$this->descripcion_tarea', fecha_inicio = '$this->fecha_inicio', fecha_finalizacion = '$this->fecha_finalizacion', estado = '$this->estado',where tarea_id= $this->tarea_id";

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
