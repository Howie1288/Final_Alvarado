<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once '../../modelos/Tareas.php';
require_once '../../modelos/Aplicacion.php';

try {
    $tarea = new Tareas();
    $aplicacion = new Aplicacion();
    $tareas = $tarea->buscar();
    $aplicaciones = $aplicacion->buscar();
} catch (PDOException $e) {
    $error = $e->getMessage();
} catch (Exception $e2) {
    $error = $e2->getMessage();
}
?>

<?php include_once '../../includes/header.php'?>
<?php include_once '../../includes/navbar.php'?>
<div class="container">
    <h1 class="text-center">Tareas por Aplicaciones</h1>
    <div class="row justify-content-center">
        <form action="/Final_Alvarado/controladores/tareas/guardar.php" method="GET" class="col-lg-8 border bg-light p-3">
            <div class="row mb-3">
                <input type="hidden" name="tarea_id">
                <div class="col">
                    <label for="tarea_id_aplicacion"> ID Aplicación</label>
                    <select name="tarea_id_aplicacion" id="tarea_id_aplicacion" class="form-control">
                        <option value="">SELECCIONE...</option>
                        <?php foreach ($aplicaciones as $key => $aplicacion) : ?>
                            <option value="<?= $aplicacion['APLICACION_ID'] ?>"><?= $aplicacion['APLICACION_NOMBRE'] ?></option>
                        <?php endforeach?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="tarea_descripcion">Descripción</label>
                    <input type="text" name="tarea_descripcion" id="tarea_descripcion" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="tarea_estado">Estado</label>
                    <select name="tarea_estado" id="tarea_estado" class="form-control">
                        <option value="">SELECCIONE...</option>
                        <option value="FINALIZADA">FINALIZADA</option>
                        <option value="NO INICIADA">NO INICIADA</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="tarea_fecha">Fecha</label>
                    <input type="datetime" value="<?= date('Y-m-d') ?>" name="tarea_fecha" id="tarea_fecha" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <button type="submit" class="btn btn-info w-100">Guardar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include_once '../../includes/footer.php'?>