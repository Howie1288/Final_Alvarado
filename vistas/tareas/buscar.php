<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require_once '../../modelos/Tarea.php';
require_once '../../modelos/Aplicacion.php';

try {
    $tarea = new Tarea();
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
    <h1 class="text-center">Formulario de búsqueda de tareas</h1>
    <div class="row justify-content-center">
        <form action="/Final_Alvarado/controladores/tareas/buscar.php" method="GET" class="col-lg-8 border bg-light p-3">
            <div class="row mb-3">
            <input type="hidden" name="tarea_id">
                <div class="col">
                    <label for="tar_apli_id">Aplicación</label>
                    <select name="tar_apli_id" id="tar_apli_id" class="form-control">
                        <option value="">SELECCIONE...</option>
                        <?php foreach ($aplicaciones as $key => $aplicacion) : ?>
                            <option value="<?= $aplicacion['APLI_ID'] ?>"><?= $aplicacion['APLI_NOMBRE'] ?></option>
                        <?php endforeach?>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="tar_descripcion">Descripción de la tarea</label>
                    <input type="text" name="tar_descripcion" id="tar_descripcion" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="tar_estado">Estado de la tarea</label>
                    <select name="tar_estado" id="tar_estado" class="form-control">
                        <option value="">SELECCIONE...</option>
                        <option value="FINALIZADA">FINALIZADA</option>
                        <option value="NO INICIADA">NO INICIADA</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="tar_fecha">Fecha de la tarea</label>
                    <input type="datetime" value="<?= date('Y-m-d') ?>" name="tar_fecha" id="tar_fecha" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <button type="submit" class="btn btn-info w-100">Buscar</button>
                </div>
            </div>
        </form>
    </div>
</div>

<?php include_once '../../includes/footer.php'?>
