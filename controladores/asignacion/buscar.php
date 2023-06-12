<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once '../../modelos/asignacion.php';

try {
    $resultados = array();
    $asignacion = new Asignacion($_GET);
    $resultados = $asignacion->buscar();
    // var_dump($resultados);
    // exit;
} catch (PDOException $e) {
    $error = $e->getMessage();
} catch (Exception $e2) {
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
    <title>Resultado de asignación de programadores</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <table class="table table-bordered table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>NO.</th>
                            <th>NOMBRE APLICACION</th>
                            <th>GRADO PROGRAMADOR</th>
                            <th>NOMBRE PROGRAMADOR</th>
                            <th>MODIFICAR</th>
                            <th>ELIMINAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($resultados) > 0) : ?>
                            <?php foreach ($resultados as $key => $resultado) : ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $resultado['APLI_NOMBRE'] ?></td>
                                    <td><?= $resultado['PRO_GRADO'] ?></td>
                                    <td><?= $resultado['PRO_NOMBRE'] ?></td>
                                    <td><a class="btn btn-warning w-100" href="/Final_Alvarado/vistas/asignacion/modificar.php?asi_id=<?= $resultado['ASI_ID'] ?>">Modificar</a></td>
                                    <td><a class="btn btn-danger w-100" href="/Final_Alvarado/controladores/asignacion/eliminar.php?asi_id=<?= $resultado['ASI_ID'] ?>">Eliminar</a></td>
                                </tr>
                            <?php endforeach ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="5">NO EXISTEN REGISTROS</td>
                            </tr>
                        <?php endif ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <a href="/Final_Alvarado/vistas/asignacion/buscar.php" class="btn btn-info w-100">Volver al formulario</a>
            </div>
        </div>
    </div>
</body>
</html>
