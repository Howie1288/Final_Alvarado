<?php
require '../../modelos/tarea.php';
try {
    $tarea = new Tarea($_GET);

    $tareas = $aplicacion->buscar();
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
                            <th>ID_APLICACION</th>
                            <th>DESCRIPCION</th>
                            <th>FECHA INICIO</th>
                            <th>FECHA FINALIZACION</th>
                            <th>ESTADO</th>
                            <th>MODIFICAR</th>
                            <th>ELIMINAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if (count($tareas) > 0) : ?>
                            <?php foreach ($tareas as $key => $tarea) : ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $tarea['NOMBRE'] ?></td>
                                    <td><?= $tarea['ID_APLICACION'] ?></td>
                                    <td><?= $tarea['DESCRIPCION'] ?></td>
                                    <td><?= $tarea['FECHA INICIO'] ?></td>
                                    <td><?= $tarea['FECHA FINALIZACION'] ?></td>
                                    <td><?= $tarea['ESTADO'] ?></td>
                                    <td><a class="btn btn-warning w-100" href="/Final_Alvarado/vistas/tareas/modificar.php?tarea_id=<?= $producto['TAREA_ID'] ?>">Modificar</a></td>
                                    <td><a class="btn btn-danger w-100" href="/Final_Alvarado/controladores/tareas/eliminar.php?tarea_id=<?= $producto['TAREA_ID'] ?>">Eliminar</a></td>
                                </tr>
                            <?php endforeach ?>
                        <?php else : ?>
                            <tr>
                                <td colspan="3">NO EXISTEN REGISTROS</td>
                            </tr>
                        <?php endif ?>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <a href="/Final_Alvarado/vistas/tareas/buscar.php" class="btn btn-info w-100">Volver al formulario</a>
            </div>
        </div>
    </div>
</body>

</html>