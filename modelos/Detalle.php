<?php
require_once 'Conexion.php';
class Detalle extends Conexion
{
    public $detalle_id;
    public $detalle_aplicacion;
    public $detalle_tarea;
    public $detalle_programador;
    public $detalle_estado;

    public function __construct($args = [])
    {
        $this->detalle_id = $args['detalle_id'] ?? null;
        $this->detalle_aplicacion = $args['detalle_aplicacion'] ?? '';
        $this->detalle_tarea = $args['detalle_tarea'] ?? '';
        $this->detalle_programador = $args['detalle_programador'] ?? '';
        $this->detalle_estado = $args['detalle_estado'] ?? '';
    }

    public function guardar()
    {
        $sql = "INSERT INTO detalle_ventas(detalle_venta, detalle_producto, detalle_cantidad) values('$this->detalle_venta','$this->detalle_producto', '$this->detalle_cantidad')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function buscar()
    {
        $sql = "SELECT producto_nombre, producto_precio, sum(detalle_cantidad) as cantidad, producto_precio  * sum (detalle_cantidad) as total  FROM detalle_ventas inner join productos on detalle_producto = producto_id where detalle_situacion = 1 ";

        if ($this->detalle_venta != '') {
            $sql .= " and detalle_venta = $this->detalle_venta ";
        }

        $sql .= " group by producto_nombre, producto_precio";

        $resultado = self::servir($sql);
        return $resultado;
    }
}
