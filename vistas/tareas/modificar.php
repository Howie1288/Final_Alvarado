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
                    <label for="tarea_id_aplicacion">ID APLICACION</label>
                    <input type="text" name="tarea_id_aplicacion" id="tarea_id_aplicacion" class="form-control" value="<?= $tareas[0]['TAREA_ID_APLICACION'] ?>">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="tarea_descripcion">DESCRIPCION</label>
                    <input type="text" name="tarea_descripcion" id="tarea_descripcion" class="form-control" value="<?= $tareas[0]['tarea_descripcion'] ?>">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="tarea_estado">ESTADO</label></label>
                    <input type="text" name="tarea_estado" id="tarea_estado" class="form-control" value="<?= $tareas[0]['TAREA_ESTADO'] ?>">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="tarea_fecha">FECHA DE INICIO</label>
                    <input type="date" name="tarea_fecha" id="tarea_fecha" class="form-control" value="<?= $tareas[0]['TAREA_FECHA'] ?>">
                </div>
            </div>


            <div class="row mb-3">
                <div class="col">
                    <label for="tarea_situacion">SITUACION</label>
                    <input type="text" name="tarea_situacion" id="tarea_situacion" class="form-control" value="<?= $tareas[0]['TAREA_SITUACION'] ?>">
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