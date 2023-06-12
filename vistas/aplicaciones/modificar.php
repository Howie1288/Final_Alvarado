<?php
require '../../modelos/Aplicacion.php';
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
    <h1 class="text-center">Modificar Aplicaciones</h1>
    <div class="row justify-content-center">
        <form action="/Final_Alvarado/controladores/aplicaciones/modificar.php" method="POST" class="col-lg-8 border bg-light p-3">
            <input type="hidden" name="aplicacion_id" value="<?= $aplicaciones[0]['aplicacion_id'] ?>">
            <div class="row mb-3">
                <div class="col">
                    <label for="aplicacion_nombre">Nombre de la Aplicacion</label>
                    <input type="text" name="aplicacion_nombre" id="aplicacion_nombre" class="form-control" value="<?= $aplicaciones[0]['APLICACION_NOMBRE'] ?>">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <label for="aplicacion_fecha_inicio">Fecha de inicio Aplicacion</label>
                    <input type="date" step="0.01" min="0" name="aplicacion_fecha_inicio" id="aplicacion_fecha_inicio" class="form-control" value="<?= $aplicaciones[0]['aplicacion_fecha_inicio'] ?>">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col">
                    <label for="aplicacion_situacion">Situacion de Aplicacion</label>
                    <input type="text" step="0.01" min="0" name="aplicacion_situacion" id="aplicacion_situacion" class="form-control" value="<?= $aplicaciones[0]['aplicacion_situacion'] ?>">
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