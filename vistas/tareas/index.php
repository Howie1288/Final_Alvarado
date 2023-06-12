<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


require_once '../../modelos/Aplicacion.php';

try {
    $aplicacion = new Aplicacion($_GET);
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
    <h1 class="text-center">Formulario de ingreso de Tareas</h1>
    <div class="row justify-content-center">
        <form action="/Final_Alvarado/controladores/tareas/guardar.php" method="POST" class="col-lg-8 border bg-light p-3">
            <div class="row mb-3">
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
                    <label for="tar_descripcion">Descripción de las Tareas</label>
                    <input type="text" name="tar_descripcion" id="tar_descripcion" class="form-control">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="tar_estado">Estado de Tarea</label>
                    <select name="tar_estado" id="tar_estado" class="form-select">
                        <option value="FINALIZADA">FINALIZADA</option>
                        <option value="NO INICIADA">NO INICIADA</option>
                    </select>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="tar_fecha">Fecha de la tarea</label>
                    <input type="date"  name="tar_fecha" id="tar_fecha" class="form-control">
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
``
