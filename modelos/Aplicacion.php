<?php
require_once 'Conexion.php';
class Aplicacion extends Conexion
{
    public $id_aplicacion;
    public $nombre;
    public $precio;
    

    public function __construct($args = [])
    {
        $this->id_aplicacion= $args['id_aplicacion'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->precio = $args['precio'] ?? '';

    }

    public function guardar()
    {
        $sql = "INSERT INTO aplicaciones(nombre, precio) values('$this->nombre','$this->precio')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function buscar()
    {
        $sql = "SELECT * from aplicaciones where situacion = 1 ";

        if ($this->nombre != '') {
            $sql .= " and nombre like '%$this->nombre%' ";
        }

        if ($this->precio != '') {
            $sql .= " and precio = $this->precio ";
        }

        if ($this->id_aplicacion!= null) {
            $sql .= " and id_aplicacion= $this->id_aplicacion";
        }

        $resultado = self::servir($sql);
        return $resultado;
    }

    public function modificar()
    {
        $sql = "UPDATE aplicaciones SET nombre = '$this->nombre', precio = $this->precio where id_aplicacion= $this->id_aplicacion";

        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function eliminar()
    {
        $sql = "UPDATE aplicaciones SET producto_situacion = 0 where id_aplicacion= $this->id_aplicacion";

        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}
