<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require '../../modelos/Aplicacion.php';
$aplicaciones = [];
try {
    $aplicacion = new Aplicacion($_GET);
    
    $aplicaciones = $aplicacion->buscar();
} catch (PDOException $e) {
    $error = $e->getMessage();
} catch (Exception $e2){
    $error = $e2->getMessage();
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Resultados</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <table class="table table-bordered table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>NO. </th>
                            <th>NOMBRE</th>
                            <th>FECHA INICIO</th>
                            <th>MODIFICAR</th>
                            <th>ELIMINAR</th>
                        </tr>
                    </thead>
                    <tbody>
                         <?php if(!empty($aplicaciones)):?>
                        <?php foreach($aplicaciones as $key => $aplicacion) : ?>
                        <tr>
                            <td><?= $key + 1 ?></td>
                            <td><?= $aplicacion['APLI_NOMBRE'] ?></td>
                            <td><?= date('d/m/Y', strtotime($aplicacion['APLI_FECHA_INICIO'])) ?></td>
                            <td><a class="btn btn-warning w-100" href="/Final_Alvarado/vistas/aplicaciones/modificar.php?apli_id=<?= $aplicacion['APLI_ID']?>">Modificar</a></td>
                            <td><a class="btn btn-danger w-100" href="/Final_Alvarado/controladores/aplicaciones/eliminar.php?apli_id=<?= $aplicacion['APLI_ID']?>">Eliminar</a></td>
                        </tr>
                        <?php endforeach ?>
                        <?php else :?>
                            <tr>
                                <td colspan="3">NO EXISTEN REGISTROS</td>
                            </tr>
                        <?php endif?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <a href="/Final_Alvarado/vistas/aplicaciones/buscar.php" class="btn btn-info w-100">Volver al formulario</a>
            </div>
        </div>
    </div>
</body>
</html>
