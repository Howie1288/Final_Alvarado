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

    public function buscar($apli_id, $pro_grado, $pro_nombre, $asi_id)
    {
        $sql = "SELECT a.apli_nombre, p.pro_grado, p.pro_nombre, ap.asi_id,
            t.tar_descripcion, t.tar_estado, t.tar_fecha
            FROM aplicaciones a
            JOIN asignacion_programadores ap ON a.apli_id = ap.asi_apli_id
            JOIN programadores p ON ap.asi_pro_id = p.pro_id
            JOIN tareas t ON t.tar_apli_id = a.apli_id
            WHERE 1=1 AND tar_situacion = '1'";
    
        if (!empty($apli_id)) {
            $sql .= " AND a.apli_id = $apli_id";
        }
    
        if (!empty($pro_grado)) {
            $sql .= " AND p.pro_grado = '$pro_grado'";
        }
    
        if (!empty($pro_nombre)) {
            $sql .= " AND p.pro_nombre LIKE '%$pro_nombre%'";
        }
    
        if (!empty($asi_id)) {
            $sql .= " AND ap.asi_id = $asi_id";
        }
    
        $resultados = self::servir($sql);
    
        return $resultados;
    }
 }    