<?php
require_once 'Conexion.php';

class Programador extends Conexion
{
    public $id_programador;
    public $nombre;
    public $apellido;
    public $telefono;
    public $direccion;
    public $correo_electronico;

    public function __construct($args = [])
    {
        $this->id_programador = $args['id_programador'] ?? null;
        $this->nombre = $args['nombre'] ?? '';
        $this->apellido = $args['apellido'] ?? '';
        $this->telefono = $args['telefono'] ?? '';
        $this->direccion = $args['direccion'] ?? '';
        $this->correo_electronico = $args['correo_electronico'] ?? '';
    }

    public function guardar()
    {
        $sql = "INSERT INTO programadores(nombre, apellido, telefono, direccion, correo_electronico) values('$this->nombre','$this->apellido', '$this->telefono', '$this->direccion', '$this->correo_electronico')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function buscar()
    {
        $sql = "SELECT * from programadores where situacion = 1 ";

        if ($this->nombre != '') {
            $sql .= " and nombre like '%$this->nombre%' ";
        }

        if ($this->apellido != '') {
            $sql .= " and apellido = $this->apellido ";
        }

        if ($this->telefono != '') {
            $sql .= " and telefono = $this->telefono ";
        }

        if ($this->direccion != '') {
            $sql .= " and direccion = $this->direccion ";
        }

        if ($this->correo_electronico != '') {
            $sql .= " and correo_electronico = $this->correo_electronico ";
        }


        if ($this->id_programador != null) {
            $sql .= " and id_programador = $this->id_programador ";
        }

        $resultado = self::servir($sql);
        return $resultado;
    }

    public function modificar()
    {
        $sql = "UPDATE programadores SET nombre = '$this->nombre', apellido = $this->apellido where id_programador = $this->id_programador";

        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function eliminar()
    {
        $sql = "UPDATE programadores SET situacion = 1 where id_programador = $this->id_programador";

        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}
