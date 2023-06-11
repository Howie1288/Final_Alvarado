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
                    <label for="Descripcion">Descripcion de la Tarea</label>
                    <input type="text" name="Descripcion" id="Descripcion" class="form-control" value="<?= $tareas[0]['DESCRIPCION_TAREA'] ?>">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="Fecha de Finalizacion">Fecha de Finalizacion</label></label>
                    <input type="date" name="Fecha de Finalizacion" id="Fecha de Finalizacion" class="form-control" value="<?= $tareas[0]['FECHA_FINALIZACION_TAREA'] ?>">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="Estado">Estado de la Tarea</label>
                    <input type="text" name="Estado" id="Estado" class="form-control" value="<?= $tareas[0]['ESTADO_TAREA'] ?>">
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