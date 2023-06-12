<?php
require_once 'Conexion.php';

class Venta extends Conexion
{
    public $id_asignacion;
    public $id_aplicacion;
    public $id_programador;
   
    public function __construct($args = [])
    {
        $this->id_asignacion = $args['id_asignacion'] ?? null;
        $this->id_aplicacion = $args['id_aplicacion'] ?? '';
        $this->id_programador = $args['id_programador'] ?? '';
    }

    public function guardar()
    {    /* PARA INGRESAR DATOS A LA TABLA Asignacion Aplicaciones */
        $sql = "INSERT INTO asignacion_aplicaciones (id_asignacion, id_aplicacion, id_programador ) values('$this->id_asignacion','$this->id_aplicacion', '$this->id_programador')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function buscar()
    {       /* Con este Querys Se selecciona los detalles de ventas en la tabla "ventas" que tengan una situación igual a 1, y muestra información adicional de los clientes, productos y  cantidades vendidas. */
        $sql = " SELECT aa.id_asignacion, aa.id_aplicacion, a.nombre, a.situacion,
                    aa.id_programador, p.nombre, p.apellido
            FROM asignacion_aplicaciones aa, aplicaciones a, programadores p
            WHERE aa.id_aplicacion = a.id_aplicacion
            AND aa.id_programador = p.id_programador; ";

        if ($this->id_asignacion != '') {
            $sql .= " and id_asignacion = $this->id_asignacion ";
        }

        if ($this->id_aplicacion != '') {
            $sql .= " and extend(id_aplicacion, year to day) = '$this->id_aplicacion' ";
        }
        if ($this->id_programador != null) {
            $sql .= " and id_programador = $this->id_programador ";
        }

        $resultado = self::servir($sql);
        return $resultado;
    }
            //AQUI QUERYS DE FACTURA  
    public function factura($id)
    {
        $sql = "SELECT detalle_id, cliente_nombre, venta_fecha, cliente_nit, producto_nombre, producto_precio, detalle_cantidad, (producto_precio * detalle_cantidad) as total from ventas inner join clientes on venta_cliente = cliente_id  
         INNER JOIN detalle_ventas ON venta_id = detalle_venta
         INNER JOIN productos ON detalle_producto = producto_id
        where venta_situacion= 1 and detalle_id= $id ";
        /* Este Querys realiza una consulta a la base de datos para obtener los detalles de una venta específica, identificada por el valor de la variable pero agrega una cláusula adicional al final del código: and detalle_id= $id. Esta cláusula especifica que solo se deben seleccionar los detalles de venta que tengan un valor de "detalle_id" igual al valor de $id. En otras palabras, se está filtrando la consulta para obtener información detallada de una venta en particular. */
        $resultado = self::servir($sql);
        return $resultado;
    }
}
