<?php
require '../../modelos/Tareas.php';
try {
    $aplicacion = new Aplicacion($_GET);

    $aplicaciones = $aplicacion->buscar();
} catch (PDOException $e) {
    $error = $e->getMessage();
} catch (Exception $e2) {
    $error = $e2->getMessage();
}
?>
<?php include_once '../../includes/header.php' ?>
<div class="container">
    <h1 class="text-center">Modificar Tareas</h1>
    <div class="row justify-content-center">
        <form action="/Final_Alvarado/controladores/tareas/modificar.php" method="POST" class="col-lg-8 border bg-light p-3">
            <input type="hidden" name="tarea_id" value="<?= $tareas[0]['tarea_id'] ?>">
            <div class="row mb-3">
                <div class="col">
                    <label for="nombre">Nombre de la Tarea</label>
                    <input type="text" name="nombre" id="nombre" class="form-control" value="<?= $tareas[0]['NOMBRE_TAREA'] ?>">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="descripcion">Descripcion de la Tarea</label>
                    <input type="text" name="descripcion" id="descripcion" class="form-control" value="<?= $tareas[0]['DESCRIPCION_TAREA'] ?>">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="FechaFinalizacion">Fecha de Finalizacion</label></label>
                    <input type="date" name="FechaFinalizacion" id="FechaFinalizacion" class="form-control" value="<?= $tareas[0]['FECHA_FINALIZACION'] ?>">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="estado">Estado de la Tarea</label>
                    <input type="text" name="estado" id="estado" class="form-control" value="<?= $tareas[0]['ESTADO_TAREA'] ?>">
                </div>
            </div>


         </div>
            <div class="row mb-3">
                <div class="col">
                    <button type="submit" class="btn btn-warning w-100">Modificar</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?php include_once '../../includes/footer.php' ?>


<!DOCTYPE html>
<html>
<head>
    <title>Agregar tarea</title>
</head>
<body>
    <h1>Agregar tarea</h1>
    <form method="post" action="procesar_tarea.php">
        <label for="nombre_tarea">Nombre de la tarea:</label><br>
        <input type="text" id="nombre_tarea" name="nombre_tarea"><br>

        <label for="descripcion_tarea">Descripción de la tarea:</label><br>
        <textarea id="descripcion_tarea" name="descripcion_tarea"></textarea><br>

        <label for="fecha_inicio">Fecha de inicio:</label><br>
        <input type="date" id="fecha_inicio" name="fecha_inicio"><br>

        <label for="fecha_finalizacion">Fecha de finalización:</label><br>
        <input type="date" id="fecha_finalizacion" name="fecha_finalizacion"><br>

        <label for="estado">Estado:</label><br>
        <select id="estado" name="estado">
            <option value="no iniciada">No iniciada</option>
            <option value="finalizada">Finalizada</option>
        </select><br>

        <input type="submit" value="Agregar tarea">
    </form>
</body>
</html>