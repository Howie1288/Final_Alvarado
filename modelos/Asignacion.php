<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once 'Conexion.php';

class Asignacion extends Conexion{
    public $asi_id;
    public $asi_apli_id;
    public $asi_pro_id;

    public function __construct($args = [])
    {
        $this->asi_id = $args['asi_id'] ?? null;
        $this->asi_apli_id = $args['asi_apli_id'] ?? null;
        $this->asi_pro_id = $args['asi_pro_id'] ?? null;
    }

    public function guardar(){
        $sql = "INSERT INTO asignacion_programadores (asi_apli_id, asi_pro_id) VALUES ('$this->asi_apli_id', '$this->asi_pro_id')";
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
    public function buscar()
    {
        $sql = "SELECT a.apli_nombre, p.pro_grado, p.pro_nombre, ap.asi_id,
        t.tar_descripcion, t.tar_estado, t.tar_fecha
        FROM aplicaciones a
        JOIN asignacion_programadores ap ON a.apli_id = ap.asi_apli_id
        JOIN programadores p ON ap.asi_pro_id = p.pro_id
        JOIN tareas t ON t.tar_apli_id = a.apli_id
        WHERE 1=1";

    
            if (!empty($nombreAplicacion)) {
                $sql .= " AND a.apli_nombre LIKE '%$nombreAplicacion%'";
            }

            if (!empty($gradoProgramador)) {
                $sql .= " AND p.pro_grado = '$gradoProgramador'";
            }

            if (!empty($nombreProgramador)) {
                $sql .= " AND p.pro_nombre LIKE '%$nombreProgramador%'";
            }

            if (!empty($asignacionId)) {
                $sql .= " AND ap.asi_id = $asignacionId";
            }


    
        $resultado = self::servir($sql);
    
        return $resultado;
    }
    
    
    
    
    public function modificar(){
        $sql = "UPDATE asignacion_programadores SET asi_apli_id  = '$this->asi_apli_id ', asi_pro_id = '$this->asi_pro_id' WHERE asi_id = $this->asi_id";
        

        // echo $sql;
        // exit;
        $resultado = self::ejecutar($sql);
        return $resultado;
    }

    public function eliminar(){
        $sql = "DELETE FROM asignacion_programadores WHERE asi_id = $this->asi_id";
        
        $resultado = self::ejecutar($sql);
        return $resultado;
    }
}
